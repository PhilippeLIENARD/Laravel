<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Mangas & BD</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
	<!-- CSS only -->
<style>
svg.w-5.h-5 {
   
    width: 40px;
    margin-bottom: -13px;
}
p.text-sm.text-gray-700.leading-5 {
    margin-top: 17px;
}

nav.flex.items-center.justify-between {
    margin-top: 50px;
}

.container{margin-top:100px}
.footer {
    background: #607D8B;
    color: #fff;
    text-align:center;    
    padding: 30px;
    margin-top: 42px;    
    position: fixed;
    width: 100%;
    bottom: 0;
}
.footer a, .footer a:hover{
    color: #fff;
} 
</style>  
  
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
			
			
            <li class="nav-item">
              <a class="nav-link" href="{{URL::route('addnew.route')}}">Ajouter une BD</a>
            </li>
           
          </ul>
          <form class="form-inline mt-2 mt-md-0">
         
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
	
	 <!-- Begin page content -->
    <main role="main" class="container">
      
         @yield('content')
     
    </main>


  

    <footer class="footer">
      <div>
      Découverte de Laravel et de Sail (Containeriser Laravel) : site de test réalisé par Philippe Liénard <br />

      <strong><a href="https://github.com/PhilippeLIENARD/Laravel">https://github.com/PhilippeLIENARD/Laravel</a></strong>
        <span class="text-muted"></span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
