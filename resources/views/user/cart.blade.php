<x-layoutUser :title="'Keranjang | Mug & Plate'">
  <link rel="stylesheet" href="{{ asset('css/user/cart.css') }}">

  <main class="cart-container">
    <!-- LEFT: DAFTAR PRODUK -->
    <section class="cart-items">
      <h2>Keranjang Belanja</h2>

      <div class="cart-item" data-price="89000">
        <img src="{{ asset('images/13.png') }}" alt="Mug Floral Edition" />
        <div class="item-details">
          <h3>Mug Floral Edition</h3>
          <p>Motif: Floral • Ukuran: 350ml</p>
          <div class="price-row">
            <span class="price">Rp 89.000</span>
            <div class="quantity-control">
              <button class="qty-btn minus">−</button>
              <input type="number" value="1" min="1" />
              <button class="qty-btn plus">+</button>
            </div>
            <span class="subtotal">Rp 89.000</span>
          </div>
        </div>
        <button class="remove-btn">Remove</button>
      </div>

      <div class="cart-item" data-price="120000">
        <img src="{{ asset('images/11.png') }}" alt="Plate Marble Design" />
        <div class="item-details">
          <h3>Plate Marble Design</h3>
          <p>Bahan: Keramik Premium</p>
          <div class="price-row">
            <span class="price">Rp 120.000</span>
            <div class="quantity-control">
              <button class="qty-btn minus">−</button>
              <input type="number" value="2" min="1" />
              <button class="qty-btn plus">+</button>
            </div>
            <span class="subtotal">Rp 240.000</span>
          </div>
        </div>
        <button class="remove-btn">Remove</button>
      </div>
    </section>

    <!-- RIGHT: RINGKASAN PEMBAYARAN -->
    <aside class="cart-summary">
      <h2>Ringkasan Pembayaran</h2>
      <div class="summary-row">
        <span>Subtotal</span>
        <span id="subtotal">Rp 329.000</span>
      </div>
      <div class="summary-row">
        <span>Ongkir</span>
        <span id="shipping">Rp 20.000</span>
      </div>

      <hr />

      <div class="summary-row total">
        <span>Total</span>
        <span id="total">Rp 349.000</span>
      </div>

      <div class="summary-buttons">
        <a href="{{ route('user.checkout') }}" class="btn primary full">Checkout</a>
        <a href="{{ url('/ours') }}" class="btn secondary full">Lanjut Belanja</a>
      </div>
    </aside>
  </main>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      function formatRupiah(angka) {
        return "Rp " + angka.toLocaleString("id-ID");
      }

      function updateTotals() {
        let subtotal = 0;
        document.querySelectorAll(".cart-item").forEach(item => {
          const price = parseInt(item.dataset.price);
          const qty = parseInt(item.querySelector("input").value);
          const sub = price * qty;
          item.querySelector(".subtotal").textContent = formatRupiah(sub);
          subtotal += sub;
        });

        const shipping = 20000;
        document.getElementById("subtotal").textContent = formatRupiah(subtotal);
        document.getElementById("total").textContent = formatRupiah(subtotal + shipping);
      }

      document.querySelectorAll(".qty-btn").forEach(btn => {
        btn.addEventListener("click", e => {
          const item = e.target.closest(".cart-item");
          const input = item.querySelector("input");
          let qty = parseInt(input.value);
          if (btn.classList.contains("plus")) {
            qty++;
          } else if (btn.classList.contains("minus")) {
            qty--;
            if (qty <= 0) {
              item.remove();
              updateTotals();
              return;
            }
          }
          input.value = qty;
          updateTotals();
        });
      });

      document.querySelectorAll(".remove-btn").forEach(btn => {
        btn.addEventListener("click", e => {
          e.target.closest(".cart-item").remove();
          updateTotals();
        });
      });

      document.querySelectorAll(".cart-item input").forEach(input => {
        input.addEventListener("change", e => {
          const val = parseInt(e.target.value);
          if (val <= 0) {
            e.target.closest(".cart-item").remove();
          }
          updateTotals();
        });
      });

      updateTotals();
    });
  </script>
</x-layoutUser>
