<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
  <body onload="loadData(),getStaffInfo()">
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Change Username</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Change Password</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>

<div class="container">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#staff_list" aria-controls="home" role="tab" data-toggle="tab" onclick="getStaffInfo()">Staff List</a></li>

    <li role="presentation"><a href="#add_staff" aria-controls="profile" role="tab" data-toggle="tab">Add Staff</a></li>

    <li role="presentation"><a href="#add_user" aria-controls="messages" role="tab" data-toggle="tab">Add User</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="staff_list">
    </div>
    <div role="tabpanel" class="tab-pane" id="add_staff" class="active">
      <div></div><br>
      <form name="add_staff_form" onsubmit="return validateAddStaffForm()" action="" method="GET" id="add_staff_form">
        <div class="row">
          <div class="col-md-10">
              <div class="row">
                <div class="form-group col-md-4">
                  <div id="test1"></div><div id="test2"></div>
                  <label>First Name</label><br>
                  <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
                  <span id="first_name_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Middle Name</label><br>
                  <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" name="middle_name">
                  <span id="middle_name_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Last Name</label><br>
                  <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
                  <span id="last_name_span" style="color: red;"></span>
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
                  <span id="address_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Email</label><br>
                  <input type="Email" class="form-control" id="email" placeholder="email">
                  <span id="email_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Telephone</label><br>
                  <input type="text" class="form-control" id="telephone" placeholder="telephone">
                  <span id="telephone_span" style="color: red;"></span>
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
                  <input type="text" class="form-control" id="payroll_number" placeholder="Payroll Number">
                  <span id="payroll_number_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Grade</label><br>
                  <input type="text" class="form-control" id="grade" placeholder="grade">
                  <span id="grade_span" style="color: red;"></span>
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
                    <option>WCR</option>
                  </select>
                  <span id="region_span" style="color: red;"></span>
                </div>
                <div class="form-group col-md-4">
                  <label>Unit</label><br>
                  <select id="unit" class="form-control">
                    <option value="">Select...</option>
                    <option>Extension</option>
                  </select>
                  <span id="unit_span" style="color: red;"></span>
                </div>
              </div><br>
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Other Section</label><br>
                  <select id="other_section" class="form-control">
                    <option value="">Select..</option>
                    <option>accounts</option>
                  </select>
                  <span id="other_section_span" style="color: red;"></span>
                </div>
              </div><br>
              <div class="row">
                <div id="btnHolder">
                    <button type="reset" class="btn btn-danger btn-lg staff_btn">Cancel</button>
                     <button type="submit" class="btn btn-primary btn-lg staff_btn">Save</button>
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
    <div role="tabpanel" class="tab-pane" id="add_user">
      asdfsadf
    </div>
  </div>
</div>


  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="staff_modal">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <p>Staff Successfully Added.</p>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="resetAddStaffForm()">OK</button>
      </div>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>