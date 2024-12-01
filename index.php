<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>mywebsite</title>
  <link rel="stylesheet" type="text/css" href="style/style.css?v=1.0" />
</head>

<body>
  <div id="container">
    <div id="header">
      <img src="image/logo.gif" alt="logo" class="icon">
      <img src="image/uinjkt.gif" alt="uinjkt" class="header-text">
      <h1>PERTEMUAN I -- SISTEM PAKAR</h1>
    </div>

    <div id="sidebar">
      <h3>navigasi</h3>
      <ul id="navmenu">
        <li><a href="index.php" class="selected">insert</a></li>
        <li><a href="?module=login#pos">Login</a></li>
        <li><a href="?module=view#pos">view</a></li>
        <li><a href="?module=search#pos">search</a></li>
      </ul>
    </div>
    <div id="page">
      <?php if (isset($_GET['module']))
        include "konten/$_GET[module].php";
      else
        include "konten/home.php"; ?>


    </div>
    <div id="clear"></div>
    <div id="footer">
      <p>&copy; 2010</p>
    </div>
  </div>
</body>

</html>