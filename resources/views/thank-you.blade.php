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

.h3, h3 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
}
.active{
    color: green;
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
            <p><em>"Thank you for your cooperation in assuring the safety of the society. "</em>
            <p>Do take safety precautions by wearing facial mask , washing your hand frequently and practice social distancing.</p>
            
        </div>
    </div>
    <div class="row">
         <div class="col-md-6 mx-auto pb-3 text-left">
             <label class="mb-0">Visitor Count</label>
             <h3>
                  
                {{$count}}          
             </h3>
             
             <label class="mb-0">Time</label>
             <h3>
                 
              {{$currtime}}
                
                        
             </h3>
             
             <label class="mb-0">Location</label>
             <h3 >
                Evada Solutions,<br> No. 19, 1, Jalan Bazar U8/99,<br> Bukit Jelutong, 40150 Shah Alam, Selangor               
             </h3>
             
             <label class="mb-0">Temperature</label>
             
             
                 <?php 
                 if($temperature > 37.5){
                      $color = "red";
                      $status = "Attention Required";
                 }else{
                      $color = "green";
                       $status = "Active";
                 }
                   
                 ?>
             <h3 style="color: {{$color}}">   
                {{$temperature}} &deg;C                   
             </h3>
             <label class="mb-0">Status</label>

             <h3 style="color: {{$color}}">   
                {{$status}}                   
             </h3>
         </div>
        </div>
  
     <br>
     <p class="text-center"><em>"Together we break the Covid-19 chain- stay safe."</em></p>
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

</script>
</body>
</html>
