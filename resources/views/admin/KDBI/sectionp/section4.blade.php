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
    <link rel="stylesheet" href="../../../css/admin.css">
    <link rel="stylesheet" href="../../../css/navmenu.css">


    <title>Caturnawa - Admin</title>
</head>
<body>

<!--==================== Navbar ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <div class="nav_logo" id="nav-logo">
            <img class= "logo" src="../../../img/uf2.png" alt="Logo">
            <h2><a href="#" class="nav__logo" id="menu" style="margin-left: -3rem">Admin KDBI </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
<a href="#" id="menu"><img  class="sidelogo" id="sidelogo"  src="../../../img/uf2.png" alt="Logo"></a>
    <a href="{{url('admin/mainmenuKDBI1') }}"  class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="{{url('admin/mainmenuKDBI1') }}" class="penyisihan"><i class="fa fa-users"></i> Penyisihan</a>
    <a href="{{url('admin/mainmenuKDBI1') }}" class="semifinal"><i class="fa fa-list-alt"></i> SemiFinal</a>
    <a href="{{url('admin/mainmenuKDBI1') }}"  class="final"><i class="fa fa-trophy"></i> Final</a>
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

<div >
<div id="data-box">
        <h1 class="welcome" style="margin-bottom: -3rem; margin-top:auto">Sesi Ronde 2<br>
        Day 2</h1>
        
    <div style="max-width: 78rem;" class="card-list">
        <a href="{{url('admin/pesertaKDBId4') }}"  class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <span class="developer">Sesi 1</span>
                <h3>@lang('messages.dilaksanakan')</h3>
                <div class="arrow">
                    <i class="fa fa-arrow-right card-icon"></i>
                </div>
            </a>
            <a  href="{{url('admin/pesertaKDBI2d4') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <span class="designer">Sesi 2</span>
                <h3>@lang('messages.dilaksanakan')</h3>
                <div class="arrow">
                    <i class="fa fa-arrow-right card-icon"></i>
                </div>
            </a>

            <a href="{{url('admin/pesertaKDBI3d4') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <span class="manager">Sesi 3</span>
                <h3>@lang('messages.dilaksanakan')</h3>
                <div class="arrow">
                    <i class="fa fa-arrow-right card-icon"></i>
                </div>
            </a>
            
</div>

<div id="data-box">
    <div style="max-width: 78rem;" class="card-list">
        <a href="{{url('admin/pesertaKDBI4d4') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <span class="developer">Sesi 4</span>
                <h3>@lang('messages.dilaksanakan')</h3>
                <div class="arrow">
                    <i class="fa fa-arrow-right card-icon"></i>
                </div>
            </a>
            <a href="{{url('admin/pesertaKDBI5d4') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <span class="designer">Sesi 5</span>
                <h3>@lang('messages.dilaksanakan')</h3>
                <div class="arrow">
                    <i class="fa fa-arrow-right card-icon"></i>
                </div>
            </a>

            <a href="{{url('admin/pesertaKDBI6d4') }}" class="card-item">
                <img src="../../img/kdbi2.png" alt="Card Image">
                <span class="manager">Sesi 6</span>
                <h3>@lang('messages.dilaksanakan')</h3>
                <div class="arrow">
                    <i class="fa fa-arrow-right card-icon"></i>
                </div>
            </a>         
    </div>
</div>
</div>

</div>        
</div>
<!-- Script untuk memanggil file admin.js -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../../../js/adminKDBI.js"></script>

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
