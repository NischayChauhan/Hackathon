
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
.error {color: #FF0000;}
form{text-align: center;}
</style>
</head>
<body>
        
<?php
// define variables and set to empty values
$emailErr = $passwordErr = "";
$email = $password  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if e-mail address is well-formed
    if ($password==null) {
      $passwordErr = "Invalid  format"; 
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>  

<h2>LOG IN</h2>
<a href="../index.php">Go Back</a>
   
    Individual

    <form method="post" action="./login.php">  

      <br>
      
      E-mail: <input type="text" name="email">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      
      Password: <input type="password" name="password">
      <span class="error">* <?php echo $passwordErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Submit">  
    </form>



    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</html>

<?php 
    echo $emailErr;
    echo $passwordErr;

    if(empty($emailErr) && empty($passwordErr) && $_POST){
        $pass = $password;
        
        require "config.php";
        
        //Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT password from users where eMail = '$email'";
        $result = $conn->query($sql);
        $flag = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if($row["password"]==$pass){
                  echo "Great work you are logged in";
                  $flag = 1;
                  break;
              }
            }

        }
        if($flag == 0){
            echo "Please go and sign up";
        }

        $conn->close();
    }
?> 



<?php
// // Required if your environment does not handle autoloading
// require __DIR__ . '/twilio-php-master/Twilio/autoload.php';


// // Your Account SID and Auth Token from twilio.com/console
// // $sid = 'SKab076f00c4a9df9cf27540693efe1e92';
// // $token = 'K8DGf0x9bBjfLRA8zqiPkyq1mGHo4QT2';

// $sid = 'AC88f1cc83003c7ec44ff42c59b370e3d9';
// $token = '07c3489fc0d6f9e611c95bd7270d31c1';


// use Twilio\Rest\Client;

// $twilio = new Client($sid, $token);

// // $incoming_phone_number = $twilio->incomingPhoneNumbers
// //                                 ->create(array(
// //                                              "phoneNumber" => "+15005550006",
// //                                              "voiceUrl" => "http://demo.twilio.com/docs/voice.xml"
// //                                          )
// //                                 );

// // print($incoming_phone_number->sid);

// // $message = $twilio->messages
// //                   ->create("+919896790301", // to
// //                            array(
// //                                "body" => "All in the game, yo",
// //                                "from" => "+15005550006"
// //                            )
// //                   );

// // print($message->sid);


?>