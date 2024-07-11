document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll(".item");
  
    function checkRegistrationStatus() {
      const now = new Date();
      const currentYear = now.getFullYear();
  
      items.forEach((item, index) => {
        const dateElements = item.querySelectorAll(".num, .day");
        let dateString = Array.from(dateElements).map(el => el.textContent).join(" ");
  
  
        let phaseStart, phaseEnd;
        if (index === 0) {
          phaseStart = new Date(currentYear, 5, 15); 
          phaseEnd = new Date(currentYear, 6, 26, 23, 59, 59); 
        } else if (index === 1) {
          phaseStart = new Date(currentYear, 7, 27); 
          phaseEnd = new Date(currentYear, 7, 11, 23, 59, 59); 
        } else if (index === 2) {
          phaseStart = new Date(currentYear, 7, 12); 
          phaseEnd = new Date(currentYear, 7, 23, 23, 59, 59); 
        }
  
        const ticketsButtonTutup = item.querySelector(".tickets"); 
        const ticketsButtonDaftar = item.querySelector(".daftar");
  
        if (now >= phaseStart && now <= phaseEnd) {
          ticketsButtonDaftar.style.display = "block"; 
          ticketsButtonTutup.style.display = "none";   
          
          ticketsButtonDaftar.addEventListener("click", function() {
              window.location.href = "/matalomba/daftarEDC";
          });
        } else {
          ticketsButtonTutup.style.display = "block";  
          ticketsButtonDaftar.style.display = "none";  
  
          ticketsButtonTutup.href = "#"; 
        }
      });
    }
  
    checkRegistrationStatus();
  
    setInterval(checkRegistrationStatus, 60000); // Check every minute
  });