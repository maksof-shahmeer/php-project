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
.signup-label{
	color: #fff;
	font-size: 2.3em;
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
	display: flex;
	justify-content: center;
	margin-left: 60px;
	margin-top: 5px;
	margin-bottom: 5px;
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
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-500px);
	transition: .8s ease-in-out;
	text-align: center;
}
.login label{
	color: #573b8a;
	transform: scale(1);
}
.signup label{
	transform: scale(1);
}

span {
	display: inline;

}
label {
	margin: 0 auto;
	margin-left: 60px;
	height: 0px;
	padding: 0px;
	font-size: 15px;
	color: red;
}

</style>
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
			
			<form action="<?= base_url('/signup') ?>" method='post'>
			<?= csrf_field(); ?>
					<label for="chk" aria-hidden="true" class="signup-label">Sign up</label>
					<input type="text" name="username" placeholder="User name" value="<?= set_value('username'); ?>" >
					<label class="text-danger"><?= isset($validation) ? display_error($validation,'username') : '' ?> </label>
					<input type="text" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
					<label class="text-danger"><?= isset($validation) ? display_error($validation,'email') : '' ?> </label>
					<input type="password" name="password_hash" placeholder="Password" value="<?= set_value('password_hash'); ?>">
					<label class="text-danger"><?= isset($validation) ? display_error($validation,'password_hash') : '' ?> </label>
					<input type="password" name="confirmpswd" placeholder="Confirm Password" value="<?= set_value('confirmpswd'); ?>">
					<label class="text-danger"><?= isset($validation) ? display_error($validation,'confirmpswd') : '' ?> </label>
					<button>Sign up</button>
					<div style="display:flex; justify-content:center;">
						<a href="<?= base_url('/') ?>" style="color:white ; justify-content:center;">Log in</a>
					</div>
				</form>
			</div>

			
			</div>
	</div>
</body>

</html>
<!-- partial -->
  
</body>
</html>
