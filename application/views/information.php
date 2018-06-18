<?php 
	if (isset($data)) {
		foreach ($data as $key => $item) {

			echo 'Full name is'. $item['name'] . 'and Email is' . $item['email'];

			echo "<br>";
		}
	}
	else {

		echo "<h4>There is no data to display</h4>";
	}

 ?>

 <?php 
	if (isset($info)) {
		foreach ($info as $key => $item) {

			echo  ' Email is' . $item['email'];

			echo "<br>";
		}
	}
	else {

		echo "<h4>There is no data to display</h4>";
	}

 ?>