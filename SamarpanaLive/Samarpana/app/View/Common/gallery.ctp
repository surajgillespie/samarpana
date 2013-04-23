<div class ="row">
	<div class="three columns">
		<h5>Samarpana 2013</h5>
		<dl class="vertical tabs">

			<dd <?=echoActiveIfActionis("bakesale")?>><? echo $this->Html->link('Bake Sale',array('controller'=>'gallery','action'=>'bakesale'));?></dd>

			<dd <?=echoActiveIfActionis("brochure")?>><? echo $this->Html->link('Brochure',array('controller'=>'gallery','action'=>'brochure'));?></dd>
		</dl>

		<h5>Samarpana 2012</h5>
		<dl class="vertical tabs">

			<dd <?=echoActiveIfActionis("event1")?>><? echo $this->Html->link('Felicitation',array('controller'=>'gallery','action'=>'event1'));?></dd>

			<dd <?=echoActiveIfActionis("event2")?>><? echo $this->Html->link('Fine Art',array('controller'=>'gallery','action'=>'event2'));?></dd>

			<dd <?=echoActiveIfActionis("event3")?>><? echo $this->Html->link('General',array('controller'=>'gallery','action'=>'event3'));?></dd>

			<!--<dd <?=echoActiveIfActionis("event4")?>><? echo $this->Html->link('Videos',array('controller'=>'gallery','action'=>'event4'));?></dd>

			<dd <?=echoActiveIfActionis("event5")?>><? echo $this->Html->link('Event5',array('controller'=>'gallery','action'=>'event5'));?></dd>-->
		</dl>
	</div>

	<div class="nine columns panel subpanel">
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
