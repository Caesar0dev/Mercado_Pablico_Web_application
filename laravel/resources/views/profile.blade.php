<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
            <div class="container-fluid pt-4 px-4">
                <div class="d-flex align-items-center">
                    <h3 class="mb-0 me-2">Perfil | </h3>
                    <h6 class="mb-0">Aquí los usuarios pueden editar su información.</h6>
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
                            <h6 class="mb-4">Basic Form</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Horizontal Form</h6>
                            <form>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                   id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                First radio
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                   id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Second radio
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Checkbox</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Floating Label</h6>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                       placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword"
                                       placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                          id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Comments</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">File Input</h6>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control bg-dark" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                <input class="form-control bg-dark" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Small file input example</label>
                                <input class="form-control form-control-sm bg-dark" id="formFileSm" type="file">
                            </div>
                            <div>
                                <label for="formFileLg" class="form-label">Large file input example</label>
                                <input class="form-control form-control-lg bg-dark" id="formFileLg" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Select</h6>
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="form-select" multiple aria-label="multiple select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Check, Radio & Switch</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"
                                       disabled>
                                <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                            </div>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                       value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                       value="option3" disabled>
                                <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                            </div>
                            <hr>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="flexSwitchCheckDisabled" disabled>
                                <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                                    input</label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                       id="flexSwitchCheckCheckedDisabled" checked disabled>
                                <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked
                                    switch checkbox input</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Input Group</h6>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                       aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's username"
                                       aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                            </div>
                            <label for="basic-url" class="form-label">Your vanity URL</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">.00</span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">With textarea</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Sizing</h6>
                            <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg"
                                   aria-label=".form-control-lg example">
                            <input class="form-control mb-3" type="text" placeholder="Default input"
                                   aria-label="default input example">
                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                                   aria-label=".form-control-sm example">
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

<!-- Template Javascript -->
<script src="{{asset('admin_js/main.js')}}"></script>
</body>

</html>
