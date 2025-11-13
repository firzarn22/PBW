<x-layoutAuth title="Register - Bookstore">
      <h2>Register</h2>

      <form id="register-form">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter your password" required>
        </div>

        <button type="submit" class="auth-btn">Register</button>
      </form>

      <div class="auth-footer">
        <p>Already have an account? <a href="/auth/login">Log in here</a></p>
      </div>

      <script>
        // Daftar email admin
        const ADMIN_EMAILS = ["admin@bookstore.com"];

        document.getElementById("register-form").addEventListener("submit", function (e) {
        e.preventDefault();

        const username = document.getElementById("username").value.trim();
        const email = document.getElementById("email").value.trim().toLowerCase();
        const password = document.getElementById("password").value.trim();

        if (!username || !email || !password) {
            alert("Harap isi semua field terlebih dahulu!");
            return;
        }

        // Ambil daftar user dari localStorage
        const users = JSON.parse(localStorage.getItem("users") || "[]");

        // Cek apakah email sudah terdaftar
        const existingUser = users.find(user => user.email === email);
        if (existingUser) {
            alert("Email ini sudah terdaftar! Silakan gunakan email lain atau login.");
            return;
        }

        // Simpan user baru
        users.push({ username, email, password });
        localStorage.setItem("users", JSON.stringify(users));

        // Simpan status login langsung setelah registrasi
        localStorage.setItem("isLoggedIn", "true");
        localStorage.setItem("userEmail", email);

        // Cek apakah email admin
        if (ADMIN_EMAILS.includes(email)) {
            localStorage.setItem("role", "admin");
            alert("Registrasi sebagai Admin berhasil!");
            window.location.href = "{{ route('admin.index2') }}";
        } else {
            localStorage.setItem("role", "user");
            alert("Registrasi berhasil! Anda akan diarahkan ke halaman utama.");
            window.location.href = "{{ route('user.index') }}";
        }
        });
    </script>
</x-layoutAuth>
