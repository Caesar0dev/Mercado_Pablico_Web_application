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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">

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
                    <img class="rounded-circle" src="admin_img/user.jpg" alt="" style="width: 40px; height: 40px;">
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
                <a href="/configuracion" class="nav-item nav-link"><i class="fas fa-cog me-2"></i>Configuración</a>
                <a href="/dashboard" class="nav-item nav-link"><i class="fas fa-question-circle me-2"></i>Ayunda</a>
                <a href="/dashboard" class="nav-item nav-link"><i class="fas fa-cubes me-2"></i></i>Bodega</a>
                <a href="/profile" class="nav-item nav-link active"><i class="fas fa-chart-bar me-2"></i>Perfil</a>
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
                                <img class="rounded-circle" src="admin_img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="admin_img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="admin_img/user.jpg" alt="" style="width: 40px; height: 40px;">
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
                        <img class="rounded-circle me-lg-2" src="admin_img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">John Doe</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="{{ url('profile') }}" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="{{ url('logout') }}" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Form Start -->
        <style>
            .page-content {
                min-height: calc(100vh - 179px);
            }
        </style>
        <div class="page-content">
            <div class="container-fluid pt-4 px-4 d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <h3 class="mb-0 me-2">Perfil | </h3>
                    <h6 class="mb-0">Aquí los usuarios pueden editar su información.</h6>
                </div>
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-primary m-1">Edit</button>
                    <button type="button" class="btn btn-primary">Save</button>
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
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <div class="d-flex justify-content-center mb-4">
                                <img id="selectedAvatar" src="admin_img/avatar.png"
                                     class="rounded-circle" style="width: 200px; height: 200px; object-fit: cover;" alt="example placeholder" />
                            </div>
                            <div class="d-flex justify-content-around">
                                <div class="btn btn-primary btn-rounded">
                                    <label class="form-label text-white m-1" for="customFile2" >Upload</label>
                                    <input type="file" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />
                                </div>
                                <button type="button" class="btn btn-primary" onclick="imagedelete()">Remove</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <form>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-3">
                                    <label for="skill" class="col-sm-2 col-form-label">Skill</label>
                                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                                        <select data-placeholder="Your Skills" class="chosen-select form-control" multiple tabindex="6">
                                            <option value=""></option>
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                                <option>Philadelphia Eagles</option>
                                                <option>Washington Redskins</option>
                                                <option>Chicago Bears</option>
                                                <option>Detroit Lions</option>
                                                <option>Green Bay Packers</option>
                                                <option>Minnesota Vikings</option>
                                                <option>Atlanta Falcons</option>
                                                <option>Carolina Panthers</option>
                                                <option>New Orleans Saints</option>
                                                <option>Tampa Bay Buccaneers</option>
                                                <option>Arizona Cardinals</option>
                                                <option>St. Louis Rams</option>
                                                <option>San Francisco 49ers</option>
                                                <option>Seattle Seahawks</option>
                                                <option>Buffalo Bills</option>
                                                <option>Miami Dolphins</option>
                                                <option>New England Patriots</option>
                                                <option>New York Jets</option>
                                                <option>Baltimore Ravens</option>
                                                <option>Cincinnati Bengals</option>
                                                <option>Cleveland Browns</option>
                                                <option>Pittsburgh Steelers</option>
                                                <option>Houston Texans</option>
                                                <option>Indianapolis Colts</option>
                                                <option>Jacksonville Jaguars</option>
                                                <option>Tennessee Titans</option>
                                                <option>Denver Broncos</option>
                                                <option>Kansas City Chiefs</option>
                                                <option>Oakland Raiders</option>
                                                <option>San Diego Chargers</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <form>
                                <div class="row mb-3">
                                    <label for="current_pw" class="col-sm-5 col-form-label">Current Password</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="current_pw">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="new_pw" class="col-sm-5 col-form-label">New Password</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="new_pw">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="confirm_pw" class="col-sm-5 col-form-label">Confirm Password</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="confirm_pw">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-around">
                                    <button type="button" class="btn btn-primary m-1">Edit</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->
        </div>

        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
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
{{--<script src="{{asset('admin_js/jquery.min.js')}}"></script>--}}
{{--<script src="{{asset('admin_js/popper.js')}}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
<script src="{{asset('admin_js/main1.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('admin_js/main.js')}}"></script>
<script>
    function displaySelectedImage(event, elementId) {
        const selectedImage = document.getElementById(elementId);
        const fileInput = event.target;

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                selectedImage.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    }

    function imagedelete(){
        // const user_image = document.getElementById(selectedAvatar);
        console.log(document.getElementById(selectedAvatar));

    }

</script>
</body>

</html>
