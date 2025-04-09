$(document).ready(function () {
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        const username = $('#username').val().trim();
        const password = $('#password').val().trim();

        if (username === '' || password === '') {
            alert("Please fill in all fields.");
            return;
        }

        $.ajax({
            url: 'login.php',
            method: 'POST',
            data: { username: username, password: password },
            success: function (response) {
                if (response === "success") {
                    window.location.href = "index.php";
                } else {
                    alert(response); // Ex: "Invalid username or password"
                }
            },
            error: function () {
                alert("An error occurred. Please try again.");
            }
        });
    });
});
