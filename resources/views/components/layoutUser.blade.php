<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Mug & Plate' }}</title>
  <link rel="stylesheet" href="{{ asset('css/user/style.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
  <!-- HEADER -->
  <header>
    <div class="logo">Mug & Plate</div>
    <nav>
      <a href="{{ url('/') }}">Home</a>
      <a href="{{ url('/ours') }}">Ours</a>
      <a href="{{ url('/blog') }}">Blog</a>
      <a href="{{ url('/about') }}">About Us</a>
    </nav>

    <div class="right-icons">
      <a href="{{ url('/cart') }}" class="cart">🛒</a>

      <!-- BELUM LOGIN -->
      <details class="user-menu not-logged">
        <summary class="user-icon">
          <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="User Icon">
        </summary>
        <div class="dropdown">
          <h4>Account</h4>
          <a href="{{ url('/auth/login') }}" class="btn primary">Sign in</a>
          <div class="btn-row">
            <a href="#" class="btn require-login"><span>👜</span> Orders</a>
            <a href="#" class="btn require-login"><span>👤</span> Profile</a>
          </div>
        </div>
      </details>

      <!-- SUDAH LOGIN -->
      <details class="user-menu logged">
        <summary class="user-initial"></summary>
        <div class="dropdown">
          <h4>Account</h4>
          <a href="{{ url('/auth/login') }}" class="btn primary sign-out">Sign out</a>
          <div class="btn-row">
            <a href="{{ url('/orderhistory') }}" class="btn"><span>👜</span> Orders</a>
            <a href="{{ url('/profile') }}" class="btn"><span>👤</span> Profile</a>
          </div>
        </div>
      </details>
    </div>
  </header>

  <!-- MAIN CONTENT (DIISI HALAMAN ANAK) -->
  <main>
    {{ $slot }}
  </main>

  <!-- FOOTER -->
  <footer>
    <p>© 2025 Mug & Plate. All rights reserved.</p>
  </footer>

  <!-- SCRIPT LOGIN LOGIC -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const notLoggedMenu = document.querySelector(".user-menu.not-logged");
      const loggedMenu = document.querySelector(".user-menu.logged");
      const userInitial = document.querySelector(".user-initial");

      const isLoggedIn = localStorage.getItem("isLoggedIn") === "true";
      const userEmail = localStorage.getItem("userEmail");

      if (isLoggedIn && userEmail) {
        notLoggedMenu.style.display = "none";
        loggedMenu.style.display = "inline-block";
        userInitial.textContent = userEmail.charAt(0).toUpperCase();
      } else {
        notLoggedMenu.style.display = "inline-block";
        loggedMenu.style.display = "none";
      }

      document.querySelectorAll(".require-login").forEach(btn => {
        btn.addEventListener("click", (e) => {
          e.preventDefault();
          alert("You need to sign in first it.");
          window.location.href = "{{ url('/auth/login') }}";
        });
      });

      const signOutBtn = loggedMenu.querySelector(".sign-out");
      signOutBtn.addEventListener("click", (e) => {
        e.preventDefault();
        localStorage.removeItem("isLoggedIn");
        localStorage.removeItem("role");
        localStorage.removeItem("userEmail");
        window.location.href = "{{ url('/') }}";
      });
    });
  </script>
</body>
</html>
