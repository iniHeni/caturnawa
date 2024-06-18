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
  
        const ticketsButton = item.querySelector(".tickets, .daftar"); 
  
        if (now >= phaseStart && now <= phaseEnd && !ticketsButton.classList.contains("daftar")) {
          ticketsButton.textContent = "Register Now!";
          ticketsButton.classList.remove("tickets");
          ticketsButton.classList.add("daftar");
          ticketsButton.addEventListener("click", function() {
            window.location.href = "/matalomba/daftarEDC"; 
          });
        } else if ((now < phaseStart || now > phaseEnd) && !ticketsButton.classList.contains("tickets")) {
          ticketsButton.textContent = "Tutup/Closed";
          ticketsButton.classList.remove("daftar");
          ticketsButton.classList.add("tickets");
          ticketsButton.href = "#";
        }
      });
    }
  
    checkRegistrationStatus();
  
    setInterval(checkRegistrationStatus, 60000); // Check every minute
  });