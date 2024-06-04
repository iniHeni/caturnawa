<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== Icon Web ===============-->
    <link rel="icon" href="../../../img/uflogo.png">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../css/nowrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../css/admin.css">
    <link rel="stylesheet" href="../../../../css/navmenu.css">


    <title>Caturnawa - Admin</title>
</head>
<body>

<!--==================== Navbar ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <div class="nav_logo" id="nav-logo">
            <img class= "logo" src="../../img/uf2.png" alt="Logo">
            <h2><a href="#" class="nav__logo" id="menu" style="margin-left: -3rem">Admin EDC </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
<a href="#" id="menu"><img  class="sidelogo" id="sidelogo"  src="../../img/uf2.png" alt="Logo"></a>
    <a href="{{url('admin/mainmenuEDC') }}"  class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="{{url('admin/mainmenuEDC') }}" class="penyisihanEDC"><i class="fa fa-users"></i> Penyisihan</a>
    <a href="{{url('admin/mainmenuEDC') }}" class="semifinalEDC"><i class="fa fa-list-alt"></i> SemiFinal</a>
    <a href="{{url('admin/mainmenuEDC') }}"  class="finalEDC"><i class="fa fa-trophy"></i> Final</a>
    <button onclick="goBack()" class="btn btn-primary mt-2"><i class="fa fa-arrow-left"></i> Back</button>
    <!-- resources/views/mainmenu.blade.php -->

    <!-- Tautan untuk logout -->
    <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i> Logout
    </a>

    <!-- Form untuk logout (disembunyikan) -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

<div id="data-container">
    <section id="skor">
        <div class="container" style="display: flex; justify-content: center;height:70rem">
            <div style="width: 100%;">
                <h1 class="welcome" style="margin-bottom: 1rem; margin-top:auto">Data Sesi 3</h1>
                <div class="table-responsive" style="max-height: 1000px; overflow-x: auto; overflow-y: auto; position: static;">
                    <table class="table table-bordered table-striped" style="min-width: 650px; margin-bottom: 0; border-collapse: collapse;">
                        <thead style="position: static; top: -1; z-index: 10;">
                            <tr>
                                <th scope="col" rowspan="2">No</th>
                                <th scope="col" rowspan="2">Round</th>
                                <th scope="col" rowspan="2">Session</th>
                                <th scope="col" rowspan="2">Adjudicator</th>
                                <th scope="col" rowspan="2">Room </th>
                                <th scope="col" rowspan="2">Team</th>
                                <th scope="col" colspan="4">Position</th>
                                <th scope="col" rowspan="2">Position</th>
                                <th scope="col" rowspan="2">Participant Name</th>
                                <th scope="col" colspan="2">Score</th>
                                <th scope="col" rowspan="2">Rank</th>
                                <th scope="col" rowspan="2">Victory Point</th>
                                <th scope="col" rowspan="2">actions</th>
                            </tr>
                            <tr>
                                <th scope="col">OG</th>
                                <th scope="col">OO</th>
                                <th scope="col">CG</th>
                                <th scope="col">CO</th>
                                <th scope="col">Individu</th>
                                <th scope="col">Team</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 10; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td></td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
        </div>
        <style>
            .table-bordered td,
            .table-bordered th {
                border: 2px solid black !important;
                text-align: center;
                vertical-align: middle;
            }

            thead th {
                background-color: #0d6efd !important;
            }
        </style>
    </section>
</div>

<!-- Script untuk memanggil file admin.js -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../../../../js/adminEDC.js"></script>

<script>
    function goBack() {
        window.history.back();
    }
document.getElementById("menu").addEventListener("click", function () {
    document.body.classList.toggle("sidebar-open");
});


</script>
</body>
</html>