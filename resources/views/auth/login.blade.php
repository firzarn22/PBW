<x-layoutAuth title="Login - Bookstore">
      <h2>Log In</h2>

      <form id="login-form">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter your password" required>
        </div>

        <button type="submit" class="auth-btn">Login</button>
      </form>

      <div class="auth-footer">
        <p>Haven't registered yet? <a href="/auth/register">Create your account here</a></p>
      </div>

      <script>
        // Daftar email admin
        const ADMIN_EMAILS = ["admin@bookstore.com"];

        document.getElementById("login-form").addEventListener("submit", function (e) {
        e.preventDefault();

        const email = document.getElementById("email").value.trim().toLowerCase();
        const password = document.getElementById("password").value.trim();

        if (!email || !password) {
            alert("Harap isi email dan password terlebih dahulu!");
            return;
        }

        // Ambil data user dari localStorage
        const users = JSON.parse(localStorage.getItem("users") || "[]");

        // Cari user yang sesuai
        const foundUser = users.find(user => user.email === email && user.password === password);

        if (!foundUser) {
            alert("Email atau password salah! Silakan coba lagi.");
            return;
        }

        // Simpan status login
        localStorage.setItem("isLoggedIn", "true");
        localStorage.setItem("userEmail", email);

        // Tentukan role
        if (ADMIN_EMAILS.includes(email)) {
            localStorage.setItem("role", "admin");
            alert("Login sebagai Admin berhasil!");
            window.location.href = "{{ route('admin.index2') }}";
        } else {
            localStorage.setItem("role", "user");
            alert("Login berhasil!");
            window.location.href ="{{ route('user.index') }}";
        }
        });
    </script>

</x-layoutAuth>
