<?
$type = $_POST['feedbackType'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['messagetext'];


$fullMessage = "
type: ".$type."
Name: ".$name."
Email: ".$email."
Message: ".$message."
"; 
mail ("basicday@c-ronics.com" , "New form message" , $fullMessage );
header ("Location: formSent.html");
?>