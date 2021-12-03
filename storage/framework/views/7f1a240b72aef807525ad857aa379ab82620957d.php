<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PUBGM - Tournament</title>
    <meta name="description" content="Ulympic merupakan ajang olahraga bagi mahasiswa, baik di dalam maupun luar UMN.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ulympic, ulympic internal, ulympic eksternal, Ulympic">
    <link rel="icon" href="/images/ufest.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/pubg.css?v=').time()); ?>">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/bracket/bracket.css?v=').time()); ?>"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet/less" type="text/css" href="<?php echo e(asset('/css/bracket/bracket.less?v=').time()); ?>" />
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1" ></script>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <style>
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }
    </style>
  </head>

  <script type="text/javascript">
  $(window).on('load',function(){
    setTimeout(function(){
        $(".preloader").fadeOut();
    },100);
    });
  </script>
  <body>
    <div class="preloader">
      <div class="loading">
        <img src="/images/Ufestgif.gif" width="400">
      </div>
    </div>
    <nav id="nav" class="navbar fixed-top navbar-expand-md navbar-dark display">
      <div class="container">
        <a href="/" class="navbar-brand mb-0 h1"><img class="d-inline-block" src="/images/ufest.png" width="30px"alt="">&nbsp UMN Festival 2021</a>
        <button type="button" name="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler collapsed" aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle navigation"><span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active mx-3"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item mx-3"><a href="our-team" class="nav-link">Our Team</a></li>
            <li class="nav-item mx-3"><a href="/ulympic" class="nav-link">Ulympic</a></li>
            <!-- <li class="nav-item mx-3"><a href="/U-Care" class="nav-link">U-Care</a></li> -->
            <li class="nav-item mx-3 dropdown" id="myDropdown">
               <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Bracket Tournament</a>
               <ul class="dropdown-menu">
                 <!-- &raquo; -->
                 <li><a class="dropdown-item" href="/ulympic/bracket/ML">Mobile Legend</a></li>
                 <li><a class="dropdown-item" href="/ulympic/bracket/Valorant">Valorant</a>
                 <li><a class="dropdown-item" href="/ulympic/bracket/PUBGM">PUBG</a></li>
               </ul>
             </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container mt-4 pt-4"> </div>
    <div class="container mt-4 pt-4"> </div>
  <div class="container-fluid mt-4 pt-4">
  <h1>PUBGM - Grand Final</h1>
  <div style="overflow-x:auto;" class="table-responsive-md mx-4">
    <table width="600px" class="table table-bordered table-hover bg-light text-black">
    <col>
    <colgroup span="2"></colgroup>
    <colgroup span="2"></colgroup>
    <tr>
      <td  class="text-center align-middle" rowspan="2">Slot</td>
      <td  class="text-center align-middle" rowspan="2">Nama Team</td>
      <th  class="text-center align-middle" rowspan="2" colspan="2">Nama Pemain</th>
      <th  class="text-center align-middle" colspan="4" scope="colgroup">Match 1</th>
      <th  class="text-center align-middle" colspan="4" scope="colgroup">Match 2</th>
      <th  class="text-center align-middle" colspan="4" scope="colgroup">Match 3</th>
      <th  class="text-center align-middle" colspan="4" scope="colgroup">Match 4</th>
      <th  class="text-center align-middle" colspan="2" rowspan="2" scope="colgroup">Total Kill</th>
      <th  class="text-center align-middle" rowspan="2">Total Poin</th>

    </tr>
    <!-- Pertama -->
    <tr>
      <th scope="col">Standing</th>
      <th scope="col">Point Standing</th>
      <th colspan="2"scope="col">Point Kill</th>
      <th scope="col">Standing</th>
      <th scope="col">Point Standing</th>
      <th colspan="2"scope="col">Point Kill</th>
      <th scope="col">Standing</th>
      <th scope="col">Point Standing</th>
      <th colspan="2"scope="col">Point Kill</th>
      <th scope="col">Standing</th>
      <th scope="col">Point Standing</th>
      <th colspan="2"scope="col">Point Kill</th>
    </tr>

      <!-- Baris tiga point kill -->
      <!-- Match 1 point kill -->

    <!-- kedua -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">1</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>

    <!-- ketiga -->

        <tr>
          <th class="text-center align-middle" rowspan="3"scope="row">2</th>
          <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

          <td>Wipoool</td>
          <td>Demosiac</td>
          <!-- Match 1 -->
          <td class="text-center align-middle" rowspan="3"scope="row">0</td>
          <td class="text-center align-middle" rowspan="3"scope="row">0</td>
          <td class="text-center align-middle" >0</td>
          <td class="text-center align-middle" >0</td>
          <!-- Match2 -->
          <td class="text-center align-middle" rowspan="3"scope="row">0</td>
          <td class="text-center align-middle" rowspan="3"scope="row">0</td>
          <td class="text-center align-middle" >0</td>
          <td class="text-center align-middle" >0</td>
          <!-- Match 3 -->
          <td class="text-center align-middle" rowspan="3"scope="row">0</td>
          <td class="text-center align-middle" rowspan="3"scope="row">0</td>
          <td class="text-center align-middle" >0</td>
          <td class="text-center align-middle" >0</td>
          <!-- Match4 -->
          <td class="text-center align-middle" rowspan="3"scope="row">0</td>
          <td class="text-center align-middle" rowspan="3"scope="row">0</td>
          <td class="text-center align-middle" >0</td>
          <td class="text-center align-middle" >0</td>
          <td>0</td>
          <td>1</td>
          <td class="text-center align-middle" rowspan="3"scope="row">0</td>
        </tr>
        <tr>
          <td>Cibowi</td>
          <td>KevinTanex</td>

          <td class="text-center align-middle">0</td>
          <td class="text-center align-middle">0</td>

          <td class="text-center align-middle">0</td>
          <td class="text-center align-middle">0</td>

          <td class="text-center align-middle">0</td>
          <td class="text-center align-middle">0</td>

          <td class="text-center align-middle">0</td>
          <td class="text-center align-middle">0</td>

          <td>0</td>
          <td>0</td>
        </tr>
        <tr>
          <td></td>
          <td class="text-center align-middle">-</td>
          <td></td>
          <td class="text-center align-middle">-</td>
          <td></td>
          <td class="text-center align-middle">-</td>
          <td></td>
          <td class="text-center align-middle">-</td>
          <td>0</td>
          <td class="text-center align-middle">-</td>
          <td>0</td>
          <td class="text-center align-middle">-</td>
        </tr>
  <!-- 4 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">3</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 5 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">4</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 6 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">5</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 7 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">6</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 8 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">7</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 9 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">8</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 10 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">9</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 11 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">10</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 12 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">11</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 13 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">12</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 14 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">13</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 15 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">14</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 16 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">15</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 17 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">16</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 18 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">17</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 19 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">18</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 20 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">19</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 21 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">20</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 22 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">21</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 23 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">22</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 24 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">23</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
  <!-- 25 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">24</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unbroken</th>

      <td>Wipoool</td>
      <td>Demosiac</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Cibowi</td>
      <td>KevinTanex</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>0</td>
    </tr>
    <tr>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td></td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
      <td>0</td>
      <td class="text-center align-middle">-</td>
    </tr>
<div class="container mt-4 pt-4"> </div>
<div class="container mt-4 pt-4"> </div>
  </body>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="<?php echo e(asset('/js/bracket/jquery.gracket.js?v=').time()); ?>"></script>
  <script src="<?php echo e(asset('/js/bracket/mlbracket.js?v=').time()); ?>" charset="utf-8"></script>
  <script>
    AOS.init();
  </script>
</html>
<?php /**PATH D:\Software\xampp\htdocs\laravel\resources\views\pubgfinal.blade.php ENDPATH**/ ?>