<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$title_template;?></title>
  <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.css');?>">
  <link rel="stylesheet" href="<?=base_url('/assets/smartedu/css/smartedu.css');?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css">


  <!-- Font -->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>
<body class="">
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark sm-color-black shadow">
    <a class="navbar-brand sm-brand ml-5" href="#"><?=$title_template;?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link" href="#">Kontak</a>
        </li>
        <li class="nav-item ml-5">
          <button type="button" class="btn sm-btn-orange"><i class="fas fa-user-circle" style="color:white;"></i> Login</button>
        </li>


      </ul>

    </div>
  </nav>
</header>

<section id="banner" class="bg-img">
	<div class="container">
		<div class="banner-description">
			<h1 class="text-white"> <b>Pickup Me</b></h1><br>
			<p class="text-white lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. lorem
				Nulla non suscipit tortor. Nullam diam enim.</p><br>
			<button type="button" class="btn btn-dark">Baca Lebih Lanjut</button>
		</div>
	</div>
</section>
</body>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="./assets/bootstrap/js/bootstrap.js" charset="utf-8"></script>
</html>
