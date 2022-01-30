<?php
namespace Admin\Lib;


class FooterLinks extends Database
{

    private $id;
    private $facebook;
    private $twitter;
    private $linkedin;
    private $dribbble;


    protected static $db_table = "footer_links";
    protected static $db_table_fields = array('id', 'facebook', 'twitter', 'linkedin', 'dribbble');

    public function changeLink($facebook, $twitter, $linkedin,$dribbble){
        $sql = "UPDATE footer_links SET facebook = ".'"'.$facebook.'"'.", twitter = ".'"'.$twitter.'"'.", linkedin = ".'"'.$linkedin.'"'.", dribbble = ".'"'.$dribbble.'"'." where id = '1'";
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

    public function getFacebook()
    {
        return $this->facebook;
    }

    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    public function getTwitter()
    {
        return $this->twitter;
    }

    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    public function getLinkedin()
    {
        return $this->linkedin;
    }

    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;
    }

    public function getDribbble()
    {
        return $this->dribbble;
    }


    public function setDribbble($dribbble)
    {
        $this->dribbble = $dribbble;
    }
}

?>
