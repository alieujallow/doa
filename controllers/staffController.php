<?php

//includes the datbase class
require_once('../classes/staff.php');

//adds a staff to the system
if (isset($_GET['add_staff']) & !empty($_GET['add_staff']))
{
	$firstName = $_GET["first_name"];
    $middleName = $_GET["middle_name"];
    $lastName = $_GET["last_name"];
    $dateOfBirth = $_GET["date_of_birth"];
    $gender = $_GET["gender"];
    $designation = $_GET["designation"];
    $address = $_GET["address"];
    $email = $_GET["email"];
    $telephone =$_GET["telephone"];
    $dateOfAppointment = $_GET["date_of_appointment"];
    $payrollNumber = $_GET["payroll_number"];
    $grade =$_GET["grade"];
    $qualification = $_GET["qualification"];
    $region = $_GET["region"];
    $unit = $_GET["unit"];
    $otherSection =$_GET["other_section"];
    $profilePic =$_GET["profile_pic"];

    //sets the query
    $sql = "INSERT INTO odg_staff(region_id,unit_id,other_section_id,qualification_id,first_name,middle_name,last_name,date_of_birth,gender,address,email,tel,date_of_appointment,payroll_number,grade,status,designation) VALUES('$region','$unit','$otherSection','$qualification',
        '$firstName','$middleName','$lastName','$dateOfBirth','$gender','$address','$email',
        '$telephone',' $dateOfAppointment','$payrollNumber','$grade','ACTIVE','$designation')";

    //creates a staff class
    $staff = new Staff;

    if ($profilePic=="file_not_selected")
    {
        $result = $staff->staffQuery($sql);
        echo "staff_added";
    }
    else
    {
        $fileType=$_FILES["image"]["type"];


        /*$staff->staffQuery($sql);
        $lastInsertedId = $staff->getLastStaffInsertedId();
        $sql="INSERT INTO picture(staff_id) VALUES('$lastInsertedId')";
        $result = $staff->staffQuery($sql);*/
        echo "pic";
    } 
}
elseif (isset($_GET['getEmailAndPayroll']) & !empty($_GET['getEmailAndPayroll']))
{
	//gets the email and payroll number
	$email = $_GET["email"];
	$payrollNumber = $_GET["payroll_number"];

	//sets the querry
	$sql1="SELECT first_name FROM odg_staff WHERE email='$email'";
	$sql2="SELECT first_name FROM odg_staff WHERE payroll_number='$payrollNumber'";

	//creates a staff class
    $staff = new Staff;
    $result1 = $staff->emailPayrollCheck($sql1);
    $result2 = $staff->emailPayrollCheck($sql2);

    //creates an array for the response
    $responseList = array("","");

    //checks for the results
    if ($result1>0)
    {
    	$responseList[0]="email_exists";
    }

    //checks for the results
    if ($result2>0)
    {
    	$responseList[1]="payroll_number_exists";
    }
    echo json_encode($responseList);
}
elseif (isset($_GET['staff_info']) & !empty($_GET['staff_info']))
{
	//sets the sql
	$sql="SELECT first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE'";

	//creates a staff class
    $staff = new Staff;

    //gets the rows of all the staff
    $rows = $staff->getStaffInfo($sql);

    echo json_encode($rows);
}

elseif (isset($_GET['search']) & !empty($_GET['search']))
{
    //gets the values
     $firstName=$_GET['first_name'];
     $lastName=$_GET['last_name'];
     $payroll=$_GET['payroll_number'];

     if ($firstName=="" & $lastName=="" & $payroll!="")
     {
        //sets the sql
        $sql="SELECT first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND payroll_number LIKE '%$payroll%'";
     }
     else if ($firstName=="" & $lastName!="" & $payroll=="") 
     {
         //sets the sql
        $sql="SELECT first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND last_name LIKE '%$lastName%'";
     }
     else if ($firstName!="" & $lastName=="" & $payroll=="") 
     {
         //sets the sql
        $sql="SELECT first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND first_name LIKE '%$firstName%'";
     }
     else if ($firstName!="" & $lastName!="" & $payroll=="") 
     {
         //sets the sql
        $sql="SELECT first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND first_name LIKE '%$firstName%' AND last_name LIKE '%$lastName%'";
     }
     else if ($firstName!="" & $lastName =="" & $payroll!="") 
     {
         //sets the sql
        $sql="SELECT first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND first_name LIKE '%$firstName%' AND payroll_number LIKE '%$payroll%'";
     }
     else if ($firstName=="" & $lastName !="" & $payroll!="") 
     {
         //sets the sql
        $sql="SELECT first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND last_name LIKE '%$lastName%' AND payroll_number LIKE '%$payroll%'";
     }
     else if ($firstName!="" & $lastName !="" & $payroll!="") 
     {
         //sets the sql
        $sql="SELECT first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND last_name LIKE '%$lastName%' AND payroll_number LIKE '%$payroll%' AND first_name LIKE '%$firstName%'";
     }
    //creates a staff class
    $staff = new Staff;

    //gets the rows of all the staff
    $rows = $staff->getStaffInfo($sql);
    echo json_encode($rows);
}
?>