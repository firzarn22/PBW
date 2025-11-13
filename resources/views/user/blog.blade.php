<x-layoutUser :title="'Blog | Mug & Plate'">
  <link rel="stylesheet" href="{{ asset('css/user/blog.css') }}">

  <!-- HERO BLOG -->
  <section class="blog-hero">
    <div class="blog-hero-content">
      <h1>Mug & Plate Blog</h1>
      <p>Tips, inspirasi, dan cerita di balik setiap karya kami</p>
    </div>
  </section>

  <!-- BLOG CONTENT -->
  <section class="blog-content">
    <div class="blog-container">
      <!-- Featured Post -->
      <div class="featured-post">
        <div class="featured-image">
          <img src="{{ asset('images/YOW2.jpg') }}" alt="Proses Pembuatan Keramik">
        </div>
        <div class="featured-text">
          <span class="category">Behind The Scenes</span>
          <h2>Filosofi Desain Minimalis di Balik Setiap Koleksi Kami</h2>
          <p class="excerpt">
            Temukan bagaimana kami menciptakan setiap mug dan plate dengan pendekatan minimalis
            yang tidak hanya indah tetapi juga fungsional untuk keseharian Anda.
          </p>
          <div class="post-meta">
            <span class="date">15 Maret 2025</span>
          </div>
        </div>
      </div>

      <!-- Blog Posts Grid -->
      <div class="blog-posts">
        <h2 class="section-title">Artikel Terbaru</h2>

        <div class="posts-grid">
          <!-- Post 1 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="{{ asset('images/YOW5.jpg') }}" alt="Merawat Keramik">
            </div>
            <div class="post-content">
              <span class="category">Tips & Perawatan</span>
              <h3>Tips Merawat Piring dan Mug Keramik agar Awet Sepanjang Masa</h3>
              <p class="excerpt">
                Pelajari cara merawat koleksi keramik Anda dengan benar untuk menjaga keindahan
                dan fungsionalitasnya dalam jangka panjang.
              </p>
              <div class="post-meta">
                <span class="date">10 Maret 2025</span>
              </div>
            </div>
          </article>

          <!-- Post 2 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="{{ asset('images/YOW6.jpg') }}" alt="Inspirasi Dekorasi">
            </div>
            <div class="post-content">
              <span class="category">Inspirasi</span>
              <h3>Inspirasi Dekorasi Meja Makan Sederhana nan Elegan</h3>
              <p class="excerpt">
                Transformasi meja makan Anda dengan sentuhan elegan menggunakan koleksi mug dan plate kami.
                Ide sederhana untuk tampilan yang maksimal.
              </p>
              <div class="post-meta">
                <span class="date">5 Maret 2025</span>
              </div>
            </div>
          </article>

          <!-- Post 3 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="{{ asset('images/YOW7.jpg') }}" alt="Sejarah Keramik">
            </div>
            <div class="post-content">
              <span class="category">Edukasi</span>
              <h3>Dari Tanah Liat ke Meja Anda: Proses Pembuatan Keramik Berkualitas</h3>
              <p class="excerpt">
                Jelajahi perjalanan panjang pembuatan keramik berkualitas tinggi,
                dari pemilihan material hingga proses finishing yang sempurna.
              </p>
              <div class="post-meta">
                <span class="date">28 Februari 2025</span>
              </div>
            </div>
          </article>

          <!-- Post 4 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="{{ asset('images/YOW8.jpg') }}" alt="Warna dalam Hidup">
            </div>
            <div class="post-content">
              <span class="category">Lifestyle</span>
              <h3>Bagaimana Warna Mempengaruhi Pengalaman Minum Kopi Anda</h3>
              <p class="excerpt">
                Temukan bagaimana pemilihan warna pada mug dapat mempengaruhi mood
                dan pengalaman menikmati minuman favorit Anda.
              </p>
              <div class="post-meta">
                <span class="date">20 Februari 2025</span>
              </div>
            </div>
          </article>

          <!-- Post 5 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="{{ asset('images/YOW9.jpg') }}" alt="Sustainable Living">
            </div>
            <div class="post-content">
              <span class="category">Sustainability</span>
              <h3>Pilihan Ramah Lingkungan: Mengapa Keramik Lebih Baik daripada Plastik</h3>
              <p class="excerpt">
                Pelajari mengapa beralih ke produk keramik tidak hanya baik untuk estetika
                tetapi juga untuk lingkungan dan kesehatan Anda.
              </p>
              <div class="post-meta">
                <span class="date">15 Februari 2025</span>
              </div>
            </div>
          </article>

          <!-- Post 6 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="{{ asset('images/YOW10.jpg') }}" alt="Seasonal Collection">
            </div>
            <div class="post-content">
              <span class="category">New Collection</span>
              <h3>Memperkenalkan Koleksi Musim Semi: Warna-warna Cerah untuk Hari yang Lebih Berwarna</h3>
              <p class="excerpt">
                Temukan koleksi terbaru kami yang terinspirasi dari keindahan musim semi
                dengan palet warna yang segar dan menyegarkan.
              </p>
              <div class="post-meta">
                <span class="date">10 Februari 2025</span>
              </div>
            </div>
          </article>
        </div>
    </div>
  </section>
</x-layoutUser>
