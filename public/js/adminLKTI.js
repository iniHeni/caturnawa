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
