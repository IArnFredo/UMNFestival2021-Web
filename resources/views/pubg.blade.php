<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PUBGM - Tournament</title>
    <meta name="description" content="Ulympic merupakan ajang olahraga bagi mahasiswa, baik di dalam maupun luar UMN.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ulympic, ulympic internal, ulympic eksternal, Ulympic">
    <link rel="icon" href="/images/ufest.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pubg.css?v=').time()}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/css/bracket/bracket.css?v=').time()}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet/less" type="text/css" href="{{asset('/css/bracket/bracket.less?v=').time()}}" />
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
                 <li><a class="dropdown-item" href="/ulympic/bracket/PUBGM">PUBGM</a></li>
               </ul>
             </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container mt-4 pt-4"> </div>
    <div class="container mt-4 pt-4"> </div>
  <div class="container-fluid mt-4 pt-4">
  <h1>PUBGM - Kualifikasi</h1>
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
      <th class="text-center align-middle" rowspan="3"scope="row">Aing Maung Esport</th>

      <td>乛Ｄｉｍｚｚ</td>
      <td>Skin　Bansos</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">3</td>
      <td class="text-center align-middle" rowspan="3"scope="row">10</td>
      <td class="text-center align-middle" >6</td>
      <td class="text-center align-middle" >3</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">5</td>
      <td class="text-center align-middle" rowspan="3"scope="row">6</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">8</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >1</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">8</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >0</td>
      <td>8</td>
      <td>4</td>
      <td class="text-center align-middle" rowspan="3"scope="row">42</td>
    </tr>
    <tr>
      <td>7SKYWiraPro</td>
      <td>CARIĖJANDA</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">5</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">1</td>
      <td class="text-center align-middle">0</td>

      <td>10</td>
      <td>0</td>
    </tr>
    <tr>
      <td>E365xArkanCiL</td>
      <td>-</td>

      <td class="text-center align-middle">1</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">1</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td>2</td>
      <td>-</td>
    </tr>

    <!-- ketiga -->

        <tr>
          <th class="text-center align-middle" rowspan="3"scope="row">2</th>
          <th class="text-center align-middle" rowspan="3"scope="row">PSM</th>

          <td>QuinnIzzy</td>
          <td>【KNB】Dep</td>
          <!-- Match 1 -->
          <td class="text-center align-middle" rowspan="3"scope="row">11</td>
          <td class="text-center align-middle" rowspan="3"scope="row">1</td>
          <td class="text-center align-middle" >1</td>
          <td class="text-center align-middle" >0</td>
          <!-- Match2 -->
          <td class="text-center align-middle" rowspan="3"scope="row">7</td>
          <td class="text-center align-middle" rowspan="3"scope="row">2</td>
          <td class="text-center align-middle" >0</td>
          <td class="text-center align-middle" >0</td>
          <!-- Match 3 -->
          <td class="text-center align-middle" rowspan="3"scope="row">6</td>
          <td class="text-center align-middle" rowspan="3"scope="row">4</td>
          <td class="text-center align-middle" >0</td>
          <td class="text-center align-middle" >0</td>
          <!-- Match4 -->
          <td class="text-center align-middle" rowspan="3"scope="row">11</td>
          <td class="text-center align-middle" rowspan="3"scope="row">1</td>
          <td class="text-center align-middle" >0</td>
          <td class="text-center align-middle" >0</td>
          <td>1</td>
          <td>0</td>
          <td class="text-center align-middle" rowspan="3"scope="row">16</td>
        </tr>
        <tr>
          <td>DUxCryzen</td>
          <td>darliu</td>

          <td class="text-center align-middle">0</td>
          <td class="text-center align-middle">0</td>

          <td class="text-center align-middle">3</td>
          <td class="text-center align-middle">1</td>

          <td class="text-center align-middle">0</td>
          <td class="text-center align-middle">0</td>

          <td class="text-center align-middle">2</td>
          <td class="text-center align-middle">1</td>

          <td>5</td>
          <td>2</td>
        </tr>
        <tr>
          <td>24434rejected</td>
          <td>-</td>

          <td class="text-center align-middle">0</td>
          <td class="text-center align-middle">-</td>

          <td class="text-center align-middle">0</td>
          <td class="text-center align-middle">-</td>

          <td class="text-center align-middle">0</td>
          <td class="text-center align-middle">-</td>

          <td class="text-center align-middle">0</td>
          <td class="text-center align-middle">-</td>

          <td>0</td>
          <td>-</td>
        </tr>
<!-- 4 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">3</th>
      <th class="text-center align-middle" rowspan="3"scope="row">FE SKY</th>

      <td>FEJazperSKY</td>
      <td>FELeLeBoySKY</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">6</td>
      <td class="text-center align-middle" rowspan="3"scope="row">4</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >5</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">20</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">7</td>
      <td class="text-center align-middle" rowspan="3"scope="row">2</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >3</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">20</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >9</td>
      <td>1</td>
      <td>17</td>
      <td class="text-center align-middle" rowspan="3"scope="row">53</td>
    </tr>
    <tr>
      <td>FEDrewSKY</td>
      <td>FEjuanSKY</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">2</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">3</td>
      <td class="text-center align-middle">2</td>

      <td>5</td>
      <td>4</td>
    </tr>
    <tr>
      <td>FEZooXxSKY</td>
      <td>-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td>0</td>
      <td>-</td>
    </tr>
<!-- 5 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">4</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Sneaky Snail</th>

      <td>JANINDAJJAL</td>
      <td>LOW BANGET</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">5</td>
      <td class="text-center align-middle" rowspan="3"scope="row">6</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >5</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">15</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >2</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">4</td>
      <td class="text-center align-middle" rowspan="3"scope="row">8</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">3</td>
      <td class="text-center align-middle" rowspan="3"scope="row">10</td>
      <td class="text-center align-middle" >2</td>
      <td class="text-center align-middle" >0</td>
      <td>3</td>
      <td>7</td>
      <td class="text-center align-middle" rowspan="3"scope="row">44</td>
    </tr>
    <tr>
      <td>FajarKiyoshi</td>
      <td>LVNana</td>

      <td class="text-center align-middle">1</td>
      <td class="text-center align-middle">1</td>

      <td class="text-center align-middle">3</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">3</td>
      <td class="text-center align-middle">0</td>

      <td>9</td>
      <td>1</td>
    </tr>
    <tr>
      <td>JANINSYURGA</td>
      <td>-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td>0</td>
      <td>-</td>
    </tr>
<!-- 6 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">5</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Pejuang skkm</th>

      <td>メBKS丨TAKĀ</td>
      <td>ＵＮＯ死神</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">2</td>
      <td class="text-center align-middle" rowspan="3"scope="row">15</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >2</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">20</td>
      <td class="text-center align-middle" >3</td>
      <td class="text-center align-middle" >2</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">5</td>
      <td class="text-center align-middle" rowspan="3"scope="row">6</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >1</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">2</td>
      <td class="text-center align-middle" rowspan="3"scope="row">15</td>
      <td class="text-center align-middle" >5</td>
      <td class="text-center align-middle" >7</td>
      <td>10</td>
      <td>12</td>
      <td class="text-center align-middle" rowspan="3"scope="row">96</td>
    </tr>
    <tr>
      <td>SVRmelonT</td>
      <td>o m g o p a l</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">4</td>

      <td class="text-center align-middle">3</td>
      <td class="text-center align-middle">2</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">7</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>5</td>
      <td>13</td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 7 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">6</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unizar Unity</th>

      <td>ɢpѕ丨Nine</td>
      <td>8KuroNEKO</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">16</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">18</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">3</td>
      <td class="text-center align-middle" rowspan="3"scope="row">10</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >4</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">6</td>
      <td class="text-center align-middle" rowspan="3"scope="row">4</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >1</td>
      <td>0</td>
      <td>5</td>
      <td class="text-center align-middle" rowspan="3"scope="row">37</td>
    </tr>
    <tr>
      <td>MamiqOP</td>
      <td>SADEGA ONLY</td>

      <td class="text-center align-middle">1</td>
      <td class="text-center align-middle">3</td>

      <td class="text-center align-middle">3</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">4</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">2</td>

      <td>4</td>
      <td>9</td>
    </tr>
    <tr>
      <td>CFXSANS</td>
      <td>-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">3</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td>5</td>
      <td>-</td>
    </tr>
<!-- 8 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">7</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Team Vindex</th>

      <td>VNDxL2F</td>
      <td> VNDxDiabLo</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">8</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">6</td>
      <td class="text-center align-middle" rowspan="3"scope="row">4</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">20</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >7</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">5</td>
      <td class="text-center align-middle" rowspan="3"scope="row">6</td>
      <td class="text-center align-middle" >3</td>
      <td class="text-center align-middle" >0</td>
      <td>4</td>
      <td>7</td>
      <td class="text-center align-middle" rowspan="3"scope="row">46</td>
    </tr>
    <tr>
      <td>VNDxXeanBOT</td>
      <td>VNDxMich</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">1</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">1</td>

      <td>2</td>
      <td>2</td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 9 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">8</th>
      <th class="text-center align-middle" rowspan="3"scope="row">UnVersed</th>

      <td>JowLungEsport</td>
      <td>Protosonic</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">9</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">21</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">21</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">18</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">6</td>
    </tr>
    <tr>
      <td>BapakSamiquel</td>
      <td>JoesGNTNG</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">4</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">1</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>1</td>
      <td>4</td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 10 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">9</th>
      <th class="text-center align-middle" rowspan="3"scope="row">ORION</th>

      <td>ＫｅｌｌｙĖ٭</td>
      <td>Ａｍａｕ٭</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">20</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">4</td>
      <td class="text-center align-middle" rowspan="3"scope="row">8</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">17</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">21</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">9</td>
    </tr>
    <tr>
      <td> ROSAKA•TOGAR</td>
      <td>ĖＴｅｃｃａ٭</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">1</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>0</td>
      <td>1</td>
    </tr>
    <tr>
      <td>Ｐｅａｃｙ٭</td>
      <td>-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td>0</td>
      <td>-</td>
    </tr>
<!-- 11 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">10</th>
      <th class="text-center align-middle" rowspan="3"scope="row">AKL</th>

      <td>APNCr1t</td>
      <td>Allerialina</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">17</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >1</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">15</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">11</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">19</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">2</td>
    </tr>
    <tr>
      <td>ROR×Yezzha</td>
      <td>autish</td>

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
      <td>CIP£×BUNNY</td>
      <td>-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td>0</td>
      <td>-</td>
    </tr>
<!-- 12 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">11</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Ace</th>

      <td>ricid</td>
      <td>candrew1809</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">22</td>
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
      <td>0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>StanleyLoL</td>
      <td>fatboyfatboyy</td>

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
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 13 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">12</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Unknown</th>

      <td>dgrapeflamingo</td>
      <td>Lugavft</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">13</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">19</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">13</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">22</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
    </tr>
    <tr>
      <td>Spnyxx</td>
      <td>DevelopedAthle</td>

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
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 14 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">13</th>
      <th class="text-center align-middle" rowspan="3"scope="row">SemogaLulusCepat</th>

      <td>AppropriateZ</td>
      <td>StadiumCalling</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">23</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">24</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >1</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">19</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">23</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
    </tr>
    <tr>
      <td>Wonderone</td>
      <td>LeandShow</td>

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
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 15 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">14</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Hermes Rh Esport</th>

      <td>ROXExRiPz</td>
      <td>HRXrafrizzz</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">19</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >1</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">9</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">12</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >2</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">13</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >1</td>
      <td>3</td>
      <td>4</td>
      <td class="text-center align-middle" rowspan="3"scope="row">10</td>
    </tr>
    <tr>
      <td>HRXtwopan</td>
      <td>HRXĪTIME</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>2</td>
      <td>0</td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 16 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">15</th>
      <th class="text-center align-middle" rowspan="3"scope="row">PUNK SQUAD</th>

      <td>E365Frizz</td>
      <td>BRLBabyGirlメ</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">12</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">10</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">16</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">16</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >2</td>
      <td class="text-center align-middle" >0</td>
      <td>3</td>
      <td>0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">4</td>
    </tr>
    <tr>
      <td>Axthenz</td>
      <td>〆SKYxSCREAM乛</td>

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
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 17 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">16</th>
      <th class="text-center align-middle" rowspan="3"scope="row">L3</th>

      <td>Kepalamuda</td>
      <td>SPGPrenagen</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">14</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >2</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">8</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >1</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">10</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >1</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">12</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>4</td>
      <td class="text-center align-middle" rowspan="3"scope="row">11</td>
    </tr>
    <tr>
      <td>NoCashJo</td>
      <td>VicloneZ</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">1</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">0</td>

      <td>5</td>
      <td>0</td>
    </tr>
    <tr>
      <td>NV丶paraboyyĪ</td>
      <td>-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td>0</td>
      <td>-</td>
    </tr>
<!-- 18 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">17</th>
      <th class="text-center align-middle" rowspan="3"scope="row">TOBRON</th>

      <td>KaiaHelga</td>
      <td>NotGranola</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">21</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">11</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">9</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">9</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >1</td>
      <td class="text-center align-middle" >0</td>
      <td>1</td>
      <td>0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">4</td>
    </tr>
    <tr>
      <td>DetoroitoSmash</td>
      <td>soorJa</td>

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
      <td>Ceb0X</td>
      <td>-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td>0</td>
      <td>-</td>
    </tr>
<!-- 19 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">18</th>
      <th class="text-center align-middle" rowspan="3"scope="row">TWONE Esport</th>

      <td>Vanya</td>
      <td>EX</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">2</td>
      <td class="text-center align-middle" rowspan="3"scope="row">15</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >9</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">15</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >3</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">4</td>
      <td class="text-center align-middle" rowspan="3"scope="row">8</td>
      <td class="text-center align-middle" >5</td>
      <td class="text-center align-middle" >0</td>
      <td>5</td>
      <td>12</td>
      <td class="text-center align-middle" rowspan="3"scope="row">60</td>
    </tr>
    <tr>
      <td>TWONExSnapz</td>
      <td>PUNYA AYIN</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">4</td>
      <td class="text-center align-middle">8</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">8</td>

      <td>4</td>
      <td>16</td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 20 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">19</th>
      <th class="text-center align-middle" rowspan="3"scope="row">PEAK</th>

      <td>XoxoFamous</td>
      <td>sweetbabicry</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">7</td>
      <td class="text-center align-middle" rowspan="3"scope="row">2</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">12</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >6</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">22</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">15</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>6</td>
      <td>0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">8</td>
    </tr>
    <tr>
      <td>Moziza</td>
      <td>mainmainje123</td>

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
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 21 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">20</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Manto E-Sport</th>

      <td>AahhhYameteee</td>
      <td>Deellah</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">4</td>
      <td class="text-center align-middle" rowspan="3"scope="row">8</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">23</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">20</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">17</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">8</td>
    </tr>
    <tr>
      <td>MantoKusmanto</td>
      <td>Fidzha03</td>

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
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 22 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">21</th>
      <th class="text-center align-middle" rowspan="3"scope="row">XEMEX</th>

      <td>N4RXLapse</td>
      <td>MDmoniQ・ab</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">15</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">17</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">10</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>0</td>
      <td class="text-center align-middle" rowspan="3"scope="row">2</td>
    </tr>
    <tr>
      <td>Milansputnik13</td>
      <td>Tamiyaresing</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">1</td>
      <td class="text-center align-middle">0</td>

      <td>1</td>
      <td>0</td>
    </tr>
    <tr>
      <td>kidkood</td>
      <td>-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">-</td>

      <td>0</td>
      <td>-</td>
    </tr>
<!-- 23 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">22</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Warog Max</th>

      <td>AURAClasies4V</td>
      <td>CarelesssX</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">10</td>
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" >2</td>
      <td class="text-center align-middle" >3</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">3</td>
      <td class="text-center align-middle" rowspan="3"scope="row">10</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">2</td>
      <td class="text-center align-middle" rowspan="3"scope="row">15</td>
      <td class="text-center align-middle" >3</td>
      <td class="text-center align-middle" >4</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">7</td>
      <td class="text-center align-middle" rowspan="3"scope="row">2</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >4</td>
      <td>5</td>
      <td>11</td>
      <td class="text-center align-middle" rowspan="3"scope="row">47</td>
    </tr>
    <tr>
      <td>TPLxVinnKawaiii</td>
      <td>WAROGohMyClaes</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">1</td>

      <td class="text-center align-middle">2</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>2</td>
      <td>1</td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 24 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">23</th>
      <th class="text-center align-middle" rowspan="3"scope="row">Simps</th>

      <td>KOKrehanNOOBWk</td>
      <td>fmmii</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">18</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">14</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >1</td>
      <!-- Match 3 -->
      <td class="text-center align-middle" rowspan="3"scope="row">18</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <!-- Match4 -->
      <td class="text-center align-middle" rowspan="3"scope="row">14</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >0</td>
      <td class="text-center align-middle" >0</td>
      <td>0</td>
      <td>1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">3</td>
    </tr>
    <tr>
      <td>CHunCHunMarU</td>
      <td>Ryzuk1</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">1</td>
      <td class="text-center align-middle">1</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>1</td>
      <td>1</td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>
<!-- 25 -->

    <tr>
      <th class="text-center align-middle" rowspan="3"scope="row">24</th>
      <th class="text-center align-middle" rowspan="3"scope="row">FE STARLIGHT</th>

      <td>SLNicc</td>
      <td>SLOneway</td>
      <!-- Match 1 -->
      <td class="text-center align-middle" rowspan="3"scope="row">1</td>
      <td class="text-center align-middle" rowspan="3"scope="row">20</td>
      <td class="text-center align-middle" >6</td>
      <td class="text-center align-middle" >7</td>
      <!-- Match2 -->
      <td class="text-center align-middle" rowspan="3"scope="row">13</td>
      <td class="text-center align-middle" rowspan="3"scope="row">0</td>
      <td class="text-center align-middle" >6</td>
      <td class="text-center align-middle" >2</td>
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
      <td>12</td>
      <td>9</td>
      <td class="text-center align-middle" rowspan="3"scope="row">54</td>
    </tr>
    <tr>
      <td>SLMooXx</td>
      <td>PUNYA RAGIL</td>

      <td class="text-center align-middle">6</td>
      <td class="text-center align-middle">3</td>

      <td class="text-center align-middle">1</td>
      <td class="text-center align-middle">3</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td class="text-center align-middle">0</td>
      <td class="text-center align-middle">0</td>

      <td>7</td>
      <td>6</td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
      <td class="text-center align-middle">-</td>
    </tr>

</div>
<div class="container mt-4 pt-4"> </div>
<div class="container mt-4 pt-4"> </div>
  </body>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{asset('/js/bracket/jquery.gracket.js?v=').time()}}"></script>
  <script src="{{asset('/js/bracket/mlbracket.js?v=').time()}}" charset="utf-8"></script>
  <script>
    AOS.init();
  </script>
</html>
