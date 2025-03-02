function toggleMenu() {
    const menu = document.querySelector(".nav-links");
    menu.style.display = (menu.style.display === "flex") ? "none" : "flex";
}
document.getElementById("appointmentForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const email = "your-email@example.com";  // Change to your email

    fetch("send-email.php", {
        method: "POST",
        body: formData
    }).then(response => response.text())
      .then(data => alert(data))
      .catch(error => console.error("Error:", error));
});