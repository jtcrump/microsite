<?php
$theme_name = "TulaneMicrosite";
$path = "/" . drupal_get_path('theme', variable_get('theme_default', NULL));
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
function convertToWord($num){
switch ($num) {
	case 0:
		$num = "zero";
		break;
	case 1:
		$num = "one-widget";
		break;
	case 2:
		$num = "two-widgets";
		break;
	case 3:
		$num = "three-widgets";
		break;
	case 4:
		$num = "four-widgets";
		break;
	case 5:
		$num = "five-widgets";
		break;
	case 6:
		$num = "six-widgets";
		break;
	case 7:
		$num = "seven-widgets";
		break;
	case 8:
		$num = "eight-widgets";
		break;
	default:
		$num = "one-widget";
	}
return $num;
}

$file = @file_load($content['field_splash_logo'][0]['#item']['fid']);
$file1 = @file_load($content['field_page_1_bg_image'][0]['#item']['fid']);
$file2 = @file_load($content['field_page_2_bg_image'][0]['#item']['fid']);
$file3 = @file_load($content['field_page_3_bg_image'][0]['#item']['fid']);
$file4 = @file_load($content['field_page_4_bg_image'][0]['#item']['fid']);
$file5 = @file_load($content['field_page_5_bg_image'][0]['#item']['fid']);
$file6 = @file_load($content['field_nav_image'][0]['#item']['fid']);
?>


<?php
if($node->type == 'microsite'){
?>

<style type="text/css">
/* image in the main menu on far left */
.nav-primary .small-site-title {
	background-image: url(<?php print file_create_url(@$file6->uri); ?>);
}








/* splash page small image that's a link */
.site-title a { 
background: url(<?php print file_create_url($file->uri); ?>) ; 
 background-repeat: no-repeat;

}

<?php
// this will set the height of the splash screen logo. Width is auto
$size = getimagesize(file_create_url(@$file->uri));
$height = $size[1];
?>

.header-image .site-title > a {
	min-height: <?php print $height; ?>px;
width: 100%;
}

/* splash page background image */
.front-page-header {
	background-image: url(<?php print file_create_url(@$file1->uri); ?>);
 
}
.front-page-1 {
	background-image: url(<?php print file_create_url(@$file2->uri); ?>);
}
.front-page-2 {
	background-image: url(<?php print file_create_url(@$file3->uri); ?>);
}
.front-page-3 {
	background-image: url(<?php print file_create_url(@$file4->uri); ?>);
}
.front-page-4 {
	background-image: url(<?php print file_create_url(@$file5->uri); ?>);
}
</style>

<?php
if(isset($content['field_splash_page_text'][0]['#markup'])){
print "<div class=\"splash-text\">";
print @$content['field_splash_page_text'][0]['#markup'];
print "</div>";
}
?>

<header class="site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
<div class="wrap">
<div class="title-area">
<h1 class="site-title" itemprop="headline">
<a href="<?php print @$content['field_splash_logo_link'][0]['#markup']; ?>"><?php print $node->title; ?></a>
</h1>
<h2 class="site-description" itemprop="description"><?php print $node->title; ?></h2>
</div>
</div>
</header>

<?php
// $block3 = module_invoke('webform', 'block_view', 'client-block-3'); // inauguration site rsvp form
// if(strlen($block3['content']) > 100){
// print "<div id=\"front-page-5\" class=\"front-page-4 image-section\">";
// print "<div class=\"form-wrapper\">";
// print render($block3['content']);
// print "</div></div>";
}
?>

<nav class="nav-primary" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
<div class="wrap">
<ul id="ms-menu-primary-navigation" class="ms-menu genesis-nav-ms-menu ms-menu-primary">
<?php
$zz = 652;
$menu = $content['field_menu_items'][0]['#markup']; 
$menu = str_replace("<p>","",$menu);
$menu = str_replace("</p>","",$menu);
$m = explode("</a>",$menu);

foreach($m as $mi){
	if($zz == 652){
	print "	<li class=\"small-site-title\">";
	} else {
	print "<li id=\"ms-menu-item-" . $zz . "\" class=\"inaug-nav ms-menu-item ms-menu-item-type-custom ms-menu-item-object-custom current-ms-menu-item current_page_item ms-menu-item-" . $zz . "\">";
	}
print $mi . "</a></li>";
$zz++;
}
?>
</ul>
</div>
</nav>

<div class="site-inner"><div class="content-sidebar-wrap">
<main class="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

<!--- start the first page after the intro splash --->
<div id="front-page-1" class="front-page-1 solid-section">
<?php 
$i = 0;
while(strlen(@$content['field_page_2_content'][$i]['#markup']) > 5){
$i++;
} 
?>
<div class="widget-area <?php print convertToWord($i); ?>">
<div class="wrap">
<?php
$i2 = 0;
while($i2 <= $i){
print "<section id=\"text-2\" class=\"widget widget_text\">";
print "<div class=\"widget-wrap\">";		
print @$content['field_page_2_content'][$i2]['#markup'];
print "</div>";
print "</section>";
$i2++;
}
?>
</div></div></div>
<!--- end the first page after the intro splash --->









<?php
if(strlen(@$content['field_page_3_content'][0]['#markup']) > 5){
?>
<!--- start the second page after the intro splash --->
<div id="front-page-2" class="front-page-2 image-section">
<?php 
$i = 0;
while(strlen(@$content['field_page_3_content'][$i]['#markup']) > 5){
$i++;
} 
?>
<div class="widget-area <?php print convertToWord($i); ?>">
<div class="wrap">
<?php
$i2 = 0;
while($i2 < $i){
print "<section id=\"text-" . $i2 . "\" class=\"widget widget_text\">";
print "<div class=\"widget-wrap\">";		
print @$content['field_page_3_content'][$i2]['#markup'];
print "</div>";
print "</section>";
$i2++;
}
?>
</div></div></div>
<!--- end the second page after the intro splash --->
<?php
}
?>

<?php
if(strlen(@$content['field_page_4_content'][0]['#markup']) > 5){
?>
<!--- start the third page after the intro splash --->
<div id="front-page-3" class="front-page-3 solid-section">
<?php 
$i = 0;
while(strlen(@$content['field_page_4_content'][$i]['#markup']) > 5){
$i++;
} 
?>
<div class="widget-area <?php print convertToWord($i); ?>">
<div class="wrap">
<?php
$i3 = 0;
while($i3 < $i){
print "<section id=\"text-" . $i2 . "\" class=\"widget widget_text\">";		
print "<div class=\"widget-wrap\">";
print @$content['field_page_4_content'][$i3]['#markup'];
print "</div>";
print "</section>";
$i2++;
$i3++;
}
?>
</div></div></div>
<!--- end the third page after the intro splash --->
<?php
}
?>

<?php
/*
$block = module_invoke('webform', 'block_view', 'client-block-428'); // local test form
if(strlen($block['content']) > 100){
print "<div id=\"front-page-5\" class=\"front-page-4 image-section\">";
print "<div class=\"form-wrapper\">";
print render($block['content']);
print "</div></div>";
}

$block2 = module_invoke('webform', 'block_view', 'client-block-11'); // inauguration site rsvp form
if(strlen($block2['content']) > 100){
print "<div id=\"front-page-5\" class=\"front-page-4 image-section\">";
print "<div class=\"form-wrapper\">";
print render($block2['content']);
print "</div></div>";
}
*/




if(strlen(@$content['field_page_5_content'][0]['#markup']) > 5){
?>
<!--- start the fourth page after the intro splash --->
<div id="front-page-4" class="front-page-4 image-section">
<?php 
$i = 0;
while(strlen(@$content['field_page_5_content'][$i]['#markup']) > 5){
$i++;
} 
?>
<div class="widget-area <?php print convertToWord($i); ?>">
<div class="wrap">
<?php
$i4 = 0;
while($i4 < $i){
print "<section id=\"text-" . $i2 . "\" class=\"widget widget_text\">";
print "<div class=\"widget-wrap\">";		
print @$content['field_page_5_content'][$i4]['#markup'];
print "</div>";
print "</section>";
$i2++;
$i4++;
}
?>
</div></div></div>
<!--- end the fourth page after the intro splash --->
<?php
}
?>

</main>
</div></div>

<?php
$footer_menu = $content['field_footer_menu'][0]['#markup']; 
$footer_menu = str_replace("<p>","",$footer_menu);
$footer_menu = str_replace("</p>","",$footer_menu);
$fm = explode("</a>",$footer_menu);
?>
<footer class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
<div class="wrap">
<nav class="nav-footer">
<ul id="ms-menu-footer-nav" class="genesis-nav-ms-menu">
<?php

foreach($fm as $f){
print "<li id=\"ms-menu-item-" . $zz . "\" class=\"ms-menu-item ms-menu-item-type-custom ms-menu-item-object-custom ms-menu-item-" . $zz . "\">";
print $f . "</a></li>";
$zz++;
}
?>
</ul>
</nav>

<p id="footer-logo">
<a target = "_blank" href="<?php print @$content['field_footer_logo_link'][0]['#markup']; ?>">
<?php 
if(isset($content['field_footer_logo'][0]['#item']['fid'])){
print "<img src=\"";
$file6 = file_load($content['field_footer_logo'][0]['#item']['fid']);
print file_create_url($file6->uri);
print "\">";
}
?>
</a></p>

<br />
<p class="footer-copy">
<?php
$footer_text = $content['field_footer_text'][0]['#markup']; 
$footer_text = str_replace("<p>","",$footer_text);
$footer_text = str_replace("</p>","<br />",$footer_text);
print $footer_text;
?>
</p>
</div>
</footer>
<?php
} else {
    print render($content);

}
?>