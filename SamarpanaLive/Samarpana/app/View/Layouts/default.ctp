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
		echo $this->Html->meta('keywords','enter any meta keyword here');
		echo $this->Html->meta('description','Samarpana seeks to make our community aware of the price that we pay for our freedom and express our gratitude of those who toil and put their lives on the line so that we wouldn\'t have to.');



		echo $this->Html->css('foundation');
		echo $this->Html->css('app');

		
		echo $this->Html->script('foundation.min');
		echo $this->Html->script('app');
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	
<div class="row">
	<div class="twelve columns">


		<header id="header">

			<div class="row"style="padding-top: 10px;padding-bottom: 5px;">
				<div class ="five columns ">
					<? echo $this->Html->image("logos/eventLogo.png" );?>
				</div>

				<div class="two columns ">
					<? echo $this->Html->image("logos/pes.png" );?>

				</div>
			</div>
                        <ul class="nav-bar" id="navigation">
			<li style="border-bottom-width: 0px;border-top-width: 0px;border-left-width: 0px;" <?=echoActiveClassIfRequestMatches("/")?>><? echo $this->Html->image("home.png" , array('url' => array('controller' => '/')));?></li>

                        <li <?=echoActiveClassIfRequestMatches("about")?>><?echo $this->Html->link('About',array('controller' => 'pages','action'=>'about'));?></li>

                        <li <?=echoActiveClassIfRequestMatches("events")?>><?echo $this->Html->link('Events',array('controller' => 'events','action'=>'event1'));?></li>

<li <?=echoActiveClassIfRequestMatches("forces")?>><?echo $this->Html->link('Armed Forces',array('controller' => 'pages','action'=>'forces#simple1'));?></li>
			 <li <?=echoActiveClassIfRequestMatches("aboutPESIT")?>><?echo $this->Html->link('PESIT',array('controller' => 'aboutPESIT','action'=>'pesit'));?></li>


                        <li <?=echoActiveClassIfRequestMatches("gallery")?>><?echo $this->Html->link('Gallery',array('controller' => 'gallery','action'=>'bakesale'));?></li>

                        <li <?=echoActiveClassIfRequestMatches("sponsors")?>><?echo $this->Html->link('Sponsors',array('controller' => 'pages','action'=>'sponsors'))?></li>

			<li <?=echoActiveClassIfRequestMatches("contact")?>><?echo $this->Html->link('Contact Us',array('controller' => 'pages','action'=>'contact'));?></li>
                        </ul>
                      

		</header>


		 <div id="content" class="panel mainpanel" >

 	               <!-- <?php echo $this->Session->flash(); ?>-->

                        <?php echo $this->fetch('content'); ?>
                </div>
	</div>	
</div>
		<footer id="footer">
						
					
                        <p style='font-size:13px;text-align:center'><a class="footer-link" href="http://pesit.pes.edu">PES Institute of Technology</a> | <a class="footer-link"><?echo $this->Html->link('Contact Us',array('controller' => 'pages','action'=>'contact'));?></a></p>
                        
                </footer>

	

</body>
</html>
