<!DOCTYPE html>

<?php
$Description = __d('cake_dev', 'Samarpana 13 - PESIT');
?>

<?php
function echoActiveClassIfRequestMatches($requestUri)
{
    $actionName = basename($_SERVER['REQUEST_URI']);
    $controllerName=basename(dirname($_SERVER['REQUEST_URI']));

    if ($actionName == $requestUri)
        echo 'class="active"';
    if ($controllerName == $requestUri)
        echo 'class="active"';
}
?>

<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $Description ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('foundation');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery');
		echo $this->Html->script('foundation.min');
		echo $this->Html->script('modernizr.foundation');
		echo $this->Html->script('app');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="row container">
		<div class="twelve columns">
			<header role="banner" id="top-header">
				<div class="siteinfo">
					<h1>Samarpana</h1>
					<h4>Not Forgotten</h4>
				</div>
				<ul id="menu-top-nav" class="top-nav nav-bar hide-for-small">
					<li <?=echoActiveClassIfRequestMatches("/")?>><? echo $this->Html->image("home.png" , array('url' => array('controller' => '/')));?></li>
					<li <?=echoActiveClassIfRequestMatches("about")?>><?echo $this->Html->link('About',array('controller' => 'about'));?></li>
					<li <?=echoActiveClassIfRequestMatches("events")?>><?echo $this->Html->link('Events',array('controller' => 'events'));?></li>
					<li <?=echoActiveClassIfRequestMatches("samarpana12")?>><?echo $this->Html->link('Samarpana\'12',array('controller' => 'samarpana12'));?></li>
					<li <?=echoActiveClassIfRequestMatches("gallery")?>><?echo $this->Html->link('Gallery',array('controller' => 'gallery'));?></li>
					<li <?=echoActiveClassIfRequestMatches("aboutPESIT")?>><?echo $this->Html->link('About PESIT',array('controller' => 'aboutPESIT','action'=>'pesit'));?></li>
					<li <?=echoActiveClassIfRequestMatches("sponsors")?>><?echo $this->Html->link('Sponsors',array('controller' => 'sponsors'));?></li>
					<li <?=echoActiveClassIfRequestMatches("contactus")?>><?echo $this->Html->link('Contact Us',array('controller' => 'contactus'));?></li>
				</ul>
				<div class="show-for-small menu-action">
					<a href="#sidebar" id="mobile-nav-button" class="sidebar-button small secondary button">
						<svg xml:space="preserve" enable-background="new 0 0 48 48" viewBox="0 0 48 48" height="18px" width="18px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1">
								<line y2="8.907" x2="48" y1="8.907" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
								<line y2="24.173" x2="48" y1="24.173" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
								<line y2="39.439" x2="48" y1="39.439" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
								Menu
							</svg>
					</a>
				</div>
				<div class="mobile-nav-container"><ul id="menu-top-nav-1" class="side-nav tabs vertical"><li class="active"><a title="Home" href="http://320press.com/wp-foundation/" >Home</a></li>
<li><a title="Features" href="http://320press.com/wp-foundation/features/" >Features</a></li>
<li><a href="http://320press.com/wp-foundation/blog/" >Blog</a></li>
</ul></div>
			</header>
		</div>

		<div id="content" class="panel">
			 <?php echo $this->Session->flash(); ?>

             <?php echo $this->fetch('content'); ?>
		</div>
		<footer role="contentinfo">
			<?php echo $this->Html->link(
                                        $this->Html->image('cake.power.gif', array('alt' => $Description, 'border' => '0')),
                                        'http://www.cakephp.org/',
                                        array('target' => '_blank', 'escape' => false)
                                );
                        ?>
		</footer>
	</div>
</body>
</html>