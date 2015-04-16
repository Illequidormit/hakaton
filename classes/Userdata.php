<?php
session_start();
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
            if($row['password'] == md5($password)){
                return "user.php";
            	$_SESSION['id'] = $row['id'];
            	$_SESSION['login'] = $row['login'];
            }        
            else
                return false;
	}

	public function addOffers($id_user, $id_required, $id_proposed, $id_client)
		{
			$command = "INSERT INTO Offers(id_user, id_required, id_proposed, id_client) 
				VALUES ('$id_user', '$id_required', '$id_proposed', '$id_client')";
			$queryResult = $this->db->query($command);
		}

	public function deleteOffers($id)
	{
		$command = "DELETE  FROM `Offers` WHERE `id` = '$id'";
	    $queryResult = $this->db->query($command);
	}

	public function addDecires($id_user, $id_required, $id_proposed, $id_seller)
	{
		$command = "INSERT INTO Decired(id_user, id_required, id_proposed, id_seller) 
				VALUES ('$id_user', '$id_required', '$id_proposed', '$id_seller')";
			$queryResult = $this->db->query($command);
	}

	public function deleteOffers($id)
	{
		$command = "DELETE  FROM `Decired` WHERE `id` = '$id'";
	    $queryResult = $this->db->query($command);
	}
}

