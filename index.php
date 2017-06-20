<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Department of Agriculture</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="checkUserLogin(),getUserName(),getHeader(),getStaffInfo()">
    <div class="container-fluid">
      <div class="row">
        <script type="text/javascript" src="layout/navBar.js"></script>
    </div>
</div>

<div class="container">
  <div id="listContainer"></div>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="staff_list">
    <div></div><br>
    <div class="row">
    <div class="col-md-12">
    <div id="searchForm" >
      <form name="searchForm" action="" method="GET" onsubmit="return validateSearchForm()">
        <div class="col-md-3">
          <input type="text" class="form-control" id="payroll_number" placeholder="payroll Number" name="payroll_number">
          <span id="payroll_number_span" name="payroll_number_span" style="color: red;"></span>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
          <span id="first_name_span" name="first_name_span" style="color: red;"></span>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
          <span id="last_name_span" name="last_name_span" style="color: red;"></span>
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-primary form-control">Search</button>
        </div>
      </form>
      </div>
      </div>
        <div id="error_span" style="color: red; text-align: center;"></div>
    </div><br>
    <span id="searchResult"></span>

    <!-- staff list -->
    <div id="staffInfo"></div>
    </div>

    <div role="tabpanel" class="tab-pane" id="add_staff">
      <div></div><br>
      <form name="add_staff_form" onsubmit="return validateAddStaffForm()" action="" method="GET" id="add_staff_form">
        <div class="row">
          <div class="col-md-10">
              <div class="row">
                <div class="form-group col-md-4">
                  <label>First Name</label><br>
                  <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
                  <span id="add_staff_fname_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Middle Name</label><br>
                  <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" name="middle_name">
                  <span id="add_staff_mname_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Last Name</label><br>
                  <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
                  <span id="add_staff_lname_span" style="color: red;"></span>
                </div>
              </div><br>
              <div class="row">
                <div class="form-group col-md-4">
                  <label>date of birth</label><br>
                  <input type="date" class="form-control" id="date_of_birth">
                  <span id="date_of_birth_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Gender</label><br>
                  <select id="gender" class="form-control">
                    <option value="">Select..</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                  </select>
                  <span id="gender_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Designation</label><br>
                  <input type="text" class="form-control" id="designation" placeholder="designation">
                  <span id="designation_span" style="color: red;"></span>
                </div>
              </div><br>
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Address</label><br>
                  <input type="text" class="form-control" id="address" placeholder="address">
                  <span id="add_staff_address_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Email</label><br>
                  <input type="Email" class="form-control" id="email" placeholder="email" name="email">
                  <span id="add_staff_email_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Telephone</label><br>
                  <input type="text" class="form-control" id="telephone" placeholder="telephone" name="telephone">
                  <span id="add_staff_telephone_span" style="color: red;"></span>
                </div>
              </div><br>
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Date of Appointment</label><br>
                  <input type="date" class="form-control" id="date_of_appointment">
                  <span id="date_of_appointment_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Paroll Number</label><br>
                  <input type="text" class="form-control" id="payroll_number" placeholder="Payroll Number" name="payroll_number">
                  <span id="add_staff_payroll_span" name="payroll_number_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Grade</label><br>
                  <input type="text" class="form-control" id="grade" placeholder="grade">
                  <span id="add_staff_grade_span" style="color: red;"></span>
                </div>
              </div><br>
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Qualification</label><br>
                  <select id="qualification" class="form-control">
                    <option value="">Select...</option>
                  </select>
                  <span id="qualification_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Region</label><br>
                  <select id="region" class="form-control">
                    <option value="">Select..</option>
                  </select>
                  <span id="region_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Unit</label><br>
                  <select id="unit" class="form-control">
                    <option value="">Select...</option>
                  </select>
                  <span id="unit_span" style="color: red;"></span>
                </div>
              </div><br>
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Other Section</label><br>
                  <select id="other_section" class="form-control">
                    <option value="">Select..</option>
                  </select>
                  <span id="other_section_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label></label><br>
                  <button type="reset" class="btn btn-danger btn-lg form-control">Cancel</button>
                </div>
                <div class="form-group col-md-4">
                  <label></label><br>
                  <button type="submit" class="btn btn-primary btn-lg form-control">Save</button>
                </div>
              </div>
          </div>
          <div class="col-md-2">
            <div id="profile_pic_section">
              <img src="img/placeHolder.JPG" alt="" class="img-circle" width="175" height="175" id="profile_picture">
              <span id="profile_pic_span" style="color: red;"></span>
              <input type="file" name="image" class="form-control" id="picture_picker" onchange="validatePhoto()">
            </div>
          </div>
        </div>
    </form>
    </div>

    <!-- settings tab pane -->
    <div role="tabpanel" class="tab-pane" id="settings">
      <div></div><br>
    <div class="row">
     <div class="panel panel-success col-md-4">
      <div class="panel-heading">Change Password</div>
      <div class="panel-body">
        <form name="change_password_form" onsubmit="return validateChangePasswordForm()" action="" method="GET" id="change_password_form">
          <div class="form-group">
            <label>Current Password</label>
            <input type="password" class="form-control" id="current_password" placeholder="Current Password" name="current_password">
            <span id="current_password_span" style="color: red;"></span>
          </div>
          <div class="form-group">
            <label>New Password</label>
            <input type="password" class="form-control" id="new_password" placeholder="New Password" name="new_password">
            <span id="new_password_span" style="color: red;"></span>
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
            <span id="confirm_password_span" style="color: red;"></span>
          </div>
            <span id="passwordsNotEqualSpan" style="color: red;"></span>
            <button type="submit" class="btn btn-success form-control">Save</button> 
        </form>
      </div>
    </div>
    <div class="panel panel-success col-md-4">
      <div class="panel-heading">Change Username</div>
      <div class="panel-body">
        <form name="change_username_form" onsubmit="return validateChangeUsernameForm()" action="" method="GET" id="change_username_form">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            <span id="change_username_span" style="color: red;"></span>
          </div>
            <button type="submit" class="btn btn-success form-control">Add</button> 
        </form>
      </div>
    </div>
    </div>
    </div>

     <!-- setup tab pane -->
    <div role="tabpanel" class="tab-pane" id="dbSetup">
    <div></div><br>
    <div class="row">
    <div class="panel panel-success col-md-4">
      <div class="panel-heading">Add User</div>
      <div class="panel-body">
        <form name="add_user_form" onsubmit="return validateAddUserForm()" action="" method="GET" id="add_user_form">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            <span id="username_span" style="color: red;"></span>
          </div>
          <div class="form-group">
            <label>Role</label><br>
              <select id="role" class="form-control">
                <option value="">Select..</option>
              </select>
              <span id="role_span" style="color: red;"></span>
          </div>
            <button type="submit" class="btn btn-success form-control" >Add</button> 
        </form>
      </div>
    </div>
     <div class="panel panel-success col-md-4">
      <div class="panel-heading">Add Unit</div>
      <div class="panel-body">
        <form name="add_unit_form" onsubmit="return validateAddUnitForm()" action="" method="GET" id="add_unit_form">
          <div class="form-group">
            <label>Unit Name</label>
            <input type="text" class="form-control" id="unit" placeholder="Unit" name="unit">
            <span id="unit_span_name" style="color: red;"></span>
          </div>
            <button type="submit" class="btn btn-success form-control">Add</button> 
        </form>
      </div>
    </div>
    <div class="panel panel-success col-md-4">
      <div class="panel-heading">Add Region</div>
      <div class="panel-body">
        <form name="add_region_form" onsubmit="return validateAddRegionForm()" action="" method="GET" id="add_region_form">
          <div class="form-group">
            <label>Region Name</label>
            <input type="text" class="form-control" id="region" placeholder="Region" name="region">
            <span id="region_span_name" style="color: red;"></span>
          </div>
            <button type="submit" class="btn btn-success form-control">Add</button> 
        </form>
      </div>
    </div>
    </div>
    <!-- second row -->
    <div class="row">
      <div class="panel panel-success col-md-4">
      <div class="panel-heading">Add Qualification</div>
      <div class="panel-body">
        <form name="add_qualification_form" onsubmit="return validateAddQualificationForm()" action="" method="GET" id="add_qualification_form">
          <div class="form-group">
            <label>Quaification Name</label>
            <input type="text" class="form-control" id="qualification" placeholder="Quaification" name="qualification">
            <span id="qualification_span_name" style="color: red;"></span>
          </div>
            <button type="submit" class="btn btn-success form-control">Add</button> 
        </form>
      </div>
    </div>
      <div class="panel panel-success col-md-4">
      <div class="panel-heading">Add Other Section</div>
      <div class="panel-body">
        <form name="add_other_section_form" onsubmit="return validateAddOtherSectionForm()" action="" method="GET" id="add_other_section_form">
          <div class="form-group">
            <label>Section Name</label>
            <input type="text" class="form-control" id="other_section_id" placeholder="Other Section" name="other_section_name">
            <span id="other_section_span_name" style="color: red;"></span>
          </div>
            <button type="submit" class="btn btn-success form-control">Add</button> 
        </form>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>


  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="staff_modal">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <p id="message"></p>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="modalBtn">OK</button>
      </div>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="layout/header.js"></script>
  </body>
</html>