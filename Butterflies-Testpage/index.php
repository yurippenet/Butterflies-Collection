<?php defined('_JEXEC') or die;
$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

$params = $app->getTemplate(true)->params;
?>
<!doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
    <head>
        <meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <jdoc:include type="head" />
		
		
        <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/foundation.css" />
        <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr.js"></script>
        <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/style.css" rel="stylesheet" type="text/css">
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.js"></script>
        <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/foundation.min.js"></script>
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/butterflies.js"></script>
        <script>
      $(document).foundation();
    </script>
    </head>
    <body>
	
	<?php if($this->countModules('debug')):?>
        <div class="row">
            <div id="debug" class="columns large-12 medium-12 small-12 layout"> 
                <!-- Start of Debug -->
					<jdoc:include type="modules" name="debug" style="none" />
				<!-- End of Debug -->               
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('header')):?>
        <div class="row">
            <div id="header" class="columns medium-12 large-12 small-12 layout">
            <!-- Start of Header -->
                <jdoc:include type="modules" name="header" style="none" />
			<!-- End of Header -->             
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('logo') or $this->countModules('navbar')):?>
        <div class="row">
            <div id="logo" class="columns medium-2 large-2 layout small-12">
			<!-- Start of Logo -->
                <jdoc:include type="modules" name="logo" style="none" />
			<!-- End of Logo -->               
            </div>
            <div id="navbar" class="columns medium-10 large-10 layout small-12">
			<!-- Start of Navbar -->
                <jdoc:include type="modules" name="navbar" style="none" />
			<!-- End of Navbar -->                 
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('xpert-1')): ?>
		<div class="row">
		    <!-- Start of Xpert-1 -->
            <jdoc:include type="modules" name="xpert-1" style="none" />
			<!-- End of Xpert-1 -->
		</div>
	<?php endif; ?>
	
	
	<?php if($this->countModules('position-1')): ?>
        <div class="row">
            <div id="position-1" class="columns medium-12 large-12 small-12 layout">
            <!-- Start of Position-1 -->
                <jdoc:include type="modules" name="position-1" style="none" />
			<!-- End of Position-1 -->              
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('xpert-2')): ?>
		<div class="row">
		    <!-- Start of Xpert-2 -->
            <jdoc:include type="modules" name="xpert-2" style="none" />
			<!-- End of Xpert-2 -->
		</div>
	<?php endif; ?>
	
	<?php if($this->countModules('position-2')): ?>
        <div class="row">
            <div id="position-2" class="columns medium-12 large-12 small-12 layout">
            <!-- Start of Position-2 -->
                <jdoc:include type="modules" name="position-2" style="none" />
			<!-- End of Position-2 -->             
            </div>
        </div>
	<?php endif; ?>
	
	<?php if($this->countModules('left-side') or $this->countModules('right-side')): ?>
        <div class="row">
	<?php endif; ?>	
	
	<?php if($this->countModules('left-side')): ?>
            <div class="columns medium-3 small-3 large-3">
                <div class="row">
                    <div id="left-side" class="columns medium-12 large-12 small-12 layout">
					<!-- Start of Left-Side -->
						<jdoc:include type="modules" name="left-side" style="none" />
					<!-- End of Left-Side -->
                    </div>
                </div>                 
            </div>
	<?php endif; ?>
	
	
	<?php if($this->countModules('left-side') && $this->countModules('right-side')): ?>
            <div class="columns large-6 medium-6 small-6">
	<?php elseif($this->countModules('left-side') or $this->countModules('right-side')): ?>
			<div class="columns large-9 medium-9 small-9">
	<?php endif; ?>
			
			<?php if($this->countModules('position-3')): ?>
                <div class="row">
                    <div id="position-3" class="columns medium-12 large-12 small-12 layout">
                    <!-- Start of Position-3 -->
						<jdoc:include type="modules" name="position-3" style="none" />
					<!-- End of Position-3 -->
                    </div>
                </div>
			<?php endif; ?>
			
                <div class="row">
                    <div id="article" class="columns medium-12 large-12 small-12 layout">
                    <!-- Begin Article -->
						<jdoc:include type="message" />
						<jdoc:include type="component" />   
					<!-- End Article -->
                    </div>
                </div>
				
			<?php if($this->countModules('position-4')): ?>
                <div class="row">
                    <div id="position-4" class="columns medium-12 large-12 small-12 layout">
                    <!-- Start of Position-4 -->
						<jdoc:include type="modules" name="position-4" style="none" />
					<!-- End of Position-4 -->
                    </div>
                </div>
			<?php endif; ?>
				
	<?php if($this->countModules('left-side') or $this->countModules('right-side')): ?>			
            </div>
	<?php endif; ?>
	
	<?php if($this->countModules('right-side')): ?>
            <div class="columns medium-3 large-3 small-3">
                <div class="row">
                    <div id="right-side" class="columns medium-12 small-12 large-12 layout">
                    <!-- Start of Right-Side -->
						<jdoc:include type="modules" name="right-side" style="none" />
					<!-- End of Right-Side -->
                    </div>
                </div>                 
            </div>
	<?php endif; ?>
			
	<?php if($this->countModules('left-side') or $this->countModules('right-side')): ?>		
        </div>
	<?php endif; ?>

	
	
		<?php if($this->countModules('position-5')): ?>
        <div class="row">
            <div id="position-5" class="columns large-uncentered medium-9 small-9 large-9 small-offset-3 medium-offset-3 large-offset-3 layout">
				<!-- Start of Position-5 -->
					<jdoc:include type="modules" name="position-5" style="none" />
				<!-- End of Position-5 -->               
            </div>
        </div>
		<?php endif; ?>
		
		<?php if($this->countModules('xpert-3')): ?>
		<div class="row">
		    <!-- Start of Xpert-3 -->
            <jdoc:include type="modules" name="xpert-3" style="none" />
			<!-- End of Xpert-3 -->
		</div>
		<?php endif; ?>
		
		<?php if($this->countModules('position-6')):?>
        <div class="row">
            <div id="position-6" class="columns large-uncentered layout small-12 medium-12 large-12">
			<!-- Start of Position-6 -->
				<jdoc:include type="modules" name="position-6" style="none" />
			<!-- End of Position-6 -->               
            </div>
        </div>
		<?php endif; ?>
		
		<?php if($this->countModules('xpert-4')): ?>
		<div class="row">
		    <!-- Start of Xpert-4 -->
            <jdoc:include type="modules" name="xpert-4" style="none" />
			<!-- End of Xpert-4 -->
		</div>
		<?php endif; ?>
	
		<?php if($this->countModules('footer')):?>
		<div class="row">
		    <div id="footer" class="columns large-uncentered layout small-12 medium-12 large-12">
            <!-- Start of Footer -->
				<jdoc:include type="modules" name="footer" style="none" />
			<!-- End of Footer -->            
            </div>
		</div>
		<?php endif; ?>

    </body>
</html>
