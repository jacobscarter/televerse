<?php
    /**
    * @version Televerse 1.0
    * @copyright Copyright (C) 2013 Crexendo.
    * @license GNU General Public License version 2 or later; see LICENSE.txt
    */
    defined('_JEXEC') or die;
    /* The following line loads the MooTools JavaScript Library */
    JHTML::_('behavior.framework', false);
    /* The following line gets the application object for things like displaying the site name */
    $app = JFactory::getApplication();
    /* Template variables */
    $interactText = $this->params->get('interactText');
    $templateColor = $this->params->get('templateColor');
    $showAuthor = $this->params->get('showAuthor');
    $showEmail = $this->params->get('showEmail');
    $showFacebook = $this->params->get('showFacebook');
    $showRSS = $this->params->get('showRSS');
    $showTwitter = $this->params->get('showTwitter');
    $emailUrl = $this->params->get('emailURL');
    $facebookUrl = $this->params->get('facebookURL');
    $rssUrl = $this->params->get('rssURL');
    $twitterUrl = $this->params->get('twitterURL');
	$logoUrl = $this->params->get('logoURL');
    ?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/default.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $templateColor;?>.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/fonts.css" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body style="background:url(images/televerse/backgrounds/black-dot.png) repeat top left #bbbbbb;">
<div id="bodywrapper">
<div id="topBar">
  <div id="topWrapper">
  <div id="socialicons">
  	      <?php if (($showRSS == 0)||($showFacebook == 0)||($showTwitter == 0)||($showEmail == 0)):?>
      <?php if (!empty($interactText)):?>

      <?php endif; ?>
      <ul id="interact">
        <?php if (($showRSS == 0)&&(!empty($rssUrl))):?>
        <li><a href="<?php echo $rssUrl; ?>" class="rss"></a></li>
        <?php endif; ?>
        <?php if (($showFacebook == 0)&&(!empty($facebookUrl))):?>
        <li><a href="<?php echo $facebookUrl; ?>" class="facebook"></a></li>
        <?php endif; ?>
        <?php if (($showTwitter == 0)&&(!empty($twitterUrl))):?>
        <li><a href="http://twitter.com/<?php echo $twitterUrl; ?>" class="twitter"></a></li>
        <?php endif; ?>
        <?php if (($showEmail == 0)&&(!empty($emailUrl))):?>
        <li><a href="<?php echo $emailUrl; ?>" class="email"></a></li>
        <?php endif; ?>
      </ul>
      <?php endif; ?>
  </div>
  <div id="logo">
  	<a href="/"><img src="<?php echo $logoUrl; ?>" /></a>
  </div>
    <?php if($this->countModules('topNav')) : ?>
    <div id="topNav">
      <jdoc:include type="modules" name="topNav" style="xhtml"/>
    </div>
    <?php endif; ?>
    <?php if($this->countModules('search')) : ?>
    <div id="search">
      <jdoc:include type="modules" name="search" style="xhtml"/>
    </div>
    <?php endif; ?>
  </div>
</div>
<div id="mainContainer">
  <div id="mainWrapper">
 <jdoc:include type="modules" name="showCase" style="xhtml"/>
    <div id="content-wrap">
    <?php if($this->countModules('utility')) : ?>
    <div id="utility">
      <jdoc:include type="modules" name="utility" style="xhtml"/>
    </div>
    <?php endif; ?>
    <div id="main">
      <?php if($this->countModules('mainTop')) : ?>
      <jdoc:include type="modules" name="mainTop" style="xhtml"/>
      <?php endif; ?>
      <jdoc:include type="component" />
      <?php if($this->countModules('mainBottom')) : ?>
      <jdoc:include type="modules" name="mainBottom" style="xhtml"/>
      <?php endif; ?>
    </div>
    <div id="sidebar">
      <?php if($this->countModules('sidebar')) : ?>
      <jdoc:include type="modules" name="sidebar" style="xhtml"/>
      <?php endif; ?>
    </div>
    <div class="clr"></div>
    </div>
      <?php if($this->countModules('bottom')) : ?>
      <div id="bottom">
      <jdoc:include type="modules" name="bottom" style="xhtml"/>
    </div>
    <?php endif; ?>
    <?php if($this->countModules('footer')) : ?>
    <div id="footer"> 
      <jdoc:include type="modules" name="footer" style="xhtml"/>
    </div>
    <?php endif; ?>
    <div id="copyright">
      <p>&copy;<?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?>.
        <?php if ($showAuthor == 0):?>
        A Joomla! 2.5 Template Developed for Tele-Verse - Designed and Created by <a href="http://www.crexendo.com/">Crexendo</a>.
        <?php endif; ?>
      </p>
    </div>
    </div>
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://127.0.0.1/televerse/templates/televerse/js/responsiveslides.js"></script>
<script>
 $(function () {
// Slideshow 
$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: true,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
 });
</script>
</body>
</html>