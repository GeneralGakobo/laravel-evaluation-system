<!DOCTYPE html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Evaluation System | Home</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- <link href="<?php echo e(url('/css/bootstrap.css')); ?>" rel="stylesheet"> -->
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- <link href="<?php echo e(url('/css/font-awesome.css')); ?>" rel="stylesheet"> -->
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo e(url('/css/morris-0.4.3.min.css')); ?>" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href="<?php echo e(url('/css/custom-styles.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
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
                                <a href="<?php echo e(route('dashboard.regsession')); ?>">Register Sessions</a>
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
                            Dashboard <small>Register Unit</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Register_unit</li>
					</ol> 
									
		</div>


        <div id="page-inner"> 
        <div class="row">
        <section class="wrapper main-wrapper row">        
          <div class="col-md-6">              
              <section class="box">
            <h3>Register Unit</h3><br>
            <br>
            <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <form action="<?php echo e(route('units.unit')); ?>" method="post" class="form-inline">
        <?php echo csrf_field(); ?>
            <div class="results">
            
            <?php if(Session::has('fail')): ?>
            <div class="alert alert-danger alert-dismissible " role="alert">
           
  
            <?php echo e(Session::get('fail')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
             </div>
               
                
            <?php endif; ?>


            <?php if(Session::has('success')): ?>
            <div class="alert alert-success alert-dismissible " role="alert">
       
  
            <?php echo e(Session::get('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
             </div>
               
                
            <?php endif; ?>
           
      




            <div class="form-inline">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Course Name</label>
                                        <select id="schools" name="course_id" class="form-control" required>
                                        <span class="text-danger" style="color:red;"><?php $__errorArgs = ['course_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                                <option>---Select Course----</option>
                                                <?php
                                                $conn = mysqli_connect("localhost","root","","auth")or die(mysqli_error());
                                                $query = "SELECT * FROM courses";
                                                $do =mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($do)){
                                                    echo "<option value='".$row['id']."'>".$row['course_name']."</option>";
                                                }
                   
                                                ?>
                                        </select>
                                        </div>
                                                    <br>
                                                    <br>
                                        <div class="form-inline">
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Lecturer Name</label>
                                        <select id="school" name="lecturer_id" class="form-control" required>
                                        <span class="text-danger" style="color:red;"><?php $__errorArgs = ['lecturer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                                <option>---Select Lecturer----</option>
                                                <?php
                                                $conn = mysqli_connect("localhost","root","","auth")or die(mysqli_error());
                                                $query = "SELECT * FROM lecturers";
                                                $do =mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($do)){
                                                    echo "<option value='".$row['id']."'>".$row['lecturer_name']."</option>";
                                                }
                   
                                                ?>
                                        </select>
                                        </div>

                                    </div>








            <br>
            <br>

            <input class="btn btn-info" value="Register Unit" type="submit">
        </div>
        </form>
        </section>
         </div>
         <div class="col-md-6" style="background-color:#00FF22; margin-bottom:10px;">      
               
              <section class="box" style="margin:10px;">
             
              <input id="copy_btn" type="button" style="color:#000000; font-size:20px; background-color:aua; padding-right:20px;" class="btn btn-secondary" value="copy">
              <input id="copy_btn" type="button" style="color:#000000; font-size:20px; background-color:aua; padding-right:20px;" class="btn btn-secondary" value="CSV">
              <input id="copy_btn" type="button" style="color:#000000; font-size:20px; background-color:aua; padding-right:20px;" class="btn btn-secondary" value="PRINT">
              <input id="copy_btn" type="button" style="color:#000000; font-size:20px; background-color:aua; padding-right:20px;" class="btn btn-secondary" value="EXCEL">
              <input id="copy_btn" type="button" style="color:#000000; font-size:20px; background-color:aua; padding-right:20px;" class="btn btn-secondary" value="COLUMN VISIBILITY">

         


                     <!--    Hover Rows  -->
                    <div class="panel panel-default" style="margin:10px;">
                    
                        <div class="panel-heading">
                            View Units
                           <form action="" method="GET">
                            <div class="search-box form-inline" style="margin-left:310px; background-color:#445566; border:2.5px solid #330066;">
                             <input type="text" style="width:200px;" class="form-control search" style="border-right:none; margin-right:0px;" placeholder="Search.."> 
                             <button class="search-btn form-control" style="background-color:aqua; margin-left:0px;" type="submit"><i class="fas fa-search"></i></button>
                            </form> 
                            
                            </div>
                                    
                        </div>
                        <div class="results">
                        <?php if(Session::has('succe')): ?>
            <div class="alert alert-danger alert-dismissible " role="alert">
           
  
            <?php echo e(Session::get('succe')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
             </div>
               
                
            <?php endif; ?>
            <?php if(Session::has('succes')): ?>
            <div class="alert alert-success alert-dismissible " role="alert">
            
  
            <?php echo e(Session::get('succes')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
             </div>
               
                
            <?php endif; ?>

           

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                       
                                            <th>#</th>
                                            <th>Course Name</th>
                                            <th>Lecturer Name</th>
                                            <th>Edit Session</th>
                                            <th>Delete Session</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->id); ?></td>
                                            <td><?php echo e($item->course_id); ?></td>
                                            <td><?php echo e($item->lecturer_id); ?></td>
                                            <td><a href="#" data-toggle="modal" data-target='#exampleModal'><button class="btn btn-info"><i class="fa fa-edt" style="color:blue; font-size:27px;"></i>Edit</button></a></td>
                                            <td><a href="delete_unit/<?php echo e($item->id); ?>"><button class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-remove" style="color:red; font-size:27px;"></i>Delete</button></a></td>
 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#87ce22; height:120px;">
        <strong><h3 class="modal-title" id="exampleModalLabel" style="margin-left:50px;margin-top:30px; color:white">Edit </h3></strong>
        <button type="button" class="close" style="float:right; margin-top=0px;" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"  style="padding-bottom:40px; size:30px; zoom:2;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
        <?php echo csrf_field(); ?>
        <?php echo e(method_field('PATCH')); ?>

        <input type="hidden" name="cid" value="<?php echo e($item->id); ?>">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Update Unit:</label>
            <input type="text" name="sess_name" value="<?php echo e($item->course_id); ?>" class="form-control" id="sess_name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Update Lecturer:</label>
            <input type="text" name="sess_name" value="<?php echo e($item->lecturer_id); ?>" class="form-control" id="sess_name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" id="update_data" class="btn btn-success">Update</button>
      </div>
    </div>
  </div>
</div>
                                        </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      
                                    </tbody>
                                </table>

                                
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->


              </section>
        </div>
       
         </div>
          
			
		
			
        
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        alert("Copied the text: " + copyText.value);
        }
    </script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

    <script type="text/javascript">
     $(document).ready(function(){

$(document).on("click", "#update_data", function() { 
   
    var id= 
    $.ajax({
        url: url,
        type: "PATCH",
        cache: false,
        data:{
            _token:'<?php echo e(csrf_token()); ?>',
            
            session_name: $('#sess_name').val(),
          
        },
        success: function(dataResult){
            dataResult = JSON.parse(dataResult);
         
				
			}
	    	});
	        }); 
        });
    
    </script>
    <script>
        var copyBtn = document.querySelector('#copy_btn');
        copyBtn.addEventListener('click', function () {
        var urlField = document.querySelector('table');
        
        // create a Range object
        var range = document.createRange();  
        // set the Node to select the "range"
        range.selectNode(urlField);
        // add the Range to the set of window selections
        window.getSelection().addRange(range);
        
        // execute 'copy', can't 'cut' in this case
        document.execCommand('copy');
        }, false);
    </script>

</body>

</html><?php /**PATH D:\xampp\htdocs\authentication\resources\views/units/add_units.blade.php ENDPATH**/ ?>