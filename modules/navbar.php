<style>
  .navbar {
    font-family: hacks;
    width: 100%;
    margin: 0;
    padding: 0;
    border-radius: 0;
    background-color:#4f4f4f;
    border:0

  }
  .navbar.affix {
    position: fixed;
    top: 0;
    width: 100%;
    z-index:10;
}
.nav-wrapper
{
    min-height:50px;
}
</style>
<script src="../static/nav.js"></script>

<div class="nav-wrapper">

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="745">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" id="navPatty">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TheROTG</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="nav-about"><a href="../home.php#about">About</a></li>
        <li class="nav-projects"><a href="../home.php#projects">Projects</a></li>
        <li class="nav-hire"><a href="../home.php#hire">Hire Me</a></li>
        <li class="nav-contact"><a href="../home.php#contact">Contact</a></li>
      </ul>

    </div>
  </div>
</nav>

</div>
