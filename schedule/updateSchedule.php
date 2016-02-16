<?php
function addOrUpdateScheduleItem($event) {

	$album_file = fopen("photo-albums.json", "r") or die("Unable to open file!");
	$json_encoded_album = fread($album_file,filesize("photo-albums.json"));
	fclose($album_file);

	$album_array = json_decode($json_encoded_album,true);

	echo var_dump($album_array);

	// Make Some CHange
	// $album_array["2011"][0]["name"]="new2!";

	$album_file = fopen("photo-albums.json", "w") or die("Unable to open file!");
	fwrite($album_file, json_encode($album_array));
	fclose($album_file);
	
}
?>