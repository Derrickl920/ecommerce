<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/normalize.css" rel="stylesheet">
    
  </head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
	  	<div class="col-md-4">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	            </button>
	            <a class="navbar-brand" href="/">Soup2Door</a>
	        </div>
	  	</div>
	  	<div class="col-md-4">
	  			<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary header-bt" data-toggle="modal" data-target="#myModal">
				  Login and Registration
				</button>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Hi User! Welcome to our website.</h4>
				      </div>
				      <div class="modal-body">
						<form action="/main/user_login" method="post">
							  <div class="form-group">
							    <label class="col-sm-2 control-label">Email</label>
							    <div class="col-sm-10">
							      <input type="email" name="email" class="form-control" placeholder="Email">
							    </div>
							  </div>
							  <div class="form-group">
							    <label class="col-sm-2 control-label">Password</label>
							    <div class="col-sm-10">
							      <input type="password" name="password" maxlength="10" class="form-control" placeholder="Password">
							    </div>
							  </div>

							  <div class="form-group">
							    <div class="col-sm-offset-2 col-sm-10">
							      
							    </div>
							  </div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <input type="submit" name="login" value="login" class="btn btn-primary">
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
	  	</div>
	  	<div class="col-md-4">
	  		<form action = "/CustomerCarts/index" method = "get">
	  			 <button type="submit" class="btn btn-danger header-bt"> Shopping Cart (<?= $this->session->userdata("quantity")?>)</button>
	  		</form>
	  	</div>
	</div>
</nav>
