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

    // Event listener untuk tombol "Peserta"
    document
        .getElementById("data-pesertaEDC")
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
                url: "/admin/pesertaEDC",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        });

    // Event listener untuk tombol "Kategori"
    document
        .getElementById("kategori-link")
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
                url: "/admin/kategoriEDC",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
        });

    // Event listener untuk tombol "Kategori"
    document
        .getElementById("ronde-link")
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
                url: "/admin/babakEDC",
                success: function (result) {
                    $("#data-container").html(result);
                },
                error: function () {
                    $("#data-container").html("Gagal memuat data.");
                },
            });
            // document.getElementById("nav-logo").addEventListener("click", function () {
            //         document.body.classList.toggle("sidebar-close");
            //     });
        });
});
