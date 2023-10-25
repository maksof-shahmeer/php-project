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
	font-size: 1.5em;
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
			<?php $tokens = session()->get('token'); ?>
			<form action="<?= base_url('/token_verification?reset_token='.$tokens) ?>" method="post">
			<?php echo session()->get('reset_token');?>
		

			<?= csrf_field(); ?>
					<label for="chk" aria-hidden="true" class="login-heading">Enter Email to Reset Password</label>
					<input name="email" placeholder="Email" value="<?= set_value('email'); ?>">
					<label class="text-danger"><?= isset($validation) ? display_error($validation,'email') : '' ?> </label>
					<?php if(!empty(session()->getFlashdata('not_verified'))): ?>
					<label> <?php  echo session()->getFlashdata('not_verified'); ?> </label>
					<?php endif; ?>
					<button>Submit</button><br>

				</form>
			</div>
	</div>
    
</body>
</html>
<!-- partial -->
  
</body>
</html>
