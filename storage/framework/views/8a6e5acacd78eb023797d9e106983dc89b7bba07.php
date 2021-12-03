<html>
<head>
  <title>UMN Festival 2021 - Form Volunteer U-Care</title>
  <link rel="icon" href="/images/ufest.png" type="image/x-icon" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
  <link rel="stylesheet" href="/css/formucare.css">
  <script src="/js/formucare.js"></script>

  <script type="text/javascript">
  $(window).on('load',function() {
    setTimeout(function(){
        $(".preloader").fadeOut();
    },1000);
    });
  </script>

  <div class="preloader">
    <div class="loading">
      <img src="/images/Ufestgif.gif" width="400">
    </div>
  </div>

</head>
<nav id="nav" class="navbar fixed-top navbar-expand-md navbar-light">
  <div class="container">
    <a href="/" class="navbar-brand mb-0 h1"><img class="d-inline-block" src="/images/ufest.png" width="30px"alt="">&nbsp UMN Festival 2021</a>
    <button type="button" name="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle navigation"><span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active mx-3"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item mx-3"><a href="/our-team" class="nav-link">Our Team</a></li>
        <li class="nav-item mx-3"><a href="/U-Care" class="nav-link">U-Care</a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
  <div class="mt-4">
    <h1>z</h1>
  </div>
  <div class="info pt-4 mt-4 text-center">
    <h1 style="color:gold; text-shadow:2px 2px #319329;">Form Pendaftaran Volunteer U-Care</h1>
  </div>

<!-- Modal -info -->
<div class="container">
<!-- <div id="modal-3" class="modal" data-modal-effect="slide-top">
  <div class="modal-content">
    <h2 class="fs-title">Score Index</h2>
    <h3 class="fs-subtitle">Getting the most out of your data</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis consectetur ligula. Morbi dapibus tellus a ipsum sollicitudin aliquet. Phasellus id est lacus. Pellentesque a elementum velit, a tempor nulla. Mauris mauris lectus, tincidunt et purus rhoncus, eleifend convallis turpis. Nunc ullamcorper bibendum diam, vitae tempus dolor hendrerit iaculis. Phasellus tellus elit, feugiat vel mi et, euismod varius augue. Nulla a porttitor sapien. Donec vestibulum ac nisl sed bibendum. Praesent neque ipsum, commodo eget venenatis vel, tempus sit amet ante. Curabitur vel odio eget urna dapibus imperdiet sit amet eget felis. Vestibulum eros velit, posuere a metus eget, aliquam euismod purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
    <input type="button" name="next" class="next action-button modal-close" value="Got it!">
  </div>
</div> -->
</div>

<form class="steps" action="/U-Care/Form/Tambah" method="post" enctype="multipart/form-data" novalidate="">
  <?php echo csrf_field(); ?>
  <ul id="progressbar">
    <li class="active">Identitas</li>
    <li>Kontak</li>
    <li>Bukti Follow</li>
    <li>Selesai</li>
  </ul>



  <!-- USER INFORMATION FIELD SET -->
  <fieldset>
        <div class="hs_firstname field hs-form-field">
          <label for="firstname">Nama Lengkap <span style="color:red;">*</span></label>
          <input id="firstname" name="nama" required="required" type="text" value="" placeholder="Masukkan nama lengkap Anda" data-rule-required="true" data-msg-required="Nama lengkap mohon diisi" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

        <div class="hs_firstname field hs-form-field">
          <label for="nim">Nomor Induk Mahasiswa (NIM), 5 Angka Terakhir <span style="color:red;">*</span></label>
          <input id="nim" name="nim" required="required" type="text" maxlength="5" value="" placeholder="Masukkan NIM Anda (5 Angka Terakhir) " data-rule-required="true" data-msg-required="NIM mohon diisi" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
          <label for="jurusan">Jurusan <span style="color:red;">*</span></label>
          <select class="form-select" aria-label="Default select example"
          id="jurusan" name="jurusan" required="required" value="" data-rule-required="true" data-msg-required="Pilih jurusan Anda">
            <option value="">Pilih jurusan Anda</option>
            <option value="DKV">Desain Komunikasi Visual (DKV)</option>
            <option value="Arsitektur">Arsitektur</option>
            <option value="Film & Animasi">Film & Animasi</option>
            <option value="Strategic Communi">Ilmu Komunikasi (Strategic Communication)</option>
            <option value="Jurnalistik">Jurnalistik</option>
            <option value="Perhotelan">Perhotelan</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Informatika">Informatika</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Fisika">Teknik Fisika</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
          </select>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <div class="hs_firstname field hs-form-field">
          <label for="angkatan">Angkatan <span style="color:red;">*</span></label>
          <select class="form-select" aria-label="Default select example"
          id="angkatan" name="angkatan" required="required" value="" data-rule-required="true" data-msg-required="Pilih tahun angkatan Anda">
            <option value="">Pilih tahun angkatan Anda</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
          </select>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>


        <div class="hs_email field hs-form-field">
          <label for="alamat">Alamat Lengkap <span style="color:red;">*</span></label>
          <textarea name="alamat" rows="3" required="required" placeholder="Alamat Lengkap" cols="80" data-rule-required="true" data-msg-required="Alamat harus diisi"></textarea>
          <span class="error1" style="display:none;">
            <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <a href="/U-Care"><input type="button" class="previous action-button" value="Kembali"></input></a>
    <input type="button" data-page="1" name="next" class="next action-button" value="Next" />

  </fieldset>


  <fieldset>
    <div class="hs_email field hs-form-field">
    <label for="email">Email Student <span style="color:red;">*</span></label>
    <input id="email" name="email" required="required" type="email" value="" placeholder="Masukkan email student Anda " data-rule-required="true" data-msg-required="Email student mohon diisi" >
    <span class="error1" style="display: none;">
        <i class="error-log fa fa-exclamation-triangle"></i>
    </span>
    </div>

    <div class="hs_email field hs-form-field">
      <label for="Nomor Telepon (WA)">Nomor Telepon (WA) <span style="color:red;">*</span></label>
      <input id="phonenumber" required="required" type="text" name="phonenumber" placeholder="Masukkan Nomor Telepon (WA)" value="" data-rule-required="true" data-msg-required="Nomor Telepon mohon diisi">
    <span class="error1" style="display: none;">
      <i class="error-log fa fa-exclamation-triangle"></i>
    </span>
    </div>

    <div class="hs_email field hs-form-field">
      <label for="idline">ID Line <span style="color:red;">*</span></label>
      <input id="idline" type="text" required="required" name="idline" value="" placeholder="Masukkan ID Line" data-rule-required="true" data-msg-required="ID Line mohon diisi">
      <span class="error1" style="display:none;">
        <i class="error-log fa fa-exclamation-triangle"></i>
      </span>
    </div>

    <div class="hs_email field hs-form-field">
      <label for="instagram">Username Instagram <span style="color:red;">*</span></label><br>
      <label style="font-size: 10px;">Pastikan akun ini digunakan untuk upload <span style="font-weight:1000;">Video Edukasi</span></label>
      <input id="instagram" type="text" required="required" name="instagram" value="" placeholder="Masukkan Username Instagram" data-rule-required="true" data-msg-required="Username Instagram mohon diisi">
      <span class="error1" style="display:none;">
        <i class="error-log fa fa-exclamation-triangle"></i>
      </span>
    </div>

    <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset>
    <div class="hs_email field hs-form-field">
      <label for="exampleFormControlFile1">Bukti Follow IG @umnfestival</label><br>
      <label style="font-size: 9px;">Maksimal Ukuran File Upload 2MB</label>
      <input type="file" accept="image/*" multiple total-max-size="1024" name="umnfestival" class="form-control-file" id="umnfest" data-rule-required="true" data-msg-required="Bukti Follow IG @umnfestival  Harus di-upload">
      <span class="error1" style="display:none;">
        <i class="error-log fa fa-exclamation-triangle"></i>
      </span>
    </div>
    <div class="hs_email field hs-form-field">
      <label for="exampleFormControlFile1">Bukti Follow IG @ucare_2021</label><br>
      <label style="font-size: 9px;">Maksimal Ukuran File Upload 2MB</label>
      <input type="file" accept="image/*" max-file-size='1024' name="ucare_2021" class="form-control-file" id="ucare_2021" data-rule-required="true" data-msg-required="Bukti Follow IG @ucare_2021  Harus di-upload">
      <span class="error1" style="display:none;">
        <i class="error-log fa fa-exclamation-triangle"></i>
      </span>
    </div>

    <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="next action-button" value="Submit"/>
  </fieldset>
  <fieldset>
    <div class="hs_email field hs form-field my-4 pt-4">
      <label style="font-size:48px;">Mohon Tunggu Sebentar, File Sedang Di-Upload</label>
    </div>
  </fieldset>
</form>

<script type="text/javascript">
var uploadField = document.getElementById("umnfest");
var uploadUcare = document.getElementById("ucare_2021");

uploadField.onchange = function() {
  if(this.files[0].size > 2097152){
     alert("Ukuran File lebih dari 2MB");
     this.value = "";
  };
};

uploadUcare.onchange = function() {
  if(this.files[0].size > 2097152){
     alert("Ukuran File lebih dari 2MB");
     this.value = "";
  };
};
</script>
</body>
</html>
<?php /**PATH D:\Software\xampp\htdocs\laravel\resources\views\form.blade.php ENDPATH**/ ?>