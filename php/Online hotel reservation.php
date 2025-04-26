<html>
	<head>
		<title>Online Hotel Reservation</title>
		<style>
			div{
				outline:1px solid blue;
				}
				.line_one{
							position: relative;
							z-index: 1;
							background-image:url('images/cinamon.jpg');
							height:200px;
					}			
				.line_one:before{
							content: "";
							cpacity: 0.7;
							position: absolute;
							z-index: -1;
							top: 0;
							bottom: 0;
							left: 0;
							right: 0;
							background-image:url('IDM PHP/hotel1.jpg'),url('IDM PHP/hotel2.jpg'),
											url('\IDM PHP/hotel5.jpg'),url('IDM PHP/hotel4.jpg'),
											url('IDM PHP/hotel3.jpg');
							background-position: 0% 0%, 25% 0%, 50% 0%, 75% 0%, 100% 0%;
							background-repeat:no-repeat, no-repeat, no-repeat, no-repeat, no-repeat;
							background-size:20% 100%, 20% 100%, 20% 100%, 20% 100%, 20% 100%;
					}
				.line_one h1{
							margin-top:0px;
							margin-bottom:0px;
							font-family:Segoe UI Black;
							font-size:80px;
							color:#FF0066;
							text-shadow: 4px 2px #7F7F7F;	
					}
				.line_one h2{
							margin-top:0px;
							margin-bottom:0px;
							font-family:Segoe Print;
							font-size:40px;
							color:#cc0099;
							text-shadow: 2px 0px #000000;	
					}
				.line_two{
							height:40px;
					}
				.line_two button{
							height:40px;
							width:20%;
							float:left;
							background-color:  gray;
							color:black;
							border: none;
							text-decoration: none;
					}
				.line_two button:hover{
							color:Green;
							background-color: #e09db6;
					}
				.line_three{
							display:flex;
							background-color: #e09db6;
					}
				.line_three_d1{
							border:10px solid black;
							height:300px;
							width:50%;
							color:white;
							background-image:url('images/single1.jpg');
							background-repeat:no-repeat;
							background-size:100% 100%;
							border-top-left-radius: 500px;
							border-bottom-left-radius: 500px;
							border-left:50px solid Maroon;
							border-right:10px solid Maroon;
					}
				.line_three_d2{
							border:10px solid black;
							height:300px;
							width:50%;
							color:white;
							background-image:url('images/double.jpg');
							background-repeat:no-repeat;
							background-size:100% 100%;
							border-top-right-radius: 500px;
							border-bottom-right-radius: 500px;
							border-right:50px solid tan;
							border-left:10px solid tan;
					}
				.line_four{
							display:flex;
							background-color: e09db6;
					}
				.line_four_d1{
							border:10px solid purple;
							height:300px;
							width:50%;
							color:white;
							background-image:url('images/pool.jpg');
							background-repeat:no-repeat;
							background-size:100% 100%;
							border-top-left-radius: 500px;
							border-bottom-left-radius: 500px;
							border-left:50px solid tan;
							border-right:10px solid tan;
					}
				.line_four_d2{
							border:10px solid purple;
							height:300px;
							width:50%;
							color:white;
							background-image:url('images/food items.jpg');
							background-repeat:no-repeat;
							background-size:100% 100%;
							border-top-right-radius: 500px;
							border-bottom-right-radius: 500px;
							border-right:50px solid maroon;
							border-left:10px solid maroon;
					}
					.line_five{
							display:flex;
							background-color: Navy;
					}
				.line_five_d1{
							height:200px;
							width:33.33%;
							margin-left:20px;
					}
				.line_five_d2{
							height:200px;
							width:33.33%;
							margin-left:20px;
					}
				.line_five_d2{
							height:200px;
							width:33.33%;
							margin-left:40px;
					}
		</style>
	</head>
	<body>
		<div class="line_one">
				<center><h1>Cinamon Grand Hotel Resort</h1></center>
				<center><h2>It's a major luxury hotel</h2></center>
				
		</div>
		<div class="line_two">
			<a href="#"><button>Concerning Us</button></a>
			<a href="#"><button>Accommodation</button></a>
			<a href="reservation.php"><button>Rooms hesitancy</button></a>
			<a href="view reservation.php"><button>Scene hesitancy</button></a>
			<a href="#"><button>drop hesitancy</button></a>
		</div>
		<div class="line_three">
			<div class="line_three_d1">
				<div style="margin-top:50px;margin-left:80px;margin-right:100px;height:220px; background-color:rgba(0,0,0,0.5);color:white;">
					<center><h3>Lone Room</h3></center>
					<table style="margin-left:20px;margin-right:20px;color:white;">
						<tr><td>Ac Available</td><td>yes</td></tr>
						<tr><td>Room Services</td><td>yes</td></tr>
						<tr><td>Attached Bathroom</td><td>yes</td></tr>
						<tr><td>Home Theater</td><td>no</td></tr>+
						<tr><td>Sea Side View</td><td>yes</td></tr>
						<tr><td colspan="2">* Maximum 2 person allowed</td></tr>
					</table>
					<h4>Get Fast to Reserve Your Paradice</h4>
				</div>
			</div>
			<div class="line_three_d2">
				<div style="margin-top:50px;margin-left:80px;margin-right:100px;height:220px; background-color:rgba(0,0,0,0.5);color:white;">
					<center><h3>Double Room</h3></center>
					<table style="margin-left:20px;margin-right:20px;color:white;">
						<tr><td>Ac Available</td><td>yes</td></tr>
						<tr><td>Room Services</td><td>yes</td></tr>
						<tr><td>Attached Bathroom</td><td>yes</td></tr>
						<tr><td>Home Theater</td><td>no</td></tr>
						<tr><td>Sea Side View</td><td>yes</td></tr>
						<tr><td colspan="2">* Maximum 6 person allowed including 2 kids</td></tr>
					</table>
					<h4> come to be Reserve Your zion</h4>
				</div>
			</div/>
		</div>
		<div class="line_four">
			<div class="line_four_d1">
				<div style="margin-top:50px;margin-left:80px;margin-right:100px;height:220px; background-color:rgba(0,0,0,0.5);color:white;">
					<center><h3>Swimming Pool</h3></center>
					<table style="margin-left:20px;margin-right:20px;color:white;">
						<tr><td colspan="2">100% hygiene</td></tr>
						<tr><td>7 Days Availability</td><td>yes</td></tr>
						<tr><td>Food Services</td><td>yes</td></tr>
						<tr><td>Bathroom</td><td>yes</td></tr>
						<tr><td>Floatter</td><td>yes</td></tr>
						<tr><td>Swim suits</td><td>yes</td></tr>
					</table>
					<h4>come to be Reserve Your zion</h4>
				</div>
			</div>
			<div class="line_four_d2">
				<div style="margin-top:50px;margin-left:80px;margin-right:100px;height:220px; background-color:rgba(0,0,0,0.5);color:white;">
					<center><h3>Food Corner</h3></center>
					<table style="margin-left:20px;margin-right:20px;color:white;">
						<tr><td colspan="2">100% hygiene</td></tr>
						<tr><td>Days & Night Availability</td><td>yes</td></tr>
						<tr><td>Veg & Non Veg Meals</td><td>yes</td></tr>
						<tr><td>Alcohols</td><td>yes</td></tr>
						<tr><td>Buffet</td><td>yes</td></tr>
					</table>
					<h4>come to be Reserve Your zion</h4>
				</div>
			</div>
		</div>
		<div class="line_five">
			<div class="line_five_d1" >
				<h3 style="color:white;">	Our Hotel Contact	</h3>
				<p style="color:white;" >
					Managing Director,<br>
					Cinamon grand,<br>
					Galle Road,<br>
					Colombo<br>
					E-mail: cinamon@gmail.com<br>
					Tel: +94 -11- 2161161/ 4<br>
					Fax: +94 -11-2320862
				</p>
			</div>
			<div class="line_five_d2">
				<h3 style="color:white;">	Follow us	</h3>
				<p>
					<a style="text-decoration:none;color:white;" href="https://m.facebook.com/naturefriends.lk"><img src="images/fb.jpg" width="20px" height="20px"> Facebook</a><br><br>
					<a style="text-decoration:none;color:white;" href="https://www.instagram.com"><img src="images/Instagram.png" width="20px" height="20px"> Instagram</a><br><br>
					<a style="text-decoration:none;color:white;" href="https://www.instagram.com"><img src="images/linkedin.jpg" width="20px" height="20px"> Linkedin</a>
				</p>
			</div>
			<div class="line_five_d3">
					<br>
				<center><img src="images/c.jpg" width="300px" height="150px"></center>
			</div>
		</div>
		
			
		
	</body>
	</html>