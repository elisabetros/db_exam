<?php
// error_reporting(E_ERROR | E_WARNING | E_PARSE);

$sTitle = ' | Log in';
$sCurrentPage = 'log in';
require_once(__DIR__ . '/connection.php');
require_once(__DIR__ . '/components/header.php');

if ($_SESSION) {
  header("location:profile.php");
}

?>
<section class="containerSignup grid grid-two">
  <div class="loginWelcome mh-medium mv-small bg-grey">
    <div class="signupBg"></div>
    <h2>Please sign up</h2>

    <div class="loginDiv">
      <div class="">
        <h1>Welcome to Proper Pour!</h1>
        <h2>Please log in</h2>
      </div>
      <form id="loginForm" method="POST">
        <div>
          <label for="email">
            <p class="text-left align-self-center mb-small">Email | Username</p>
            <input required data-type="string" data-min="2" data-max="255" name="inputEmail" placeholder="email" type="text" value="jakob@gmail.com">
            <div class="errorMessage" id="emailDiv">Please enter a valid e-mail or username</div>
          </label>
        </div>

        <div>
          <label for="password">
            <p class="text-left align-self-center mb-small">Password</p>
            <input required data-type="string" data-min="8" data-max="8" type="password" name="password" placeholder="password" value="12345678">
            <div class="errorMessage">Password must be 8 characters</div>
          </label>
        </div>


        <button id="loginBtn" disabled>Log in</button>
      </form>
    </div>
  </div>


</section>

<?php
$sScriptPath = 'validation.js';
require_once(__DIR__ . '/components/footer.php');