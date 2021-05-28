<!DOCTYPE html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Evaluation System | Home</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- <link href="{{ url('/css/bootstrap.css') }}" rel="stylesheet"> -->
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- <link href="{{ url('/css/font-awesome.css') }}" rel="stylesheet"> -->
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="{{ url('/css/morris-0.4.3.min.css') }}" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href="{{ url('/css/custom-styles.css') }}" rel="stylesheet">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 

    <style>
    #type_item:hover{
        color:#77ceeb;
    }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong><i class="icon fa fa-user"></i> Evaluation System</strong></a>
				
		<div id="sideNav" href="">
		<i class="fa fa-bars icon"></i> 
		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side">
            <div class="sidebar-collapse">
                
                <ul class="nav" id="main-menu" style="height:auto">
 

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('dashboard.regsession') }}">Register Sessions</a>
                            </li>
                           
                            <li>
                                <a href="#">Add Schools</a>
                            </li>
                            <li>
                                <a href="#">View Schools</a>
                            </li>
                            <li>
                                <a href="#">Add Departments</a>
                            </li>
                            <li>
                                <a href="#">View Departments</a>
                            </li>
                            <li>
                                <a href="#">Register Programs</a>
                            </li>
                            <li>
                                <a href="#">View Programs</a>
                            </li>
                            <li>
                                <a href="#">Register Roles</a>
                            </li>
                            <li>
                                <a href="#">View Roles</a>
                            </li>

                        



                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Users<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Add Users</a>
                            </li>
                            <li>
                                <a href="#">View Users</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Students<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Add Student Details</a>
                            </li>
                            <li>
                                <a href="#">View Student Details</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Lecturer<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Add Lecturer</a>
                            </li>
                            <li>
                                <a href="#">View Lecturer</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Competencies<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Add Competencies</a>
                            </li>
                            <li>
                                <a href="#">View Competencies</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Courses<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Add Courses</a>
                            </li>
                            <li>
                                <a href="#">View Courses</a>
                            </li>
                            <li>
                              
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Units<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Add Units</a>
                            </li>
                            <li>
                                <a href="#">View Units</a>
                            </li>
                            <li>
                              
                        </ul>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Results<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">General Results</a>
                            </li>
                            <li>
                                <a href="#">School Results</a>
                            </li>
                            <li>
                                <a href="#">Departmental Results</a>
                            </li>
                            <li>
                                <a href="#">Lecturer Results</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                                <a href="#">Calendar</a>
                            </li>

                            <li>
                                <a href="#">Permissions</a>
                            </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Dashboard <small>Create Questionnaire</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Create Questionnaire</li>
					</ol> 
									
		</div>
        

        <div id="page-inner"> 
                       
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Set Questions</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form id="forma" action="{{ route('questionnaires.questionnaire') }}" method="post">
                                    @csrf
                                    <div class="results">
                                    @if(Session::get('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif
                                    @if(Session::get('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    </div>


                                      
                                    <td><a href="" data-toggle="modal" data-target='#types_modal'><button class="btn btn-info"><i class="fa fa-plus" style="color:blue; font-size:27px;"></i>Add Question</button></a></td>
                                        </div>
                                        </div> 
 <div class="modal fade" id="types_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header" style="background-color:#77ceeb; height:120px;">
         <strong><h3 class="modal-title" id="exampleModalLabel" style="margin-left:50px;margin-top:30px; color:white">Choose question type</h3></strong>
         <button type="button" class="close" style="float:right; margin-top=0px;" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true"  style="padding-bottom:40px; size:30px; zoom:2;">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <div class="list-group">
         @foreach($question_types as $type)
          <a id="type_item" onclick="onTypeClicked({{$type}})" data-id="{{$type->id}}" data-name="{{$type->name}}" name="question_type_id" class="list-group-item">{{$type->name}}</a>
        @endforeach
         </div>
       </div>
     </div>
   </div>
 </div>
                                        </div>
                                 
                                   <!-- <form id="question_form"> -->
                                    <div class="form-group">
                                        <div id="container">
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <input id="submit-btn" type="button" style="margin-left:30px" name="save" class="btn btn-info" value="Submit">
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
               
			<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    </div>


   <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
  
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 


    <script>
    
    function onTypeClicked(type){
        $("#types_modal").modal('hide')
        var div = '<div>'
        if(type.id==1){
            div = div+
            '<div>\
               <div class="row">\
                        <div class="col-xs-12">\
                            <div class="panel panel-default">\
                            <div class="panel-heading">\
                                    <div class="card-title">\
            <label>Enter your question</label>\
            <div class="panel-body">\
            <input class="form-control" name="question" style="width:500px;" type="text" placeholder="Type your question.."></input>\
            <p style="width:500px;"><i class="fas fa-paragraph"></i>_____________________short answers_______________________</p>\
            <p>____________________________________________________</p>\
            </div>\
            </div>\
            </div>\
            </div>\
            </div>\
            </div>'
        }else if(type.id==2){
            div = div+'<div>\
               <div class="row">\
                        <div class="col-xs-12">\
                            <div class="panel panel-default">\
                            <div class="panel-heading">\
                                    <div class="card-title">\
            <label>Enter your question</label>\
            <div class="panel-body">\
            <input class="form-control" name="question" style="width:500px;" type="text" placeholder="Type your question.."></input>\
            <p style="width:500px;">_____________________Long answer texts_______________________</p>\
            <p>_______________________________________________________________</p>\
            <p>_______________________________________________________________</p>\
            </div>\
            </div>\
            </div>\
            </div>\
            </div>\
            </div>'
        }else if(type.id==3){
            div = div+'<div>\
               <div class="row">\
                        <div class="col-xs-12">\
                            <div class="panel panel-default">\
                            <div class="panel-heading">\
                                    <div class="card-title">\
            <label>Enter your question</label>\
            <div class="panel-body">\
            <input class="form-control" style="width:500px;" name="question" type="text" placeholder="Type your question.."></input>\
            <div id="option_container">\
            <label style="margin-top:10px">Option 1</label>\
             <input class="form-control" style="width:300px; margin:10px; name="value_id" margin-top:4px;"></input>\
       <label style="margin-top:10px">Option 2</label>\
        <input class="form-control" name="value_id" style="width:300px; margin:10px; margin-top:4px;"></input>\
        </div>\
            <button class="btn btn-info" id="poke" style="margin-top:10px;"  onClick=" onAddOption();">Add option</button>\
            </div>\
            </div>\
            </div>\
            </div>\
            </div>\
            </div>\
            </div>'
        }

          

        div = div+'</div>'
        $('#container').append(div);
    }
   
   

    function onAddOption(){
 
       
       
      
        $('#option_container').append('<label style="margin-top:10px">Option 3</label>\
        <label id="counter" style="margin-top:10px"></label>\
        <input class="form-control" name="value_id" style="width:300px; margin:10px; margin-top:4px;"></input>'
       
        )
            
       
    }
  


 
    
    $('#submit-btn').on("click",function(e){
        e.preventDefault();
        var data = $("#container").children()
       console.log(data);
    })
    
    </script>


 </form>

</body>

</html>