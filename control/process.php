<?php 
@$number1=$_POST['Number1'];   
@$number2=$_POST['Number2'];   
$result;  
$radioVal = $_POST["operation"];

if($radioVal=="+")
{
    $number1 = htmlspecialchars($_REQUEST['Number1']);
    $number2 = htmlspecialchars($_REQUEST['Number2']);
    $result = $number1+$number2;
    echo "Sum: ".$result;
} 
else if ($radioVal=="-")
{
    $number1 = htmlspecialchars($_REQUEST['Number1']);
    $number2 = htmlspecialchars($_REQUEST['Number2']);
    $result = $number1-$number2;
    echo "Sub: ".$result;
} 
else if ($radioVal=="/")
{
    $number1 = htmlspecialchars($_REQUEST['Number1']);
    $number2 = htmlspecialchars($_REQUEST['Number2']);
    $result = $number1/$number2;
    echo "Div: ".$result;
} 
else if($radioVal=="*")
{
    $number1 = htmlspecialchars($_REQUEST['Number1']);
    $number2 = htmlspecialchars($_REQUEST['Number2']);
    $result = $number1*$number2;
    echo "Mul: ".$result;
} 
?>  