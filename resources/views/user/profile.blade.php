<x-layoutUser>
  {{-- CSS khusus halaman profile --}}
  <link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">

  <main class="profile-container">
    <h1>Your Profile</h1>
    <div class="profile-card">
      <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="User Icon" class="profile-avatar">
      <div class="profile-info">
        <p><strong>Email:</strong> <span id="profile-email"></span></p>
        <p><strong>Role:</strong> <span id="profile-role"></span></p>
      </div>
    </div>
  </main>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const isLoggedIn = localStorage.getItem("isLoggedIn") === "true";
      const userEmail = localStorage.getItem("userEmail");
      const userRole = localStorage.getItem("role") || "User";

      // Kalau belum login, arahkan ke login
      if (!isLoggedIn || !userEmail) {
        alert("You must sign in to see it.");
        window.location.href = "/auth/login";
        return;
      }

      // Tampilkan data user
      document.getElementById("profile-email").textContent = userEmail;
      document.getElementById("profile-role").textContent = userRole;

      // Inisial di icon (jika ada komponen navbar dari layoutUser)
      const userInitial = document.querySelector(".user-initial");
      if (userInitial) {
        userInitial.textContent = userEmail.charAt(0).toUpperCase();
      }

      // Tombol Sign Out
      const signOutBtn = document.querySelector(".sign-out");
      if (signOutBtn) {
        signOutBtn.addEventListener("click", (e) => {
          e.preventDefault();
          localStorage.removeItem("isLoggedIn");
          localStorage.removeItem("role");
          localStorage.removeItem("userEmail");
          window.location.href = "/user/index";
        });
      }
    });
  </script>
</x-layoutUser>
