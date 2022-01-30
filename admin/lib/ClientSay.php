<?php
namespace Admin\Lib;


class ClientSay extends Database
{

    private $id;
    private $name;
    private $description;
    private $filename;

    protected static $db_table = "client_says";
    protected static $db_table_fields = array('id', 'name', 'description', 'filename');

    public function changeSay($id, $name, $description, $filename){
        $sql = "UPDATE client_says SET name = ".'"'.$name.'"'.", description = ".'"'.$description.'"'.", filename = ".'"'.$filename.'"'." where id = $id";
        $stmt = $this->prepare($sql);
        $stmt->execute();
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

    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
    }
}

?>
