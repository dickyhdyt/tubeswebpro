<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
	<title>Login</title>
</head>
<body style="background-color: lightgray">
	<div class="main-content" style="max-width: 500px;background-color: white;margin-top: 80px;margin-left: 500px;height: 500px;margin-bottom: 20px">
	<div class="panel" style="border-color: #FFFF; border: 0px"><br>                    
	<div align="center">                        
		<h3>Login Admin</h3>                   
	</div>                    
	<div style="padding-top:30px" class="panel-body">                        
		<form action="<?= site_url('C_teater/SigninAdmin')?>" id="form_login" name="form_login" method="post" class="form-horizontal">                                                  
			<div style="margin-bottom: 25px" class="input-group">                                
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-phone"></i></span>                                
				<input id="login" type="text" class="form-control" name="username" maxlength="20" placeholder="username Admin" required="">           
			</div>                            
			<div style="margin-bottom: 25px" class="input-group">                                
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-lock"></i></span>                                
				<input id="mpin_login" type="password" class="form-control" name="password" placeholder="Password" maxlength="6" required="">
			</div>                            
				<div style="margin-top:10px" class="form-group">                                
					<!-- Button -->                                
					<div class="col-sm-12 controls">                                    
						<button type="submit" id="btn-login" class="btn btn-success" style="background-color: #005350">Login </button>                                                                    
					</div>                            
				</div>                            
				<div class="form-group">                                
					<div class="col-md-12 control">                                    
						<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%"> New Member,
							<a href="#" style="text-decoration: underline"> Register M-Tix</a>                                        
							 <div class="div_space"></div>If you have receive OTP Activation code through SMS,<br>                              
							 <a href="#" style="text-decoration: underline">Please activate your M-Tix here</a> </div>                            
							 </div>                           
							 </div>                            
							</form>                     
						</div>
					</div>
				</div>
</form>
</body>
</html>
