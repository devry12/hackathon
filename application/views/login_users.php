<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$title_template;?></title>
	<link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?=base_url('/assets/smartedu/css/smartedu.css');?>">
  <link rel="stylesheet" href="<?=base_url('/assets/css/floating-labels.css');?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css">
	<!-- Font -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
  
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>

<body class="">
	<form class="form-signin">
		<div class="text-center mb-4">
			<img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
			<h1 class="h3 mb-3 font-weight-normal"><?=$title_template;?></h1>
			<p>Manage Data Anda.</p>
		</div>

		<div class="form-label-group">
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputEmail">Email address</label>
		</div>

		<div class="form-label-group">
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<label for="inputPassword">Password</label>
		</div>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
		<p class="mt-5 mb-3 text-muted text-center">&copy; 2019 @ BFI-Hackaton</p>
	</form>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="./assets/bootstrap/js/bootstrap.js" charset="utf-8"></script>

</html>
