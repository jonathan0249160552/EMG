<?php
// require 'auth.php';
require 'session.php';
$cuser = new Auth();


if (isset($_POST['action']) && $_POST['action'] == 'displayAllNotification') {
	$output = '';
	$data = $cuser->allNotification();

	if ($data) {

		foreach ($data as $row) {

			$output .= '   <div class="alert alert-primary alert-dismissible fade show" role="alert">
			<button type="button" class="close notificationDelete" id="' . $row['id'] . '" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  <span class="sr-only">Close</span>
			</button>
			<strong>' . $row['title'] . '</strong>
			<hr>
			 <p>' . $row['notification'] . '</p>
		  </div>';
		}


		echo $output;
	} else {
		echo '<h4 class="text-center text-muted"> No general notification yet </h4>';
	}
}

if (isset($_POST['action']) && $_POST['action'] == 'displayAllNotification') {
	$output = '';
	$data = $cuser->allNotificationUser($c_contact, $c_phone);

	if ($data) {

		foreach ($data as $row) {

			$output .= '   <div class="alert alert-primary alert-dismissible fade show" role="alert">
			<button type="button" class="close notificationDelete" id="' . $row['id'] . '" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  <span class="sr-only">Close</span>
			</button>
			<strong>' . $row['title'] . '</strong>
			<hr>
			 <p>' . $row['notification'] . '</p>
		  </div>';
		}


		echo $output;
	} else {
		echo '<h4 class="text-center text-muted"> No personal notification yet </h4>';
	}
}


if (isset($_POST['action']) && $_POST['action'] == 'displayAllUsers') {
	$output = '';
	$data = $cuser->AllUsers();

	if ($data) {
		$output .= '<table class="table  table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th>Name</th>	
				<th>Contact</th>
			
				<th>Emergency Contact</th>
				<th>Residence</th>
                <th>Gender</th>
				<th>Posted on</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {

			$output .= '<tr >
			<td> <button class="btn text-danger deleteBtn" type="button" id="' . $row['id'] . '">
			 Delete</button></td>
			<td>' . $row['name'] . '</td>
			<td>' . $row['contact'] . '</td>
			<td>' . $row['phone'] . '</td>
			<td>' . $row['residence'] . '</td>
			<td>' . $row['gender'] . '</td>
			<td>' . $cuser->timeInAgo($row['created_on']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted"> no user yet </h4>';
	}
}



if (isset($_POST['action']) && $_POST['action'] == 'displayReportUser') {
	$output = '';
	$data = $cuser->userReport($c_contact, $c_phone);

	if ($data) {
		$output .= '<table class="table  table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th>Emg Type</th>
				<th>Description</th>
				<th>Residence</th>
				<th>Name</th>
				<th>Emergency Contact</th>
				<th>Contact</th>
				<th>Gps</th>
				<th>Name</th>	
				<th>Status</th>
				<th>Posted on</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {
			$status = $row['status'];
			if ($status == "0") {
				$status_output = '<p class="text-white bg-warning p-2 rounded">Pending</p>';
			} else if ($status == "1") {
				$status_output = '<p class="text-white bg-primary p-2 rounded">Unit Dispatched</p>';
			} else if ($status == "2") {
				$status_output = '<p class="text-white bg-success p-2 rounded">Responded</p>';
			}

			$output .= '<tr >
			<td> <button class="btn text-danger reportDelete" type="button" id="' . $row['id'] . '">
			 Delete</button></td>
			<td>' . $row['emg_type'] . '</td>
			<td>' . $row['description'] . '</td>
			<td>' . $row['location'] . '</td>
			<td>' . $row['name'] . '</td>
			<td>' . $row['contact'] . '</td>
			<td>' . $row['phone'] . '</td>
			<td>' . $row['gps'] . '</td>
			<td>' . $row['name'] . '</td>
			<td>' . $status_output . '</td>
			<td>' . $cuser->timeInAgo($row['reported_on']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted"> no report yet </h4>';
	}
}

if (isset($_POST['action']) && $_POST['action'] == 'displayAdmin') {
	$output = '';
	$data = $cuser->AllAdmins();

	if ($data) {
		$output .= '<table class="table  table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th>Name</th>	
				<th>Contact</th>
			
				<th>Emergency Contact</th>
				<th>Residence</th>
                <th>Gender</th>
				<th>Posted on</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {

			$output .= '<tr >
			<td> <button class="btn text-danger deleteBtn" type="button" id="' . $row['id'] . '">
			 Delete</button></td>
			<td>' . $row['name'] . '</td>
			<td>' . $row['contact'] . '</td>
			<td>' . $row['phone'] . '</td>
			<td>' . $row['residence'] . '</td>
			<td>' . $row['gender'] . '</td>
			<td>' . $cuser->timeInAgo($row['created_on']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted"> no user yet </h4>';
	}
}


if (isset($_POST['action']) && $_POST['action'] == 'displayReport') {
	$output = '';
	$data = $cuser->AllReports();

	if ($data) {
		$output .= '<table class="table  table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th>Emg Type</th>
				<th>Description</th>
				<th>Residence</th>
				<th>Name</th>
				<th>Emergency Contact</th>
				<th>Contact</th>
				<th>Gps</th>
				<th>Name</th>	
				<th>Status</th>
                
				<th>Reported on</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {
			$text = $row['gps'];
			$delimiter = ",";

			$firstPart = strtok($text, $delimiter);
			$secondPart = strtok($delimiter);

			if ($firstPart !== false && $secondPart !== false) {
				echo "First part: " . $firstPart . "<br>";
				echo "Second part: " . $secondPart;
			}
			$status = $row['status'];
			if ($status == "0") {
				$status_output = '<p class="text-white bg-warning p-2 rounded">Pending</p>';
			} else if ($status == "1") {
				$status_output = '<p class="text-white bg-primary p-2 rounded">Unit Dispatched</p>';
			} else if ($status == "2") {
				$status_output = '<p class="text-white bg-success p-2 rounded">Responded</p>';
			}

			$output .= '<tr >
		
			<td>   <div class="dropdown">
			<div class="dropdown-label">Action</div>
			<div class="dropdown-menu">
				<div class="dropdown-item"> <button class="btn btn-danger deleteBtn" type="button" id="' . $row['id'] . '">
				 Delete</button></div>
				<div class="dropdown-item"><button class="btn btn-primary " type="button" id="' . $row['id'] . '">
				 Dispatch</button></div>
				<div class="dropdown-item"><button class="btn btn-success " type="button" id="showMapButton' . $row['id'] . '">Track</button></div>
			</div>
		</div>
</td>
			
		
			<td>' . $row['emg_type'] . '</td>
			<td>' . $row['description'] . '</td>
			<td>' . $row['location'] . '</td>
			<td>' . $row['name'] . '</td>
			<td>' . $row['contact'] . '</td>
			<td>' . $row['phone'] . '</td>
			<td>' . $firstPart . '</td>
			<td>' . $row['name'] . '</td>
			<td>' . $row['gps'] . '</td>
			
			<td>' . $cuser->timeInAgo($row['reported_on']) . '</td>
			
			
		
		</tr>

		';
		
		}
		$output .= '</tbody>
					</table> <button id="showMapButton">Show Map</button>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted"> no report yet </h4>';
	}
}





?>
<style>
	  
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-label {
            border: 1px solid #ccc;
            padding: 10px;
            cursor: pointer;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ccc;
            width: 100px;
        }

        .dropdown-item {
            padding: 5px;
            cursor: pointer;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>

<script src="assets/datatables/datatables.min.js"></script>
<script>
	$('.table').DataTable();

	document.getElementById('showMapButton').addEventListener('click', function() {
    const latitude = 5.6037168; // Replace with your desired latitude
    const longitude = -0.1869644; // Replace with your desired longitude

    // Create a Google Maps URL with the coordinates
    const mapsURL = `https://www.google.com/maps?q=${latitude},${longitude}`;

    // Open the Google Maps URL in a new tab or window
    window.open(mapsURL, '_blank');
});

</script>