<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SYSINTG | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php
session_start();
?>
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><span class="fa fa-heart"></span></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><span class="fa fa-heart"></span><b>  SYSINTG</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
	 
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?php echo $_SESSION["username"]?></span>
            </a>
          </li>
		  <li>
		  <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-primary" style = "margin-top:12%; border:none"><font color = "white">Logout</font></a>
          </div>
		  </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <span class ="fa fa-user" style="color:white; padding-left:15px"></span>
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["username"]?></p>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
			<span>View All Universities</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        UNIVERSITIES
        <small>SYSINTG</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-list"></i> View All Universities</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
	    <div class="box box-default">
			<div class="box-header with-border">
				<div class = "row">
					<div class="col-md-6">
						<h3 class = "box-title"> Filter by University </h3>
						<br>
							<form method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>">

							<input type = "checkbox" name = "univ[]" value = "Ateneo De Manila University"> Ateneo De Manila Univeristy </input><br>
							<input type = "checkbox" name = "univ[]" value = "De La Salle University"> De La Salle Univeristy </input><br>
							<input type = "checkbox" name = "univ[]" value = "University of the Philippines"> Univeristy of the Philippines </input><br>
							<input type = "checkbox" name = "univ[]" value = "University of Santo Tomas"> University of Santo Tomas </input><br>
							<input type = "checkbox" name = "univ[]" value = "Mapua of Institute Technology"> Mapua of Institute Technology</input><br>
							<input type = "checkbox" name = "univ[]" value = "Lyceum of the Philippines University"> Lyceum of the Philippines Univeristy</input><br>
							<input type = "checkbox" name = "univ[]" value = "Systems Technology Institute"> Systems Technology Institute</input><br>
							<br>
							<input type = "submit" name = "submit" value = "Filter"></input>
							</form>
					</div>
					<!-- /.col -->
					
					<div class="col-md-6">
						<h3 class = "box-title"> Filter by Age</h3>
							<form method = "post" action = "<?php echo $_SERVER['PHP_SELF'];?>">

							<label> Start Age: </label>
							<input type = "text" name = "startAge"> </input><br>
							<br>
							<label> End Age: </label>
							<input type = "text" name = "endAge">  </input><br>
							<br>
							<input type = "submit" name = "age" value = "Filter"></input>
							</form>
						
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.box-header -->
			
			<div class="box-body">
				<div id="container">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th><div align = "center"> Last Name </div></th>
								<th><div align = "center"> First Name </div></th>
								<th><div align = "center"> Birthdate </div></th>
								<th><div align = "center"> Age </div></th>
								<th><div align = "center"> University </div></th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (isset($_POST['submit'])){
								$aUniv = $_POST['univ'];
								$count = count($aUniv);
									
								for($i=0; $i < $count; $i++){
									require_once('../mysql_connect.php');
									$age = "SELECT (YEAR(curdate()) - YEAR(birthday)) as 'age' from data";
									$query = "SELECT surname, name, birthday, university, (YEAR(curdate()) - YEAR(birthday)) as 'age' from data where university = \"".$aUniv[$i]."\"";
									$result=mysqli_query($dbc,$query);
											
										while($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
											echo  "<tr>
											<td><div align = 'center'> {$row['surname']} </div></td>
											<td><div align = 'center'> {$row['name']} </div></td>
											<td><div align = 'center'> {$row['birthday']} </div></td>
											<td><div align = 'center'> {$row['age']} </div></td>
											<td><div align = 'center'> {$row['university']} </div></td>
											</tr>";
											}
											echo($aUniv[$i] . " ");
									}
								} else if(isset($_POST['age'])){
									$startAge = $_POST['startAge'];
									$endAge = $_POST['endAge'];

									require_once('../mysql_connect.php');
									$query = "SELECT surname, name, birthday, university, (YEAR(curdate()) - YEAR(birthday)) as 'age' from data where (YEAR(curdate()) - YEAR(birthday)) >= \"".$startAge."\" && (YEAR(curdate()) - YEAR(birthday)) <= \"".$endAge."\"";
									
									$result=mysqli_query($dbc,$query);
											
										while($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
											echo  "<tr>																																			
											<td><div align = 'center'> {$row['surname']} </div></td>
											<td><div align = 'center'> {$row['name']} </div></td>
											<td><div align = 'center'> {$row['birthday']} </div></td>
											<td><div align = 'center'> {$row['age']} </div></td>
											<td><div align = 'center'> {$row['university']} </div></td>
											
											</tr>";
										}
									}
									
								else {
										require_once('../mysql_connect.php');
										$query1 = "SELECT surname, name, birthday, university, (YEAR(curdate()) - YEAR(birthday)) as 'age' from data";
										$result1 = mysqli_query($dbc,$query1);
												
												while($row1=mysqli_fetch_array($result1,MYSQL_ASSOC)){
													echo  "<tr>
													<td><div align = 'center'> {$row1['surname']} </div></td>
													<td><div align = 'center'> {$row1['name']} </div></td>
													<td><div align = 'center'> {$row1['birthday']} </div></td>
													<td><div align = 'center'> {$row1['age']} </div></td>
													<td><div align = 'center'> {$row1['university']} </div></td>
													</tr>";
												}
									}
									
								?>
						</tbody>
					</table>
				</div>
				<!-- /.container -->
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('#example1').dataTable();
    })
</script>
</body>
</html>




<body>



<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('#example1').dataTable();
    })
</script>

</body>
</html>