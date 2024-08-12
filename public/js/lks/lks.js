// Konfirmasi Logout
document
    .getElementById("logoutBtn")
    .addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah submit form secara langsung
        $("#logoutModal").modal("show"); // Tampilkan modal konfirmasi logout
    });

document
    .getElementById("confirmLogoutBtn")
    .addEventListener("click", function () {
        document.getElementById("logoutForm").submit(); // Submit form setelah konfirmasi
    });
