<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Facto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
{{--    <link href="img/favicon.ico" rel="icon">--}}

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('admin_lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('admin_css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('admin_css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-secondary navbar-dark">
            <a href="/dashboard" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">Ofertaadjudicada</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Jhon Doe</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="/dashboard" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Inicio</a>
                <a href="/search" class="nav-item nav-link"><i class="fas fa-search me-2"></i>Búsqueda</a>
                <a href="/follow-up" class="nav-item nav-link"><i class="fas fa-sticky-note me-2"></i>Seguimiento</a>
                <a href="/calendar" class="nav-item nav-link"><i class="fas fa-calendar me-2"></i>Calendario</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-chart-bar me-2"></i>Reportes</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="/reports-tenders" class="dropdown-item">Licitaciones</a>
                        <a href="/reports-convenio" class="dropdown-item">Convenio Marco</a>
                    </div>
                </div>
                <a href="/dashboard" class="nav-item nav-link"><i class="fas fa-store me-2"></i>Convenio Marco</a>
                <a href="/configuracion" class="nav-item nav-link active"><i class="fas fa-cog me-2"></i>Configuración</a>
                <a href="/dashboard" class="nav-item nav-link"><i class="fas fa-question-circle me-2"></i>Ayunda</a>
                <a href="/dashboard" class="nav-item nav-link"><i class="fas fa-cubes me-2"></i></i>Bodega</a>
                <a href="/dashboard" class="nav-item nav-link"><i class="fas fa-chart-bar me-2"></i>Reportes</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="/dashboard" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control bg-dark border-0" type="search" placeholder="Search">
            </form>
            <h6 class="ms-2" style="margin-bottom: 0px;"> Buenas tardes, John. </h6>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Message</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notificatin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all notifications</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">John Doe</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="{{ route('logout') }}" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
        <style>
            .page-content {
                min-height: calc(100vh - 179px);
            }
        </style>
        <div class="page-content">
            <div class="container-fluid pt-4 px-4">
                <div class="d-flex align-items-center">
                    <h3 class="mb-0 me-2">Configuración | </h3>
                    <h6 class="mb-0">Actualiza la información para tener un mejor perfilamiento en tu búsqueda.</h6>
                </div>
            </div>
            <!-- Sale & Revenue Start -->
            <style>
                .card{
                    height: 100%;
                    flex-direction: row;
                }
            </style>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4 mb-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Palabras Claves</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Ingresa todas las que quieras. Usa palabras simples o compuestas. EJ: <br> guardia, plaga, computador, articulos de ferretería.</label>
                                    <div class="d-flex align-items-center">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nueva palabra clave" aria-describedby="emailHelp">
                                        <button type="button" class="btn btn-primary ms-2">Agregar</button>
                                    </div>

                                    <!-- <div id="emailHelp" class="form-text">Ingresa todas las que quieras. Usa palabras simples o compuestas. EJ: guardia, plaga, computador, articulos de ferreteria.
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mb-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Rubros</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Busca tus rubros y seleccionalos desde la lista. Te recomendamos marcar la casilla a la derecha para incluir todo los resultados.</label>
                                    <div class="d-flex align-items-center">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nuevo rubro" aria-describedby="emailHelp">
                                        <button type="button" class="btn btn-primary ms-2">Agregar</button>
                                    </div>

                                    <!-- <div id="emailHelp" class="form-text">Ingresa todas las que quieras. Usa palabras simples o compuestas. EJ: guardia, plaga, computador, articulos de ferreteria.
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mb-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Códigos Convenio Marco</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Agrega los códigos de convenio marco de las grandes compras que quieres seguir.</label>
                                    <div class="d-flex align-items-center">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nuevo código" aria-describedby="emailHelp">
                                        <button type="button" class="btn btn-primary ms-2">Agregar</button>
                                    </div>

                                    <!-- <div id="emailHelp" class="form-text">Ingresa todas las que quieras. Usa palabras simples o compuestas. EJ: guardia, plaga, computador, articulos de ferreteria.
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mb-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Buscador</h6>
                            <div class="row g-4 mb-4">
                                <div class="col-sm-4 col-xl-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckDefault" checked>
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Buscar Licitaciones </label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xl-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckDefault" checked>
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Buscar Compras Ágiles</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xl-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault"> Convenio Marco </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-sm-4 col-xl-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckDefault" checked>
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Buscar Cotizaciones</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xl-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                               id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Buscar Grandes Compras</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-info m-2">Guardar</button>
                    <button type="button" class="btn btn-light m-2">Cancelar</button>
                </div>
            </div>
            <!-- Sale & Revenue End -->
        </div>
        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#">Ofertaadjudicada</a>, All Right Reserved.
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        Designed By <a href="https://freelancer.com/u/kozaktr">Marsel Kozak</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('admin_lib/chart/chart.min.js')}}"></script>
<script src="{{asset('admin_lib/easing/easing.min.js')}}"></script>
<script src="{{asset('admin_lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('admin_lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('admin_lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('admin_lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('admin_lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('admin_js/main.js')}}"></script>
</body>

</html>
