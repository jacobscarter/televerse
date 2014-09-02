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
    ?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/default.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $templateColor;?>.css" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
<div id="topBar">
  <div id="topWrapper">
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
    <div id="main">
      <?php if($this->countModules('mainTop')) : ?>
      <jdoc:include type="modules" name="main" style="xhtml"/>
      <?php endif; ?>
      <jdoc:include type="component" />
      <?php if($this->countModules('mainBottom')) : ?>
      <jdoc:include type="modules" name="main" style="xhtml"/>
      <?php endif; ?>
    </div>
    <div id="sidebar">
      <?php if (($showRSS == 0)||($showFacebook == 0)||($showTwitter == 0)||($showEmail == 0)):?>
      <?php if (!empty($interactText)):?>
      <h2><?php echo $interactText; ?></h2>
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
      <?php if($this->countModules('sidebar')) : ?>
      <jdoc:include type="modules" name="sidebar" style="xhtml"/>
      <?php endif; ?>
    </div>
    <div id="footer">
      <?php if($this->countModules('footer')) : ?>
      <jdoc:include type="modules" name="footer" style="xhtml"/>
      <?php endif; ?>
    </div>
    <div id="copyright">
      <p>&copy;<?php echo date('Y'); ?> <?php echo $app->getCfg('sitename'); ?>.
        <?php if ($showAuthor == 0):?>
        <a href="#">Simplicity - A Joomla Blog Template</a> was designed and created by <a href="http://www.virtuosimedia.com/">Virtuosi Media</a>.
        <?php endif; ?>
      </p>
    </div>
  </div>
</div>
</body>
</html>