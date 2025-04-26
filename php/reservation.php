<html>
	<head>
		<title> Reservation form</title>
		<style>
			body{
					background-image:url('images/hotel.jpg');
					background-repeat:no-repeat;
					background-size:100%;
				}
			.form_style{
					width:50%;
					height:630px;
					margin-left:30%;
					background-color:rgba(250,250,250,0);
				}
			#btn_submit{
					height:30px;
					width:200px;
					color:green;
					background-color:#e6ffe6;
					border:none;
					border-radius: 8px;
					box-shadow: 0 5px #999;
					font-size:20px;
				}
			#btn_reset{
					height:30px;
					width:100px;
					color:black;
					background-color:Orange;
					border:none;
					border-radius: 8px;
					box-shadow: 0 5px #999;
					font-size:20px;
				}
			#btn_go_back{
					height:30px;
					width:100px;
					color:black;
					background-color:blue;
					border:none;
					border-radius: 8px;
					box-shadow: 0 5px #999;
					font-size:20px;
				}
			#btn_submit:hover{
					color:white; background-color:#33475b;
				}
			#btn_reset:hover{
					color:white; background-color:#b30000;
				}
			#btn_go_back:hover{
					color:white; background-color:#000000;
				}
		</style>
	</head>
	<body>
		<?php
		
			$servername = "localhost";
			$username = "root";
			$password = "";

			// Create connection
			$connect = mysqli_connect($servername,$username,$password);
			if(!$connect)
			{
				die("server error". mysqli_connect_error());
			}
			
			// select data base
			$db=mysqli_select_db($connect,"mydb2");
			if(!$db)
			{
				die("db error".mysqli_error($connect));
			}
			 
		/*	 if(isset($_POST["btn_submit"]))
			{
				echo"yes";
				echo $_POST["f_name"];
				echo $_POST["age"];
				echo $_POST["address"];
				echo $_POST["p_no"];
			}	
			 
			$sql_insert="INSERT INTO customers_data(name, age, address, phone_number)
											VALUES('kirisha', '20', 'Tellipalai', '0772300594')";
			$result_insert=mysqli_query($connect,$sql_insert);
			
			if($result_insert)
			{
				echo"New Record Inserted";
			}
			else
			{
				echo"error";
			} */
			if(isset($_POST["btn_submit"]))
			{
				 $sql_insert="INSERT INTO customers_data(nic_no,first_name,last_name,address,phone_number,email_id,guest_count,room_type,room_standard,check_in_date,check_in_time,check_out_date,check_out_time)
							VALUES('".mysqli_real_escape_string($connect,$_POST["nic_no"])."',
									'".mysqli_real_escape_string($connect,$_POST["first_name"])."',
									'".mysqli_real_escape_string($connect,$_POST["last_name"])."',
									'".mysqli_real_escape_string($connect,$_POST["address"])."',
									'".mysqli_real_escape_string($connect,$_POST["phone_no"])."',
									'".mysqli_real_escape_string($connect,$_POST["email_id"])."',
									'".mysqli_real_escape_string($connect,$_POST["guest_count"])."',
									'".mysqli_real_escape_string($connect,$_POST["room_type"])."',
									'".mysqli_real_escape_string($connect,$_POST["room_standard"])."',
									'".mysqli_real_escape_string($connect,$_POST["check_in_date"])."',
									'".mysqli_real_escape_string($connect,$_POST["check_in_time"])."',
									'".mysqli_real_escape_string($connect,$_POST["check_out_date"])."',
									'".mysqli_real_escape_string($connect,$_POST["check_out_time"])."')";
				
				$result_insert=mysqli_query($connect,$sql_insert)	or die(mysqli_error($connect));	
				if($result_insert)
				{
					echo "<script>alert('new record inserted successfully');
							window.location.href='online hotel reservation.php';</script>";
					
				}
			}	
		?>
			<div class="form_style" >
				<div style="background-color:purple;height:100px;">
					<br><center><h1 style="color:white;" >Reservation Form</h1></center><br><br>
				</div>
				<form action="" method="post">
				<table style="margin-left:10%;margin-top:2%; line-height:25px;">
					<tr><td><label><b>* </b>Provide Your NIC no</label></td>
					<td><input type="text" id="nic_no" name="nic" size="12" required></td></tr>
					
					<tr><td><label>First Name</label><br>
					<input type="text" id="first_name" name="first_name" size="30" required></td>
					<td><label>Last Name</label><br>
					<input type="text" id="last_name" name="last_name" size="30" required></td></tr>
					
					<tr><td colspan="2"><label>Address</label><br>
					<textarea style="resize:none;" id="address" name="address"rows="5" cols="50" required> </textarea><br></td></tr>
					
					<tr><td><label>Phone Number</label><br>
					<input type="text" id="phone_no" name="phone_no" size="14" required></td>
					<td><label>E-Mail</label><br>
					<input type="text" id="email_id" name="email_id" size="30" required></td></tr>
					
					<tr><td><label>Number of Guests</label>
						<select id="guest_count" name="guest_count"  required>
							<option value="0">	0	</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</td>
					<td><input type="radio" id="room_type" name="room_type" value="single" required>Single Room<br>
					<input type="radio" id="room_type" name="room_type" value="double" required>Double Room
					</td></tr>
					
					<tr><td><label>Room Standard You Prefer</label>
					<select id="room_standard" name="room_standard"  required>
							<option value="delux"> standard </option>
							<option value="luxury"> luxury </option>
							<option value="standard"> delux </option>
							<option value="normal"> normal </option>
						</select>
					</td></tr>
					
					<tr><td><label>Check in Date</label><br>
					<input type="date" id="check_in_date" name="check_in_date" required></td>
					<td><label>Check in time</label><br>
					<input type="time" id="check_in_time" name="check_in_time" required></td></tr>
					
					<tr><td><label>Check out Date</label><br>
					<input type="date" id="check_out_date" name="check_out_date" required></td>
					<td><label>Check out time</label><br>
					<input type="time" id="check_out_time" name="check_out_time" required></td></tr>
					
					<tr><td colspan="2" style="height:20px;"></td></tr>
					
					<tr><td colspan="3"><input type="submit" id="btn_submit" name="btn_submit" value="Submit">
						<input type="reset"  id="btn_reset" value="Clear">
							<a href="online hotel reservation.php">	<input type="button" id="btn_go_back" value="Back">	</a></td></tr>
				</table>
				</form>
			</div>
			
		
	</body>
	</html>