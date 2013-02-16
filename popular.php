<?php

if ( $result = $link->query( "SELECT * FROM images, category where category.id = images.category ORDER BY  category.name, hits DESC;" ) ) {
	while ( $row = $result->fetch_object() ) {
		$hits = format( $row->hits );
		echo "
			<div class='grid'>
				<div class='box image'>

						<a href='?page=image&id=$row->id'><img src='$row->url'/> </a>
						<div class='hits'>$row->name $hits views</div>

				</div>
			</div>
			";
	}
}
else {
	echo "Error: Image not found";
}
