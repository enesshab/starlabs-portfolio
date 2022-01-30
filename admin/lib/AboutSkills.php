<?php
namespace Admin\Lib;


class AboutSkills extends Database
{

    private $id;
    private $title;
    private $description;
    private $tools;

    protected static $db_table = "about_skills";
    protected static $db_table_fields = array('id', 'title', 'description', 'tools');

    public function changeTitle($id, $title, $description, $tools){
        $sql = "UPDATE about_skills SET title = ".'"'.$title.'"'.", description = ".'"'.$description.'"'.", tools = ".'"'.$tools.'"'." where id = $id";
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

    public function getTools()
    {
        return $this->tools;
    }

    public function setTools($tools)
    {
        $this->tools = $tools;
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
