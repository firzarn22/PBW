<x-layoutUser>
  {{-- CSS khusus halaman ini --}}
  <link rel="stylesheet" href="{{ asset('css/user/ours.css') }}">

  <!-- BANNERS VERTIKAL -->
  <section class="banner-section">
    <!-- MUG -->
    <input type="checkbox" id="toggle-mug">
    <label for="toggle-mug" class="banner mug-banner">
      <div class="banner-text">Mug</div>
    </label>
    <div class="mug-gallery">
      <div class="product"><img src="/images/1.png" alt="Valentina Mug"><button>Add to Cart</button></div>
      <div class="product"><img src="/images/12.png" alt="Chanel 5 Mug"><button>Add to Cart</button></div>
    </div>

    <!-- PLATE -->
    <input type="checkbox" id="toggle-plate">
    <label for="toggle-plate" class="banner plate-banner">
      <div class="banner-text">Plate</div>
    </label>
    <div class="plate-gallery">
      <div class="product"><img src="/images/20.png" alt="Chanel 5 Plate"><button>Add to Cart</button></div>
      <div class="product"><img src="/images/21.png" alt="Miss Dior Plate"><button>Add to Cart</button></div>
  </section>
</x-layoutUser>
