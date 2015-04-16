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

    public function printItem($category)
    {
        $command = "SELECT * FROM `item` WHERE `category` = '$category'";
        $queryResult = $this->db->query($command);
        while($row = mysqli_fetch_array($queryResult)) 
            	echo "<div class="col-sm-3">
                        <a href='$row['name']'>
                            <div class='well category'>
                                <img src='images/category/$row['img_url']'>
                                <h4>Kid world</h4>
                            </div>
                        </a>
                    </div>"

    }


}