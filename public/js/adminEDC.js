// adminEDC.js

let lastScrollTopHeader = 0; // Gunakan variabel yang berbeda untuk header
const header = document.getElementById('header');
const scrollThresholdHeader = 70; // Jarak scroll sebelum navbar berubah visibilitas

window.addEventListener('scroll', function() {
    let scrollTopHeader = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTopHeader > lastScrollTopHeader) {
        // Scrolling down
        header.classList.add('hidden');
    } else if (lastScrollTopHeader - scrollTopHeader >= scrollThresholdHeader) {
        // Scrolling up with a threshold
        header.classList.remove('hidden');
    }

    lastScrollTopHeader = scrollTopHeader <= 0 ? 0 : scrollTopHeader; // For Mobile or negative scrolling
});

// adminEDC.js

// adminEDC.js


let lastScrollTopSidelogo =0;
const sidelogo = document.getElementById('sidelogo'); // Mengambil elemen gambar sidebar
const scrollThresholdSidelogo = 60; // Jarak scroll sebelum sidebar berubah
window.addEventListener('scroll', function() {
    let scrollTopSidelogo = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTopSidelogo > lastScrollTopSidelogo) {
        // Scrolling down
        sidelogo.classList.add('hide'); 
    } else if (lastScrollTopSidelogo - scrollTopSidelogo >= scrollThresholdSidelogo) {
        // Scrolling up with a threshold
        sidelogo.classList.remove('hide');
    }

    lastScrollTopSidelogo = scrollTopSidelogo <= 0 ? 0 : scrollTopSidelogo; // For Mobile or negative scrolling
});



// Bagian baru yang ingin Anda tambahkan:
let lastScrollTopSidebar = 0;
const sidebar = document.getElementById('sidebar');
const scrollThresholdSidebar = 60; // Jarak scroll sebelum sidebar berubah

window.addEventListener('scroll', function() {
    let scrollTopSidebar = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTopSidebar > lastScrollTopSidebar) {
        // Scrolling down
        sidebar.classList.add('up');
    } else if (lastScrollTopSidebar - scrollTopSidebar >= scrollThresholdSidebar) {
        // Scrolling up with a threshold
        sidebar.classList.remove('up');
    }

    lastScrollTopSidebar = scrollTopSidebar <= 0 ? 0 : scrollTopSidebar; // For Mobile or negative scrolling
});


// EDC
document.addEventListener("DOMContentLoaded", function () {
    // Fungsi untuk menampilkan konten berdasarkan ID
    function showContent(sectionId) {
        const contents = document.querySelectorAll(".main-content > section");
        contents.forEach((content) => {
            content.style.display = "none";
        });
        document.getElementById(sectionId).style.display = "block";
    }

    // Muat konten beranda saat halaman utama dimuat
    $.ajax({
        url: "/admin/beranda",
        success: function (result) {
            $("#home-container").html($(result).find("#home-content").html());
        },
        error: function () {
            $("#home-container").html("Gagal memuat data.");
        },
    });

    // Event listener untuk tombol "Dashboard"
    document
        .getElementById("beranda")
        .addEventListener("click", function (event) {
            event.preventDefault();
            showContent("home");

            // Muat ulang konten beranda saat tombol Dashboard diklik
            $.ajax({
                url: "/admin/beranda",
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
        .getElementById("penyisihanEDC")
        .addEventListener("click", function (event) {
            event.preventDefault();

            // Sembunyikan semua konten
            const contents = document.querySelectorAll(
                ".main-content > section"
            );
            contents.forEach((content) => {
                content.style.display = "none";
            });

            // Tampilkan konten tabel
            document.getElementById("skor").style.display = "block";

            // Ambil data dari halaman lain menggunakan AJAX
            $.ajax({
                url: "/admin/penyisihanEDC",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        });


        
        document
        .getElementById("semifinalEDC")
        .addEventListener("click", function (event) {
            event.preventDefault();

            // Sembunyikan semua konten
            const contents = document.querySelectorAll(
                ".main-content > section"
            );
            contents.forEach((content) => {
                content.style.display = "none";
            });

            // Tampilkan konten tabel
            document.getElementById("skor").style.display = "block";

            // Ambil data dari halaman lain menggunakan AJAX
            $.ajax({
                url: "/admin/semifinalEDC",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        });




        document
        .getElementById("finalEDC")
        .addEventListener("click", function (event) {
            event.preventDefault();

            // Sembunyikan semua konten
            const contents = document.querySelectorAll(
                ".main-content > section"
            );
            contents.forEach((content) => {
                content.style.display = "none";
            });

            // Tampilkan konten tabel
            document.getElementById("skor").style.display = "block";

            // Ambil data dari halaman lain menggunakan AJAX
            $.ajax({
                url: "/admin/finalEDC",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        });





        // document
        // .getElementById("section1")
        // .addEventListener("click", function (event) {
        //     event.preventDefault();

        //     // Sembunyikan semua konten
        //     const contents = document.querySelectorAll(
        //         ".main-content > section"
        //     );
        //     contents.forEach((content) => {
        //         content.style.display = "none";
        //     });

        //     // Tampilkan konten tabel
        //     document.getElementById("skor").style.display = "block";

        //     // Ambil data dari halaman lain menggunakan AJAX
        //     $.ajax({
        //         url: "/admin/section1",
        //         success: function (result) {
        //             $("#data-container").html(result);
        //         },
        //         error: function () {
        //             $("#data-container").html("Gagal memuat data.");
        //         },
        //     });
        // });






    // // Event listener untuk tombol "Peserta"
    // document
    //     .getElementById("data-pesertaEDC")
    //     .addEventListener("click", function (event) {
    //         event.preventDefault();

    //         // Sembunyikan semua konten
    //         const contents = document.querySelectorAll(
    //             ".main-content > section"
    //         );
    //         contents.forEach((content) => {
    //             content.style.display = "none";
    //         });

    //         // Tampilkan konten tabel
    //         document.getElementById("skor").style.display = "block";

    //         // Ambil data dari halaman lain menggunakan AJAX
    //         $.ajax({
    //             url: "/admin/pesertaEDC",
    //             success: function (result) {
    //                 $("#data-container").html(result);
    //             },
    //             error: function () {
    //                 $("#data-container").html("Gagal memuat data.");
    //             },
    //         });
    //     });



    //     // Event listener untuk tombol "Peserta2"
    // document
    // .getElementById("data-pesertaEDC2")
    // .addEventListener("click", function (event) {
    //     event.preventDefault();

    //     // Sembunyikan semua konten
    //     const contents = document.querySelectorAll(
    //         ".main-content > section"
    //     );
    //     contents.forEach((content) => {
    //         content.style.display = "none";
    //     });

    //     // Tampilkan konten tabel
    //     document.getElementById("skor").style.display = "block";

    //     // Ambil data dari halaman lain menggunakan AJAX
    //     $.ajax({
    //         url: "/admin/pesertaEDC2",
    //         success: function (result) {
    //             $("#data-container").html(result);
    //         },
    //         error: function () {
    //             $("#data-container").html("Gagal memuat data.");
    //         },
    //     });
    // });

   
            // document.getElementById("nav-logo").addEventListener("click", function () {
            //         document.body.classList.toggle("sidebar-close");
            //     });
        });
