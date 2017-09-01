

<?
    if ( isset($_GET['errors']) && $_GET['errors'] ) {
?>
<div class="warning-box">
  <p>The credentials you entered were not correct. Please confirm your UWA
     Person ID and Pheme password are correct and try again.</p>
  <p>Common causes of login problems:</p>
  <ul>
    <li><b>Have you activated your Pheme account? If not, click on the
        appropriate activation link.</b></li>
    <li><b>Is the "Caps Lock" key on? Your credentials
        are case-sensitive.</b></li>
    <li><b>Forgotten your password? Click the link to reset it.</b></li>
</div>
<?
    } else {
?>
<p class="introduction">You are about to access The University of Western Australia's single sign-on
   (SSO) network. Once logged in, you may access any other services within the
   SSO network without needing to log in again.</p>
<?
    }
?>


<div class="column-three-quarter">


<div class="form-device width-full">
  <form action="TODO" class="margin-bottom-large">
    <h3>Sign on</h3>
    <dl>
      <dt>Staff, student or visitor ID:</dt>
        <dd><input type="text" name="TODO" required />
      <dt>Pheme password:</dt>
        <dd><input type="text" name="TODO" required />
      <dt class="submit"></dt>
        <dd class="overline submit">
          <button type="submit" id="element_14" name="element_14">Login</button>
          <button type="reset" id="element_15" name="element_15">Forgotten your password?</button>
        </dd>
    </dl>
  </form>
</div>


<div>
  <h3>Ending your session</h3>
  <p>You will remain logged into the SSO network until you close all web
     browser windows. To protect your privacy ensure you close all browser
     windows when you are finished. If you are using a public computer you
     should log out.</p>
  <p>Your SSO session will also end after 30 minutes of inactivity.</p>
</div>


</div><!-- .column-quarter -->
<div class="column-quarter">


<!-- "Further information" sidebar -->
<div class="form-device">
  <h3>Need to activate your account?</h3>
  <p>If you are logging on for the first time you will need to activate
     your Pheme account. Please select one of the following accounts
     to activate.</p>
  <p><a class="button outline" href="TODO">Students</a></p>
  <p><a class="button outline" href="TODO">Staff</a></p>
  <p class="margin-bottom"><a class="button outline" href="TODO">Visitors</a></p>
</div>


</div><!-- .column-quarter -->


<? include('content-contact-us.html'); ?>
