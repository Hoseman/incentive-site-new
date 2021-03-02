<!-- Count the admin scores -->

<?php
global $wpdb;
$valid = true;
$SQL4 = "SELECT * FROM " . $wpdb->prefix . "lb_point_types;";
$formData4 = $wpdb-> get_results($SQL4);


if (!$formData4) {
	$valid = false;
	echo $error =  '<p>No results to display</p>';
}

// count the number of results in lb_email_results - then display the insert button
$numRows = $wpdb->get_var( "SELECT count(*) FROM " . $wpdb->prefix . "lb_point_types;");

?>
<!-- End Count the admin scores -->



<!-- Dealer Admin -->
<h2>Dealer Admin</h2>
<?php
$persons_name = "";
if (isset($_POST['sendmessage'])) {
	$persons_name = $_POST['persons_name'];
}

global $wpdb;
$valid = true;
if ($persons_name == "") {
	$SQL = "SELECT * FROM " . $wpdb->prefix . "lbv4_results;";
}
else {
	$SQL = "SELECT * FROM " . $wpdb->prefix . "lbv4_results WHERE sales_person = '$persons_name';";
}

$formData = $wpdb-> get_results($SQL);


if (!$formData) {
	$valid = false;
	echo $error =  '<p>No results to display</p>';
}



?>

<div>
<div style="width:97%; margin-bottom:-10px;">
<form action="" method="post">
<label>Select by name:</label>
<select name="persons_name" id="menu2">
<option value="">Please Choose...</option>

<?php
global $wpdb;
$valid = true;
$SQL2 = "SELECT DISTINCT sales_person FROM " . $wpdb->prefix . "lbv4_results;";
$formData2 = $wpdb-> get_results($SQL2);


if (!$formData2) {
	$valid = false;
	echo $error =  '<p>No results to display</p>';
}

if($valid) {
		foreach ($wpdb->get_results($SQL2) as $key => $row) {
			$sales_person = $row->sales_person;
			?>
            
            <option value="<?php echo $sales_person; ?>"><?php echo $sales_person; ?></option>
               
            
            <?php		
		}
}
?>
</select>
<!--<button type="sendmessage" class="sendmessage" name="sendmessage">Submit</button>-->

</form>






<br>

</div>

</div>

<div>
<div>

 <div id="target" class="ajax-container">
 </div>
 

 
<div id="points_table" class="points_table_width">

<form action="" method="post" >
<input type="hidden" name="downloadcsvid" value="<?php echo $id; ?>">

<?php
echo '<a class="pull-right btn btn-primary" href="' . site_url() . '/download.php?count=' . $numRows . '">Download CSV</a>';
/*
if($persons_name == "") {
	echo '<a class="pull-right btn btn-primary" href="' . site_url() . '/download.php">Download CSV</a>';
}
else {
	echo '<a class="pull-right btn btn-primary" href="' . site_url() . '/download.php?id=' . $persons_name . '">Download CSV</a>';
}
*/
?>

</form>

<table class="table" style="width:100%; margin-top:15px; float:left;">
<tr class="info">
	<th>Name</th>
    <th>Dealer</th>
    <th>Customer Name</th>
    <th>Order Date</th>
    <?php 
	
	global $wpdb;
	$valid = true;
	$SQL3 = "SELECT * FROM " . $wpdb->prefix . "lb_point_types order by scoreID asc";
	$formData3 = $wpdb-> get_results($SQL3);
	
	
	if (!$formData3) {
		$valid = false;
		echo $error =  '<p>No results to display</p>';
	}
	
	
	if($valid) {
			foreach ($wpdb->get_results($SQL3) as $key => $row) {
				$id = $row->id;
				$description = $row->description;
				$points = $row->points;
				?>
					
						<?php echo "<th>" . $description . "</th>"; ?>
		  
				<?php		
			}
	}
	
	
	?>
	<th>Total</th>
    <th>Action</th>
</tr>
<?php

if($valid) {
		foreach ($wpdb->get_results($SQL) as $key => $row) {
			$id = $row->id;
			$name = $row->sales_person;
			$dealer = $row->dealer;
			$customername = $row->customername;
			$orderdate = $row->orderdate;
			
			$points_1 = $row->points_1;
			$points_2 = $row->points_2;
			$points_3 = $row->points_3;
			$points_4 = $row->points_4;
			$points_5 = $row->points_5;
			$points_6 = $row->points_6;
			$points_7 = $row->points_7;
			$points_8 = $row->points_8;
			$points_9 = $row->points_9;
			$points_10 = $row->points_10;
			$points_11 = $row->points_11;
			$points_12 = $row->points_12;
			$points_13 = $row->points_13;
			$points_14 = $row->points_14;
			$points_15 = $row->points_15;
			$points_16 = $row->points_16;
			$points_17 = $row->points_17;
			$points_18 = $row->points_18;
			$points_19 = $row->points_19;
			$points_20 = $row->points_20;
			
			$p1 = $points_1;
			$p2 = $points_1 + $points_2;
			$p3 = $points_1 + $points_2 + $points_3;
			$p4 = $points_1 + $points_2 + $points_3 + $points_4;
			$p5 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5;
			$p6 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6;
			$p7 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7;
			$p8 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8;
			$p9 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9;
			$p10 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10;
			$p11 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10 + $points_11;
			$p12 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10 + $points_11 + $points_12;
			$p13 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10 + $points_11 + $points_12 + $points_13;
			$p14 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10 + $points_11 + $points_12 + $points_13 + $points_14;
			$p15 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10 + $points_11 + $points_12 + $points_13 + $points_14 + $points_15;
			$p16 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10 + $points_11 + $points_12 + $points_13 + $points_14 + $points_15 + $points_16;
			$p17 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10 + $points_11 + $points_12 + $points_13 + $points_14 + $points_15 + $points_16 + $points_17;
			$p18 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10 + $points_11 + $points_12 + $points_13 + $points_14 + $points_15 + $points_16 + $points_17 + $points_18;
			$p19 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10 + $points_11 + $points_12 + $points_13 + $points_14 + $points_15 + $points_16 + $points_17 + $points_18 + $points_19;
			$p20 = $points_1 + $points_2 + $points_3 + $points_4 + $points_5 + $points_6 + $points_7 + $points_8 + $points_9 + $points_10 + $points_11 + $points_12 + $points_13 + $points_14 + $points_15 + $points_16 + $points_17 + $points_18 + $points_19 + $points_20;
			?>
            <tr>
            	<form action="" method="post">
                    <input type="hidden" name="listaction" value="edit">
                    <input type="hidden" name="leaderboardid" value="<?php echo $id; ?>">
                    <td><?php echo $name; ?></td>
                    <td><?php echo $dealer; ?></td>
                    <td><?php echo $customername; ?></td>
                    <td><?php echo $orderdate; ?></td>
                    <?php
                    if($numRows == 1) { echo "<th>" . $points_1 . "</th><th class='points-total'>" . $p1 . "</th>"; }
					elseif($numRows == 2) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th class='points-total'>" . $p2 . "</th>"; }
					elseif($numRows == 3) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th class='points-total'>" . $p3 . "</th>"; }
					elseif($numRows == 4) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th class='points-total'>" . $p4 . "</th>"; }
					elseif($numRows == 5) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th class='points-total'>" . $p5 . "</th>"; }
					elseif($numRows == 6) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th class='points-total'>" . $p6 . "</th>"; }
					elseif($numRows == 7) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th class='points-total'>" . $p7 . "</th>"; }
					elseif($numRows == 8) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th class='points-total'>" . $p8 . "</th>"; }
					elseif($numRows == 9) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th class='points-total'>" . $p9 . "</th>"; }
					elseif($numRows == 10) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th class='points-total'>" . $p10 . "</th>"; }
					elseif($numRows == 11) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th>" . $points_11 . "</th><th class='points-total'>" . $p11 . "</th>"; }
					elseif($numRows == 12) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th>" . $points_11 . "</th><th>" . $points_12 . "</th><th class='points-total'>" . $p12 . "</th>"; }
					elseif($numRows == 13) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th>" . $points_11 . "</th><th>" . $points_12 . "</th><th>" . $points_13 . "</th><th class='points-total'>" . $p13 . "</th>"; }
					elseif($numRows == 14) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th>" . $points_11 . "</th><th>" . $points_12 . "</th><th>" . $points_13 . "</th><th>" . $points_14 . "</th><th class='points-total'>" . $p14 . "</th>"; }
					elseif($numRows == 15) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th>" . $points_11 . "</th><th>" . $points_12 . "</th><th>" . $points_13 . "</th><th>" . $points_14 . "</th><th>" . $points_15 . "</th><th class='points-total'>" . $p15 . "</th>"; }
					elseif($numRows == 16) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th>" . $points_11 . "</th><th>" . $points_12 . "</th><th>" . $points_13 . "</th><th>" . $points_14 . "</th><th>" . $points_15 . "</th><th>" . $points_16 . "</th><th class='points-total'>" . $p16 . "</th>"; }
					elseif($numRows == 17) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th>" . $points_11 . "</th><th>" . $points_12 . "</th><th>" . $points_13 . "</th><th>" . $points_14 . "</th><th>" . $points_15 . "</th><th>" . $points_16 . "</th><th>" . $points_17 . "</th><th class='points-total'>" . $p17 . "</th>"; }
					elseif($numRows == 18) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th>" . $points_11 . "</th><th>" . $points_12 . "</th><th>" . $points_13 . "</th><th>" . $points_14 . "</th><th>" . $points_15 . "</th><th>" . $points_16 . "</th><th>" . $points_17 . "</th><th>" . $points_18 . "</th><th class='points-total'>" . $p18 . "</th>"; }
					elseif($numRows == 19) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th>" . $points_11 . "</th><th>" . $points_12 . "</th><th>" . $points_13 . "</th><th>" . $points_14 . "</th><th>" . $points_15 . "</th><th>" . $points_16 . "</th><th>" . $points_17 . "</th><th>" . $points_18 . "</th><th>" . $points_19 . "</th><th class='points-total'>" . $p19 . "</th>"; }
					elseif($numRows == 20) { echo "<th>" . $points_1 . "</th><th>" . $points_2 . "</th><th>" . $points_3 . "</th><th>" . $points_4 . "</th><th>" . $points_5 . "</th><th>" . $points_6 . "</th><th>" . $points_7 . "</th><th>" . $points_8 . "</th><th>" . $points_9 . "</th><th>" . $points_10 . "</th><th>" . $points_11 . "</th><th>" . $points_12 . "</th><th>" . $points_13 . "</th><th>" . $points_14 . "</th><th>" . $points_15 . "</th><th>" . $points_16 . "</th><th>" . $points_17 . "</th><th>" . $points_18 . "</th><th>" . $points_19 . "</th><th>" . $points_20 . "</th><th class='points-total'>" . $p20 . "</th>"; }
					else { "There was an error!"; }
					?>
              
                    <td>
                    	<div class="btn-group" role="group">
                        	<input type="hidden" name="pointsresultsdeleteid" value="<?php echo $id; ?>">
                            <button type="submit" name="listaction" value="pointsresultsdelete" class="btn btn-primary glyphicon glyphicon-trash" onclick="return confirm('Are you sure you want to delete?')"></button>
                    	</div>
                    
                    </td>
                </form>
            </tr>
            <?php		
		}
}
?>
</table>
</div>
<!-- End Dealer Admin -->
</div>
</div>