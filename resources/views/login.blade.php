<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title', 'Login') :: Examedia Helpdesk</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="{{ url('/css/dashboard.css') }}" />
    
</head>

<body class="page page-log-in layout-login"> 
<div class="content p-0">
    <section class="login">
        <div class="container">
            
           
                <div class="login-wrapper">
                    <div class="text-center py-4">
                        <!--<img src="{{url('img/login.png')}}" class="pb-5">-->
                        <h3 class="mb-0" style="color: #fff">JEJAK EVADA</h3>
                    </div>
                    <div class="">
                        <form>
        					<div class="input-group form-group">
        						<div class="input-group-prepend">
        							<span class="input-group-text"><i class="fas fa-user"></i></span>
        						</div>
        						<input type="text" class="form-control" placeholder="username">
        						
        					</div>
        					<div class="input-group form-group">
        						<div class="input-group-prepend">
        							<span class="input-group-text"><i class="fas fa-key"></i></span>
        						</div>
        						<input type="password" class="form-control" placeholder="password">
        					</div>
        					
        					<div class="form-group pt-2 d-flex froup-group-leftright text-right justify-content-end">
        					    <!--<a href="#" class="forgot">Forgot password/username?</a>-->
        						<input type="submit" value="Login" class="btn btn-success float-right login_btn">
        					</div>
        				</form>
                    </div>
                    <!--<hr>
                    <div class="">
        				<div class="text-center">
        					 Don’t have an account yet? <a href="#"><b> Talk to us </b></a> today!
        				</div>
        			</div>-->
                </div>
           
            
        </div>
    </section>
    
    
</div>
    
</body>

</html>