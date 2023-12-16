<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Facto</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <div class="container-fluid pt-4 px-4">
            <a href="/dashboard" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">Ofertaadjudicada</h3>
            </a>
            <div class="row g-4">
                <div class="col-sm-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">ID Licitación : {{$project->num}}</h6>
                        <p class="h1 text-center" id="title">{{ $project->title }}</p>
                        <div class="rounded p-4 pb-0 mb-4">
                                <blockquote class="blockquote">
                                    <p class="text-white text-center" id="description">{{$project->description}}</p>
                                </blockquote>
{{--                                <figcaption class="blockquote-footer">--}}
{{--                                    Someone famous in <cite title="Source Title">Source Title</cite>--}}
{{--                                </figcaption>--}}
                        </div>
                        <div class="d-flex justify-content-around mb-3">
                            <p>Monto : {{$project->budget}}</p>
                            <p>Fecha de publicación : {{$project->post_date}}</p>
                            <p>Fecha de cierre : {{$project->deadline}}</p>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <button type="submit" class="btn btn-primary" id="bid">escribir mi oferta</button>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control"  placeholder="Leave a comment here"
                                      id="floatingTextarea" style="height: 300px; background-color:transparent"></textarea>
                            <label for="floatingTextarea">propuesta</label>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mt-3">licitación</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#bid").click(function(){
                    var title = $("#title").html(); // Set this according to your needs
                    console.log("title>>>>>>>>>>>>", title);
                    var instructions = `The GPT will craft job proposals in Spanish, regardless of the original language of the client's job description. Please provide a brief sample bid, consisting of only 5-7 short sentences. It should highlight a technical problem, my experience, and the solution I offer for the project. The bid should start with "Hello" and end with "Best regards"
The project proposal should not touch on timelines or budgets.
I'd like to suggest to the client that we communicate for further discussions on the project.`; // Set this
                    var details = $("#description").html(); // Set this

                    $.ajax({
                        type: 'POST',
                        url: '/project/{id}', // Point this to a Laravel route
                        data: {
                            title: title,
                            instructions: instructions,
                            details: details
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                        },
                        success: function(data){
                            $("#floatingTextarea").val(data.linkedinPost)
                            console.log(data);
                            // Process the response
                        },
                        error: function(xhr, status, error){
                            // Handle error
                            console.error(error);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
