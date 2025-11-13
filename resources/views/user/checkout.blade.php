<x-layoutUser>
  <link rel="stylesheet" href="{{ asset('css/user/co.css') }}">

  <main class="checkout-container">
    <h2>Checkout</h2>

    <div class="checkout-content">
      <!-- LEFT: FORM DATA -->
      <section class="checkout-form">
        <h3>Alamat Pengiriman</h3>
        <form id="checkoutForm">
          <label>Nama Lengkap</label>
          <input type="text" id="name" placeholder="Nama penerima" required>

          <label>Email</label>
          <input type="email" id="email" placeholder="Email aktif" required>

          <label>No. Telepon</label>
          <input type="tel" id="phone" placeholder="08xxxxxxxxxx" required>

          <label>Alamat Lengkap</label>
          <textarea id="address" rows="3" placeholder="Nama jalan, nomor rumah, kecamatan, kota" required></textarea>

          <label>Metode Pembayaran</label>
          <select id="payment-method" required>
            <option value="">Pilih metode pembayaran</option>
            <option value="transfer">Transfer Bank</option>
            <option value="cod">COD (Bayar di Tempat)</option>
            <option value="ewallet">E-Wallet (GoPay, DANA, OVO)</option>
          </select>

          <!-- Upload Bukti Pembayaran -->
          <div id="upload-proof-section" style="display: none; margin-top: 15px;">
            <label for="payment-proof">Upload Bukti Pembayaran</label>
            <input type="file" id="payment-proof" accept="image/*" required>
            <small style="font-size: 0.9rem; color: #666;">Format: JPG, PNG (maks 2MB)</small>
          </div>

          <button type="submit" class="btn primary full">Konfirmasi Pesanan</button>
        </form>
      </section>

      <!-- RIGHT: RINGKASAN PESANAN -->
      <aside class="checkout-summary">
        <h3>Ringkasan Pesanan</h3>
        <div class="summary-item">
          <span>Mug Floral Edition × 1</span>
          <span>Rp 89.000</span>
        </div>
        <div class="summary-item">
          <span>Plate Marble Design × 2</span>
          <span>Rp 240.000</span>
        </div>
        <hr>
        <div class="summary-item">
          <span>Ongkir</span>
          <span>Rp 20.000</span>
        </div>
        <div class="summary-total">
          <strong>Total Pembayaran</strong>
          <strong>Rp 349.000</strong>
        </div>
      </aside>
    </div>
  </main>

  <script>
    const paymentSelect = document.getElementById("payment-method");
    const uploadSection = document.getElementById("upload-proof-section");
    const proofInput = document.getElementById("payment-proof");

    paymentSelect.addEventListener("change", function () {
      if (this.value === "transfer" || this.value === "ewallet") {
        uploadSection.style.display = "block";
        proofInput.required = true;
      } else {
        uploadSection.style.display = "none";
        proofInput.required = false;
        proofInput.value = "";
      }
    });

    document.getElementById("checkoutForm").addEventListener("submit", function (e) {
      e.preventDefault();

      if ((paymentSelect.value === "transfer" || paymentSelect.value === "ewallet") && !proofInput.files.length) {
        alert("Silakan upload bukti pembayaran terlebih dahulu!");
        return;
      }

      alert("Pesanan kamu berhasil dikonfirmasi! 🎉\nTerima kasih telah berbelanja di Mug & Plate.");
      window.location.href = "{{ route('user.index') }}";
    });
  </script>
</x-layoutUser>
