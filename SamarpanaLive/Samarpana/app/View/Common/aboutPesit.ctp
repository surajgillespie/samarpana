<div class ="row">
	<div class="three columns">
		<dl class="vertical tabs">

			<dd <?=echoActiveIfActionis("pesit")?>><? echo $this->Html->link('About PESIT',array('controller'=>'aboutPESIT','action'=>'pesit'));?></dd>

			<!--<dd <?=echoActiveIfActionis("silverJubilee")?>><? echo $this->Html->link('Silver Jubilee',array('controller'=>'aboutPESIT','action'=>'silverJubilee'));?></dd>-->

			<dd <?=echoActiveIfActionis("departments")?>><? echo $this->Html->link('Departments',array('controller'=>'aboutPESIT','action'=>'departments'));?></dd>

			<dd <?=echoActiveIfActionis("pesitClubs")?>><? echo $this->Html->link('Pesit Clubs',array('controller'=>'aboutPESIT','action'=>'pesitClubs'));?></dd>

			<!--<dd <?=echoActiveIfActionis("test")?>><? echo $this->Html->link('Link',array('controller'=>'aboutPESIT','action'=>'test'));?></dd>-->
		</dl>
	</div>

	<div class="nine columns">
		<?php echo $this->fetch('content'); ?>
	</div>

</div>
<?php
function echoActiveIfActionis($reqAction)
{
    $actionName = basename($_SERVER['REQUEST_URI']);
    if ($actionName == $reqAction)
        echo 'class="active"';
}
?>