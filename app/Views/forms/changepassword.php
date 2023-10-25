<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar" >

<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<style>
	body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 350px;
	height: 520px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label {
	font-size: 12px;
	color: red;
	margin: 0px;
}

.login-heading{
	color: #fff;
	font-size:1.8em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin-left: 60px;
	margin-bottom: 10px;
	margin-top: 10px;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 550px;
	background: #302b63;
	transition: .8s ease-in-out;
	text-align: center;
}
</style>
</head>
<body>
	<div class="main">  	

			<div class="login">
					<?php $lastloginUser = session()->getFlashdata('lastloginUser'); 
					session()->setFlashdata('lastloginUsers', $lastloginUser);
					?>
					<form action="<?= base_url('/change-password') ?>" method='post'>
						<?= csrf_field(); ?>
					
					<label for="chk" aria-hidden="true" class="login-heading">CHANGE PASSWORD</label>
					<input name="old_password" type="password" placeholder="Old Password" value="<?= set_value('old_password'); ?>">
					<label class="text-danger"><?= isset($validation) ? display_error($validation,'old_password') : '' ?> </label>
					<?php if(!empty(session()->getFlashdata('oldpassworderror'))): ?>
					<label> <?php  echo session()->getFlashdata('oldpassworderror'); ?> </label>
					<?php endif; ?>
					<input type="password" name="new_password" placeholder="Password" value="<?= set_value('new_password'); ?>">
					<label class="text-danger"><?= isset($validation) ? display_error($validation,'new_password') : '' ?> </label>
					<?php if(!empty(session()->getFlashdata('fail'))): ?>
					<label> <?php  echo session()->getFlashdata('fail'); ?> </label>
					<?php endif; ?>
					<input type="password" name="cnew_password" placeholder="Password" value="<?= set_value('cnew_password'); ?>">
					<label class="text-danger"><?= isset($validation) ? display_error($validation,'cnew_password') : '' ?> </label>
					<?php if(!empty(session()->getFlashdata('fail'))): ?>
					<label> <?php  echo session()->getFlashdata('fail'); ?> </label>
					<?php endif; ?>
					<button>Change</button><br>
				</form>
    
</body>
</html>
<!-- partial -->
  
</body>
</html>
