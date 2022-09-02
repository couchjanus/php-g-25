<?php 
namespace Models;

use Core\Entity;

class Seance extends Entity
{
    protected static $table = 'seance';

    public $id;
    public $uid;
    public $hash;
    public $expiredata;
    public $agent;
    public $cookie_crc;

}