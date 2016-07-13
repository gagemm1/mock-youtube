<?php
include ( '.header.php' );
$error = "";
if (@$_POST['register']) {
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password1 = $_POST['password'];
 $password2 = $_POST['passwordrepeat'];
 
 if ($firstname == "") {
  $error = "Firstname cannot be left empty.";
 }
 else if ($lastname == "") {
  $error = "Lastname cannot be left empty.";
 }
 else if ($username == "") {
  $error = "Username cannot be left empty.";
 }
 else if ($email == "") {
  $error = "Email cannot be left empty.";
 }
 else if ($password1 == "") {
  $error = "Password cannot be left empty.";
 }
 else if ($password2 == "") {
  $error = "Repeat Password cannot be left empty.";
 }
}
?>
<h2>Create Your Account</h2>
<form action='join.php' method='POST'>
<input type='text' name='firstname' value='Firstname ...' onclick='value=""'/><p />
<input type='text' name='lastname' value='Lastname ...' onclick='value=""'/><p />
<input type='text' name='username' value='Username ...' onclick='value=""'/><p />
<input type='text' name='email' value='Email ...' onclick='value=""'/><p />
<input type='text' name='password' value='Password ...' onclick='value=""'/><p />
<input type='text' name='passwordrepeat' value='Repeat Password ...' onclick='value=""'/><p />
<input type='submit' name='register' value='Create Your Account' />
<?php echo $error; ?>
</form>