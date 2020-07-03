<!DOCTYPE html>
<html lang="en">
<head>
    <title>JEJAK Evada :: Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.1.0.min.js" integrity="sha256-ycJeXbll9m7dHKeaPbXBkZH8BuP99SmPm/8q5O+SbBc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.css" />
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('/css/dashboard.css')}}"/>
  
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
<body id="body-admin" class="admin">
   <!-- <div class="loading-screen">
	  <div class="loading-animation">
		<img src="https://evada-lab.my/ExamediaHelpdesk/images/footer/Group%203.svg" alt=" " class="logo">
		<div class="loading-bar"></div>
	  </div>
	</div>-->
	
    <div class="admin-content">
       <div class="container-fluid">
            <div class="row">
				<div class="col sidemenu-left">
				    <div class="sidemenu">
    <div class="row">
        <div class="main-logo-wrapper col pt-4 pb-4">
            <!--<img src="https://evada-lab.my/ExamediaHelpdesk/img/login.png" class="main-logo ">-->
            <h3 class="mb-0" style="color: #fff">JEJAK EVADA</h3>
        </div>
    </div>
    <hr class="row">
    <div class="row">
        <div class="welcome-wrapper col">
            <p class="mb-0">Welcome back!</p>
        </div>
    </div>
    <hr class="row">
    <div class="row">
        <div class="col p-0">
            <ul class="ul-sideadmin-list">
				<li class="li-sideadmin-list" >
					<a href="{{route('dashboard')}}"><span class="side-menu-text"><img src="{{url('img/bar-chart.png')}}" class="icon-menu"><b>Dashboard</b></span></a>							
				</li>
			</ul>
            
            
        </div>
    </div>
    
    <div class="row sidemenu-bottom">
        <div class="col p-0">
            <ul class="ul-sideadmin-list mb-0">
                
				<li class="li-sideadmin-list no-border">
					<a href="#"><span class="side-menu-text"><img src="https://evada-lab.my/ExamediaHelpdesk/img/logout.png" class="icon-menu"><b>Logout</b></span></a>							
				</li>
			</ul>
			<span class="copyright">Evada Solutions Sdn Bhd © 2020. All Rights Reserved</span>
        </div>
    </div>
    
</div>			    </div>
                <div class="col content">
                    
<div class="content-wrapper">
    <div class="row align-items-center pb-4">
        <div class="col">
            <h3 class="page-title">Visitor ({{ count($data)}})</h3>
        </div>
        <div class="col date">
           <?php date_default_timezone_set("Asia/Kuala_Lumpur");?>
            {{  date('H:i') }} | {{  date('j F Y') }}
        </div>
    </div>
    <section class="section  pt-0 pb-0">
        <!--<div class="col-12">
            <div class="row">
                <div class="box-wrapper w-100 pt-4 pb-2">
        		    <div class="row">
        		        <div class="col-md-3">
        		            <div class="box box-large">
        		                <label>Open Tickets</label>
        		                <div class="box-content">
        		                    <h2>3</h2>
        		                </div>
        	                </div>
                        </div>
        		        <div class="col-md-3">
        		            <div class="box box-large">
        		                <label>Overdue Tickets</label>
        		                <div class="box-content">
        		                    <h2>30</h2>
        		                </div>
        	                </div>
                        </div>
                        <div class="col-md-3">
        		            <div class="box box-large">
        		                <label>Closed Tickets</label>
        		                <div class="box-content">
        		                    <h2>21</h2>
        		                </div>
        	                </div>
                        </div>
                        <div class="col-md-3">
        		            <div class="box box-large box-cta">
        		                <div class="box-content">
        		                    <a href="#" class="btn btn-exa">Create Ticket</a>
        		                </div>
        		                
        	                </div>
                        </div>
        		    </div>
        	    </div>
            </div>
        </div>-->
        <div class="col-12">
            <div class="row">
                <div class="col tble-eaning   no-search-label  search-left">
                    <div class="extra-filter">
                        <select name="role" class="form-control mr-2" id="filter-date" >
                            <option value="">All Dates</option>
                        </select>
                        
                    </div>
                    <table id="example" class="table display no-wrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Contact No</th>
                                <th>Date</th>
                                <th>Time In</th>
                                <th>Temperature (&deg;C)</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($data as $rec)
                        <?php
                            $date =  date('M j Y', strtotime($rec->created_at));
                            $time =  date('g:i A', strtotime($rec->created_at));
                            $temp =  number_format($rec->tempt,1);
                        ?>
                        
                        
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$rec->name}}</td>
                                <td>{{$rec->phone}}</td>
                                <td>{{$date}}</td>
                                <td>{{$time}}</td>
                                <td>{{$temp}}</td>
                            </tr>
                        <?php $i++; ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        
    </section>
    
    
    
    
</div><!--- END content-wrapper -->


				</div>
            </div>
       
             </div>
    </div>
	


 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.js"></script>

<script>

$(document).ready(function() {  
    $('#example').DataTable({
        "order": [[ 0, "asc" ]],
        dom: 'Blfrtip',
        "columns": [
            null,
            null,
            null,
            null,
            null,
            null,
          ],
        responsive: true,
       
        "buttons":[{ extend: 'excel', text: 'Download' }],
          "columnDefs": [ {
          "targets": 'no-sort',
          "orderable": false,
        } ],
        language : {
            sLengthMenu: "Show _MENU_",
            search: '',
            searchPlaceholder: 'Search'
        },
        initComplete: function () {
                this.api().columns([3]).every( function () {
                    var column = this;
                    var select = $('#filter-date')
                        .appendTo(  $('.extra-filter'))
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            }
    } );
});

	function goBack() {
      window.history.go(-1);
    }
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'fitImagesInViewport': true,
      'disableScrolling': false,
      'maxHeight': 480,
    });
	    /*  pre loader */
	$(window).load(function()
    {
		$(".loading-screen").fadeOut();
		

    });
	</script>
	


</html>
