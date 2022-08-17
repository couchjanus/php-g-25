<?php 
require_once ROOT.'/core/Response.php';
require_once ROOT.'/core/Request.php';
require_once ROOT.'/app/Models/Brand.php';

class BrandController
{
    protected static string $layout = 'admin';
    protected Response $response;
    
    public function __construct(Request $request=null)
    {
        $this->request = $request !==null ? $request : new Request();
        $this->response = new Response(static::$layout);
    }

    public function index()
    {
        $brands = (new Brand())->get();
        $this->response->render('/admin/brands/index', compact('brands'));
    } 

    public function create()
    {
        $this->response->render('/admin/brands/create');
    }

    public function store()
    {
        $brand = new Brand();
        if($brand->save([$this->request->name, $this->request->description])){
            $this->response->redirect('/admin/brands');
        }else{
            $this->response->redirect('/errors');
        }


    }

    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}