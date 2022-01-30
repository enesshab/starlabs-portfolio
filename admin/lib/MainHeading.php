<?php
namespace Admin\Lib;


class MainHeading extends Database
{

    private $id;
    private $smallTitle;
    private $bigTitle;
    private $description;
    private $filename;

    protected static $db_table = "main_headings";
    protected static $db_table_fields = array('id', 'smallTitle', 'bigTitle', 'description', 'filename');

    public function changeTitle($smallTitle, $bigTitle, $description, $filename){
        $sql = "UPDATE main_headings SET smallTitle = ".'"'.$smallTitle.'"'.", bigTitle = ".'"'.$bigTitle.'"'.", description = ".'"'.$description.'"'.", filename = ".'"'.$filename.'"'." where id = '1'";
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

    public function getSmallTitle()
    {
        return $this->smallTitle;
    }

    public function setSmallTitle($smallTitle)
    {
        $this->smallTitle = $smallTitle;
    }

    public function getBigTitle()
    {
        return $this->bigTitle;
    }

    public function setBigTitle($bigTitle)
    {
        $this->bigTitle = $bigTitle;
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