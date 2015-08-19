 <?php 
if(@$node->type == 'microsite'){
print render($page['content']); 
} else {
?>

<!--.page -->
<div role="document" class="page">

  <!--.l-header region -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
<div id="header" role="banner" class="header">


	<div class="row-top-nav">
		<div class="topbar container">
      			<div class="col-md-6">
          		<ul class="nav nav-pills" id='top-menu'>
             		<li><a href="javascript:;"><i class="fa fa-envelope"></i> Email</a></li>
             		<li><a href="javascript:;"><i class="fa fa-cogs"></i> Gibson Online</a></li>
             		<li><a href="javascript:;"><i class="fa fa-folder-open"></i> MyTulane</a></li>
          		</ul>
      			</div>
      			<div class="col-md-6">
                        <!---
          			<div class="search-container">
            			<form action="#" method="post" class="inline-form searchbox">
            			<input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
            			<input type="submit" class="searchbox-submit" value="GO">
            			<span class="searchbox-icon"><i class="fa fa-lg fa-search"></i><span class="sr-only">Search</span></span>
            			</form>
          			</div>     
--->
                                
<div class="search-container">
<!-- Google CSE Search Box Begins --->
<form action="//tulane.edu/search-results2.cfm" id="searchbox_017967096760080950669:bl9vlsogwoo" name="Site2" class="inline-form searchbox">
<input type="hidden" name="cx" value="017967096760080950669:bl9vlsogwoo" />
<input type="hidden" name="cof" value="FORID:11" />
<input type="hidden" name="as_dt" value="" />
 
<input type="hidden" name="as_sitesearch" value="tulane.edu#getDirectoryFromPath(cgi.script_name)#" />
<input type="hidden" name="siteURL" value="tulane.edu" />
<input type="search" placeholder="Search......" name="q" class="searchbox-input" onkeyup="buttonUp();" required>
			
<input id="go" type="submit" name="sa" class="searchbox-submit" value="GO" placeholder="GO"/>
<!--- <span class="searchbox-icon"><i class="fa fa-lg fa-search"></i><span class="sr-only">Search</span></span> --->
</form>
</div>
<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=searchbox_017967096760080950669%3Abl9vlsogwoo"></script>
					<!--- Google CSE Search Box Ends --->

  
			</div>
		</div>
	</div>

	<div class="row-banner">
		<div class="container">
			<div class="header-table">



<ul id="header-mid-banner">

<li><div class="cell-shield"><div class="tu-shield"></div></div></li>

<li><div class="cell-school">
<a href="//tulane.edu"><div class="main_title">T<span class="move">ulane University</span></div></a>
</div></li>

<li><div class="cell-dept"><h2><?php print $linked_site_name; ?><h2></div></li>

</ul>


 

			</div> 
		</div>
	</div>   
 

      <?php if ($alt_main_menu): ?>
        <nav id="main-menu" class="navigation white" role="navigation">






<div class="main_menu_wrapper">
	<label for="show-menu" class="show-menu">Show Menu</label>
	<input type="checkbox" id="show-menu" role="button">
<?php print ($alt_main_menu); ?></div>
        </nav>  <!--- /#main-menu --->
      <?php endif; ?>
</div>

<div class="secondary_menu_wrapper">
      <?php if ($alt_secondary_menu): ?>
        <nav id="secondary-menu" class="navigation" role="navigation">
          <?php print $alt_secondary_menu; ?>
        </nav>  <!--- /#secondary-menu --->
      <?php endif; ?>
</div>





      <!--.top-bar 
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>

        <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>

          <ul class="title-area">
<li>
<a class="top-fixed-nav" href="http://tulane.edu/email/">Email</a> 
<a class="top-fixed-nav" href="https://gibson.tulane.edu/">Gibson Online</a> 
<a class="top-fixed-nav" href="http://tulane.blackboard.com/">myTulane</a>
</li>
            <li class="name"><h1><a href="/">Tulane

<?php print $linked_site_name; ?>

</h1></li>


            <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
          </ul>

          <section class="top-bar-section">
            <?php if ($top_bar_main_menu) :?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
            <?php if ($top_bar_secondary_menu) :?>
              <?php print $top_bar_secondary_menu; ?>
            <?php endif; ?>
          </section>
        </nav>
      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      /.top-bar 
    <?php endif; ?>

     Title, slogan and menu 
    <?php if ($alt_header): ?>
    <section class="row <?php print $alt_header_classes; ?>">

      <?php if ($linked_logo): print $linked_logo; endif; ?>

      <?php if ($site_name): ?>
        <?php if ($title): ?>
          <div id="site-name" class="element-invisible">
            <strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong>
          </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
      <?php endif; ?>

      <?php if ($alt_main_menu): ?>
        <nav id="main-menu" class="navigation" role="navigation">
          <?php print ($alt_main_menu); ?>
        </nav>  /#main-menu 
      <?php endif; ?>

      <?php if ($alt_secondary_menu): ?>
        <nav id="secondary-menu" class="navigation" role="navigation">
          <?php print $alt_secondary_menu; ?>
        </nav>  /#secondary-menu 
      <?php endif; ?>

    </section>
    <?php endif; ?>
     End title, slogan and menu -->







    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="large-12 columns">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--/.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <main role="main" class="row l-main">
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php if ($breadcrumb): print $breadcrumb; endif; ?>

      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
    <!--/.main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->

  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first large-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle large-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last large-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first large-3 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second large-3 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third large-3 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-fourth large-3 columns">
          <?php print render($page['footer_fourthcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer-->
  <footer class="l-footer panel row" role="contentinfo">



<div class="footer large-12 columns">
<?php if (!empty($page['footer'])): ?>
<?php  print render($page['footer']); ?>
<?php endif; ?>
</div>



  </footer>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
<?php
}
?>




