<?php
/**
 * gets image from id and increments it's hits
 * prints error messages
 */
if($id = $link->escape_string($_GET['id']))
{
	if($result = $link->query("SELECT * FROM images WHERE id=$id;"))
	{
		while($row = $result->fetch_object())
		{
			echo "<div class='box'><div class='title'>$row->title</div><img src='$row->url'><hr>hits: $row->hits</div>";
		}

		$link->query("UPDATE images SET hits=hits+1 WHERE id=$id");

	}
	else
	{
		echo "Error: Image not found";
	}
}
else
{
	echo "Error: No ID provided";
}