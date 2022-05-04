<?php include "config/setup.php"; ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> Blueno Eats Website </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="styles/main.css" rel="stylesheet" type="text/css">
	<link href="styles/navigation.css" rel="stylesheet" type="text/css">
	<link href="styles/info.css" rel="stylesheet" type="text/css">
	<link href="styles/form.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include D_TEMPLATE . "navigation.php" ?>

	<?php if (!isset($_SESSION['user_id'])) { ?>
		<h1>You have not logged in yet!</h1>
	<?php } else { ?>

		<h2 class="account-user"> Hi, <?php echo $_SESSION['username'] ?>! </h2>
		<form class="user-form" onsubmit="return false">
			<h2 class="account-header"> Change username </h2>

			<label for="change_username">New username </label>
			<p class="signup-error-msg" id="username-error-msg-user"> Username is invalid.</p>
			<input input type="text" id="change_username" minlength="3" maxlength="12" required>
			<p class="signup-reminder"> Username must contain at least four characters.</p>

			<label for="password">Password</label>
			<p class="signup-error-msg" id="username-error-msg-pass"> Incorrect password.</p>
			<input type="password" name="username-password" id="username-password">

			<input type="submit" value="Change Username" id="change-username-submit" onclick="change_user()">
			<script src="scripts/change-username.js" type="text/javascript"></script>

		</form>

		<hr class="divide-account">

		<form class="user-form" onsubmit="return false">
			<h2 class="account-header"> Change password </h2>
			<label for="old-password">Old password</label>
			<input type="password" name="old-password" id="old-password">

			<label for="new-password">New password</label>
			<p class="signup-error-msg" id="simple-error-msg-pass"> Please choose a more complex password.</p>
			<p class="signup-error-msg" id="password-error-msg-pass"> Incorrect password.</p>
			<input type="password" id="new-password" minlength="8" required>
			<p class="signup-reminder"> Passwords must contain at least eight characters, including at least 1 letter and 1 number.</p>

			<label for="comfirm password">Confirm new password</label>
			<p class="signup-error-msg" id="password-error-msg-rep-pass"> The passwords do not match. </p>
			<input type="password" id="new_password_repeat" required>

			<input type="submit" value="Change Password" id="change-password-submit" onclick="change_pass()">
			<script src="scripts/change-password.js" type="text/javascript"></script>
		</form>
	<?php } ?>
</body>

</html>