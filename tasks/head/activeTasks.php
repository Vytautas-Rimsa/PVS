

<html>
<head>
	    <meta charset="utf-8">		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Aktyvios užduotys</title>	
        <link rel="stylesheet" href="../../css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>        
        <script src="../../js/scripts.js"></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<!-- Dropdown listui -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">CRM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Užduotys</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">Duomenų bazė</a>
                    </li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Paieška">
                        <button class="btn btn-secondary mr-sm-4" type="submit">Paieška</button>
                    </li>
                    <li class="nav-item mr-sm-4">
                        <a href="../../users/head/info.php"><i class='fas fa-address-card'id="info"></i></a>
                    </li>                    
                    <a href="../../logout.php"><i class='fas fa-sign-out-alt' id="logout"></i></a>
                </ul>                
            </div>
        </nav>
    </header>

	<body id="page-top">
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="sidebar navbar-nav headSidebar">
                <li class="nav-item">
                    <a class="nav-link" href="#">                        
                        <i class='fas fa-user-circle'></i>
                        <span>Mano užduotys</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="newTask.php">                        
                    <i class='far fa-file-alt'></i>
                        <span>Sukurti užduotį</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='fas fa-tasks'></i>
                        <span>Užduočių ataskaita</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">                        
                        <a class="dropdown-item" href="#">Dienos</a>
                        <a class="dropdown-item" href="#">Savaitės</a>
                        <a class="dropdown-item" href="#">Mėnesio</a>                        
                        <a class="dropdown-item" href="#">Pasirinkto laikotarpio</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <!-- <h6 class="dropdown-header">Other Pages:</h6> -->                        
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Tables</span>
                    </a>
                </li>
            </ul>
            <div id="content-wrapper">
                <div class="container-fluid">                
                <!-- Area Chart Example-->
                    <div class="card mb-3">
                        <div class="card-header headCardHeader">Aktyvios užduotys</div>
                        <div class="card-body">
                            <div id="myAreaChart" width="100%" height="30">
                                <p>Ojojoj</p>
                                <p>Ojojoj</p>
                                <p>Ojojoj</p>
                                <p>Ojojoj</p>
                                <p>Ojojoj</p>
                                <p>Ojojoj</p>
                                <p>Ojojoj</p>
                                <p>Ojojoj</p>
                                <p>Ojojoj</p>
                                <p>Ojojoj</p>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Paskutinis įrašas 11:59 PM</div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card mb-3">
                                <div class="card-header headCardHeader">Atliktos užduotys</div>
                                <div class="card-body">
                                    <div id="myBarChart" width="100%" height="50">
                                        <p>Ojojoj</p>
                                        <p>Ojojoj</p>
                                        <p>Ojojoj</p>
                                        <p>Ojojoj</p>
                                        <p>Ojojoj</p>
                                    </div>
                                </div>
                                <div class="card-footer small text-muted">Paskutinis įrašas 11:59 PM</div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-header headCardHeader">Pradelstos užduotys</div>
                                <div class="card-body">
                                    <div id="myPieChart" width="100%" height="100">
                                        <p>Ojojoj</p>
                                        <p>Ojojoj</p>
                                        <p>Ojojoj</p>
                                    </div>
                                </div>
                                <div class="card-footer small text-muted">Paskutinis įrašas 11:59 PM</div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- /.container-fluid -->                
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <div class="scroll-to-top rounded">
            <span><a href=""><i class="fas fa-angle-up" style='font-size:48px;color:white'></i> </a></span>            
        </div>       
    </body>    
</html>
