document.addEventListener("DOMContentLoaded", function () {
    function showContent(sectionId) {
        const contents = document.querySelectorAll(".main-content > section");
        contents.forEach((content) => {
            content.style.display = "none";
        });
        document.getElementById(sectionId).style.display = "block";
    }

    $.ajax({
        url: "/admin/mainmenuSM1",
        success: function (result) {
            $("#home-container").html($(result).find("#home-content").html());
        },
        error: function () {
            $("#home-container").html("Gagal memuat data.");
        },
    });

    document.getElementById("beranda").addEventListener("click", function (event) {
        event.preventDefault();
        showContent("home");

        $.ajax({
            url: "/admin/beranda1",
            success: function (result) {
                $("#home-container").html($(result).find("#home-content").html());
            },
            error: function () {
                $("#home-container").html("Gagal memuat data.");
            },
        });
    });

    document.getElementById("data-pesertaSM").addEventListener("click", function (event) {
        event.preventDefault();
        showContent("skor");

        $.ajax({
            url: "/admin/pesertaSM1",
            success: function (result) {
                $("#data-container").html(result);
            },
            error: function () {
                $("#data-container").html("Gagal memuat data.");
            },
        });
    });

    document.getElementById("kategori-link").addEventListener("click", function (event) {
        event.preventDefault();
        showContent("skor");

        $.ajax({
            url: "/admin/kategoriSM1",
            success: function (result) {
                $("#data-container").html(result);
            },
            error: function () {
                $("#data-container").html("Gagal memuat data.");
            },
        });
    });

    document.getElementById("ronde-link").addEventListener("click", function (event) {
        event.preventDefault();
        showContent("skor");

        $.ajax({
            url: "/admin/babakSM1",
            success: function (result) {
                $("#data-container").html(result);
            },
            error: function () {
                $("#data-container").html("Gagal memuat data.");
            },
        });
    });
});
