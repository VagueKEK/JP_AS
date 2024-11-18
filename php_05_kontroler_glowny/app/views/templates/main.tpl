<!DOCTYPE HTML>
<html>
	<head>
		<title>{$page_title|default:"Tytuł domyślny"}</title> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <meta name="description" content="{$page_description|default:"Opis domyślny"}">
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="{$conf->app_url}/index.php">Kalkulator kredytowy</a></h1>
						<nav>
                                                    <ul class="actions small">
                                                            <li><a href="#top" class="button small">Strona główna</a></li>
															<li><a href="#main" class="button small">Kalkulator</a></li>
                                                    </ul>
                                        </nav>
				</div>
				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Kalkulator kredytowy</h2>
								<p>Oblicz swoją miesięczną ratę!</p>
							</div>
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="#top" class="image"><img src="images/github_logo.png" alt="" /></a>
									<div class="content">
										<h2 class="major">Moja strona Github</h2>
										<p>Na stronie Github umieszczam swoje małe projekty, w których wykorzystuję swoje umiejętności, aby tworzyć różne treści.</p>
										<a href="https://github.com/vagueKEK" class="special">Sprawdź!</a>
									</div>
								</div>
							</section>
						</header>
						<div id="main">
							<!-- Content -->
							{block name=content} Domyślna treść zawartości .... {/block}
						</div>
					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; {block name=footer} Domyślna treść zawartości .... {/block}. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="{$conf->app_url}assets/js/jquery.min.js"></script>
			<script src="{$conf->app_url}assets/js/jquery.scrollex.min.js"></script>
			<script src="{$conf->app_url}assets/js/browser.min.js"></script>
			<script src="{$conf->app_url}assets/js/breakpoints.min.js"></script>
			<script src="{$conf->app_url}assets/js/util.js"></script>
			<script src="{$conf->app_url}assets/js/main.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="{$conf->app_url}assets/js/smoothScroll.js"></script>

	</body>
</html>