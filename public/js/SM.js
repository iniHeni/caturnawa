// adminSM.js
let lastScrollTopHeader = 0;
const header = document.getElementById('header');
const scrollThresholdHeader = 0; 

window.addEventListener('scroll', function() {
    let scrollTopHeader = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTopHeader > lastScrollTopHeader) {
        // Scrolling down
        header.classList.add('hidden'); 
    } else if (lastScrollTopHeader - scrollTopHeader >= scrollThresholdHeader) {
        // Scrolling up with a threshold
        header.classList.remove('hidden');
    }

    lastScrollTopHeader = scrollTopHeader <= 0 ? 0 : scrollTopHeader; 
});




