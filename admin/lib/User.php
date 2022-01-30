<?php
namespace Admin\Lib;


class User extends Database
{

    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;

    protected static $db_table = "users";
    protected static $db_table_fields = array('id', 'firstname', 'lastname', 'email', 'password');

    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        if($result){
            $_SESSION['id'] = $result['id'];
            header('Location: index.php');
        }else{
            $_SESSION['wrong'] = "Incorrect Email or Password";
            
        }  
    }

    public function changePassword($newpassword){
        $sql = "UPDATE users SET password = '$newpassword' where id = '$this->id'";
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

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}

?>
