
@extends('layouts.app')
@section('page','home')
@section('title','Accueil')
@section('content')


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Koroghli amira</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <div class="contnaier">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">koroghli amira</a>
            </div>
            <div class="navbar-collapse collapse" >
              <ul class="nav navbar-nav navbar-right" id="nav">
                <li id="a"><a href="/home">Accueil</a></li>
                <li><a href="/formation">Formation</a></li>
                <li><a href="/apropos">A Propos</a></li>
                <li><a href="/contact">Contact</a></li>
              </ul>
            </div>
          </nav>


        <div class="row" >
              <div class="col-md-12">
                <div class="intro-message text-center">
                  <h1 style="color:black">Koroghli Amira</h1>
                  <hr class="intro-divider">
                    <h3 style="color:black;">developpeuse Web</h3>
                    <i  aria-hidden="true"></i>
                </div>
              </div>
            </div>
<div class="col-md-12" id="lien">
  <div class="text-center">


<button type="button" name="button" value="Github" onclick="self.location.href='https://github.com/koroghli'">
<i class="fa fa-github-alt" aria-hidden="true">Github</i>
</button>
<button type="button" name="button" onclick="self.location.href='https://www.codecademy.com/fr/boardRunner94371'">
<i class="fa fa-code" aria-hidden="true" >Codecademy</i>
</button>
</div>
 </div>
 </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    </div>
      </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
@endsection
