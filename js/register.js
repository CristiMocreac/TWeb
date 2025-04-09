document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function (event) {
        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();
        
        if (username === "" || password === "") {
            event.preventDefault(); // Prevent form submission
            alert("Please fill in all fields.");
            return;
        }

        if (password.length < 6) {
            event.preventDefault();
            alert("Password must be at least 6 characters long.");
            return;
        }

        alert("Registration successful! Redirecting...");
    });
});
