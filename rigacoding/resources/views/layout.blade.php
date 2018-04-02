<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kartejais meginajums</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
<!-- 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />


  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div class="container-fluid nav-cont">
      <a href="/">
      <h1 class="nav navbar-nav navbar-left nav-logo-margin">
        LOGO!
      </h1>
      </a>

      <ul class="nav navbar-nav navbar-right">
        <li class="{{ $page == 'index' ? 'active' : '' }}"><a href="/">Home</a></li>
        <li class="{{ $page == 'articles' ? 'active' : '' }}"><a href="/articles">Articles</a></li>
        <li class="{{ $page == 'chat' ? 'active' : '' }}"><a href="/chat">Chat</a></li>
        <li class="{{ $page == 'register' ? 'active' : '' }}"><a href="/register">Register</a></li>
        <li class="{{ $page == 'aboutus' ? 'active' : '' }}"><a href="/aboutus">About us</a></li>
      </ul>
    </div>
  </header> 

  @yield('content')

  <footer>
    <div class="container-fluid">
      <h5>&copy; Imant</h5>
    </div>
  </footer>
      <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
      <script type="text/javascript" src="js/main.js"></script>

</body>
</html>