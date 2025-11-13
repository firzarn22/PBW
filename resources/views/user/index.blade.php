<x-layoutUser title="Home | Mug & Plate">
  <!-- HERO -->
  <section class="hero">
    <div class="hero-text">
      <h1>Make <span>Every Sip</span> a Little Prettier</h1>
      <p>Explore our adorable mugs and plates to brighten your day!</p>
      <div class="hero-promo">
        <h3>Limited Sale</h3>
        <p>Get your favorite sets now ✨</p>
      </div>
    </div>
    <div class="hero-image">
      <img src="{{ asset('images/YOW.jpg') }}" alt="Mug & Plate">
    </div>
  </section>

  <!-- BEST SELLING PRODUCTS -->
  <section class="products">
    <h2>Best Selling Products</h2>
    <div class="product-list">
      <div class="product">
        <img src="{{ asset('images/7.png') }}" alt="Valentina">
        <button>Add to Cart</button>
      </div>
      <div class="product">
        <img src="{{ asset('images/28.png') }}" alt="Chanel 5">
        <button>Add to Cart</button>
      </div>
      <div class="product">
        <img src="{{ asset('images/6.png') }}" alt="Miss Dior">
        <button>Add to Cart</button>
      </div>
    </div>
  </section>

  <!-- QUALITY SECTION -->
  <section class="quality">
    <div class="quality-text">
      <h2>Elegant simplicity in every piece</h2>
      <p>
        Discover mugs and plates made with care — minimal, beautiful,
        and built to last for your everyday enjoyment.
      </p>
      <a href="{{ url('/blog') }}">
        <button>Explore More</button>
      </a>
    </div>
    <div class="quality-images">
      <img src="{{ asset('images/YOW2.jpg') }}" alt="OURS PLATES">
      <img src="{{ asset('images/YOW3.jpg') }}" alt="OURS MUGS">
    </div>
  </section>

  <!-- ANOTHER PRODUCT SECTION -->
  <section class="products">
    <h2>Best Selling Products</h2>
    <div class="product-list">
      <div class="product">
        <img src="{{ asset('images/3.png') }}" alt="Valentina">
        <button>Add to Cart</button>
      </div>
      <div class="product">
        <img src="{{ asset('images/25.png') }}" alt="Chanel 5">
        <button>Add to Cart</button>
      </div>
      <div class="product">
        <img src="{{ asset('images/2.png') }}" alt="Miss Dior">
        <button>Add to Cart</button>
      </div>
    </div>
  </section>
</x-layoutUser>
