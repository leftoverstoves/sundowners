<?php
/*Copied from Schedule, only json file name changed [31 Dec 15]*/
function retrieveYearSchedule($year) {

	$schedule_file = fopen("projects.json", "r") or die("Unable to open file!");

	$json_encoded_schedule = fread($schedule_file,filesize("projects.json"));

	$schedule_array = json_decode($json_encoded_schedule,true);

	foreach ($schedule_array[$year] as $startDate => $eventsWithSameStartDate) {
		foreach ($eventsWithSameStartDate as $endDate => $eventsWithDateRange) {
			foreach ($eventsWithDateRange as $name => $event) {
			
				echo '<div class="event">
						<div class="dateTimeAndName">'.date("F j",strtotime($startDate));
				if($startDate != $endDate) {
						echo ' - '.date("F j",strtotime($endDate));
				}
						echo ': '.$name.', '.$event["time"].'.</div>
						<div class="eventLocation">'.$event["location"].'</div>
						<div class="eventDescription">'.$event["description"].'</div>';
				if($event["contact"]!="") {
						echo '<div class="eventContacts">Contact:  '.$event["contact"].'</div>';
				}
		        echo '</div>';

			}
		}
	}


	fclose($schedule_file);

}
?>