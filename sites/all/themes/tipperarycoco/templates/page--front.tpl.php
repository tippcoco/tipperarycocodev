<header id="navbar" role="banner" class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <?php if (!empty($logo)): ?>
        <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
        </h1>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="nav-collapse collapse">
          <nav role="navigation">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header>

<div class="row-fluid cashelbginner">
<div class="container">
<div class="span6">
<div class="crest">
<img src = "http://www.tipperarycocostage.ie/sites/default/files/styles/large/public/img/test1.png">
</div>
</div>
</div>
</div>


<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>
	<?php print render($page['header']); ?>
    
	</header> <!-- /#header -->
	
	<div>
	<?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
	</div>

  <div class="row-fluid" style="background-color: #fff; padding: 12px; width: auto">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  

	 <div class="span6">
	 
    <section>
	  <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
	  <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
	  <div class="span12">
	  <div class ="span6">
	  <div class="applyheader">
	  <img src="/sites/default/files/img/appphoto.jpg">
	  </div>
	  <div class="arrow_box">
	  <img src="/sites/default/files/img/check.png">
	  Apply For It
	  </div>
	  <?php print render($page['frontcontent1']); ?>
	  </div>
	  <div class="span6 pull-right">
	  <div class="payheader">
	  <img src="/sites/default/files/img/payphoto.jpg">
	  </div>
	  <div class="arrow_box1">
	  <img src="/sites/default/files/img/paycard.png">
	  Pay For It
	  </div>
	  <?php print render($page['frontcontent2']); ?>
	  </div>
	  </div>
	  <div class="span12">
	  <div class ="span6">
	  <div class="downloadheader">
	  <img src="/sites/default/files/img/downloadphoto.jpg">
	  </div>
	  <div class="arrow_box2">
	  <img src="/sites/default/files/img/downloadicon.png">
	  Download It
	  </div>
      <?php print render($page['frontcontent3']); ?>
	  </div>
	  <div class="span6 pull-right">
	  <div class="findheader">
	  <img src="/sites/default/files/img/findphoto.jpg">
	  </div>
	  <div class="arrow_box3">
	  <img src="/sites/default/files/img/findicon.png">
	  Find It
	  </div>
	  <?php print render($page['frontcontent4']); ?>
	  </div>
	  </div>
	  
	 </section>	
	 
	 </div>
	 <div class="span6 pull-right">
	
    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
	
	
	</div>

	 
	

  </div>
</div>
<div class="row-fluid footerbg">
<div class="container"><div class="footerall">
<?php print render($page['footer']); ?>
<div id="footer1"><?php print render($page['footer1']); ?></div>
<div id="footer2"><?php print render($page['footer2']); ?></div>
<div id="footer3"><?php print render($page['footer3']); ?></div>
<div id="footer4"><?php print render($page['footer4']); ?></div>
</div></div></div>
