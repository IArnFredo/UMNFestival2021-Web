<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mobile Legend Bracket - Tournament</title>
    <meta name="description" content="Ulympic merupakan ajang olahraga bagi mahasiswa, baik di dalam maupun luar UMN.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ulympic, ulympic internal, ulympic eksternal, Ulympic">
    <link rel="icon" href="/images/ufest.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/ulympic.css?v=').time()}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/css/bracket/bracket.css?v=').time()}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet/less" type="text/css" href="{{asset('/css/bracket/bracket.less?v=').time()}}" />
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1" ></script>
    <link href='https://fonts.googleapis.com/css?family=Istok+Web|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
  <div class="container mt-4 pt-4">
  <h1>Mobile Legend - External</h1>
  <div class="tournament-bracket tournament-bracket--rounded">
    <div class="tournament-bracket__round tournament-bracket__round--quarterfinals">
      <h3 class="tournament-bracket__round-title">Round 1</h3>
      <ul class="tournament-bracket__list">

        <!-- Match -->
        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <!-- Kalo menang kasih  tournament-bracket__team--winner -->
                <!-- Kalo kalah kasih tournament-bracket__team--lose -->
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="AKL">AKL</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ca" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="SKKM">SKKM</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-kz" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 2 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <!-- tournament-bracket__team--winner -->
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Rx King">Rx King</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-cz" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Tim Hore">Tim Hore</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-us" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 3 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Crescer">Crescer</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-fi" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="BARDUGI">BARDUGI</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-se" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Macth 4 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Nameless">Nameless</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="BAKOH">BAKOH</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 5 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Geng Krupux">Geng Krupux</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-fi" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Ryujin eSports">Ryujin eSports</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-se" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 6 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="TOBRON">TOBRON</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="BDT Pro">BDT Pro</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 7 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Doa ibu">Doa ibu</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Chernobyl">Chernobyl</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 8 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Tomato">Tomato</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Rembo">Rembo</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 8 -->
        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <!-- Kalo menang kasih  tournament-bracket__team--winner -->
                <!-- Kalo kalah kasih tournament-bracket__team--lose -->
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Greedy Gang">Greedy Gang</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ca" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Seven sins">Seven sins</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-kz" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 9 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <!-- tournament-bracket__team--winner -->
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="C4">C4</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-cz" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Team Himawari(TH)">Team Himawari(TH)</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-us" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 10 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Farm House">Farm House</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-fi" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="UGM Guardians">UGM Guardians</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-se" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Macth 12 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (20.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="HADEH">HADEH</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="GUNS">GUNS</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 13 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (20.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Pejuang SKKM">Pejuang SKKM</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-fi" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="BAIT">BAIT</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-se" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 14 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (20.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Victory">Victory</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="NorthEastOctopus">North EastOctopus</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 15 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (20.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Taktik Licik">Taktik Licik</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="HAH">HAH</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 16 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">15 November 2021 (20.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Humble Team">Humble Team</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Altairz">Altairz</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
      </ul>
    </div>

    <!-- Round 2 -->

    <div class="tournament-bracket__round tournament-bracket__round--semifinals">
      <h3 class="tournament-bracket__round-title">Round 2</h3>
      <ul class="tournament-bracket__list">

        <!-- Match 1 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">16 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="SKKM">SKKM</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Rx King">Rx King</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 2 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">16 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="BARDUGI">BARDUGI</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Nameless">Nameless</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 3 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">16 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Ryujin eSports">Ryujin eSports</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="BDT Pro">BDT Pro</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 4 -->
        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">16 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Doa Ibu">Doa Ibu</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Rembo">Rembo</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 5 -->
        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">16 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Seven sins">Seven sins</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Team Himawari(TH)">Team Himawari(TH)</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 6 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">16 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="UGM Guardians">UGM Guardians</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="HADEH">HADEH</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 7 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">16 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="BAIT">BAIT</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="NorthEastOctopus">North EastOctopus</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 8 -->
        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">16 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Taktik Licik">Taktik Licik</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Humble Team">Humble Team</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
      </ul>
    </div>

    <!-- Round 3 -->
    <div class="tournament-bracket__round tournament-bracket__round--semifinals">
      <h3 class="tournament-bracket__round-title">Round 3</h3>
      <ul class="tournament-bracket__list">

        <!-- Match 1 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">17 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="SKKM">SKKM</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Nameless">Nameless</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 2 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">17 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Ryujin eSports">Ryujin eSports</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Doa ibu">Doa ibu</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 3 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">17 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Team Himawari(TH)">Team Himawari(TH)</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="UGM Guardians">UGM Guardians</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 4 -->
        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">17 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="North EastOctopus">North EastOctopus</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--lose">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Humble Team">Humble Team</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score tournament-bracket__team--winner">
                    <span class="tournament-bracket__number">1</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
      </ul>
    </div>

    <!-- semifinals -->

    <div class="tournament-bracket__round tournament-bracket__round--semifinals">
      <h3 class="tournament-bracket__round-title">Semi Finals</h3>
      <ul class="tournament-bracket__list">

        <!-- Match 1 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">18 November 2021 (17.00 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Nameless">Nameless</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score ">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Ryujin eSports">Ryujin eSports</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score ">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>

        <!-- Match 2 -->

        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-18">18 November 2021 (19.30 WIB)</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="UGM Guardians">UGM Guardians</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="Humble Team">Humble Team</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-by" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score ">
                    <span class="tournament-bracket__number">0</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
      </ul>
    </div>

    <!-- Bronze Match -->

    <div class="tournament-bracket__round tournament-bracket__round--bronze">
      <h3 class="tournament-bracket__round-title">Bronze Match</h3>
      <ul class="tournament-bracket__list">
        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-21">-</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Country</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="-">-</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-fi" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score">
                    <span class="tournament-bracket__number">-</span>
                    <!-- <span class="tournament-bracket__medal tournament-bracket__medal--bronze fa fa-trophy" aria-label="Bronze medal"></span> -->
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="-">-</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ca" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score">
                    <span class="tournament-bracket__number">-</span>
                    <!-- <span class="tournament-bracket__medal tournament-bracket__medal--bronze fa fa-trophy" aria-label="Bronze medal"></span> -->
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
      </ul>
    </div>

    <!-- Grand Final -->
    <div class="tournament-bracket__round tournament-bracket__round--gold">
      <h3 class="tournament-bracket__round-title">Grand Final</h3>
      <ul class="tournament-bracket__list">
        <li class="tournament-bracket__item">
          <div class="tournament-bracket__match" tabindex="0">
            <table class="tournament-bracket__table">
              <caption class="tournament-bracket__caption">
                <time datetime="1998-02-22">-</time>
              </caption>
              <thead class="sr-only">
                <tr>
                  <th>Name</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody class="tournament-bracket__content">
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="-">-</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-cz" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score">
                    <span class="tournament-bracket__number">-</span>
                    <!-- <span class="tournament-bracket__medal tournament-bracket__medal--gold fa fa-trophy" aria-label="Gold medal"></span> -->
                  </td>
                </tr>
                <tr class="tournament-bracket__team">
                  <td class="tournament-bracket__country">
                    <abbr class="tournament-bracket__code" title="-">-</abbr>
                    <span class="tournament-bracket__flag flag-icon flag-icon-ru" aria-label="Flag"></span>
                  </td>
                  <td class="tournament-bracket__score">
                    <span class="tournament-bracket__number">-</span>
                    <!-- <span class="tournament-bracket__medal tournament-bracket__medal--silver fa fa-trophy" aria-label="Silver medal"></span> -->
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
      </ul>
    </div>
  </div>
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
