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
		$command = "INSERT INTO Users(login, password, mail) VALUES ('".$login."','".md5($password)."','".$mail."')";
		$this->db->query($command);
		echo "Реєстрація успішно проведена";
	}
