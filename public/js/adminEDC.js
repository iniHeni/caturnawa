// adminEDC.js

let lastScrollTopHeader = 0; 
const header = document.getElementById('header');
const scrollThresholdHeader = 0; 

window.addEventListener('scroll', function() {
    let scrollTopHeader = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTopHeader > lastScrollTopHeader) {
 
        header.classList.add('hidden');
    } else if (lastScrollTopHeader - scrollTopHeader >= scrollThresholdHeader) {
       
        header.classList.remove('hidden');
    }

    lastScrollTopHeader = scrollTopHeader <= 0 ? 0 : scrollTopHeader; 
});



let lastScrollTopSidelogo =0;
const sidelogo = document.getElementById('sidelogo'); 
const scrollThresholdSidelogo = 0; 
window.addEventListener('scroll', function() {
    let scrollTopSidelogo = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTopSidelogo > lastScrollTopSidelogo) {
      
        sidelogo.classList.add('hide'); 
    } else if (lastScrollTopSidelogo - scrollTopSidelogo >= scrollThresholdSidelogo) {
   
        sidelogo.classList.remove('hide');
    }

    lastScrollTopSidelogo = scrollTopSidelogo <= 0 ? 0 : scrollTopSidelogo; 
});




let lastScrollTopSidebar = 0;
const sidebar = document.getElementById('sidebar');
const scrollThresholdSidebar = 0; 

window.addEventListener('scroll', function() {
    let scrollTopSidebar = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTopSidebar > lastScrollTopSidebar) {

        sidebar.classList.add('up');
    } else if (lastScrollTopSidebar - scrollTopSidebar >= scrollThresholdSidebar) {

        sidebar.classList.remove('up');
    }

    lastScrollTopSidebar = scrollTopSidebar <= 0 ? 0 : scrollTopSidebar; 
});

// document.addEventListener("DOMContentLoaded", function () {

//     function showContent(sectionId) {
//         const contents = document.querySelectorAll(".main-content > section");
//         contents.forEach((content) => {
//             content.style.display = "none";
//         });
//         document.getElementById(sectionId).style.display = "block";
//     }

//     $.ajax({
//         url: "/admin/beranda",
//         success: function (result) {
//             $("#home-container").html($(result).find("#home-content").html());
//         },
//         error: function () {
//             $("#home-container").html("Gagal memuat data.");
//         },
//     });

//     document
//         .getElementById("beranda")
//         .addEventListener("click", function (event) {
//             event.preventDefault();
//             showContent("home");


//             $.ajax({
//                 url: "/admin/beranda",
//                 success: function (result) {
//                     $("#home-container").html(
//                         $(result).find("#home-content").html()
//                     );
//                 },
//                 error: function () {
//                     $("#home-container").html("Gagal memuat data.");
//                 },
//             });
//         });



        document
        .getElementById("penyisihanEDC")
        .addEventListener("click", function (event) {
            event.preventDefault();


            const contents = document.querySelectorAll(
                ".main-content > section"
            );
            contents.forEach((content) => {
                content.style.display = "none";
            });

    
            document.getElementById("skor").style.display = "block";

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


            const contents = document.querySelectorAll(
                ".main-content > section"
            );
            contents.forEach((content) => {
                content.style.display = "none";
            });

            document.getElementById("skor").style.display = "block";

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


            const contents = document.querySelectorAll(
                ".main-content > section"
            );
            contents.forEach((content) => {
                content.style.display = "none";
            });

    
            document.getElementById("skor").style.display = "block";


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