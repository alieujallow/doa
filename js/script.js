//***************************************************
//                VALIDATIONS
//***************************************************

//validates the username
function validateName(form_name,object_name,span_name)
{
	var name = document.forms[form_name][object_name];
	var span = document.getElementById(span_name);

  if (name.value == "") 
  {
   	span.innerHTML = "*required";
   	name.style.border= "1px solid red";
   	return false; 
  }
  else
  {
  	//checks if the username does not contain numbers or symbols 
  	var pattern = new RegExp("^[a-zA-Z]+$");

  	if (pattern.test(name.value)) 
  	{
  		name.style.border= "";
 		  span.innerHTML = "";
 		  return true; 
  	}
  	else
  	{
  		span.innerHTML = "*username must not contain numbers or symbols";
 		  name.style.border = "1px solid red";
 		  return false; 
  	}
  }
}

//validates the select input fields
function validateSelectInputField(form_name,object_name,span_name)
{
  var selectInputField = document.forms[form_name][object_name];
  var span = document.getElementById(span_name);

  if (selectInputField.value == "") 
  {
    span.innerHTML = "*please select one";
    selectInputField.style.border= "1px solid red";
    return false; 
  }
  else
  {
      selectInputField.style.border= "";
      span.innerHTML = "";
      return true; 
  }
}

//validates the address
function validateAddress()
{
  var address = document.forms["add_staff_form"]["address"];
  var span = document.getElementById("address_span");

  if (address.value=="") 
  {
    span.innerHTML = "*address must be filled";
    address.style.border= "1px solid red";
    return false; 
  }
  else
  {
    address.style.border= "";
    span.innerHTML = "";
    return true; 
  }
}

//validates the date
function validateDate(form_name,object_name,span_name)
{
  var date = document.forms[form_name][object_name];
  var span = document.getElementById(span_name);

  if (date.value=="") 
  {
    span.innerHTML = "*date must be filled";
    date.style.border= "1px solid red";
    return false; 
  }
  else
  {
    date.style.border= "";
    span.innerHTML = "";
    return true; 
  }
}

//validates the email
function validateEmail()
{
  var email = document.forms["add_staff_form"]["email"];
  var span = document.getElementById("email_span");
  if (email.value=="") 
  {
    span.innerHTML = "*email must be filled";
    email.style.border= "1px solid red";
    return false; 
  }
  else
  {
    email.style.border= "";
    span.innerHTML = "";
    return true; 
  }
}

//validates the grade
function validateGrade()
{
  var grade = document.forms["add_staff_form"]["grade"];
  var span = document.getElementById("grade_span");
  if (grade.value=="") 
  {
    span.innerHTML = "*grade must be filled";
    grade.style.border= "1px solid red";
    return false; 
  }
  else
  {
    grade.style.border= "";
    span.innerHTML = "";
    return true; 
  }
}

//validates the Payroll Number
function validatePayrollNumber()
{
  var payrollNumber = document.forms["add_staff_form"]["payroll_number"];
  var span = document.getElementById("payroll_number_span");
  if (payrollNumber.value=="") 
  {
    span.innerHTML = "*Payroll Number must be filled";
    payrollNumber.style.border= "1px solid red";
    return false; 
  }
  else
  {
    payrollNumber.style.border= "";
    span.innerHTML = "";
    return true; 
  }
}
//validates the designation
function validateDesignation()
{
  var designation = document.forms["add_staff_form"]["designation"];
  var span = document.getElementById("designation_span");
  if (designation.value=="") 
  {
    span.innerHTML = "*designation must be filled";
    designation.style.border= "1px solid red";
    return false; 
  }
  else
  {
    designation.style.border= "";
    span.innerHTML = "";
    return true; 
  }
}
//validates the email
function validateTelephone()
{
  var telephone = document.forms["add_staff_form"]["telephone"];
  var span = document.getElementById("telephone_span");
  if (telephone.value=="") 
  {
    span.innerHTML = "*telephone must be filled";
    telephone.style.border= "1px solid red";
    return false; 
  }
  else
  {
    telephone.style.border= "";
    span.innerHTML = "";
    return true; 
  }
}
 //validates the password
function validatePassword()
{
	var password = document.forms["loginForm"]["password"];
	var span = document.getElementById('passwordSpan');
   if (password.value == "") 
   {
  	span.innerHTML = "*password must be filled";
  	password.style.border = "1px solid red";
  	return false; 
   }
   else
  {

  	//if password is not empty do the following
  	//checks the length of the password
  	/*if (password.value.length>=6 & password.value.length<13)
  	{

  		//if the password meets the length, check for an Uppercase letter, symbol, nummber, 
  		var pattern = new RegExp("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$");
  		if(pattern.test(password.value))
  		{
  			span.innerHTML = "";
  			password.style.border = "";
  			return true; 
  		}
  		else
  		{

  			span.innerHTML = "*password must have atleast a number, symbol and an uppercase letter";
  			password.style.border = "1px solid red";
  			return false; 
  		}
  	}
  	else
  	{
  		span.innerHTML = "*password length shoud be between 6 and 12 characters";
  		password.style.border = "1px solid red";
  		return false; 
  	}*/

  	span.innerHTML = "";
  	password.style.borderBottom = "";
  	return true; 
  	
   }
}

//validates the login form
function validateAddStaffForm()
{
  var firstNameValidation = validateName("add_staff_form","first_name","first_name_span");
  var middleNameValidation = validateName("add_staff_form","middle_name","middle_name_span");
  var lastNameValidation = validateName("add_staff_form","last_name","last_name_span");
  var addressValidation = validateAddress();
  var emailValidation = validateEmail();
  var telephoneValidation = validateTelephone();
  var designationValidation = validateDesignation();
  var qualificationValidation = validateSelectInputField("add_staff_form","qualification","qualification_span");
  var genderValidation = validateSelectInputField("add_staff_form","gender","gender_span");
  var unitValidation = validateSelectInputField("add_staff_form","unit","unit_span");
  var regionValidation = validateSelectInputField("add_staff_form","region","region_span");
  var otherSectionValidation = validateSelectInputField("add_staff_form","other_section","other_section_span");
  var gradeValidation = validateGrade();
  var payrollNumberValidation = validatePayrollNumber();
  var appointmentDateValidation = validateDate("add_staff_form","date_of_appointment","date_of_appointment_span");
  var dateOfBirthValidation = validateDate("add_staff_form","date_of_birth","date_of_birth_span");

  if (firstNameValidation & middleNameValidation & lastNameValidation & addressValidation
    & emailValidation & telephoneValidation & designationValidation & qualificationValidation
    & genderValidation & unitValidation & regionValidation & otherSectionValidation & gradeValidation
    & payrollNumberValidation & appointmentDateValidation & dateOfBirthValidation) 
  {

   //calls the email payroll check
    emailPayrollCheck();
  }
  return false;
}

//validates the unit Form
function validateAddUnitForm()
{
  var unitValidation = validateName("add_unit_form","unit","unit_span_name");
  if (unitValidation) 
  {
    addUnit();
  }
  return false;
}

//validates the region Form
function validateAddRegionForm()
{
  var regionValidation = validateName("add_region_form","region","region_span_name");
  if (regionValidation) 
  {
    addRegion();
  }
  return false;
}

//validates the qualification Form
function validateAddQualificationForm()
{
  var qualificationValidation = validateName("add_qualification_form","qualification","qualification_span_name");
  if (qualificationValidation) 
  {
    addQualification();
  }
  return false;
}

//validates the other section Form
function validateAddOtherSectionForm()
{
  var otherSectionValidation = validateName("add_other_section_form","other_section_name","other_section_span_name");
  if (otherSectionValidation) 
  {
    addOtherSection();
  }
  return false;
}

//validates the add user form
function validateAddUserForm()
{
  var usernameValidation = validateName("add_user_form","username","username_span");
  var roleValidation = validateSelectInputField("add_user_form","role","role_span");
  if (usernameValidation & roleValidation) 
  {
    addUser();
  }
  return false;
}

//function that validates the login form
function validateLoginForm()
{
  var usernameValidation = validateName("loginForm","username","usernameSpan");
  var passwordValidation = validatePassword();

  if (usernameValidation & passwordValidation)
   {
      //calls the funtion that logs in the user
      loginUser();
   }
   return false;
}

//validates the photo
function validatePhoto()
{
   //selects and previews the file
   var img =  document.getElementById('profile_picture');
   var filePicker=document.getElementById("picture_picker");
   var profilePictureSpan=document.getElementById("profile_pic_span");

   //getting file properties
   if (filePicker.value=="") 
   {
    return false;
   }
   var fileExtension = filePicker.value.split('.').pop().toLowerCase();
   var fileSize = filePicker.files[0].size;

   //checks for the image extension
   if (fileExtension =="jpeg" || fileExtension =="jpg" || fileExtension =="png" || fileExtension =="gif")
    {
      //checks for the file size
      if (fileSize<=20000) 
      {
        var file= filePicker.files[0];
        img.src = window.URL.createObjectURL(file);
        profilePictureSpan.innerHTML="";
        return true;
      }
      else
      {
         //file extension not supported
         profilePictureSpan.innerHTML="File size too large";
      }
    }
    else
    {
      //file extension not supported
      profilePictureSpan.innerHTML="File format not supported";
    }
}
//********************************************************************
//                          MANAGE UNIT
//********************************************************************
//adds a unit to the system
function addUnit()
{
  //collects the user information
  var unit= document.forms["add_unit_form"]["unit"].value;

  //sets the url
    url= "controllers/unitController.php?unit="+unit+"&add_unit=yes";

    //calls the ajax function
    ajax(url, getAddResponse);
}

//gets unit
function getUnit()
{
  //sets the url
  url="controllers/dataController.php?unit=all";

  //calls the ajax function
  ajax(url, printData);
}

//prints data
function printData(xhttp)
{
  var resultSet = JSON.parse(xhttp.responseText);
  if (resultSet[0]=="qualification") 
  {
    var select = document.getElementById("qualification");
  }
  else if (resultSet[0]=="region")
  {
    var select = document.getElementById("region");
  }
  else if (resultSet[0]=="unit")
  {
    var select = document.getElementById("unit");
  }
  else if (resultSet[0]=="other_section")
  {
    var select = document.getElementById("other_section");
  }
  else if (resultSet[0]=="role")
  {
    var select = document.getElementById("role");
  }

  for (var i =1; i<resultSet.length; i++)
  {
    var row = resultSet[i];
    var option = document.createElement("option");
    option.innerHTML=row["name"];
    option.value=row["id"];
    select.appendChild(option);
  }
}
//********************************************************************
//                          MANAGE REGION
//********************************************************************

//gets unit
function getRegion()
{
  //sets the url
  url="controllers/dataController.php?region=all";

  //calls the ajax function
  ajax(url, printData);
}

//adds a unit to the system
function addRegion()
{
  //collects the user information
  var region= document.forms["add_region_form"]["region"].value;

  //sets the url
    url= "controllers/regionController.php?region="+region+"&add_region=yes";

    //calls the ajax function
    ajax(url, getAddResponse);
}
//********************************************************************
//                          MANAGE QUALIFICATION
//********************************************************************

//get qualification
function getQualification()
{
  //sets the url
  url="controllers/dataController.php?qualification=all";

  //calls the ajax function
  ajax(url, printData);
}

//adds a qualification to the system
function addQualification()
{
  //collects the user information
  var qualification= document.forms["add_qualification_form"]["qualification"].value;

  //sets the url
    url= "controllers/qualificationController.php?qualification="+qualification+"&add_qualification=yes";

    //calls the ajax function
    ajax(url, getAddResponse);
}
//********************************************************************
//                          MANAGE OTHER SECTION
//********************************************************************

//gets other section
function getOtherSection()
{
  //sets the url
  url="controllers/dataController.php?other_section=all";

  //calls the ajax function
  ajax(url, printData);
}

//adds a unit to the system
function addOtherSection()
{
  //collects the user information
  var otherSection= document.forms["add_other_section_form"]["other_section_name"].value;

  //sets the url
    url= "controllers/otherSectionController.php?other_section="+otherSection+"&add_other_section=yes";

    //calls the ajax function
    ajax(url, getAddResponse);
}
//********************************************************************
//                          MANAGE STAFF
//********************************************************************

//adds a staff to the systme
function addStaff()
{
   //collects the form data
    var firstName = document.forms["add_staff_form"]["first_name"].value;
    var middleName = document.forms["add_staff_form"]["middle_name"].value;
    var lastName = document.forms["add_staff_form"]["last_name"].value;
    var dateOfBirth = document.forms["add_staff_form"]["date_of_birth"].value;
    var gender = document.forms["add_staff_form"]["gender"].value;
    var designation = document.forms["add_staff_form"]["designation"].value;
    var address = document.forms["add_staff_form"]["address"].value;
    var email = document.forms["add_staff_form"]["email"].value;
    var telephone = document.forms["add_staff_form"]["telephone"].value;
    var dateOfAppointment = document.forms["add_staff_form"]["date_of_appointment"].value;
    var payrollNumber = document.forms["add_staff_form"]["payroll_number"].value;
    var grade = document.forms["add_staff_form"]["grade"].value;
    var qualification = document.forms["add_staff_form"]["qualification"].value;
    var region = document.forms["add_staff_form"]["region"].value;
    var unit = document.forms["add_staff_form"]["unit"].value;
    var otherSection = document.forms["add_staff_form"]["other_section"].value;
    var profilePic=getStaffProfilePic();
    
    //sets the url
    url= "controllers/staffController.php?first_name="
        +firstName+"&middle_name="+middleName+"&last_name="+lastName+"&date_of_birth="
        +dateOfBirth+"&gender="+gender+"&designation="+designation+"&address="+address
        +"&email="+email+"&telephone="+telephone+"&date_of_appointment="+dateOfAppointment
        +"&payroll_number="+payrollNumber+"&grade="+grade+"&qualification="+qualification
        +"&region="+region+"&unit="+unit+"&other_section="+otherSection+"&profile_pic="+profilePic
        +"&add_staff=yes";

    //calls the ajax function
    ajax(url, printAddStaffResponse);
}

//prints addstaff response
function printAddStaffResponse(xhttp)
{
  var response = xhttp.responseText;

  if (response=="staff_added") 
  {
    //triggers the moadal
    $('#staff_modal').modal({
      backdrop: 'static', 
      keyboard: false
    }) 
  }
  else if(response=="pic")
  {
     document.getElementById("email_span").innerHTML="pic added";
  }
}

//get staff info
function getStaffInfo()
{
  //sets the url
  url="controllers/staffController.php?staff_info=all";

  //calls the ajax function
  ajax(url, printStaffInfo);
}

//prints staff info
function printStaffInfo(xhttp)
{
  var rows = JSON.parse(xhttp.responseText);
  var staffList = document.getElementById("staff_list");
  for (var i =0; i<rows.length; i++)
  {
    var record = rows[i];
    //creates a staff card
    var staffCard= document.createElement('div');
    staffCard.setAttribute("id","staff_card");

    //creates a row
    var row= document.createElement('div');
    row.setAttribute("class","row");

    //creates column
    var column= document.createElement('div');
    column.setAttribute("class","col-md-12");

    //creates staff info container
    var staffInfoContainer= document.createElement('div');
    staffInfoContainer.setAttribute("id","staff_info_container");

    //creates staff pic container
    var staffPicContainer= document.createElement('div');
    staffPicContainer.setAttribute("id","staff_pic_container");
    
    //creates the ul element
    var ul = document.createElement('ul');
    //sets the id to the ul element
    ul.setAttribute("id","staff_info");

    // Creates the li element
    var first_name_li = document.createElement('li');
    //creates the span element
    var span = document.createElement('span');
    //sets the class to the span element
    span.setAttribute("class","label");
    //sets the value of the span
    span.innerHTML="First Name: ";
    first_name_li.appendChild(span);
    //creates the span element
    span = document.createElement('span');
    //sets the class to the span element
    span.setAttribute("class","value");
    span.setAttribute("id","staff_first_name");
    //sets the value of the span
    span.innerHTML=record["first_name"];
    first_name_li.appendChild(span);


    // Creates the li element
    middle_name_li = document.createElement('li');
    //creates the span element
    span = document.createElement('span');
    //sets the class to the span element
    span.setAttribute("class","label");
    //sets the value of the span
    span.innerHTML="Middle Name: ";
    middle_name_li.appendChild(span);
    //creates the span element
    span = document.createElement('span');
    //sets the class to the span element
    span.setAttribute("class","value");
    span.setAttribute("id","staff_middle_name");
    //sets the value of the span
    span.innerHTML=record["middle_name"];
    middle_name_li.appendChild(span);

    // Creates the li element
    last_name_li = document.createElement('li');
    //creates the span element
    span = document.createElement('span');
    //sets the class to the span element
    span.setAttribute("class","label");
    //sets the value of the span
    span.innerHTML="Last Name: ";
    last_name_li.appendChild(span);
    //creates the span element
    span = document.createElement('span');
    //sets the class to the span element
    span.setAttribute("class","value");
    span.setAttribute("id","staff_last_name");
    //sets the value of the span
    span.innerHTML=record["last_name"];
    last_name_li.appendChild(span);

    // Creates the li element
    designation_li = document.createElement('li');
    //creates the span element
    span = document.createElement('span');
    //sets the class to the span element
    span.setAttribute("class","label");
    //sets the value of the span
    span.innerHTML="Designation: ";
    designation_li.appendChild(span);
    //creates the span element
    span = document.createElement('span');
    //sets the class to the span element
    span.setAttribute("class","value");
    span.setAttribute("id","designation");
    //sets the value of the span
    span.innerHTML=record["designation"];
    designation_li.appendChild(span);

    // Creates the li element
    gender_li= document.createElement('li');
    //creates the span element
    span = document.createElement('span');
    //sets the class to the span element
    span.setAttribute("class","label");
    //sets the value of the span
    span.innerHTML="Gender: ";
    gender_li.appendChild(span);
    //creates the span element
    span = document.createElement('span');
    //sets the class to the span element
    span.setAttribute("class","value");
    span.setAttribute("id","gender");
    //sets the value of the span
    span.innerHTML=record["gender"];
    gender_li.appendChild(span);

    //creates an image
    var image= document.createElement('img');
    //sets the attribute of the image
    image.setAttribute("src","img/placeHolder.JPG");
    image.setAttribute("class","img-circle img-responsive");
    image.setAttribute("width","90");
    image.setAttribute("height","90");

    ul.appendChild(first_name_li);
    ul.appendChild(middle_name_li);
    ul.appendChild(last_name_li);
    ul.appendChild(designation_li);
    ul.appendChild(gender_li);

    staffInfoContainer.appendChild(ul);
    staffPicContainer.appendChild(image);
    column.appendChild(staffInfoContainer);
    column.appendChild(staffPicContainer);
    row.appendChild(column);
    staffCard.appendChild(row);
    staffList.appendChild(staffCard);
  }
}

//gets email and payroll
function emailPayrollCheck()
{
  //collects the email and payroll
  var email = document.forms["add_staff_form"]["email"].value;
  var payrollNumber = document.forms["add_staff_form"]["payroll_number"].value;

  //sets the url
  url= "controllers/staffController.php?email="+email+"&payroll_number="+payrollNumber
  +"&getEmailAndPayroll=yes";

  //calls the ajax function
  ajax(url, emailPayrollResponse);
}

//handles the email and payroll response
function emailPayrollResponse(xhttp)
{
  var count =0;
  var array = JSON.parse(xhttp.responseText);
   if (array[0]=="email_exists")
    {
      var email = document.forms["add_staff_form"]["email"];
      var span = document.getElementById("email_span");

      span.innerHTML="*email exists."
      email.style.border="1px solid red";
    }
    else{count++;}

    if (array[1]=="payroll_number_exists")
    {
      var payrollNumber = document.forms["add_staff_form"]["payroll_number"];
      var span = document.getElementById("payroll_number_span");

      span.innerHTML="*payroll number exists."
      payrollNumber.style.border="1px solid red";
    }else{count++;}

    if (count==2) 
    {
      //call the add staff funtion
      addStaff();
    }
}



//handles response from the server after add a user,unit,region,section and qualification
function getAddResponse(xhttp)
{
  var response = xhttp.responseText;

  if (response=="unit_added") 
  {
    document.getElementById("message").innerHTML="Unit Added Successfully";
    triggerModal();
    document.getElementById("modalBtn").onclick=resetUnitForm;
  }
  else if(response=="region_added")
  {
     document.getElementById("message").innerHTML="Region Added Successfully";
     triggerModal();
     document.getElementById("modalBtn").onclick=resetRegionForm;
  }
  else if(response=="qualification_added")
  {
     document.getElementById("message").innerHTML="Qualification Added Successfully";
     triggerModal();
     document.getElementById("modalBtn").onclick=resetQualificationForm;
  }
  else if(response=="user_added")
  {
     document.getElementById("message").innerHTML="User Added Successfully";
     triggerModal();
     document.getElementById("modalBtn").onclick=resetUserForm;
  }
  else if(response=="other_section_added")
  {
     document.getElementById("message").innerHTML="Other section Added Successfully";
     triggerModal();
     document.getElementById("modalBtn").onclick=resetOtherSectionForm;
  }
  else if(response=="failure")
  {
     document.getElementById("unit_span_name").innerHTML="unit Not added";
  }
}

//*****************************************************
//                MANAGING RESETTING THE FORMS
//*****************************************************
//function that resets the add staff form
function resetUnitForm()
{
  //resets the form
  document.getElementById("add_unit_form").reset();
}

//function that resets the add staff form
function resetRegionForm()
{
  //resets the form
  document.getElementById("add_region_form").reset();
}
//function that resets the add staff form
function resetQualificationForm()
{
  //resets the form
  document.getElementById("add_qualification_form").reset();
}
//function that resets the add staff form
function resetUserForm()
{
  //resets the form
  document.getElementById("add_user_form").reset();
}
//function that resets the add staff form
function resetOtherSectionForm()
{
  //resets the form
  document.getElementById("add_other_section_form").reset();
}
//function that resets the add staff form
function resetStaffForm()
{
  //resets the form
  document.getElementById("add_staff_form").reset();
}
//*************************************************************
//                    MANAGING USER
//*************************************************************
//logs in the user
function loginUser()
{
  //collects the user credentials
  var username = document.forms["loginForm"]["username"].value;
  var password = document.forms["loginForm"]["password"].value;

  //sets the url for the ajax call
  url = "../unsecure/unsecureProcessing.php?username="+username+"&password="+password+"&login=yes";

  //calls the ajax function
  ajax(url, printLoginUserResponse);

}

//adds a user to the system
function addUser()
{
  //collects the user information
  var username= document.forms["add_user_form"]["username"].value;
  var role = document.forms["add_user_form"]["role"].value;

  //sets the url
    url= "controllers/userController.php?username="+username+"&roleId="+role+"&add_user=yes";

    //calls the ajax function
    ajax(url, getAddResponse);
}

//prints login response
function printLoginUserResponse(xhttp)
{
  var response = xhttp.responseText;
  if (response=="wrong username") 
  {
    document.getElementById("usernameSpan").innerHTML = response;
    document.getElementById("password").value ="";
  }
  else if(response=="wrong password")
  {
    document.getElementById("passwordSpan").innerHTML = response;
    document.getElementById("password").value ="";
  }
  else if (response=="connection_error" || response=="query_error")
  {
    document.getElementById("errorSpan").innerHTML = response;
  }
  else if (response=="success")
  {
    window.location.href = "../";
  }
}

//gets user role
function getRole()
{
  //sets the url
  url="controllers/dataController.php?role=all";

  //calls the ajax function
  ajax(url, printData);
}
//***************************************************
//                AJAX CALLS
//***************************************************
//ajax function
function ajax(url, cFunction)
{
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
     {
      if (this.readyState == 4 && this.status == 200) 
      {
        cFunction(this);
      }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

//function that triggers the modal
function triggerModal()
{
  //triggers the moadal
    $('#staff_modal').modal({
      backdrop: 'static', 
      keyboard: false
    }) 
}

//loads the unit, qualification, region and other section
function loadData()
{
  getQualification();
  getUnit();
  getRegion();
  getOtherSection();
  getRole();
}


//returns profile picture
function getStaffProfilePic()
{
   var file="file_not_selected";
    //validates the picture
    if(validatePhoto())
    {
      var filePicker=document.getElementById("picture_picker");
      file= filePicker.files[0];

      // you just add this
      var formData = new FormData();
      return formData.append('image', file); 
    }
    return file;
}

//sd;fkg';ldgk;dskg;dkg
function trypic()
{

}