<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="htmlcss bootstrap, multi level menu, submenu, treeview nav menu examples" />
  <meta name="description" content="Bootstrap 5 navbar multilevel treeview examples for any type of project, Bootstrap 5" />
  <title>Westling Industrie El Ab</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600;700&family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/swiper-bundle.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center py-3 px-0">
          <a href="javascript:;"><img src="images/swedenFlag.png" alt="sweden flag" class="img-fluid"></a>
          <h1>Westling Electric El Ab</h1>
          <a href="javascript:;"><img src="images/englandFlag.png" alt="sweden flag" class="img-fluid"></a>
        </div>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-12 p-0">
          <nav class="navbar navbar-expand-xl headerNav">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">Westling Industrie El Ab</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link <?php if ($page == "home") {
                                          echo "active";
                                        } ?>" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if ($page == "about") {
                                          echo "active";
                                        } ?>" href="about.php">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if ($page == "scientaEmgSer" || $page == "scientaMaintSer" || $page == "scientaCaliberationServ" || $page == "scientaCalibMoisture" || $page == "scientaCalibBasisweight") {
                                          echo "active";
                                        } ?>" href="javascript:;" role="button" data-bs-toggle="dropdown" aria-expanded="false">Scienta</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item <?php if ($page == "scientaEmgSer" || $page == "scientaMaintSer") {
                                          echo "active";
                                        } ?>" href="javascript:;">Service &raquo; </a>
                        <ul>
                          <li><a class="dropdown-item <?php if ($page == "scientaEmgSer") {
                                          echo "active";
                                        } ?>" href="scientaEmgSer.php">Emergency Breakdown Service</a></li>
                          <li><a class="dropdown-item <?php if ($page == "scientaMaintSer") {
                                          echo "active";
                                        } ?>" href="scientaMaintSer.php">Maintenance base by time</a></li>
                        </ul>
                      <li><a class="dropdown-item <?php if ($page == "scientaCaliberationServ" || $page == "scientaCalibMoisture" || $page == "scientaCalibBasisweight") {
                                          echo "active";
                                        } ?>" href="scientaCaliberationServ.php">Calibration &raquo;</a>
                        <ul>
                          <li><a class="dropdown-item <?php if ($page == "scientaCalibMoisture") {
                                          echo "active";
                                        } ?>" href="scientaCalibMoisture.php">Moisture</a></li>
                          <li><a class="dropdown-item <?php if ($page == "scientaCalibBasisweight") {
                                          echo "active";
                                        } ?>" href="scientaCalibBasisweight.php">Basis Weight</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if ($page == "scanProSpareParts" || $page == "scanProUsedSystems" || $page == "scanProUsedSystemsEC90") { echo "active";  } ?>" href="javascript:;" role="button" data-bs-toggle="dropdown" aria-expanded="false">ScanPro</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item <?php if ($page == "scanProSpareParts" ) { echo "active";  } ?>" href="scanProSpareParts.php"> Spare Parts </a>
                      </li>
                      <li><a class="dropdown-item <?php if ($page == "scanProUsedSystems" || $page == "scanProUsedSystemsEC90") { echo "active";  } ?>" href="javascript:;"> Used Systems &raquo; </a>
                        <ul>
                          <li><a class="dropdown-item <?php if ($page == "scanProUsedSystems") { echo "active";  } ?>" href="scanProUsedSystems.php">FM-80</a></li>
                          <li><a class="dropdown-item <?php if ($page == "scanProUsedSystemsEC90") { echo "active";  } ?>" href="scanProUsedSystemsEC90.php">EC-90</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Paper Industry</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"> 3D-Online Basis weight Measuring </a></li>
                      <li><a class="dropdown-item" href="#"> 3D-Online Measuring Moisture </a></li>
                      <li><a class="dropdown-item" href="#"> Measuring Water content or Felts </a></li>
                      <li><a class="dropdown-item" href="#"> Kontroll av avvattning, våtsektion, press samt torksektion </a></li>
                      <li><a class="dropdown-item" href="#"> Kontroll av avvattning, våtsektion, press samt torksektion </a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Rental Services</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="RentalServices.html"> Basis Weigh Meter &raquo; </a>
                        <ul>
                          <li><a class="dropdown-item" href="#">Portable Machine Systems </a></li>
                          <li><a class="dropdown-item" href="#">Machine mounted Systems </a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"> Moisture Meters </a></li>
                      <li><a class="dropdown-item" href="#"> PLC & HMI Programmed</a></li>
                      <li><a class="dropdown-item" href="#"> Drain Pumps with Alarms </a></li>
                      <li><a class="dropdown-item" href="#"> Thermal IR Camara </a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Automation Services</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="Automation_Services.html"> CNC Services / PLC Services / Drives Services & HMI Services </a></li>
                    </ul>
                  </li>
                </ul>
                </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item"><a class="nav-link <?php if ($page == "contactus") { echo "active";  } ?>" href="contactus.php"> Contact Us </a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>