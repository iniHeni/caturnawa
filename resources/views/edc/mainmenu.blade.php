<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== Icon Web ===============-->
    <link rel="icon" href="../../img/uflogo.png">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../css/nowrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/navmenu.css">
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            top: 5rem;
            left: 0;
            background-color: #fff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            align-items: center;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: rgb(0, 0, 0);
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #b2b2b2;
        }
        
        .main-content {
            margin-left: 0;
            transition: margin-left 0.5s;
            padding: 16px;
        }
        .sidebar-open .sidebar {
            width: 230px;
        }
        .sidebar-open .main-content {
            margin-left: 230px;
        }
    </style>
    <title>Caturnawa - Admin</title>
</head>
<body>

<!--==================== Navbar ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <div class="nav-logo" id="nav-logo">
            <img src="../img/uf2.png" alt="Logo">
            <h2><a href="#" class="nav__logo" style="margin-left: -3rem">Admin</a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
    <a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="{{ url('data-peserta') }}"><i class="fa fa-users"></i> Peserta</a>
    <a href="{{ url('data-kategori') }}"><i class="fa fa-list-alt"></i> Kategori</a>
    <a href="{{ url('penilaian') }}"><i class="fa fa-star"></i> Skor</a>
    <a href="{{ url('babak') }}"><i class="fa fa-trophy"></i> Babak</a>
    <a href="{{ url('point') }}"><i class="fa fa-bar-chart"></i> Rank</a>
    <!-- resources/views/mainmenu.blade.php -->

<!-- Tautan untuk logout -->
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="fa fa-sign-out"></i> Logout
</a>

<!-- Form untuk logout (disembunyikan) -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

</div>

<!--==================== Main Content ====================-->
<div id="main-content" class="main-content">
    <!-- Your main content goes here -->
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,282.7C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,165.3C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

<!-- JavaScript -->
<script>
    document.getElementById("nav-logo").addEventListener("click", function() {
        document.body.classList.toggle("sidebar-open");
    });

    document.getElementById("close-btn").addEventListener("click", function() {
        document.body.classList.remove("sidebar-open");
    });
</script>
</body>
</html>
