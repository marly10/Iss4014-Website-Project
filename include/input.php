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
    <label for="fname">First Name</label><br>
    <!---------HTML List  Ends here--------->

    <!---------Contact Form Begins here--------->

    <form action="input.php" method="POST" enctype="multipart/form-data">

        <label for="fname">Question</label><br>
        <textarea type="text" name="model" value="" required></<textarea>

<br><label for="fname">Answer1</label><br> 
<input type="text" name="year" value="" required/>

<br><label for="fname">Answer2</label><br> 
<input type="number" name="mileage" value="" required/>

<br><label for="fname">Answer3</label><br> 
<input type="number" name="price" value="" required/>

<br><label for="fname">Answer4</label><br> 
<input type="text" name="color" value="" required/>

<br><label for="fname">AnswerToQuestion(Enter numeric value)</label><br> 
<input type="number" name="body" value="" required/>


<br><label for="fname">Count</label><br> 
<input type="hidden" name="trans" value="0" />

<br><label for="fname">Marvel Image</label><br> 
<input type="file" name="image" id="image" />


<br><input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" /> </form>


    <?php

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


<br />


<?php  

//ERROR_REPORTING(E_ALL); used to debug where the error was.

//database login information        
$host    = "iss40142020.csr3g0achpwq.us-east-1.rds.amazonaws.com";
$user    = "marlyMck1101";
$pass    = "systemFileInt1101";
$db_name = "fanPage_ch20"; 
$connect = mysqli_connect($host, $user, $pass, $db_name);


 if(isset($_POST["insert"]))  
 {  

     $make = $_POST['make'];
     $model = $_POST['model'];
     $year = $_POST['year'];
     $mileage = $_POST['mileage'];
     $price = $_POST['price'];
     $color = $_POST['color'];
     $body = $_POST['body'];
     $tran = $_POST['trans'];
     
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
          
      $query = "INSERT INTO tbl_images(make, model, year, mileage, price, color, body, trans, name) VALUES ('$make', '$model', '$year', '$mileage', '$price', '$color', '$body', '$tran', '$file')";  
     
     
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 } 

 ?>