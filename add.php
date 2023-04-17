
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CRUD Using PHP/MySQL</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           PHP CRUD <small>Create, Read, Update and Delete</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
    <h2>Add new Records</h2>
    <div class="col-lg-6">
        <form role="form" method="post" action="transac.php?action=add">
            <div class="form-group">
                <input class="form-control" placeholder="First Name" name="first_name">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Last Name" name="last_name">
            </div> 
            <div class="form-group">
                <input class="form-control" placeholder="Middle Name" name="mid_name">
            </div> 
            <div class="form-group">
                <input class="form-control" input type="email" placeholder="Email" name="email">
            </div> 
            <div class="form-group">
                <input class="form-control" input type="password" placeholder="Password" name="password">
            </div> 
            <div class="form-group">
                <select name="user_type">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select> 
                <button type="submit" class="btn btn-default">Save Record</button>
                <button type="reset" class="btn btn-default">Clear Entry</button>
            </div>
        </form>  
    </div>
</div>

                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
