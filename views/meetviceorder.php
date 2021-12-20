<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Meetvice order</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url().'assets/assets/img/meetvice-icon.png'?>" rel="icon">
  <link href="<?php echo base_url().'assets/assets/img/meetvice-icon.png'?>" rel="meetvice-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url().'assets/assets/vendor/aos/aos.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/meetvice/css/meetvice.min.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/meetvice-icons/meetvice-icons.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet'?>">
  <link href="<?php echo base_url().'assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet'?>">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url().'assets/assets/css/style.css'?>" rel="stylesheet">

</head>

<body>
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="Home">Meetvice</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="Home">Beranda</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>  <!-- navigasi -->

    </div>
  </header>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

              <!-- Image and text -->
      <nav class="navbar navbar-dark bg-dark mt-4 mb-4">
        <a class="navbar-brand" href="home">
          <img src="<?php echo base_url().'assets/assets/img/meetvice-icon.png'?>" width="30" height="30" class="d-inline-block align-top" alt="">
          Meetvice
        </a>
      </nav>
        <ol>
          <li><a href="home">Beranda</a></li>
          <li>Meetvice Order</li>
        </ol>
        <h2>Meetvice Order Pesanan</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="halaman-order">
      <div class="container">
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h2>Isi Form Order</h2>
              <p>Diharapkan untuk selalu aktif email bila di hubungi sewaktu waktu</p>
            </div>
    
            <div class="row">

              <div class="center">
              <form class="form-horizontal" action="<?php echo base_url().'Home/simpan'?>" method="post">
                    <div class="center">
                    <div class="form-group col-md-6">
                      <label for="xname">Nama kamu</label>
                      <input type="text" name="xnama" class="form-control" id="name" required placeholder="Contoh : Rama">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Email</label>
                      <input type="email" class="form-control" name="xemail" id="email" required placeholder="emailkamu@gmail.com">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Barang yang ingin di servis</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="xkategori" id="subject" required type ="text">
                      <option>Laptop Windows IC POWER (Rp.250.000 - Rp.700.000)</option>
                      <option>Laptop Windows Service Port USB Audio (Rp.150.000 - Rp.250.000)</option>
                      <option>Laptop Windows Maintenance / recovery (Rp.150.000)</option>
                      <option>Laptop Windows Service Powerboard (Rp.250.000)</option>
                      <option>Laptop Windows Riset Bios Laptop-Laptop hang (Rp.250.000 - Rp.400.000)</option>
                      <option>Laptop Windows Service Port Charger (Rp.250.000 - Rp.350.000)</option>
                      <option>Laptop Windows Repair Engsel (1 titik Rp.150.000)</option>
                      <option>All in one Windows Service IC power untuk ALL in One (Rp.350.000 - Rp.500.000)</option>
                      <option>Laptop Windows Jasa Pasang LED, Keyboard (Rp.100.000 - Rp.200.000)</option>
                      <option>Laptop Windows Jasa Pasang Ram,Sodim,HDD,SSD (Rp.50.000 - Rp.100.000)</option>
                      <option>Laptop Windows Jasa pasang cover/casing laptop (Rp.200.000)</option>
                      <option>Macbook Service IC Power Mati total (Rp.350.000 - Rp.800.000)</option>
                      <option>Macbook Recovery OS Mac (Rp.250.000)</option>
                      <option>Android Ganti Speaker (Rp.200.000 - Rp.300.000)</option>
                      <option>Android Ganti IC Charger (Rp.100.000 - Rp.200.000)</option>
                      <option>Android Ganti Konektor (Rp.50.000 - Rp.150.000)</option>
                      <option>Android Ganti Servis LCD (Rp.400.000 - Rp.800.000)</option>
                      <option>Android Ganti Port Headset (Rp.50.000 - Rp.100.000)</option>
                      <option>Android Ganti Tombol Power (Rp.50.000 - Rp.80.000)</option>
                      <option>Android Ganti Konektor Baterai (Rp.200.000 - Rp.400.000)</option>
                      <option>Android Ganti EMMC (Rp.100.000 - Rp.200.000)</option>
                      <option>Android Ganti Baterai (Rp.100.000)</option>
                      <option>Android Biaya Reset (Rp.50.000 - Rp.100.000)</option>
                      <option>Iphone LCD Iphone 4 (Rp.280.000)</option>
                      <option>Iphone LCD Iphone 4s (Rp.280.000)</option>
                      <option>Iphone LCD Iphone 5s (Rp.350.000)</option>
                      <option>Iphone LCD Iphone 5S/5SE (Rp.350.000)</option>
                      <option>Iphone LCD Iphone 6 Plus (Rp.650.000)</option>
                      <option>Iphone LCD Iphone 6s (Rp.750.000)</option>
                      <option>Iphone LCD Iphone 6s Plus (Rp.850.000)</option>
                      <option>Iphone LCD Iphone 7 (Rp.1.100.000)</option>
                      <option>Iphone LCD Iphone 7 plus (Rp.280.000)</option>
                    </select>
                  <div class="form-group"><div class="form-group">
                    <br/>
                    <textarea class="form-control" name="xpesanan" rows="10" required placeholder="Contoh : Selesai hari sabtu ya"></textarea>
                  </div>
                    <button type="submit" class="btn btn-primary" value="Kirim Pesan">Kirim Pesan</button>
                     
                    <div id="toggle" style="display:none">Pesan kamu telah berhasil kami terima</div>
                </form>
              </div>
    
            </div>
    
          </div>
        </section>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Meetvice</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://Meetvice.com/">Meetvice</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url().'assets/assets/vendor/aos/aos.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/meetvice/js/meetvice.bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/glightbox/js/glightbox.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/isotope-layout/isotope.pkgd.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/php-email-form/validate.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/swiper/swiper-bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/assets/vendor/waypoints/noframework.waypoints.js'?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url().'assets/assets/js/main.js'?>"></script>

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbwdd36c1Cb-_TOctbOuB1yB-1k_0a1G_VhkKSnZaON6SlqtF6xpCE66xpg6FMiqaJBG/exec'
    const form = document.forms["meetvice-contact-form"]
  
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => console.log('Success!', response))
        .catch(error => console.error('Error!', error.message))
        form.reset()
    })
  </script>

</body>

</html>