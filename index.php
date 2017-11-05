<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="sign-up.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
    
    <body>

      <div class="container sign-up-box">
	    
          <!--circle image here-->
          <!--<img src="user.png" class="icon-box">-->
	      <h2>SIGN UP</h2>
	        <form>
	        	<!-- change input email css -->
	        	<div class="form-group">
	        		<div class="row">
	        			<div class="col-sm-4">
			        		<label for="inputFirst">First Name</label>
		        				<input type="text" class="form-control" id="inputFirst" placeholder="First">
		        			
	        			</div>
	        			<div class="col-sm-4">
	        				<label for="inputLast">Last Name</label>
					        <input type="text" class="form-control" id="inputLast" placeholder="Last">   
					             
	        			</div>
	        		</div>
	        	</div>

        		<div class="form-group">
        			<div class="row">
	        			<div class="col-sm-5">
			        		<label for="inputEmail">E-mail </label>
		        				<input type="email" class="form-control" id="inputEmail" placeholder="hello@world.com">
	        			</div>
        			</div>
        		</div>

	        	<div class="form-group">
        			<div class="row">
	        			<div class="col-sm-5">
			        		<label for="inputPhone">Phone Number </label>
		        				<input type="text" class="form-control" id="inputPhone" placeholder="(xxx) xxx-xxxx">
	        			</div>
        			</div>
        		</div>
	        	<div class="form-group">
        			<div class="row">
	        			<div class="col-sm-5">
			        		<label for="inputEmail">Birthday </label>
		        				<input type="email" class="form-control" id="inputBirthday" placeholder="Birthday">
	        			</div>
        			</div>
        		</div>
	        	
        			<div class="row">
        				<div class="col-sm-2">
		        			<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="radioOption" id="femaleRadio" value="femaleOption"> Female
							  </label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" name="radioOption" id="maleRadio" value="maleOption"> Male
							  </label>
							</div>
        				</div>
        			</div>

 
	        </form> 
      </div>
    </body>
</html>
