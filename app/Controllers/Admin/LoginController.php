<?php 
namespace Controllers;

use Core\Controller;

use Models\{User, Seance};

class LoginController extends Controller
{
    protected static string $layout = 'app';
    private Seance $seance;
    private $cookie_name = "this_is_cookies_name";
    private $site_key = "this_is_site_key";
    public const HASH_LENGTH = 40;
    public $isAuth = false;

    public function __construct()
    {
        parent::__construct();
        $this->seance = new Seance();

        $this->isAuth = $this->isLogged();
    }

    public function isLogged()
    {
        if ($this->isAuth === false) {
            $this->isAuth = $this->checkSession($this->getCurrentSessionHash());
        }  
        return $this->isAuth;
    }

    public function checkSession($hash)
    {
        if(strlen($hash) != self::HASH_LENGTH) {
            return false;
        }

        $condition = "hash='$hash'";
        $seance = $this->seance->findBy($condition);

        $uid = $seance->uid;
        $expire_date = strtotime($seance->expiredate);
        $current_date = strtotime(date('Y-m-d H:i:s'));
        $db_cookie = $seance->cookie_crc;

        if($current_date > $expire_date) {
            $this->deleteSession($hash);
            return false;
        }

        if ($db_cookie == sha1($hash, $this->site_key)) {
            return true;
        }
        return false;
    }

    public function deleteSession($hash)
    {
        $this->removeCookie();
        return $this->seance->destroy("hash='$hash'") == 1;
    }

    public function removeCookie()
    {
        if (isset($_COOKIE[$this->cookie_name])) {
            unset($_COOKIE[$this->cookie_name]);
        }

        if(!setcookie($this->cookie_name, '', -1, '/')) {
            return false;
        }
        return true;
    }

    public function getCurrentSessionHash()
    {
        return $_COOKIE[$this->cookie_name] ?? '';
    }

    public function index()
    {
        if ($this->isAuth) {
            $this->response->redirect('/profile');
        } 
        $this->response->render('/autn/login');
    } 

    public function getUID($email)
    {
        $condition = "email='$email'";
        $uid = (new User)->firstWhere($condition, ['id']);
        return $uid === false ? 0 : $uid->id;

    }
    public function getUser($uid)
    {
        $user = (new User)->first($uid);
        if (!$user) return false;
        $user->uid = $uid;
        return $user;
    }
    
    public function addSession($uid, $remember)
    {
        // @todo Something
    }

    public function signin()
    {
        $uid = $this->getUID($this->request->email);

        if (!$uid) {
            $this->request->flash()->dander('Email address or password are incorrect!');
            $this->response->back();
        } 

        $user = $this->getUser($uid);
        
        if (!\password_verify($this->request->password, $user->password)){
            $this->request->flash()->dander('Email address or password are incorrect!');
            $this->response->back();
        }
        $remember = $this->request->remember ? 1 : 0;
        $sessiondata = $this->addSession($user->uid, $remember);

        if(!$sessiondata) {
            $this->request->flash()->dander('A system error has been encountered! Please try again.');
            $this->response->back();
        }
    
        $this->brand->description = $this->request->description;
        try {
            $this->brand->save();
            $this->request->flash()->message('success', 'Brand created Successfully!');
            $this->response->redirect('/admin/brands');
        } catch(\Exception $e){
            $this->request->flash()->dander($e->getMessage());
            $this->response->back();
        }
        
    }

    public function edit($params)
    {
        extract($params);

        $brand = $this->brand->first($id);
        $this->response->render('/admin/brands/edit', compact('brand'));
    }
    public function update()
    {
        $this->brand->id = $this->request->id;
        $this->brand->name = $this->request->name;
        $this->brand->description = $this->request->description;
        
        if($this->brand->save()){
            $this->request->flash()->message('success', 'Brand updated Successfully!');
            $this->response->redirect('/admin/brands');
        }else{
            $this->response->redirect('/errors');
        }
    }
    public function destroy($params)
    {
        extract($params);
        if ($_POST) {
            if($this->brand->delete($this->request->id)){
                $this->request->flash()->success('Brand Deleted Successfully!');
                $this->response->redirect('/admin/brands');
            }else{
                $this->response->redirect('/errors');
            } 
        }

    }
}