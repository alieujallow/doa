<?php

//includes the datbase class
require_once('../classes/staff.php');

//adds a staff to the system
if (isset($_POST['action']) & !empty($_POST['action']))
{
    //gets the form data and the action and the pic selection
    $action = $_POST['action'];

    $picSelection = $_POST['picSelection'];

    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $dateOfBirth = $_POST["dateOfBirth"];
    $gender = $_POST["gender"];
    $designation = $_POST["designation"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $telephone =$_POST["telephone"];
    $dateOfAppointment = $_POST["dateOfAppointment"];
    $payrollNumber = $_POST["payrollNumber"];
    $grade =$_POST["grade"];
    $qualification = $_POST["qualification"];
    $region = $_POST["region"];
    $unit = $_POST["unit"];
    $otherSection =$_POST["otherSection"];

    //checks whether the user wants to edit or add staff information
    if ($action=="add_staff")
    {
        //creates a staff class
        $staff = new Staff;

        if ($picSelection=="file_not_selected")
        {
          //sets the query
            $sql = "INSERT INTO odg_staff(region_id,unit_id,other_section_id,qualification_id,first_name,middle_name,last_name,date_of_birth,gender,address,email,tel,date_of_appointment,payroll_number,grade,status,designation) VALUES('$region','$unit','$otherSection','$qualification',
            '$firstName','$middleName','$lastName','$dateOfBirth','$gender','$address','$email',
            '$telephone',' $dateOfAppointment','$payrollNumber','$grade','ACTIVE','$designation')";
            $result = $staff->staffQuery($sql);
            echo "staff_added";
        }
        else if ($picSelection=="file_selected")
        {
            $target_dir = "../img/profile_pic/";
            //getting image properties
            $name = $_FILES["profile_pic"]["name"];
            $size = $_FILES["profile_pic"]["size"];
            $type = $_FILES["profile_pic"]["type"];
            $error = $_FILES["profile_pic"]["error"];
            $tempName =$_FILES["profile_pic"]["tmp_name"];

            //Renames the picture if it already exists.
            $i = 0;
            $parts = pathinfo($name);
            while (file_exists($target_dir.$name))
            {
              $i++;
              $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
            }

            $sql = "INSERT INTO odg_staff(region_id,unit_id,other_section_id,qualification_id,first_name,middle_name,last_name,date_of_birth,gender,address,email,tel,date_of_appointment,payroll_number,grade,status,designation,profile_pic) VALUES('$region','$unit','$otherSection','$qualification',
            '$firstName','$middleName','$lastName','$dateOfBirth','$gender','$address','$email',
            '$telephone',' $dateOfAppointment','$payrollNumber','$grade','ACTIVE','$designation','$name')";

            //adds the user and the profile pic
            $result = $staff->staffQuery($sql);

            //moves the profile pic to the target directory
            move_uploaded_file($tempName, $target_dir.$name);
            echo "staff_added";
        }  
    }
    else if ($action=="edit_staff")
    {
        
    }

    /*//Edits a staff
    else if ($determinant=="edit_staff")
    {
        //echo "staff_edited";
        session_start();
        $staffId = $_SESSION['staff_id'];
        //sets the query
        $sql = "UPDATE odg_staff SET region_id='$region',unit_id='$unit',other_section_id='$otherSection',qualification_id='$qualification',first_name='$firstName',middle_name='$middleName',last_name='$lastName',date_of_birth='$dateOfBirth',gender='$gender',address='$address',email='$email',tel='$telephone',date_of_appointment='$dateOfAppointment',payroll_number='$payrollNumber',grade='$grade',status='ACTIVE',designation='$designation' WHERE id='$staffId'";

          //creates a staff class
          $staff = new Staff;
          if ($profilePic=="file_not_selected")
          {
            $result = $staff->staffQuery($sql);
            echo "staff_edited"; 
          }
          else
          {
            $fileType=$_FILES["image"]["type"];
            echo "pic";
          }  
    }*/
}
elseif (isset($_GET['emailPayroll']) & !empty($_GET['emailPayroll']))
{
	//gets the email and payroll number and the indicator
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
	$sql="SELECT id,first_name,middle_name,last_name,gender,designation,profile_pic FROM odg_staff WHERE status='ACTIVE'";

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
        $sql="SELECT id,first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND payroll_number LIKE '%$payroll%'";
     }
     else if ($firstName=="" & $lastName!="" & $payroll=="") 
     {
         //sets the sql
        $sql="SELECT id,first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND last_name LIKE '%$lastName%'";
     }
     else if ($firstName!="" & $lastName=="" & $payroll=="") 
     {
         //sets the sql
        $sql="SELECT id,first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND first_name LIKE '%$firstName%'";
     }
     else if ($firstName!="" & $lastName!="" & $payroll=="") 
     {
         //sets the sql
        $sql="SELECT id,first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND first_name LIKE '%$firstName%' AND last_name LIKE '%$lastName%'";
     }
     else if ($firstName!="" & $lastName =="" & $payroll!="") 
     {
         //sets the sql
        $sql="SELECT id,first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND first_name LIKE '%$firstName%' AND payroll_number LIKE '%$payroll%'";
     }
     else if ($firstName=="" & $lastName !="" & $payroll!="") 
     {
         //sets the sql
        $sql="SELECT id,first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND last_name LIKE '%$lastName%' AND payroll_number LIKE '%$payroll%'";
     }
     else if ($firstName!="" & $lastName !="" & $payroll!="") 
     {
         //sets the sql
        $sql="SELECT id,first_name,middle_name,last_name,gender,designation FROM odg_staff WHERE status='ACTIVE' AND last_name LIKE '%$lastName%' AND payroll_number LIKE '%$payroll%' AND first_name LIKE '%$firstName%'";
     }
    //creates a staff class
    $staff = new Staff;

    //gets the rows of all the staff
    $rows = $staff->getStaffInfo($sql);
    echo json_encode($rows);
}
elseif (isset($_GET['staffId']) & !empty($_GET['staffId']))
{
    session_start();
    $_SESSION['staff_id'] = $_GET['staffId'];
    echo "staff_id_stored";
}
elseif (isset($_GET['staff_profile_information']) & !empty($_GET['staff_profile_information']))
{
    session_start();
    $staffId = $_SESSION['staff_id'];

    //sets the sql
    $sql1="SELECT *FROM odg_staff WHERE status='ACTIVE' AND id='$staffId'";
    $sql2="SELECT name FROM unit, odg_staff WHERE odg_staff.unit_id=unit.id AND odg_staff.id='$staffId'";
    $sql3="SELECT name FROM region, odg_staff WHERE odg_staff.region_id=region.id AND odg_staff.id='$staffId'";
    $sql4="SELECT name FROM qualification, odg_staff WHERE odg_staff.qualification_id=qualification.id AND odg_staff.id='$staffId'";
    $sql5="SELECT name FROM other_section, odg_staff WHERE odg_staff.other_section_id=other_section.id AND odg_staff.id='$staffId'";

    //creates a staff class
    $staff = new Staff;

    //creates an array
    $data = array();
    //gets the rows of all the staff
    $staffRow = $staff->getStaffInfo($sql1);
    $unitName = $staff->getStaffInfo($sql2);
    $regionName= $staff->getStaffInfo($sql3);
    $qualificationName= $staff->getStaffInfo($sql4);
    $otherSectionName= $staff->getStaffInfo($sql5);

    $data = array($staffRow,$unitName,$regionName,$qualificationName,$otherSectionName);

    echo json_encode($data);
}
?>
