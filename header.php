<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>DAE Solutions｜DigitalーAdvertisingーEvent</title>
  <meta name="author" content="DAE Solutions" />
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="DAE Solutions - Brand Guideline" />
  <meta name="keywords"  content="DAE Solutions, Agency, Digital, Advertising, Event" />
  <meta name="Resource-type" content="Document" />
  <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
  <link rel="stylesheet" href="./css-cmn/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

  <!-- commmon css -->
  <link rel="stylesheet" type="text/css" href="./css-cmn/menu.css"/>
  <link rel="stylesheet" type="text/css" href="./css-cmn/common.css"/>
  <link rel="stylesheet" type="text/css" href="./css-cmn/slick-1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="./css-cmn/slick-1.8.1/slick/slick-theme.css"/>
  <!-- private css-->
  <link rel="stylesheet" type="text/css" href="./css/home.css"/>
  <link rel='stylesheet' type='text/css' href='./css-cmn/pagescroll.css'>
  <script>
  document.getElementByClass("menu-item").onclick = function() {
    closeMenu()
  };
  function closeMenu() {
    $("#menuToggle").prop('checked', false);
  }
  </script>
</head>
<body>
  <header class="hd">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="menu-bar">
            <a href="/"><img src="./img/logo.png"/></a>
            <div id="menuArea" style="z-index: 100">
              <input type="checkbox" id="menuToggle"></input>
              <label for="menuToggle" class="menuOpen">
                <div class="open"></div>
              </label>
              <div class="menu menuEffects">
                <label for="menuToggle"></label>
                <div class="menuContent">
                  <ul class="container">
                    <li><a class="menu-item" onclick="closeMenu()" href="/">Home</a></li>
                    <li><a class="menu-item" onclick="closeMenu()" href="#">About</a></li>
                    <li><a class="menu-item" onclick="closeMenu()" href="/#services">Services</a></li>
                    <li><a class="menu-item" onclick="closeMenu()" href="#work">Work</a></li>
                    <li><a class="menu-item" onclick="closeMenu()" href="#partner">Partners</a></li>
                    <li><a class="menu-item" onclick="closeMenu()" href="/academy.php" >Academy</a></li>
                    <li><a class="menu-item" onclick="closeMenu()" href="/news.php">News</a></li>
                    <li><a class="menu-item" onclick="closeMenu()" href="/team">Ourteam</a></li>
                    <li><a class="menu-item" onclick="closeMenu()" href="#contact">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
