<!-- Facebook Javascript SDK -->
<div id="fb-root"></div>
    <script>    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    } (document, 'script', 'facebook-jssdk'));
    </script>

<div id="header" class="jumbotron text-center" style="height: 200px; margin-bottom:0">
&nbsp;
</div>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Diaper Calculator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="purchase.php">Buy Diapers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>    
    </ul>
  </div>  
</nav>