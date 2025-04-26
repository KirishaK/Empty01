<!doctype html>
<html>
	<head>
		<title>view reservation</title>
		<style>
			th{
					background-color:rgba(0,0,0,0.5);
					color:white;
				}
			table{
					width:100%;
					margin-right:50px;
				}
			body{
					background-image:url('images/12.jpg');
					background-repeat:no-repeat;
					background-size:100%;
				}
			.background_div{
					margin-top:10px;
					margin-bottom:10px;
					margin-left:100px;
					margin-right:100px;
					height:115px;
					background-color:rgba(0,0,0,0.5);
					color:white;
				}
		</style>
	</head>
	<body>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$DBname="mydb2";
			
			$connect=mysqli_connect($servername,$username,$password,$DBname);
			if(!$connect)
			{
				die("error connect".mysqli_connect_error());
			}
			else
			{
			//	echo"Sucessfully connected";
			}
			$nicNo="200276401020";
			$sql_view_reservation="SELECT * FROM customers_data";
			$result_query=mysqli_query($connect,$sql_view_reservation) or die("error query".mysqli_error($connect));
			while($row_data=mysqli_fetch_assoc($result_query))
			{
				echo'<div class="background_div">';
					echo'<table>';
						echo'<tr><td>';
							echo'<table>';
							    echo'<tr><th>identiycard</th><td>'.$row_data["nic_no"].'</td></tr>';
								echo'<tr><th>Full Name</th><td>'.$row_data["first_name"] .'&nbsp'. $row_data["last_name"].'</td></tr>';
								echo'<tr><th>Address</th><td>'.$row_data["address"].'</td></tr>';
								echo'<tr><th>Phone Number</th><td>'.$row_data["phone_number"].'</td></tr>';
								echo'<tr><th>E-Mail Id</th><td>'.$row_data["email_id"].'</td></tr>';	
							echo'</table>';
						echo'</td>';
						echo'<td>';
							echo'<table>';
								echo'<tr><th>Guest Count</th><td>'.$row_data["guest_count"].'</td></tr>';
								echo'<tr><th>Room Type</th><td>'.$row_data["room_type"].'</td></tr>';
								echo'<tr><th>Room Standard</th><td>'.$row_data["room_standard"].'</td></tr>';
								echo'<tr><th>Check in Date & Time</th><td>'.$row_data["check_in_date"].'&nbsp/&nbsp'.$row_data["check_in_time"].'</td></tr>';
								echo'<tr><th>Check out Date & Time</th><td>'.$row_data["check_out_date"].'&nbsp/&nbsp'.$row_data["check_out_time"].'</td></tr>';
							echo'</table>';	
						echo'</td></tr>';	
					echo'</table>';
				echo'</div>';
			}
			
		?>
		
	</body>
</html>

							

							
