<?php
$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["Gender"] ?? "";

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $website = $_REQUEST["website"];
    $comment = $_REQUEST["comment"];
    $gender = $_REQUEST["Gender"] ?? "";



    if (!empty($name) && strlen($name) >=5)
    {
         echo "Name: " . $name . "<br>";
    }
    else{
        echo "Name must be at least 5 characters and contain only letters <br>";
    }


    if (empty($email))
    {
        echo "Email is required <br>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Invalid E-mail format <br>";
    }
    else
    {
        echo "Email: " . $email . "<br>";
    }


    if (empty($website))
    {
        echo "Website is optional <br>";
    }
    elseif (!filter_var($website, FILTER_VALIDATE_URL))
    {
        echo "Invalid Website format <br>";
    }
    else
    {
        echo "Website: " . $website . "<br>";
    }
 

    if (empty($comment))
    {
        echo "Comment is optional <br>";
    }
    else
    {
        echo "Comment: " . $comment . "<br>";
    }


    if (empty($gender))
    {
        echo "Gender is required <br>";
    }
    else
    {
        echo "Gender: " . $gender . "<br>";
    }
}
?>