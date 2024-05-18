// Selecting form and input elements
const form = document.querySelector("form");
const passwordInput = document.getElementById("password");

// Function to display error messages
const showError = (field, errorText) => {
    field.classList.add("error");
    const errorElement = document.createElement("small");
    errorElement.classList.add("error-text");
    errorElement.innerText = errorText;
    field.closest(".input-field").appendChild(errorElement);
}

// Function to handle form submission
const handleFormData = (e) => {
    e.preventDefault();

    // Retrieving input elements
    const fullnameInput = document.getElementById("fullname");
    const emailInput = document.getElementById("email");
    const facultyInput = document.getElementById("faculty");
    const prodiInput = document.getElementById("prodi");
    const npmInput = document.getElementById("npm");
    const addresInput = document.getElementById("addres");
    const genderInput = document.getElementById("gender");
    const numberInput = document.getElementById("number");



    // Getting trimmed values from input fields
    const fullname = fullnameInput.value.trim();
    const email = emailInput.value.trim();
    const faculty = facultyInput.value.trim();
    const prodi = prodiInput.value.trim();
    const npm = npmInput.value.trim();
    const number = numberInput.value.trim();
    const addres = addresInput.value;
    const gender = genderInput.value;

    // Regular expression pattern for email validation
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    // Clearing previous error messages
    document.querySelectorAll(".input-field .error").forEach(field => field.classList.remove("error"));
    document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());

    // Performing validation checks
    if (fullname === "") {
        showError(fullnameInput, "Enter your full name");
    }
    if (!emailPattern.test(email)) {
        showError(emailInput, "Enter a valid email address");
    }
    if (faculty === "") {
        showError(passwordInput, "Enter Your Faculty");
    }
    if (prodi === "") {
        showError(dateInput, "Enter Your Study Program");
    }
    if (npm === "") {
        showError(dateInput, "Enter Your NPM");
    }
    if (number === "") {
        showError(dateInput, "Enter Your Correct Number");
    }
    if (gender === "") {
        showError(genderInput, "Select your gender");
    }
    if (addres === "") {
        showError(dateInput, "Enter Your FullAddres");
    }

    // Checking for any remaining errors before form submission
    const errorInputs = document.querySelectorAll(".input-field .error");
    if (errorInputs.length > 0) return;

    // Submitting the form
    form.submit();
}

// Handling form submission event
form.addEventListener("submit", handleFormData);