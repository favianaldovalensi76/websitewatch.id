<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>XYZ | Watch</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-orange-900 text-white">
  <!-- HEADER -->
  <header>
    <nav class="bg-white py-4">
      <div class="container mx-auto flex items-center justify-between px-6">
         <!-- Logo -->
      <a href="#" class="flex items-center">
        <img class="h-10" src="img/Logo.png" alt="Logo" />
      </a>
        <button class="block lg:hidden text-gray-700 focus:outline-none">
          <i class="fas fa-bars"></i>
        </button>
        <div class="hidden lg:flex space-x-6">
          <a href="#contact-us" class="text-gray-800 hover:text-gray-600">Hubungi Kami</a>
          <a href="#faq" class="text-gray-800 hover:text-gray-600">Pertanyaan</a>
          <a href="#pricing" class="text-gray-800 hover:text-gray-600">Harga</a>
          <a href="#testimonials" class="text-gray-800 hover:text-gray-600">Tentang Kami</a>
          <a href="#features" class="text-gray-800 hover:text-gray-600">Fitur</a>
          <a href="#product" class="text-gray-800 hover:text-gray-600">Produk</a>
        </div>
      </div>
    </nav>

    <div class="container mx-auto px-6 py-12">
      <div class="flex flex-col lg:flex-row items-center lg:space-x-12">
        <div class="text-center lg:text-left lg:w-1/2">
          <h1 class="text-4xl font-bold text-white-200 mb-4">
            PRODUK KAMI MENAWARKAN <span class="text-red-600">KUALITAS</span> YANG <br />
            LEBIH BAIK
          </h1>
          <p class="text-lg text-white-400 mb-6">
            Jam tangan elegan XYZ adalah perpaduan sempurna antara gaya dan fungsionalitas. Dirancang untuk pria dan wanita modern, jam ini menampilkan
          </p>
        </div>
        <div class="lg:w-1/2">
          <img src="img/img-1.png" class="w-full h-auto object-cover" alt="Product Image" />
        </div>
      </div>
    </div>
  </header>
  <!-- END HEADER -->

  <!-- PRODUCT -->
  <div id="product" class="py-12 bg-gray-100">
    <div class="container mx-auto px-6">
      <div class="text-center max-w-lg mx-auto mb-10">
        <p class="text-gray-600 text-sm uppercase tracking-wider">MENGAPA MEMILIH KAMI</p>
        <h1 class="text-3xl font-bold text-gray-900 mb-3">
          JAM TANGAN DENGAN <span class="text-orange-700">FITUR MENARIK</span>
        </h1>
        <p class="text-gray-700">FITUR MENARIK PADA JAM TANGAN KAMI</p>
      </div>

      <div class="flex flex-col-reverse lg:flex-row items-center justify-between space-y-8 lg:space-y-0 px-2">
        <!-- Left Column -->
        <div class="space-y-6 lg:w-1/3">
          <div class="flex items-start space-x-4">
            <span class="text-2xl text-orange-600">
              <i class="fas fa-heartbeat"></i>
            </span>
            <div>
              <h3 class="text-xl font-semibold text-gray-900">Pemantau Detak Jantung</h3>
              <p class="text-gray-700">Jam tangan kami memiliki fitur yang dapat memantau Detak Jantung pengguna</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <span class="text-2xl text-orange-600">
              <i class="fas fa-briefcase-medical"></i>
            </span>
            <div>
              <h3 class="text-xl font-semibold text-gray-900">Pemantau Tekanan Darah</h3>
              <p class="text-gray-700">Jam tangan kami memiliki fitur yang dapat memantau Tekanan Darah pengguna</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <span class="text-2xl text-orange-600">
              <i class="fas fa-bell"></i>
            </span>
            <div>
              <h3 class="text-xl font-semibold text-gray-900">Pemantau Waktu</h3>
              <p class="text-gray-700">Jam tangan kami memiliki fitur yang dapat memantau waktu atau sebagai alarm</p>
            </div>
          </div>
        </div>

        <!-- Center Image -->
        <div class="lg:w-1/3 flex justify-center my-5">
          <img src="img/img-2.png" class="w-3/4" alt="Product Image" />
        </div>

        <!-- Right Column -->
        <div class="space-y-6 lg:w-1/3">
          <div class="flex items-start space-x-4">
            <span class="text-2xl text-orange-600">
              <i class="fas fa-map-marker-alt"></i>
            </span>
            <div>
              <h3 class="text-xl font-semibold text-gray-900">Pemantau Lokasi</h3>
              <p class="text-gray-700">Jam tangan kami memiliki fitur yang dapat memantau Lokasi Pengguna</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <span class="text-2xl text-orange-600">
              <i class="fas fa-fingerprint"></i>
            </span>
            <div>
              <h3 class="text-xl font-semibold text-gray-900">Kunci Sidik Jari</h3>
              <p class="text-gray-700">Jam tangan kami memiliki keamanan Kunci Sidik Jari</p>
            </div>
          </div>

          <div class="flex items-start space-x-4">
            <span class="text-2xl text-orange-600">
              <i class="fas fa-mobile"></i>
            </span>
            <div>
              <h3 class="text-xl font-semibold text-gray-900">Kamera Dan Bluetooth</h3>
              <p class="text-gray-700">Jam tangan kami memiliki koneksi Kamera dan Bluetooth</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END PRODUCT -->

  <!-- FEATURES -->
  <div id="features" class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="text-center max-w-lg mx-auto mb-10">
        <p class="text-gray-600 text-sm uppercase tracking-wider mb-2">Detail Lainnya</p>
        <h1 class="text-3xl font-bold text-gray-900 mb-3">
          Spesifikasi<span class="text-orange-00"> Lainnya</span>
        </h1>
        <p class="text-gray-700">Spesifikasi lain tentang Jam tangan kami</p>
      </div>

      <div class="flex flex-col-reverse lg:flex-row items-center justify-center lg:space-x-6 px-2">
        <!-- Left Image -->
        <div class="lg:w-1/2 xl:w-1/3 p-5">
          <img class="w-full" src="img/img-3.png" alt="Product Features Image" />
        </div>

        <!-- Right Features -->
        <div class="lg:w-1/2 xl:w-2/3">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center transform transition duration-300 hover:scale-105">
              <span class="text-orange-600 text-3xl mb-4 block">
                <i class="fas fa-camera-retro"></i>
              </span>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Terdapat Kamera</h3>
              <p class="text-gray-700">
                Jam tangan kami memiliki kamera untuk merekam atau sekedar berfoto
              </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center transform transition duration-300 hover:scale-105">
              <span class="text-orange-600 text-3xl mb-4 block">
                <i class="fas fa-leaf"></i>
              </span>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Ramah Lingkungan</h3>
              <p class="text-gray-700">
                Jam tangan kami menggunakan bahan baku yang Ramah Lingkungan
              </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center transform transition duration-300 hover:scale-105">
              <span class="text-orange-600 text-3xl mb-4 block">
                <i class="fas fa-cog"></i>
              </span>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Pengaturan Cahaya</h3>
              <p class="text-gray-700">
                Jam tangan kami memiliki fitur mengatur kecerahan
              </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-md p-6 text-center transform transition duration-300 hover:scale-105">
              <span class="text-orange-600 text-3xl mb-4 block">
                <i class="fas fa-database"></i>
              </span>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Hemat Baterai</h3>
              <p class="text-gray-700">
                Jam tangan kami memiliki kapasitas baterai yang lumayan besar
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END FEATURES -->

  <!-- TESTIMONIALS -->
  <div id="testimonials" class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="text-center max-w-lg mx-auto mb-10">
        <h1 class="text-3xl font-bold text-gray-900 mb-3">Tentang Kami</h1>
        <p class="text-gray-700">wajah orang paling gantenk & sukses</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 pt-4">
        <!-- Testimonial Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative">
          <p class="text-center text-gray-800 italic mb-6">
            KALIAN MAU MENYERAH? INGAT APA TUJUAN KAMU MEMULAI NYA.
          </p>
          <div class="flex items-center flex-col">
            <img class="w-24 h-24 rounded-full mb-4" src="img/aldo.jpg" alt="Aldo's Avatar" />
            <a href="https://www.instagram.com/favianaldovalensi" class="text-orange-600 hover:text-blue-600 mb-2">
              <i class="fab fa-instagram text-xl"></i>
            </a>
            <div class="text-center">
              <div class="text-yellow-400 mb-1">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-900">Favianaldovalensi</h3>
              <p class="text-gray-600">Cyber Security</p>
            </div>
          </div>
          <span class="absolute top-4 left-4 text-gray-300 text-2xl">
            <i class="fas fa-quote-left"></i>
          </span>
        </div>

        <!-- Testimonial Card 2 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative">
          <p class="text-center text-gray-800 italic mb-6">
            JANGAN BILANG TIDAK MUNGKIN SEBELUM KAMU MATI MENCOBANYA.
          </p>
          <div class="flex items-center flex-col">
            <img class="w-24 h-24 rounded-full mb-4" src="img/Diaz.jpg" alt="Diaz's Avatar" />
            <a href="https://www.instagram.com/dzmwflm/" class="text-orange-600 hover:text-blue-600 mb-2">
              <i class="fab fa-instagram text-xl"></i>
            </a>
            <div class="text-center">
              <div class="text-yellow-400 mb-1">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-900">Diaz Nawfal</h3>
              <p class="text-gray-600">Programmer</p>
            </div>
          </div>
          <span class="absolute top-4 left-4 text-gray-300 text-2xl">
            <i class="fas fa-quote-left"></i>
          </span>
        </div>

        <!-- Testimonial Card 3 -->
        <div class="bg-white p-6 rounded-lg shadow-md relative">
          <p class="text-center text-gray-800 italic mb-6">
            SEMANGAT SAMPAI KAU MENDAPATKAN BANYAK DOLAR AS.
          </p>
          <div class="flex items-center flex-col">
            <img class="w-24 h-24 rounded-full mb-4" src="img/azka.jpg" alt="Azka's Avatar" />
            <a href="https://www.instagram.com/zaxxs_" class="text-orange-600 hover:text-blue-600 mb-2">
              <i class="fab fa-instagram text-xl"></i>
            </a>
            <div class="text-center">
              <div class="text-yellow-400 mb-1">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h3 class="text-lg font-semibold text-gray-900">Azka Mercusia R.</h3>
              <p class="text-gray-600">UI/UX Designer</p>
            </div>
          </div>
          <span class="absolute top-4 left-4 text-gray-300 text-2xl">
            <i class="fas fa-quote-left"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- END TESTIMONIALS -->

<!-- PRICE -->
<div id="pricing" class="block-17 px-4 py-8">
  <div class="container mx-auto">
    <div class="text-center max-w-3xl mx-auto">
      <h1 class="text-4xl font-bold mb-3">List Product</h1>
      <p class="text-white-600">Daftar produk unggulan kami</p>
    </div>


    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8">
        @foreach ($products as $product)
      <!-- Produk 1 -->
      <div class="p-6 border rounded-lg shadow-lg bg-white text-center">
        <img class="w-24 h-24 mx-auto mb-4" src="{{ asset('storage/' . $product->image ) }}" alt="Produk 1" />
        <h2 class="text-xl font-bold mb-2">{{ $product->name }}</h2>
        <p class="text-gray-700 mb-4">{{ $product->content }}</p>
        <p class="text-2xl font-bold text-orange-600 mb-4">{{ $product->price }}</p>
      </div>
      @endforeach
    </div>



    <!-- Tombol Beli Sekarang -->
    <div class="mt-8 text-center">
      <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg text-xl">Beli Sekarang</a>
    </div>
  </div>
</div>

  <!-- END PRICE -->

  <!-- FAQ -->
<div id="faq" class="space-y-12 py-12 bg-gray-100">
  <div class="container mx-auto">
    <!-- Heading -->
    <div class="text-center max-w-3xl mx-auto mb-12">
      <h1 class="text-4xl font-extrabold text-gray-800">Pertanyaan yang Sering Diajukan</h1>
      <p class="text-lg text-gray-600 mt-2">Temukan jawaban atas pertanyaan umum tentang layanan dan produk kami.</p>
    </div>
    <!-- FAQ Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 px-6">
      <!-- Question 1 -->
      <div class="bg-white p-8 shadow-lg rounded-lg">
        <h4 class="text-xl font-semibold text-gray-800 mb-4">
          <i class="fas fa-question-circle text-blue-500 mr-2"></i>
          Apakah ada garansi untuk jam tangan yang dibeli di website ini?
        </h4>
        <p class="text-gray-600">
          Semua jam tangan yang dibeli di website kami dilengkapi dengan garansi resmi dari pabrik. Periode garansi
          berbeda-beda, mulai dari 1 hingga 5 tahun. Detailnya dapat Anda lihat di halaman produk masing-masing.
        </p>
      </div>
      <!-- Question 2 -->
      <div class="bg-white p-8 shadow-lg rounded-lg">
        <h4 class="text-xl font-semibold text-gray-800 mb-4">
          <i class="fas fa-star text-yellow-500 mr-2"></i>
          Apa yang membuat website jam tangan ini berbeda dari yang lain?
        </h4>
        <p class="text-gray-600">
          Website kami menawarkan koleksi eksklusif dari merek terkenal, dilengkapi fitur seperti deskripsi detail, 
          perbandingan produk, dan ulasan pelanggan. Dengan desain yang responsif, Anda dapat berbelanja dengan nyaman di perangkat apa pun.
        </p>
      </div>
      <!-- Question 3 -->
      <div class="bg-white p-8 shadow-lg rounded-lg">
        <h4 class="text-xl font-semibold text-gray-800 mb-4">
          <i class="fas fa-wallet text-green-500 mr-2"></i>
          Apakah website ini menyediakan opsi pembayaran cicilan?
        </h4>
        <p class="text-gray-600">
          Tidak, saat ini kami belum menyediakan opsi pembayaran cicilan. Namun, Anda dapat membayar secara penuh 
          menggunakan metode seperti kartu kredit, transfer bank, atau pembayaran digital lainnya.
        </p>
      </div>
      <!-- Question 4 -->
      <div class="bg-white p-8 shadow-lg rounded-lg">
        <h4 class="text-xl font-semibold text-gray-800 mb-4">
          <i class="fas fa-tools text-red-500 mr-2"></i>
          Apakah tersedia layanan purna jual seperti perawatan atau perbaikan?
        </h4>
        <p class="text-gray-600">
          Kami tidak menyediakan layanan purna jual seperti perawatan atau perbaikan. Namun, kami merekomendasikan 
          Anda untuk membeli alat servis resmi yang tersedia di toko terpercaya.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- END FAQ -->


 <!-- CONTACT US -->
<div id="contact-us" class="py-12 bg-gray-100 border-t">
  <div class="container mx-auto">
    <div class="flex flex-col lg:flex-row items-center h-full">
      <!-- Contact Info -->
      <div class="lg:w-1/2 h-full p-6">
        <div class="mb-8">
          <h2 class="text-3xl font-extrabold text-gray-800 mb-4">
            Gimana sih caranya dapetin produk kami? 🤑
          </h2>
          <p class="text-gray-600 text-lg">
            Mudah banget! Hubungi kami melalui email atau media sosial kami ❤️
          </p>
        </div>
        <!-- Email -->
        <div class="flex items-center mb-6">
          <i class="fas fa-envelope text-blue-500 text-2xl mr-4"></i>
          <div>
            <h6 class="text-lg font-semibold text-gray-800">Email</h6>
            <a href="mailto:fravvalensi@gmail.com" class="text-blue-600 hover:underline">
              fravvalensi@gmail.com
            </a>
          </div>
        </div>
        <!-- WhatsApp -->
        <div class="flex items-center">
          <i class="fab fa-whatsapp text-green-500 text-2xl mr-4"></i>
          <div>
            <h6 class="text-lg font-semibold text-gray-800">WhatsApp</h6>
            <a href="https://wa.me/+6282226739446" class="text-blue-600 hover:underline" target="_blank">
              +62 822 2673 9446
            </a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="lg:w-1/2 h-full p-6 bg-white shadow-lg rounded-lg">
        <form onsubmit="submitContactForm(event)" class="space-y-6">
          <div>
            <h6 class="text-2xl font-bold text-gray-800 mb-2">Hubungi Kami</h6>
            <p class="text-gray-600">
              Berikan kritik dan saran Anda untuk membantu kami menjadi lebih baik!
            </p>
          </div>
          <input
            type="text"
            class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Full Name"
            required
          />
          <input
            type="email"
            id="email"
            class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Email"
            required
          />
          <textarea
            class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Message"
            required
          ></textarea>
          <button
            type="submit"
            class="w-full py-4 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition duration-300"
          >
            SEND MESSAGE
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END CONTACT US -->

  <!-- FOOTER -->
<footer class="bg-gray-900 text-gray-100">
  <!-- Promo Section -->
  <div class="py-12">
    <div class="container mx-auto text-center">
      <h1 class="text-3xl font-extrabold mb-4">
        Beli Sekarang dan Dapatkan Diskon 50%!
      </h1>
      <p class="text-lg text-gray-300">
        Semakin cepat Anda membeli, semakin hemat! Jangan sampai ketinggalan 🤩
      </p>
      <div class="mt-6">
        <a href="#" class="bg-blue-600 text-white py-3 px-6 text-lg font-semibold rounded-lg shadow hover:bg-blue-700">
          Buy Now
        </a>
      </div>
    </div>
  </div>

  <!-- Navigation and Links -->
  <div class="bg-gray-800 py-8">
    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row justify-between items-center">
        <!-- Navigation Links -->
        <ul class="flex flex-wrap justify-center lg:justify-start space-x-6 mb-4 lg:mb-0">
          <li>
            <a href="#product" class="text-gray-300 hover:text-white hover:underline">Produk</a>
          </li>
          <li>
            <a href="#features" class="text-gray-300 hover:text-white hover:underline">Fitur</a>
          </li>
          <li>
            <a href="#testimonials" class="text-gray-300 hover:text-white hover:underline">Tentang Kami</a>
          </li>
          <li>
            <a href="#pricing" class="text-gray-300 hover:text-white hover:underline">Harga</a>
          </li>
        </ul>
        <!-- Social Media -->
        <div class="flex space-x-4">
          <a href="#" class="text-gray-300 hover:text-white text-2xl">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#" class="text-gray-300 hover:text-white text-2xl">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-gray-300 hover:text-white text-2xl">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="text-gray-300 hover:text-white text-2xl">
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="py-6 bg-gray-700">
    <div class="container mx-auto text-center">
      <p class="text-sm text-gray-400">
        &copy; 2024 XYZ Watch. All Rights Reserved Team.
      </p>
    </div>
  </div>
</footer>
<!-- END FOOTER -->


  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
