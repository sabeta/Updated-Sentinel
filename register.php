
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
	
    <meta name="author" content="">
    <title>Sentinel</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<style>
		.starter-template{
			padding-top: 30px;
			padding-bottom: 10px;
    		text-align: center;
    	}
    	body {
			background-color:MintCream;
		}
    .page-header {
    padding-top: 10px;
    margin-top: 0px;
    margin-bottom: 35px;
    padding-bottom: 15px;
    background: #06d995;
    border-bottom: 1px solid #e3e4e8;
    }
    .h3, h3{
    margin-top: -23px;
    margin-bottom: 10px;      
    }
    .alert{
    margin-bottom: 10px;
    }
	</style>

</head>

  <body>
      
      <div class="page-header">
      <div class="container">
        <center>
        <a href="samp.php"><img src="fdlogo.png" style="height: 150px"></a>
        </center>
        <center><strong><font color = white>Sentinel</font></strong></center>
      </div>
      </div> 
      <div class="container">
	    <div class="row">
			<div class="col-md-3"></div>
			
			<div class="col-md-6">
      
				  <h3>Register</h3>   

          <form action="" method="post">
          <div class="row">
            <div class="form-group col-md-6" method='post'>
              <label class="">First name*</label>
              <input required pattern = "[A-Za-z- \\s]*" type = "text" class="form-control" name = "first_name"/>
            </div>
            <div class="form-group col-md-6" method='post'>
              <label class="">Last name</label>
              <input required pattern = "[A-Za-z- \\s]*" type = "text" class="form-control" name = "last_name"/>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6" method='post'>
              <label class="">Birthdate</label>
              <input required pattern = "[A-Za-z- \\s]*" type = "text" class="form-control" name = "first_name"/>
            </div>
            <div class="form-group col-md-6" method='post'>
              <label class="">Gender</label>
              <input required pattern = "[A-Za-z- \\s]*" type = "text" class="form-control" name = "last_name"/>
            </div>
            
            </div>
            <div class="form-group" method='post'>
              <label class="">Address</label>
              <input required pattern = "[A-Za-z- \\s]*" type = "text" class="form-control" name = "username"/>              
            </div>
            <div class="form-group" method='post'>
              <label class="">Username*</label>
              <input required pattern = "[A-Za-z- \\s]*" type = "text" class="form-control" name = "username"/>              
            </div>
            <div class="row">
            <div class="form-group col-md-6" method='post'>
              <label class="">Password*</label>
              <input type="password" class="form-control" name="password">
              </div>
            <div class="form-group col-md-6" method='post'>
              <label class="">Confirm password*</label>
              <input type="password" class="form-control" name="password_again">
            </div>
            </div>
            <div class="form-group" method='post'>
              <label class="">Email*</label>
              <input type="text" class="form-control" name="email">
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <input type="Submit" value="Register" style="background:#06d995" class="btn btn-warning btn-block"  name="Submit">
                </div>
              </div>
          </form>  
            </div>
            <center>
              Already have an account? <a href="login.php">Login</a>
            </center>
            <center>
              <br>Sentinel &copy; 2016             
            </center>
          </div>
        </div>
      </div>
      
      <div class="col-md-3"></div>
    
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    
  </script>
  </body>
</html>
