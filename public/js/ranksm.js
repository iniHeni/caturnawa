document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll(".item");
  
    function checkRegistrationStatus() {
      const now = new Date();
      const currentYear = now.getFullYear();
  
      items.forEach((item, index) => {
        const dateElements = item.querySelectorAll(".num, .day");
        let dateString = Array.from(dateElements).map(el => el.textContent).join(" ");
  
        // Determine start and end dates based on ticket phase
        let phaseStart, phaseEnd;
        if (index === 0) {
          phaseStart = new Date(currentYear, 6, 23); // July 23rd
          phaseEnd = new Date(currentYear, 6, 26, 23, 59, 59); // July 26th, end of day
        } else if (index === 1) {
          phaseStart = new Date(currentYear, 7, 27); // August 27th
          phaseEnd = new Date(currentYear, 7, 11, 23, 59, 59); // August 11th, end of day
        } else if (index === 2) {
          phaseStart = new Date(currentYear, 7, 12); // August 12th
          phaseEnd = new Date(currentYear, 7, 23, 23, 59, 59); // August 23rd, end of day
        }
  
        const ticketsButton = item.querySelector(".tickets, .daftar"); 
  
        if (now >= phaseStart && now <= phaseEnd && !ticketsButton.classList.contains("daftar")) {
          ticketsButton.textContent = "Register Now!";
          ticketsButton.classList.remove("tickets");
          ticketsButton.classList.add("daftar");
          ticketsButton.addEventListener("click", function() {
            window.location.href = "/matalomba/daftarSM"; 
          });
        } else if ((now < phaseStart || now > phaseEnd) && !ticketsButton.classList.contains("tickets")) {
          ticketsButton.textContent = "Closed";
          ticketsButton.classList.remove("daftar");
          ticketsButton.classList.add("tickets");
          ticketsButton.href = "#";
        }
      });
    }
  
    // Initial check
    checkRegistrationStatus();
  
    setInterval(checkRegistrationStatus, 60000); // Check every minute
  });