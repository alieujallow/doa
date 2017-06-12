<?php

//includes the datbase class
require_once('../classes/user.php');

//adds a qualification to the system
if (isset($_GET['add_user']) & !empty($_GET['add_user']))
{
    //gets the username and role
	$username = $_GET["username"];
    $roleId = $_GET["roleId"];

    //sets a default password of 123
    $password = "123";

    //hashes the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //sets the sql
    $sql="INSERT INTO user(role_id,username,password) VALUES('$roleId','$username','$password')";

    //creates a new user
    $user= new User;

    if($user->addUser($sql))
    {
        echo "user_added";
    } 
    else
    {
        echo "failure";
    }
}
elseif (isset($_GET['getUserName']) & !empty($_GET['getUserName']))
{
    session_start();
    echo $_SESSION['username'];
}

?>