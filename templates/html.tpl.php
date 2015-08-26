<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
  <title><?php print $head_title; ?></title>
<?php 
$theme_name = "TulaneMicrosite"; 
$path = "/" . drupal_get_path('theme', variable_get('theme_default', NULL));
?>



  <?php print $styles; ?>
  <?php print $scripts; ?>
<meta name="description" content="<?php print $head_title; ?>" />
<meta name="robots" content="noodp,noydir" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="canonical" href="http://tulane.edu/inauguration/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":".\/js\/wp-emoji-release.min.js"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<?php 




if(@$variables['classes_array'][7] == 'node-type-microsite'){

print "<link rel='stylesheet' href='" . $path . "/style/microsite.css' type='text/css'>";
print "<script type='text/javascript' src='" . $path . "/js/jquery.js?ver=1.11.2'></script>";
print "<script type='text/javascript' src='" . $path . "/js/jquery-migrate.min.js?ver=1.2.1'></script>";
print "<script type='text/javascript' src='" . $path . "/js/global.js?ver=1.0.0'></script>";
print "<script type='text/javascript' src='" . $path . "/js/home.js?ver=1.0.0'></script>";
print "<script type='text/javascript' src='" . $path . "/js/jquery.scrollTo.min.js'></script>";
print "<script type='text/javascript' src='" . $path . "/js/jquery.localScroll.min.js'></script>";
} else {
print "<link rel='stylesheet' href='" . $path . "/css/tulane.css' type='text/css'>";
print "<link rel='stylesheet' href='" . $path . "/css/foundation.min.css' type='text/css'>";
print "<script type='text/javascript' src='" . $path . "/js/vendor/modernizr.js'></script>";
print "<script type='text/javascript' src='" . $path . "/js/foundation.min.js'></script>";
}
?>
<link rel="Shortcut Icon" href="" . $path . "/images/favicon.ico" type="image/x-icon" />
<link rel='stylesheet' id='dashicons-css'  href='" . $path . "/style/dashicons.min.css?ver=4.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='google-font-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600&#038;ver=1.0.1' type='text/css' media='all' />
<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body class="home blog custom-header header-image header-full-width full-width-content cafe-pro-home" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<?php

// echo $variables['classes_array'][7];
// echo "<br />";

print $page_top; ?>
<div class="site-container">

  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <script>
    (function ($, Drupal, window, document, undefined) {
      $(document).foundation();
    })(jQuery, Drupal, this, this.document);
  </script>
<!--- End site-container --->
</div>

</body>
</html>

