<!DOCTYPE html>
<html>

<head>
  <title>Profile Management Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php require 'nav.php'?>
  <div class="container" style="margin-top:100px">
    <!-- <h1 class="text-center">Profile Management</h1> -->

    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#view-profile">
          <i class="fas fa-user"></i> View Profile
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#change-password">
          <i class="fas fa-lock"></i> Change Password
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#edit-profile">
          <i class="fas fa-edit"></i> Edit Profile
        </a>
      </li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane fade show active border p-3" id="view-profile">
        <h3>View Profile</h3> <br>
        <form>
          <div class="form-group">
            <label for="name">
              <i class="fas fa-user"></i> Name
            </label>
            <input type="text" class="form-control" id="name" value="Jonathan Astsiegbi" readonly>
          </div>
          <div class="form-group">
            <label for="email">
              <i class="fas fa-envelope"></i> Email
            </label>
            <input type="email" class="form-control" id="email" value="email@gmail.com" readonly>
          </div>
          <div class="form-group">
            <label for="phone">
              <i class="fas fa-phone"></i> Phone
            </label>
            <input type="tel" class="form-control" id="phone" value="02158962335" readonly>
          </div>
          <div class="form-group">
            <label for="address">
              <i class="fas fa-map-marker-alt"></i> Address
            </label>
            <input type="text" class="form-control" id="address" value="Fiapre P o box 77" readonly>
          </div>
          <div class="form-group">
            <label for="password">
              <i class="fas fa-lock"></i> Residence
            </label>
            <input type="text" class="form-control" id="residence" placeholder="Fiapre Frims" readonly>
          </div>
         
        </form>
     
      </div>
      <div class="tab-pane fade border p-3" id="change-password">
        <h3>Change Password</h3> <br>
        <div class="form-group">
          <label for="password">
            <i class="fas fa-lock"></i> Current Password
          </label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <div class="form-group">
          <label for="password">
            <i class="fas fa-lock"></i> New password
          </label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <div class="form-group">
          <label for="password">
            <i class="fas fa-lock"></i> Confirm password 
          </label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-save"></i> Reset Password
        </button>
      </div>
      <div class="tab-pane fade border p-3" id="edit-profile">
        <h3>Edit Profile</h3>
        <form>
          <div class="form-group">
            <label for="name">
              <i class="fas fa-user"></i> Name
            </label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">
              <i class="fas fa-envelope"></i> Email
            </label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="phone">
              <i class="fas fa-phone"></i> Phone
            </label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
          </div>
          <div class="form-group">
            <label for="address">
              <i class="fas fa-map-marker-alt"></i> Address
            </label>
            <input type="text" class="form-control" id="address" placeholder="Enter your address">
          </div>
          <div class="form-group">
            <label for="password">
              <i class="fas fa-lock"></i> Password
            </label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
          </div>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Save Changes
          </button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>