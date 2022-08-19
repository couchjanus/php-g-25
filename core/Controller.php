<?php 
require_once ROOT.'/core/Response.php';
require_once ROOT.'/core/Request.php';

class Controller
{
    protected static string $layout = '';
    
    protected Response $response;
    protected Request $request;

    public function __construct(Request $request=null)
    {
        $this->request = $request ?? new Request();
        $this->response = new Response(static::$layout);
    }
}