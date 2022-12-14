<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VirtMed - Citas M&eacute;dico</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- inicio -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="menu_med.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>VirtMed - Medicos</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="menu_med.html" class="nav-item nav-link active">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Consultas</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="pacientes.php" class="dropdown-item">Pacientes</a>
                        <a href="recetar.html" class="dropdown-item">Recetar</a>
                <a href="citas_medicas.php" class="dropdown-item">Citas</a>
                       
                    </div>
                </div>
                <a href="tutorial_med.html" class="nav-item nav-link">VIDEO TUTORIAL</a>
                
            </div>
            <a href="login_med.html" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">CERRAR SESI&Oacute;N<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Formulario de citas -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Citas</h6>
                <h1 class="mb-5">Citas Pendientes a Confirmar:</h1>
            </div>
                    <form class="formulario" action="cita_med.php" method="post">
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-striped" action="cita_med.php" method="post">
                                    <thead>
                                      <tr>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        
                                        
                                        
                                      </tr>
                                    </thead>
                                    <tbody>

<?php

$conexion = mysqli_connect("localhost", "root", "", "virtmed") or
  die("Problemas con la conexi??n");

$registros = mysqli_query($conexion, "select fecha,hora
                      from cita ") or
  die("Problemas en el select:" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {
 echo " <tr>
  <td>" . $reg['fecha'] . "</td>
  <td>" . $reg['hora'] . "</td>


 
</tr>";
  
}

mysqli_close($conexion);
?>
                                  </tbody>
                                    </table>
                            </div>
                          </div>
                           
                           
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin formulario de citas  -->


    <!-- pie de pagina -->
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                         Creado por &copy; <a class="border-bottom" href="#">SoulidPages</a>
                        
                    </div>
                </div>
            </div>
        </div>
    
    <!-- fin de pie de pagina -->


    <!-- subir -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- librerias JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>