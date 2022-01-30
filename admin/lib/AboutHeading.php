<?php
namespace Admin\Lib;


class AboutHeading extends Database
{

    private $id;
    private $bigTitle;
    private $smallTitle;
    private $description;

    protected static $db_table = "about_headings";
    protected static $db_table_fields = array('id', 'bigTitle', 'smallTitle', 'description');

    public function changeTitle($bigTitle, $smallTitle, $description){
        $sql = "UPDATE about_headings SET bigTitle = ".'"'.$bigTitle.'"'.", smallTitle = ".'"'.$smallTitle.'"'.", description = ".'"'.$description.'"'." where id = '1'";
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
}

?>
