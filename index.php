<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="sign-up.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        
				<!-- //<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    </head>
    
    <body>

    	

      <div class="container">
      		<div class="col">
      			<div id="sign-up-box">
      			
		      		<h2>SIGN UP</h2>
			        <form form class="form-asd" role="form" action="actions.php" method="post">

			        	<!-- FIRST NAME -->
			        	<div class="form-group">
		        		  <div class="row">
		    			    <div class="col-sm-6">
					          <label for="inputFirst">First Name</label>
				        	    <input name="fname" type="text" class="form-control" id="inputFirst" placeholder="First" required>
			        		</div>
			        		<div class="col-sm-6">
			        		  <label for="inputLast">Last Name</label>
						        <input name="lname" type="text" class="form-control" id="inputLast" placeholder="Last" required>               
			        		</div>
			        	  </div>
			        	</div>

		        		<div class="form-group">
		        			<div class="row">
			        			<div class="col-sm-12">
					        			<label for="inputEmail">E-mail </label>
				        				<input name="email" type="email" class="form-control" id="inputEmail" placeholder="hello@world.com" required>
			        			</div>
		        			</div>
		        		</div>

			        	<div class="form-group">
		        			<div class="row">
			        			<div class="col-sm-12">
					        		<label for="inputPhone">Phone Number </label>
				        				<input name="pnumber" type="text" class="form-control" id="inputPhone" placeholder="(xxx) xxx-xxxx" required>
			        			</div>
		        			</div>
		        		</div>

			        	<div class="form-group">
		        			<div class="row">
			        			<div class="col-sm-12">
					        		<label for="inputBirthday">Birthday </label>
				        				<input name="birthday" type="text" class="form-control" id="inputBirthday" placeholder="2017/12/31" required>
			        			</div>
		        			</div>
		        		</div>

		        		<div class="form-group">
		        			<div class="row">
			        			<div class="col-sm-12">
					        		<label for="inputPass">Password </label>
				        				<input name="pass" type="text" class="form-control" id="inputPassword" placeholder="Password" required>
			        			</div>
		        			</div>
		        		</div>
			        		
		        			<div class="row">
			        				<div class="col-sm-12">
					        			<div class="form-check form-check-inline">
												  <label class="form-check-label">
												    <input class="form-check-input" type="radio" name="gender" id="femaleRadio" value="female" required> Female
												  </label>
												</div>
											</div>

										<div class="col-sm-12">
											<div class="form-check form-check-inline">
											  <label class="form-check-label">
											    <input class="form-check-input" type="radio" name="gender" id="maleRadio" value="male" required> Male
											  </label>
											</div>
				        		</div>
		        			</div>

			        		<button name='name' id="submit" type="submit" class="btn btn-primary">Sign Up</button>
			        </form> 
		      	</div> <!-- END SIGN UP BOX -->
	      	</div> <!-- END OF COLUMN -->

		    <div class="col">

		    	<div id="login-box">
		    		<h2>LOGIN</h2>

		    		<form form class="form-asd" role="form" action="login-actions.php" method="post">
				     	<div class="form-group">
	        			<div class="row">
		        			<div class="col-sm-12">
				        			<label for="inputEmail">E-mail </label>
			        				<input name="email" type="email" class="form-control" id="inputEmail" placeholder="hello@world.com">
		        			</div>
	        			</div>
	        		</div>

	        		<div class="form-group">
	        			<div class="row">
		        			<div class="col-sm-12">
				        		<label for="inputPass">Password </label>
			        				<input name="pass" type="text" class="form-control" id="inputPassword" placeholder="Password">
		        			</div>
	        			</div>
	        		</div>
	        		<button name='name' id="submit" type="submit" class="btn btn-primary">Login</button>

	        	</form> <!-- END OF FORM -->
        </div> <!-- END OF LOGIN BOX -->       
      </div><!-- END OF COLUMN -->

		</div> <!-- END OF CONTAINER -->

	     
    </body>
</html>
