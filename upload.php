<?php
if(!empty($_POST['name']) && !empty($_POST['url']) && !empty($_POST['category']))
{
	if($stmt = $link->prepare("INSERT INTO images VALUES(null,?,?,?,0);"))
	{
		$stmt->bind_param("ssi",$_POST['name'],$_POST['url'],$_POST['category']);

		if($stmt->execute())
		{
			if(!empty($stmt->affected_rows))
			{
				echo "Image uploaded successfuly <a href='?page=image&id=$stmt->insert_id'>Your image</a>";
			}
			else
			{
				echo "Error: Image was not uploaded!";
			}
		}
		else
		{
			echo $stmt->error;
		}
	}
	else
	{
		echo $link->error;
	}
}
else
{
	echo "Error: Required field(s) left empty!";
}