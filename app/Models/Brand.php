<?php 
require_once ROOT."/core/Connection.php";

class Brand
{
    protected static $table = 'brands';

    protected $connect;

    public function __construct()
    {
        $this->connect = Connection::connect();
    }

    public function get() 
    {
        $sql = "SELECT * FROM ".static::$table;
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function save($values)
    {
        $sql = "INSERT INTO ".static::$table." (".$this->fields().") VALUES(?, ?)";
        $stmt = $this->connect->prepare($sql);
        $result = $stmt->execute($values);
        return $result;
    }

    private function fields()
    {
        $sql = "DESCRIBE ".static::$table;
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        $fields = $stmt->fetchAll(PDO::FETCH_COLUMN);
        $fields = array_values($fields);
        array_shift($fields);
        return implode(",", $fields);
    }
}