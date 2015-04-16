<?php
include('Database.php');

class Userdata
{
    protected static $_instance;
	private $db;
    private $login;
    private $password;
	private $mail;

	public function __construct()
	{
		$this->db = Database::getInstance();
	}

	public function createUser($login, $password, $mail)
    {
		$command = "INSERT INTO user(login, password, mail) VALUES ('".$login."','".md5($password)."','".$mail."')";
		$this->db->query($command);
		echo "Реєстрація успішно проведена";
	}

	public function enter($login, $password)
    {
		$queryResult =$this->db->query("SELECT * FROM `user` WHERE `login` = '$login'");
        while($row = mysqli_fetch_array($queryResult)) 
            if($row['Password'] == md5($password))        
                return "user.php";
            else
                return false;
	}

}

