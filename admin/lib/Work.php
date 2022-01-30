<?php
namespace Admin\Lib;


class Work extends Database
{

    private $id;
    private $title;
    private $link;
    private $filename;

    protected static $db_table = "works";
    protected static $db_table_fields = array('id', 'title', 'link', 'filename');

    public function editWork($id, $title, $link, $filename){
        $sql = "UPDATE works SET title = ".'"'.$title.'"'.", link = ".'"'.$link.'"'.", filename = ".'"'.$filename.'"'." where id = '$id'";
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

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
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

