<?php 
require_once ROOT."/core/Entity.php";

class Brand extends Entity
{
    protected static $table = 'brands';

    public $id;
    public $name;
    public $description;
}