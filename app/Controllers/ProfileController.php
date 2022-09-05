<?php
namespace Controllers;
use Core\Controller;
use Core\Session;
use Models\User;
use Core\AuthInterface;

class ProfileController extends Controller  implements AuthInterface
{
    protected static string $layout = 'app';
    private $user;

    public function __construct()
    {
        parent::__construct();
        $userId = Session::instance()->get('userId');

        if ($userId) {
            Session::instance()->set('isAuth', true);
            $this->user = (new User)->first($userId);
        }
        $this->isGranted('customer');
    }

    public function isGranted(string $role):bool
    {
        if(!$this->user) {
            $this->response->redirect('/login');
        }
        return true;
    }
    public function index()
    {
        $this->response->render('profile/index', ['user' => $this->user]);
    } 
}
