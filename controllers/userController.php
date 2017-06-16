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

    if($user->userQuery($sql))
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
elseif (isset($_GET['currentPass']) & !empty($_GET['currentPass']))
{   
    session_start();
    $currentPass = $_GET['currentPass'];
    $userId = $_SESSION['userid'];

    //sets the query
    $sql = "SELECT password FROM user WHERE id='$userId'";

    //creates a user object
    $user= new User;
    $hashedPass = $user->getPassword($sql);

    if (password_verify($currentPass,$hashedPass))
    {
        echo "password_correct";
    }
    else
    {
        echo "password_not_correct";
    } 
}
elseif (isset($_GET['newPassword']) & !empty($_GET['newPassword']))
{   
    session_start();
    $userId = $_SESSION['userid'];
    $newPass = $_GET['newPassword'];
    $newPasshash = password_hash($newPass,PASSWORD_DEFAULT);

    //sets the query
    $sql = "UPDATE user SET password ='$newPasshash' WHERE id='$userId'";

    //creates a user object
    $user= new User;
    $result= $user->userQuery($sql);
    if ($result)
    {
        echo "password_changed";
    }
    else
    {
        echo "password_not_changed";
    } 
}

 /*$newPass ="12";
 $newPass = password_hash($newPass,PASSWORD_DEFAULT);
 echo $newPass;*/
?>