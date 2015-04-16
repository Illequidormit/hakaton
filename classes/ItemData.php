<?php
include('Database.php');

class ItemData
{
	private $db;

	public function __construct()
	{
		$this->db = Database::getInstance();
	}


	public function addItem($name, $descr, $id_category, $image_path)
	{
		if (empty($image_path)) {
            $target_file = "../images/blank_img.png";
        } else {
            $target_dir = "../images/";
            $target_file = $target_dir . $image_path;
           copy($_FILES["fileToUpload"]["tmp_name"], $target_file);
        }

		$command = "INSERT INTO Item(name, description, id_category, img_url) VALUES ('$name', '$descr', '$id_category', '$image_path')";
		$queryResult = $this->db->query($command);
		
	}

	public function deleteitem($id)
    {
        $command = "DELETE  FROM `Item` WHERE `id` = '$id'";
        $queryResult = $this->db->query($command);
    }

    public function printAllItem($category)
    {
        $command = "SELECT * FROM `item` WHERE `id_category` = '$category'";
        $queryResult = $this->db->query($command);
        while($row = mysqli_fetch_array($queryResult)) 
            	echo "<div class='col-sm-3'>
                        <a href='item.php?item=".$row['id']."'>
                            <div class='well category'>
                                <img src='../".$row['img_url']."'>
                                <h4>".$row['name']."</h4>
                            </div>
                        </a>
                    </div>";
    }

    public function printItem($id)
    {
        $command = "SELECT * FROM `item` WHERE `id` = '$id'";
        $queryResult = $this->db->query($command);
        while($row = mysqli_fetch_array($queryResult)) 
            	echo "<div class='col-sm-5'>
                                <img src='../".$row['img_url']."' width='300px' heigth='300px'>
                    </div>
					<div class='col-sm-7'>
						<h1>".$row['name']."</h1>
						<p>".$row['description']."</p>
					</div>
                    ";
    }


}