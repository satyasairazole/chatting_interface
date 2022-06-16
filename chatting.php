<?php 
	include 'db.php';
	$con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	 if(!$con){
		 die("Failed to connect with MySQL: ". mysqli_connect_error());
	 }
	 else{
	 		 if (isset($_POST['login'])){
	 		 	$email=$_POST['email'];
	 		 	$password=$_POST['password'];
	 		 	$login="select email,pass from chat_data";
	 		 	if($result=mysqli_query($con,$login)){
							while($row=mysqli_fetch_array($result)){
								if($email==$row['email']&&$password==$row['pass']){
									//echo"<h1>password is matching successfully</h1>";
							
		 if(isset($_POST['submit'])){
			$messege=$_POST['Entered_messege'];
			$name="satyasairazole";
			$recieve="mylove";
			$dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata')); 
			$dat=$dateTime->format("d/m/y");
			$tim=$dateTime->format("H:i A");
			 echo $messege;
			$sql="INSERT INTO `sender`(`sender_name`, `time`, `date`, `reciever_name`, `messege`) VALUES ('$name','$tim','$dat','$recieve','$messege')";
			$result = mysqli_query($con, $sql); 
			echo"values are inserted successfully"; 
		 }
		 function dis(){
			 echo"hey there it is working";
		 }
?>
<html>
	<head>
	<title>chatting ui</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/a8530e2e11.js" crossorigin="anonymous"></script>
	</head>
	<body>
	<script>
	function dispute(){
		alert("that function is workinging");
	}
	</script>
		<div class="container">
			<div class="msg-header">
				<div class="msg-header-img">
					<img src="basha.jpg" alt="basha-img">
				</div>
				<div class="active">
					<?php
					$logn="select distinct reciever_name from sender";
	 		 	if($result=mysqli_query($con,$logn)){
							while($row=mysqli_fetch_array($result)){
					echo"<h4>".$row['reciever_name']."</h4>
					<h6>3 hours ago....</h3>";
				}}
					?>
				</div>
				<div class="header-icons">
					<i class="fa-solid fa-phone"></i>
					<i class="fa-solid fa-video"></i>
					<i class="fa-solid fa-circle-info"></i>
				</div>
			</div>
			<div class="chat-page">
				<div class="msg-inbox">
					<div class="chats">
						<div class="chat-page">
							
							<?php
							$querry="select messege,time,sender_name,date from reciever union select messege,time,sender_name,date from sender order by date,time";
							
							if($result=mysqli_query($con,$querry)){
								$rowcount=mysqli_num_rows($result);
								//echo"rowcount=".$rowcount;
							while($row=mysqli_fetch_array($result)){
								if($row['sender_name']=="satyasairazole"){
							echo "<div class='sender-chats'>
								<div class='sender-msg'>
										<p>".$row['messege']."</p>
										<span class='time'>".$row['time']."| December 2</span>
								</div>
								<div class='sender-chats-img'>
									<img src='ramya.jpg'>
								</div>
							</div>";
							}
							else {
								 echo"<div class='recieved-chats'>
								<div class='recieved-chats-img'>
									<img src='basha.jpg'>
								</div>
								<div class='recieved-msg'>
									<div class='recieved-msg-inbox'>
										<p>".$row['messege']."</p>
										<span class='time'>".$row['time']."| December 2</span>
									</div>
								</div>
							</div>";
							}
							}
							}
							?>
							
							
						</div>
						
					</div>
					
				</div>
				<div class="msg-bottom">
							<div class="msg-bottom-icons">
								<i class="fa fa-smile-o smile"></i>
								<i class="fa-solid fa-paperclip paperclip"></i>
							</div>
<form method="POST">
							<div class="input-group">
								
							<input type="text" class="form-control" placeholder="write your messege....." name="Entered_messege">
								<div class="input-group-append">
									<span class="input-group-text">
									<button type="submit" name="submit"><i   type="submit" class="fa-solid fa-paper-plane plane"></i></button>
									</span>
								</div>
							</div>
</form>
						</div>
			</div>
		</div>
	</body>
</html>
<?php
			}
		}
	}
}else{
	echo"pakkelli adukora hoooka";
}
}

?>
