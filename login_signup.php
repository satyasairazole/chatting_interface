
<!-- Is not completed fully Is empty condition is not set there-->
<!DOCTYPE html>
<html>
<head>
    <title> SignUp and Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" >
                <h1 style="padding-top: 15px"> Create Account</h1>
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="password" placeholder="Password">
                <input type="text" name="phone" placeholder="Phone Number">
                <button type="submit"name="create" style="margin-top:10px"> Create Account</button>
                <h5>Already have an account! <a class="ghost" id="signIn" style="color:blue;"><u>Sign In</u></a></h5>
            </form>
        </div>
        <!--Sign up page Data  code-->

        <?php 
            include 'db.php';
         $con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
        if(!$con){
         die("Failed to connect with MySQL: ". mysqli_connect_error());
            }
     else{
            if (isset($_POST['create'])){
            $firstname=$_POST['fname'];
             $lastname=$_POST['lname'];
              $email=$_POST['email'];
               $passwd=$_POST['password'];
                $phno=$_POST['phone'];

            $sql="INSERT INTO `chat_data`(`first_name`, `last_name`, `email`, `pass`, `phno`) VALUES ('$firstname','$lastname','$email','$passwd','phno')";
            $result = mysqli_query($con, $sql);
            echo "values are inserted successfully";
        }
    }
        ?>
        <div class="form-container sign-in-container">
            <form method="POST" action="chatting.php">
                <h1 style="padding-bottom: 15px">Sign In</h1>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <span>satyas</span>
                <a href="#" style="padding-left:150px; font-weight: bold"> Forgot Your Password?</a>
                <button type="submit" name="login"style="margin-top: 10px">Login</button>
                <h5>New to here! <a class="ghost" id="signUp" style="color:blue;"><u>Sign Up</u></a></h5>
            </form>
            
        </div>
        
        

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="Mingle-logos.jpeg" alt="movie-1" height="480" width="500"/>
                    
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="Mingle-logos.jpeg" alt="movie-2" height="480" width="500"/>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</body>
</html>
