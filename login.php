<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="css/login1.css">
	
</head>
<body >
	<div  class="col-md-6 well">

		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
			
			<?php 
				endif;
				// clearing the message
				unset($_SESSION['message']);
			?>
			<form class="login-box" class="big-div-login" action="login_query.php" method="POST">	
				<h4 class="text-success">Login here...</h4>
			
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" required="" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" required="" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control login-text" name="login">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						 Login
				</button>
				</div>
				<a class="Registration-text"  href="registration.php">Registration</a>
			</form>
		</div>
	</div>

</body>
</html>



<div class="boeken-vakantie">
            <div class="zoek-reis-big-div boeken-big-div">
                <section class="boeken-titl">
                    <p>Boeken voor deze vakantie</p>
                </section>
                <div class="zoek-reis-div">
                    <div class="reisdatum">
                        <p>Reisdatum</p>
                        <input name="reisdatum" type="date" value="2023-05-03">
                    </div>
                    <div class="retourdatum">
                        <p>Retourdatum</p>
                        <input name="retourdatum" type="date" value="2023-05-03">
                    </div>
                    <div class="passagier">
                        <p>Passagier</p>
                        <button onclick="myFunction()"> +0 Passagier</i></button>
                        <div id="passagier-keizen" style="display:none">
                            <div class="passagiers-types">
                                <div class="passagiers-type">
                                    <div class="Volwassenen">
                                        <p>Volwassenen</p>
                                    </div>
                                    <div class="button-set">
                                        <button type="button" id="minus2">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input class="passagiers-set" type="number" value="0" id="input2" />
                                        <button type="button" id="plus2">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="passagiers-type">
                                    <div class="Volwassenen">
                                        <p>kinderen</p>
                                    </div>
                                    <div class="button-set">
                                        <button type="button" id="minus3">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input class="passagiers-set" type="number" value="0" id="input3" />
                                        <button type="button" id="plus3">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="passagiers-type">
                                    <div class="Volwassenen">
                                        <p>Zuigeling</p>
                                    </div>
                                    <div class="button-set">
                                        <button type="button" id="minus4">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input class="passagiers-set" type="number" value="0" id="input4" />
                                        <button type="button" id="plus4">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>