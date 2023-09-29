<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
       
       
      
       
    </style>
<script type="text/javascript">
    var npass = document.f1.npass;
    var repass = document.f1.rpass;


function validate_password() {
 
 var pass = document.getElementById('password').value;
 var confirm_pass = document.getElementById('repassword').value;
 if (pass != confirm_pass) {
     document.getElementById('wrong_pass_alert').style.color = 'red';
     document.getElementById('wrong_pass_alert').innerHTML
         = '☒ Use same password';
     document.getElementById('create').disabled = true;
     document.getElementById('create').style.opacity = (0.4);
 } else {
     document.getElementById('wrong_pass_alert').style.color = 'green';
     document.getElementById('wrong_pass_alert').innerHTML =
         '🗹 Password Matched';
     document.getElementById('create').disabled = false;
     document.getElementById('create').style.opacity = (1);
 }

  


}
</script>
</head>
<body>     

    <form action="./loginworker.php" class="bg-light" name="f1">
        <div class="container ">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="heading">
                        <h1>
                            SignUp(wanter)
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6 mb-2 ">
                    <input type="text" class="form-control" id="firstname" placeholder="Firstname" name="fname" required>
                </div>
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lname" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-2">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="npass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                </div>
                <div class="col-6 mb-2">
                    <input type="password" class="form-control" id="repassword" placeholder="Confirm password" name="rpass" 
                     required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                     onkeyup="validate_password()">
                </div>
            </div>
            <span id="wrong_pass_alert"></span>
            <div class="row">
                <div class="col-6 mb-2">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required minlength="10" maxlength="12">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="service" placeholder="Service" name="service" required>
                </div>
                <div class="col-6 mb-2">
                    <input type="text" class="form-control" id="location" placeholder="Location" name="location" required>
                </div>
            </div>
            <div class="row ">
                <div class="col-12">
                    <input type="submit" class="btn btn-primary w-100" id="registerbtn" value="Register" name="submit" >
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <small>Already have an account? <a href="./loginworker.php">Login</a></small>

                </div>
                <div id="news"></div>
            </div>
        </div>
    </form>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = 'db_jobvia';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$firstname =  $_POST["fname"];
$lastname =  $_POST["lname"];
$pass =  $_POST["rname"];
$email =  $_POST["email"];
$phone=  $_POST["phone"];

// $sql = INSERT INTO jobseeker(`JFIRST_NAME`, `JLAST_NAME`, `JPASSWORD`, `JEMAIL`, `JPHONE_NO`) VALUES ($firstname,$lastname,$pass,$email,$phone);
$sql = INSERT INTO `jobseeker`(`JFIRST_NAME`, `JLAST_NAME`, `JPASSWORD`, `JEMAIL`, `JPHONE_NO`) VALUES ('$firstname','$lastname','$pass','$email','$phone');


// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "Connected successfully";
?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>