<?php
namespace Admin\Lib;


class ClientHeading extends Database
{

    private $id;
    private $title;
    private $description;

    protected static $db_table = "client_headings";
    protected static $db_table_fields = array('id', 'title', 'description');

    public function changeTitle($title, $description){
        $sql = "UPDATE client_headings SET title = ".'"'.$title.'"'.", description = ".'"'.$description.'"'." where id = '1'";
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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }
}

?>
