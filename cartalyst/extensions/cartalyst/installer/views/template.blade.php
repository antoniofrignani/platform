<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="description" content="an ecommerce engine">
	<meta name="author" content="Cartalyst LLC">
	<meta name="base_url" content="{{ url() }}">
	<meta name="admin_url" content="{{ url(ADMIN) }}">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Links -->
	<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type='text/css'>

	<?=Asset::styles()?>

	<title>
	@yield('title')
	</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
</head>
<body>

	<div id="base" class="container-fluid">
		<div class="row-fluid">

			<div id="page" class="span12">

				@yield('content')

			</div>
		</div>
	</div>

	{{ Asset::scripts() }}

</body>
</html>
