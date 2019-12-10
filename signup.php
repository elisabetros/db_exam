<?php
$sTitle = ' | Signup';
$sCurrentPage = 'profile';
require_once(__DIR__ . '/components/header.php');
require_once(__DIR__ . '/components/functions.php');
if (!isset($_SESSION)) {
  session_start();
}


if ($_SESSION) {
  // HERE WE HAVE TO HAVE THE ID IN THE SESSION AND USE IT IN THE LOCATION HREF - SAME FOR LOGIN
  header("location:profile.php");
}

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <script src="https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css" rel="stylesheet" />

</head>

<body>

  <div class="containerSignup section-one grid grid-two">
    <div class="loginWelcome mh-medium mv-small">
      <div class="signupBg"></div>
      <h2>Please sign up</h2>


      <form id="signupForm" class="grid grid-one" method="POST">
        <h4 class="mt-small">Personal Information</h4>
        <div class="frmLine"></div>

        <label class="grid grid-one" for="name">First Name<input required minlength="2" maxlength="20" type="text" data-type="string" name="inputName" placeholder="First name">
          <div class="errorMessage">Name must be more than 1 and less than 20 letters</div>
        </label>

        <label class="grid grid-one" for="lastName">Last Name<input required data-type="string" minlength="2" maxlength="20" type="text" name="inputLastName" placeholder="Last name">
          <div class="errorMessage">Last name must be more than 1 and less than 20 letters</div>
        </label>

        <label class="grid grid-one" for="email">Email<input required type="email" data-type="email" name="inputEmail" placeholder="email">
          <!-- onchange="fvIsEmailAvailable(this);"  -->
          <div class="errorMessage" id="emailDiv">Must be a valid email address</div>
        </label>

        <label for="cityInput" class="grid grid-one"> City
          <select name="cityInput">
            <option disabled selected value> -- select your city -- </option>
            <option value="1">Copenhagen</option>
            <option value="2">Århus</option>
            <option value="3">Odense</option>
            <option value="4">Roskilde</option>
            <option value="5">Lyngby</option>
            <option value="6">Aalborg</option>
            <option value="7">Silkeborg</option>
            <option value="8">Ballerup</option>
            <option value="9">Hellerup</option>
            <option value="10">Holte</option>
            <option value="11">Horsens</option>
            <option value="12">Randers</option>
            <option value="13">Sønderborg</option>
            <option value="14">Helsingør</option>
            <option value="15">Dragør</option>
            <option value="16">Charlottenlund</option>
            <option value="17">Frederiksberg</option>
            <option value="18">Valby</option>
            <option value="19">Whateverby</option>
            <option value="20">Herlev</option>
            <option value="21">Vanløse</option>
          </select>
        </label>

        <label class="grid grid-one" for="userAddress">Address<input required type="text" data-type="string" name="inputAddress" placeholder="address ">
          <div class="errorMessage">Must be more than 12 characters</div>
        </label>

        <label class="grid grid-one" for="userPhone">Phone number<input required type="text" data-type="string" name="inputPhone" placeholder="phone number">
          <div class="errorMessage">Must be 8 characters</div>
        </label>
        <h4 class="mt-small">Account Information</h4>
        <div class="frmLine"></div>
        <label class="grid grid-one" for="loginName">Username<input required type="text" data-type="string" name="inputLoginName" placeholder="username">
          <div class="errorMessage">Must be more than 2 and less than 12</div>
        </label>

        <label class="grid grid-one" for="password">Password<input required type="password" data-type="string" minlength="8" maxlength="8" name="password_1" placeholder="password">
          <div class="errorMessage">Password must be 8 characters</div>
        </label>

        <label class="grid grid-one" for="password">Repeat Password<input required type="password" data-type="string" minlength="8" maxlength="8" name="password_2" placeholder="repeat password">
          <div class="errorMessage">Password must match</div>
        </label>


        <button name="reg_user">Sign Up</button>
      </form>
    </div>
    <h3>Already a user? <a href="login.php">Log in </a></h3>
  </div>
  <script src="js/signup.js"></script>
  <?php
  // $sScriptPath = 'js/validation.js';
  require_once(__DIR__ . '/components/footer.php');
  ?>