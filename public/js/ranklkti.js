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
          phaseStart = new Date(currentYear, 5, 23); 
          phaseEnd = new Date(currentYear, 7, 11, 23, 59, 59); 
        } else if (index === 1) {
          phaseStart = new Date(currentYear, 7, 12); 
          phaseEnd = new Date(currentYear, 9, 30, 23, 59, 59); 
        }
  
        const ticketsButtonTutup = item.querySelector(".tickets"); 
        const ticketsButtonDaftar = item.querySelector(".daftar");
        const ticketsButtonDaftar1 = item.querySelector(".daftar1");
  
        if (now >= phaseStart && now <= phaseEnd) {
          ticketsButtonDaftar.style.display = "block"; 
          ticketsButtonDaftar1.style.display = "block"; 
          ticketsButtonTutup.style.display = "none";   
          
          ticketsButtonDaftar.addEventListener("click", function() {
              window.location.href = "/matalomba/daftarSPC";
          });
          ticketsButtonDaftar1.addEventListener("click", function() {
            window.location.href = "/matalomba/daftarUNASSPC";
        });
        } else {
          ticketsButtonTutup.style.display = "block";  
          ticketsButtonDaftar.style.display = "none";
          ticketsButtonDaftar1.style.display = "none";  
  
          ticketsButtonTutup.href = "#"; 
        }
      });
    }
  
    // Initial check
    checkRegistrationStatus();
  
    setInterval(checkRegistrationStatus, 60000); // Check every minute
  });