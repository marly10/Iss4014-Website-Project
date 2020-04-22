<!----
  Student: Ricky McKenzie
  Class: ISS4014-1 SP20 - Data Base Systems And Web Integration
  Due Date: Due Apr 27
  ----->
  <!DOCTYPE HTML>
<html>

<head>
    <title>Football</title>
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <style>

    </style>
</head>

<body> 

    <!---------HTML List  Ends here--------->

    <!---------Contact Form Begins here--------->
    <div class="connect">
        <form action="index.php" method="POST">

            <h3 style="color:rgb(120, 22, 32); text-align:center;">Want to talk, watch or play Football<br>Hit me up
            </h3>
            <label for="fname">First Name</label><br>
            <input type="text"  name="firstname" placeholder="First Name"  value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>" required>

            <br> <label for="lname">Last Name</label><br>
            <input type="text" name="lastname" placeholder="Last Name" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>" required>

            <br> <label for="email">Email</label><br>
            <input type="email"  name="emailAdd" placeholder="Email Address" value="<?php if (isset($_POST['emailAdd'])) echo $_POST['emailAdd']; ?>" required>


            <br><label for="country">Football Activity</label><br>
            <select id="footballActivity" name="footballActivity">
                <option value="Play Football">Play Football </option>
                <option value="Watch Football">Watch Football</option>
                <option value="Talk Football">Talk Football</option>
            </select>

            <br><label for="subject">Other Football Activities</label><br>
            <textarea id="subject" name="subject" placeholder="Wish to do something else.." style="height:100px"></textarea>

            <br> <input name="Submit" type="submit"  value="Submit">
        </form>
    </div>

    <?php
//ERROR_REPORTING(E_ALL); used to debug where the error was.

//database login information        
$host    = "iss40142020.csr3g0achpwq.us-east-1.rds.amazonaws.com";
$user    = "marlyMck1101";
$pass    = "systemFileInt1101";
$db_name = "fanPage_ch20"; 
$connect = mysqli_connect($host, $user, $pass, $db_name);

//if statement that is triggered on the submit button in the form being pressed
 if(isset($_POST["Submit"]))  
 {  
    //form variables captured using POST & superglobal
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['emailAdd'];
    $fActivity = $_POST['footballActivity'];
    $extraActivity = $_POST['subject'];

    //sql query being executed when if statement is executed
    $query = "INSERT INTO CONTACT_FORM(  F_FNAME, F_LNAME, F_EMAIL, F_ACTIVITY, F_COMM) VALUES ( '$fname', '$lname', '$email', '$fActivity', '$extraActivity')";  
     
        //message posted on alert when message is sent.
      $message = "Thank you for reaching out: ".$fname."\\nWe will have a great time chatting about: ".$fActivity."";
     
      //if used to alert on screen the message has been sent properly
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("'.$message.'")</script>';  
      }
      //else for the message error to user.
      else
      {
          echo 'Sorry, your message was not sent. Currently we are working to solve this issue!';
        
    }

 } //end isset statement
?>

    <!---------Contact Form ends here--------->

    <!---------Space for the footer--------->
    <div class="space"></div>
</body>

</html>

