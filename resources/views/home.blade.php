<!DOCTYPE html>
<html lang="en">
<head>
  <title>JEJAK Evada</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  body,.form-control{
      font-size: 14px;
  }
  html,
body {
  height: 100%;
}

#page-content {
  flex: 1 0 auto;
      padding-bottom: 80px;

}

#sticky-footer {
  flex-shrink: none;
}
.footer-copyright{
    background: #fff;
    font-size: 12px;
}
  .form-group label{
      margin-bottom: 3px;
      color: #828282;
      font-size: 12px;
  }
.btn-primary {
    color: #fff;
    background-color: #18315c;
    border-color: #18315c;
    border-radius: 50px;
}
.form-control {
    height: auto;
    padding: 8px .75rem;
}
  </style>
</head>
<body class="d-flex flex-column">


<!--
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>-->
<div class="content" id="page-content">
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto text-center p-4">
            <img src="{{url('img/logo-evada.png')}}">
            <br>
            <p>Welcome to Evada Solutions Sdn Bhd.<br>In line with the government SOP to curb the spread of Covid-19.</p>
        </div>
    </div>
    <div class="row">
         <div class="col-md-6 mx-auto pb-3 text-center">
             <label class="mb-0">Time Now:</label>
             <h2 class="clock">
                19/05/2020 15:26                 
             </h2>
         </div>
        </div>
     <div class="row">
         <div class="col-md-6 mx-auto">
             <p> Please fill up the information below.</p>
             <form action="{{route('send_info')}}" method="post">
              @csrf
              <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" id="name" name="name"  placeholder="Name as per NRIC">
              </div>
              <div class="form-group">
                <label>Contact No.</label>
                <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="">
              </div>
               <div class="form-group">
                <label>Temperature</label>
                <input type="text" class="form-control" id="temperature" name="temperature" placeholder="">
              </div>
              <br>
              <button type="submit" class="btn btn-primary col">Submit</button>
            </form>
            
            <br>
            <p>Thank you for your cooperation and understanding.</p>
         </div>
     </div>
     
</div>
</div>
<div class="foooter" id="sticky-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto footer-copyright text-center py-3" style="background: #FFF">© 2020 Copyright:
                <a href="http://www.evada.my/"> Evada Solutions</a>
            </div>
        </div>
    </div> 
</div>
<script>
    function clock() {// We create a new Date object and assign it to a variable called "time".
    
var time = new Date();
var day = time.getUTCDate();
var month = time.getUTCMonth() + 1;
var year = time.getFullYear();
var hours = time.getHours();
var minutes = time.getMinutes();
var seconds = time.getSeconds();
            
        console.log(time + '' + day);
            document.querySelectorAll('.clock')[0].innerHTML = harold(day) + "/" + month + "/" + year + " " + harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);
          
          function harold(standIn) {
            if (standIn < 10) {
              standIn = '0' + standIn
            }
            return standIn;
          }
        }
        setInterval(clock, 1000);
</script>
</body>
</html>
