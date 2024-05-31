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
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/navmenu.css">
    
    <title>Caturnawa - Admin</title>
</head>
<body>

<!--==================== Navbar ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <div class="nav_logo" id="nav-logo">
            <img src="../../img/uf2.png" alt="Logo">
            <h2><a href="#" class="nav__logo" id="menu" style="margin-left: -3rem">Admin SPC </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
    <a href="#" id="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="#" id="data-pesertaLKTI"><i class="fa fa-users"></i> Peserta</a>
    <a href="#" id="kategori-link"><i class="fa fa-list-alt"></i> Kategori</a>
    <a href="#" id="penilaian-link"><i class="fa fa-star"></i> Skor</a>
    <a href="#" id="ronde-link"><i class="fa fa-trophy"></i> Babak</a>
    <a href="#" id="rank-link"><i class="fa fa-bar-chart"></i> Rank</a>
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

<!--==================== Main Content ====================-->
<div id="main-content" class="main-content">
    <section id="home" style="display: block;">
        <div id="home-container">
            <!-- Ini adalah tempat konten beranda -->
            <h3 class="welcome" >@lang('messages.admin')</h3>
            <h3 class="welcome" >@lang('messages.admin1')</h3>
        </div>
    </section>
    <section id="skor" style="display: none;">
        <div id="data-container">
            <!-- Konten tabel peserta akan dimuat di sini -->
        </div>
    </section>
</div>
<!-- Script untuk memanggil file admin.js -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../../js/adminLKTI.js"></script>
<script>
document.getElementById("menu").addEventListener("click", function () {
    document.body.classList.toggle("sidebar-close");
});

document.addEventListener("DOMContentLoaded", function () {
    function showContent(sectionId) {
        const contents = document.querySelectorAll(".main-content > section");
        contents.forEach((content) => {
            content.style.display = "none";
        });
        document.getElementById(sectionId).style.display = "block";
    }

    $.ajax({
        url: "/admin/mainmenuLKTI1",
        success: function (result) {
            $("#home-container").html($(result).find("#home-content").html());
        },
        error: function () {
            $("#home-container").html("Gagal memuat data.");
        },
    });

    document
        .getElementById("beranda")
        .addEventListener("click", function (event) {
            event.preventDefault();
            showContent("home");

            $.ajax({
                url: "/admin/beranda1",
                success: function (result) {
                    $("#home-container").html(
                        $(result).find("#home-content").html()
                    );
                },
                error: function () {
                    $("#home-container").html("Gagal memuat data.");
                },
            });
        });

    document
        .getElementById("data-pesertaLKTI")
        .addEventListener("click", function (event) {
            event.preventDefault();
            showContent("skor");

            $.ajax({
                url: "/admin/pesertaLKTI1",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        });

    document
        .getElementById("kategori-link")
        .addEventListener("click", function (event) {
            event.preventDefault();
            showContent("skor");

            $.ajax({
                url: "/admin/kategoriLKTI1",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        });

    document
        .getElementById("ronde-link")
        .addEventListener("click", function (event) {
            event.preventDefault();
            showContent("skor");

            $.ajax({
                url: "/admin/babakLKTI1",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        });
});

</script>
</body>
</html>
