<?php
function retrieveYearPhotos($year) {

	$album_file = fopen("photo-albums.json", "r") or die("Unable to open file!");

	$json_encoded_album = fread($album_file,filesize("photo-albums.json"));

	$album_array = json_decode($json_encoded_album,true);

	foreach ($album_array[$year] as $album_index => $album) {
		echo '<div class="album">
				<h3>'.$album["name"].'.</h3>
				<div class="album-desc">'.$album["description"].'</div>';

		foreach ($album["photos"] as $index => $photo) {
			echo '<a href="'.$photo["location"].'" data-lightbox="album-'.$year.'-'.$album_index.'" data-title="'.$photo["description"].'"><img class="lbimg" src="'.$photo["location"].'"/></a>';
		}
		
        echo '</div>';
	}

	fclose($album_file);

}
?>