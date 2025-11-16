function validateForm() {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    if (username === "" || password === "") {
        alert("Please fill out all fields.");
        return false; // Prevent form submission
    }

    // You can add more validation here (like password length, username format, etc.)
    alert("Login Successful!");
    return true; // Allow form submission
}