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

<form action="input.php" method="POST" enctype="multipart/form-data">

<label for="Question">Question</label><br>
<input type="text" name="question" required>

<br><label for="Answer1">Answer1</label><br> 
<input type="text" name="answer1" required/>

<br><label for="Answer2">Answer2</label><br> 
<input type="text" name="answer2" required/>

<br><label for="Answer3">Answer3</label><br> 
<input type="text" name="answer3" required/>

<br><label for="Answer4">Answer4</label><br> 
<input type="text" name="answer4"required/>

<br><label for="AnswerToQuestion">AnswerToQuestion(Enter numeric value)</label><br> 
<input type="number" name="numanswer" value="" min="1" max="2"required/>

<br><label for="Count">Count</label><br> 
<input type="number" name="count" value="0" />

<br><label for="image">Marvel Image</label><br> 
<input type="file" name="image" id="image" />


<br><input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" /> 

</form>


<?php

//if statement that is triggered on the submit button in the form being pressed
//ERROR_REPORTING(E_ALL); used to debug where the error was. if($value >=500 && $value <=600 )
//{
 // echo "value is between 500 and 600";
//}

//database login information        
$host    = "iss40142020.csr3g0achpwq.us-east-1.rds.amazonaws.com";
$user    = "marlyMck1101";
$pass    = "systemFileInt1101";
$db_name = "test_db"; 
$connect = mysqli_connect($host, $user, $pass, $db_name);

     if (!$connect) {
 die ("Connection failed: ". mysqli_connect_errno() . ": ".
mysqli_connect_error());
}

else{

echo 'We good';
}
 

 if(isset($_POST["insert"]))  
 {  

     $question = $_POST['question'];
     $answer1 = $_POST['answer1'];
     $answer2 = $_POST['answer2'];
     $answer3 = $_POST['answer3'];
     $answer4 = $_POST['answer4'];
     $numAnswer = $_POST['numanswer'];
     $count  = $_POST['count'];
     $img = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
          
      $query = "INSERT INTO TRIVIA_TABLE(T_QUESTION, T_ANSWER1, T_ANSWER2, T_ANSWER3, T_ANSWER4, T_ANSWER, T_COUNT, T_IMG) VALUES ('$question', '$answer1', '$answer2', '$answer3', '$answer4', '$numAnswer', '$numAnswer', '$img')";  
     
     
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 } 
 //end isset statement
?>

    <!---------Contact Form ends here--------->

    <!---------Space for the footer--------->
    <div class="space"></div>
</body>

</html>
