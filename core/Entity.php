<?php 
require_once ROOT."/core/Connection.php";

class Entity
{
    protected static $table;

    protected $connect;
    private $columns = [];
    private $as;

    public function __construct()
    {
        $this->connect = Connection::connect();
    }

    public function select($columns)
    {
        $this->columns = $columns;
        return $this;
    }

    public function as($as)
    {
        $this->as = $as;
        return $this;
    }

    public function next()
    {
        $stmt = $this->connect->prepare($this->select(['max(id)'])->as('maxId')->selectQuery());
        $stmt->execute();
        return $stmt->fetch()->maxId + 1;
    }

    public function selectQuery()
    {
        $query = " SELECT ";
        
        if(count($this->columns) >= 1 && !empty($this->columns[0])) {
            $query .= implode(", ", $this->columns);
        }else{
            $query .= "*";
        }

        if (!empty($this->as)) {
            $query .= " AS ";
            $query .= $this->as;
        }

        $query .= " FROM ";
        $query .= static::$table;

        return $query;
    }

    public function get() 
    {
        $stmt = $this->connect->prepare($this->selectQuery());
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function save()
    {
        $class = new ReflectionClass($this);
        $properties = [];

        foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $property){
            if (isset($this->{$property->getName()})){
                $properties[] = ''.$property->getName().' = "'.$this->{$property->getName()}.'"';
            }
        }
        $setValues = implode(',', $properties);
        $sql = '';
        if($this->id <= 0) {
            $sql = 'INSERT INTO '.static::$table. ' SET '. $setValues. ', id = '.$this->next();

            // var_dump($sql);
            // exit();
        }
        $stmt = $this->connect->prepare($sql);
        $result = $stmt->execute();
        return $result;
    }

}