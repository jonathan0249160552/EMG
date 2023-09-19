<!DOCTYPE html>
<html>

<head>
  <title>Profile Management Page</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <?php require 'nav_bar.php' ?>
 
  <div class="container" style="margin-top:100px">
    <!-- <h1 class="text-center">Profile Management</h1> -->

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active tab1" href="#view-profile">
          <i class="fas fa-user"></i> View Profile
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link tab2" href="#change-password">
          <i class="fas fa-lock"></i> Change Password
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link tab3" href="#edit-profile">
          <i class="fas fa-edit"></i> Edit Profile
        </a>
      </li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane  show active border p-3" id="tab1">
        <h3>View Profile</h3> <br>
        <form>
          <div class="form-group">
            <label for="name">
              <i class="fas fa-user"></i> Name
            </label>
            <input type="text" class="form-control" id="name" value="<?= $c_name ?>" readonly>
          </div>
          <div class="form-group">
            <label for="email">
              <i class="fas fa-envelope"></i> Phone
            </label>
            <input type="email" class="form-control" id="email" value="<?= $c_phone ?>" readonly>
          </div>
          <div class="form-group">
            <label for="phone">
              <i class="fas fa-phone"></i> Emergency Contact
            </label>
            <input type="tel" class="form-control" id="phone" value="<?= $c_contact ?>" readonly>
          </div>

          <div class="form-group">
            <label for="password">
              <i class="fas fa-lock"></i> Residence
            </label>
            <input type="text" class="form-control" id="residence" placeholder="<?= $c_residence ?>" readonly>
          </div>

          <div class="form-group">
            <label for="password">
              <i class="fas fa-lock"></i> Gender
            </label>
            <input type="text" class="form-control" id="residence" placeholder="<?= $c_gender ?>" readonly>
          </div>

        </form>

      </div>
      <div class="tab-pane  border p-3" id="tab2">
        <h3>Change Password</h3> <br>
        <form action="#" method="post" id="change-pass-form">
        <div class="form-group">
          <label for="password">
            <i class="fas fa-lock"></i> Current Password
          </label>
          <input type="password" class="form-control" id="curpass" name="curpass" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
          <label for="password">
            <i class="fas fa-lock"></i> New password
          </label>
          <input type="password" class="form-control" id="newpass" name="newpass" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
          <label for="password">
            <i class="fas fa-lock"></i> Confirm password
          </label>
          <input type="password" class="form-control" id="cnewpass" name="cnewpass" placeholder="Enter your password" required>
        </div>
        <input type="hidden" name="c_pass" value="<?=$c_pass?>">
        <input type="hidden" name="cid" value="<?=$cid?>">
        <div id="changepassError"></div>
        <div id="changepassAlert"></div>
        <button type="submit" id="changePassBtn" class="btn btn-primary">
          <i class="fas fa-save"></i> Reset Password
        </button>
        </form>
      </div>
      <div class="tab-pane  border p-3" id="tab3">
        <h3>Edit Profile</h3>
        <form  action="#" method="post" id="profileUpdate">
        <div class="form-group">
              <label for="name">
                <i class="fas fa-user"></i> User name
              </label>
              <input type="text" class="form-control" name="username"  value="<?= $cuser_name ?>" required>
            </div>
            <div class="form-group">
              <label for="name">
                <i class="fas fa-user"></i> Name
              </label>
              <input type="text" class="form-control" name="name"  value="<?= $c_name ?>" required>
            </div>
            <div class="form-group">
              <label for="email">
                <i class="fas fa-envelope"></i> Phone
              </label>
              <input type="number" class="form-control" name="phone" value="<?= $c_phone ?>" required>
            </div>
            <div class="form-group">
              <label for="phone">
                <i class="fas fa-phone"></i> Emergency Contact
              </label>
              <input type="tel" class="form-control" name="contact"  value="<?= $c_contact ?>" required>
            </div>

            <div class="form-group">
              <label for="password">
                <i class="fas fa-lock"></i> Residence
              </label>
              <input type="text" class="form-control" name="residence"  value="<?= $c_residence ?>" required>
            </div>

            <div class="form-group">
              <label for="password">
                <i class="fas fa-lock"></i> Gender
              </label>
            <select name="gender" id="" required>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            </div>
            <input type="hidden" name="cid" value="<?=$cid?>">
            <input type="submit" value="Update" class="submitBtn btn btn-success" >
          </form>
      </div>
    </div>
  </div>


  <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
  <script>
    $('.tab1').click(function() {
      $('#tab1').fadeIn();
      $('#tab2').hide();
      $('#tab3').hide();


    })

    $('.tab2').click(function() {
      $('#tab2').fadeIn();
      $('#tab1').hide();
      $('#tab3').hide();


    })

    $('.tab3').click(function() {
      $('#tab3').fadeIn();
      $('#tab2').hide();
      $('#tab1').hide();


    })
  </script>
      <script>
        $(".submitBtn").click(function(e) {
            if ($("#profileUpdate")[0].checkValidity()) {
                e.preventDefault();

                $(".submitBtn").val('Please Wait...');
                $.ajax({
                    url: 'assets/php/submit_action.php',
                    method: 'post',
                    data: $("#profileUpdate").serialize() + '&action=updateProfile',
                    success: function(response) {
                      alert("Profile Updated")
                      $(".submitBtn").val('Update');
                      console.log(response);
                    }
                });
            }
        });

        $("#changePassBtn").click(function(e) {
                    if ($("#change-pass-form")[0].checkValidity()) {
                        e.preventDefault();
                        $("#changePassBtn").val('Please Wait...');
                        if ($("#newpass").val() != $("#cnewpass").val()) {
                            $("#changepassError").text('* Password did not match!');
                            $("#changePassBtn").val('Change Password');
                        } else {
                            $.ajax({
                                url: 'assets/php/submit_action.php',
                                method: 'post',
                                data: $("#change-pass-form").serialize() + '&action=change_pass',
                                success: function(response) {
                                    $("#changepassAlert").html(response);
                                    $("#changePassBtn").val('Change Password');
                                    $("#changepassError").text('');
                                    $("#change-pass-form")[0].reset();
                                    // notifyMe();
                                }
                            });
                        }
                    }
                });
    </script>
</body>

</html>