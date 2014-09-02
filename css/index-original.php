<?php  
    /** 
* @copyrightCopyright (C) 2013 Crexendo. 
* @licenseGPL 
*/  
defined('_JEXEC') or die( 'Restricted Access');  
$app = JFactory::getApplication();  
$leftcolgrid= "3";  
$rightcolgrid = "3";  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="head" />
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
        <?php  
			if ($this->countModules('left') == 0):?>  
		<?php $leftcolgrid= "0";?>  
		<?php endif; ?>  
		<?php  
			if ($this->countModules('right') == 0):?>  
		<?php $rightcolgrid= "0";?>  
		<?php endif; ?> 
	</head>
	<body>
    
    <div id="wrap">
    
    	<div id="header" class="container_12">
        	<div class="grid_4">
            	<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" />
        	</div>
            <jdoc:include type="modules" name="top" style="xhtml" />
        </div>
        <div class="clr"></div>
        <div id="navigation" class="container_12">
        	<div class="grid_12">
        		<jdoc:include type="modules" name="menu" style="xhtml" />
        	</div>
        </div>
        
        <div class="container_12">
        	<div class="grid_12" id="showcase">
            	<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/sample-slide.jpg" />
	       		<jdoc:include type="modules" name="showcase" style="xhtml" /> 
        	</div> 
        </div>
        
        <div class="container_12">
        	<div class="grid_12">
	       		<jdoc:include type="modules" name="utility" style="xhtml" /> 
        	</div> 
        </div>
        
        <div class="container_12">
        	<?php if($this->countModules('left')) : ?>  
			<div class="grid_<?php echo $leftcolgrid;?>">
            	<jdoc:include type="modules"  name="left" style="xhtml" />  
			</div>
            <?php endif; ?> 
			<div class="grid_<?php echo(12-$leftcolgrid-$rightcolgrid);?>"> 
	       		<jdoc:include type="modules" name="main-top" style="xhtml" />
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="main-bottom" style="xhtml" /> 
        	</div> 
            <?php if($this->countModules('right')) : ?>  
			<div class="grid_<?php echo $rightcolgrid;?>">  
				<jdoc:include type="modules"  name="right" style="xhtml" />  
			</div>  
			<?php endif; ?> 
        </div>
        
        <div class="clr"></div> 
        
        <div class="container_12">
        	<div class="grid_12">
				<jdoc:include type="modules" name="bottom" style="xhtml" /> 
        	</div>
        </div>
        
        <div class="container_12">
        	<div class="grid_12"> 
				<jdoc:include type="modules" name="footer" style="xhtml" />
        	</div>
        </div>
        
        <div class="container_12">
        	<div class="grid_12"> 
				<jdoc:include type="modules" name="copyright" style="xhtml" />
        	</div>
        </div>
     
     </div>
    </body>
</html>