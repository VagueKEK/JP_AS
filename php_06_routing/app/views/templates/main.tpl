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