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

	 <div class="span7">
	 
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
	
	<?php print render($page['frontcontent']); ?>
	  
	 </section>	
	 
	 </div>
	 <div class="span5 pull-right">
	
    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
	
	
	</div>
  </div>
</div>


<div class = "footerbg" >             
<div class="navbar-bottom footerall">
<div class ="container footerall"> 
<div class="row-fluid span12" style="margin-left:0px; margin-bottom:15px">
<div class="span6">
<div class="span12">
<h4>Services:</h4>
<div class = "span4"> 
<div id="footer1">   
<?php print render($page['footer1']); ?>
</div>  
</div>  
<div class = "span3">     
<div id="footer2">   
<?php print render($page['footer2']); ?>
</div>  
</div> 
<div class = "span3">     
<div id="footer2">   
<?php print render($page['footer3']); ?>
</div>  
</div>  
</div>  
</div>
<div class = "span6">
<div class = "span6">
<h4>Follow Us:</h4>
<div class = "span6">
<div id="footer2">   
<?php print render($page['footer4']); ?>
</div>  
</div>  
</div>
<div class = "span6">
<h4>Related Sites:</h4>
<div class = "span10">
<div id="footer2">   
<?php print render($page['footer5']); ?>
</div>  
</div>  
</div>											
</div>
</div>
</div>
</div>
</div>
<div class="navbar-bottom footerbg">
<div class="container address1 footerbg">
<h4>Tipperary County Council</h4><hr />
<div class="row fluid">
<div class="span2 directions">
<img src="/sites/default/files/img/directions.png"></div>
<div class="span4">
<div class="span12">
County Hall, Clonmel | County Hall, Nenagh
</div> 
<div class="span12">
Telephone (office hours): 067 44500  
</div> 
<div class="span12">
Out of Hours Emergency Number: 1890 923 948
</div> 
<div class="span12">
Email: info@tipperarycoco.ie
</div> 
</div> 
<div class="span3">
<a href="#">Translate: English/Irish</a>
<a href="#">Accessibility: Browse Aloud</a>
<a href="#">Disclaimer</a>
<a href="#">Webmail & Extranet</a></div>
<div class="span3">
<div class="input-append pull-right">  <input id="appendedInputButton" placeholder="Languages" type="text">  <button class="btn" type="button"><span class="caret"></button></div>
</div>
</div>
</div>
</div>
</div>




