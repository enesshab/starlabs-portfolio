<?php
namespace Admin\Lib;

use Exception;
use PDO;
use ReflectionClass;

class Contact extends Database
{

    private $id;
    private $name;
    private $email;
    private $message;
    private $time;


    protected static $db_table = "contact";
    protected static $db_table_fields = array('id', 'name', 'email', 'message', 'time');

    public function insertMessage($name, $email, $message){
        try {
            $sql = "INSERT INTO contact (name, email, message) values (".'"'.$name.'", '.'"'.$email.'", '.'"'.$message.'"'.")";
            $stmt = $this->prepare($sql);
            $stmt->execute();
            return true;
        } catch (Exception $exception) {
            return false;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }
}

?>
