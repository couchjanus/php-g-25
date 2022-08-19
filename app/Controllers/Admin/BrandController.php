<?php 
require_once ROOT.'/core/Controller.php';
require_once ROOT.'/app/Models/Brand.php';

class BrandController extends Controller
{
    protected static string $layout = 'admin';
    private Brand $brand;
    
    public function __construct()
    {
        parent::__construct();
        $this->brand = new Brand();
    }

    public function index()
    {
        // $brands = $this->brand->get();
        $brands = $this->brand->select(['id', 'name'])->get();
        // var_dump($brands);
        $this->response->render('/admin/brands/index', compact('brands'));
    } 

    public function create()
    {
        $this->response->render('/admin/brands/create');
    }

    public function store()
    {
        $this->brand->name = $this->request->name;
        $this->brand->description = $this->request->description;
        
        if($this->brand->save()){
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