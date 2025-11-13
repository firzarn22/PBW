<x-layoutUser :title="'Tentang Kami | Mug & Plate'">
  <link rel="stylesheet" href="{{ asset('css/user/about.css') }}">

  <!-- ABOUT SECTION -->
  <section class="about">
    <div class="about-text">
      <h1>Handcrafted Ceramics, <span>Timeless Things.</span></h1>
      <p>
        Berdiri pada tahun 2022, <strong>Mug & Plate</strong> lahir dari kecintaan terhadap seni keramik —
        mengubah tanah liat menjadi karya yang memiliki kehangatan, fungsi, dan keindahan.
      </p>
      <p>
        Kami percaya setiap cangkir dan piring bukan sekadar wadah, tapi bagian dari cerita harianmu.
        Dari proses pembentukan hingga pembakaran, setiap produk kami dibuat dengan tangan dan hati,
        menghadirkan pesona alami yang tak lekang oleh waktu.
      </p>
    </div>

    <div class="about-image">
      <img src="{{ asset('images/YOW13.jpg') }}" alt="Kerajinan Keramik Mug & Plate">
    </div>
  </section>

  <!-- VISION SECTION -->
  <section class="vision">
    <div class="vision-content">
      <div class="vision-image">
        <img src="{{ asset('images/YOW12.jpg') }}" alt="Koleksi Keramik Mug & Plate">
      </div>

      <div class="vision-text">
        <h2>Our Craft, Our Promise</h2>
        <p>
          Di <strong>Mug & Plate</strong>, setiap karya adalah hasil perpaduan antara desain modern
          dan sentuhan tradisi. Kami berkolaborasi dengan pengrajin keramik lokal yang berpengalaman,
          menciptakan koleksi yang tidak hanya indah secara visual, tetapi juga bermakna dan tahan lama.
        </p>
        <p>
          Visi kami sederhana: menghadirkan <strong>ceramics</strong> yang
          <em>elegan, fungsional, dan dibuat dengan cinta</em> — agar setiap momen minum dan makanmu
          terasa lebih berharga.
        </p>
      </div>
    </div>
  </section>
</x-layoutUser>
