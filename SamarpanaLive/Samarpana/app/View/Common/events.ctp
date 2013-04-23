<div class ="row panel">
<div class="six mobile-four columns" id="eventthumb1">	
	<div class="three mobile-one columns <?=echoActiveIfPageis("event1")?> eThumb">
	<? echo $this->Html->image("events/CharityRun.jpeg",array('alt' => "charity",'url' => array('controller' => 'events','action'=>'event1')))?>
	<p class="eThumbP">Charity Run</p>
	</div>

     <div class="three mobile-one columns <?=echoActiveIfPageis("event7")?> eThumb">
        <? echo $this->Html->image("events/bakesale.jpg",array('alt' => "bakesale",'url' => array('controller' => 'events','action'=>'event7')))?>
    <p class="eThumbP">Bake Sale</p>
        </div>

	
	
	<div class="three mobile-one columns <?=echoActiveIfPageis("event3")?> eThumb">
        <? echo $this->Html->image("events/Exhibition.jpeg",array('alt' => "exhibition",'url' => array('controller' => 'events','action'=>'event3')))?>
	<p class="eThumbP">Exhibition</p>
        </div>
	
	<div class="three mobile-one columns <?=echoActiveIfPageis("event4")?> eThumb">
        <? echo $this->Html->image("events/Medical.jpeg",array('alt' => "medcamp",'url' => array('controller' => 'events','action'=>'event4')))?>
	<p class="eThumbP">Medical Camp</p>
        </div>
</div>
	
<div class="six mobile-four columns" id="eventthumb2">
        <div class="three mobile-one columns <?=echoActiveIfPageis("event5")?> eThumb">
        <? echo $this->Html->image("events/LegalPanel.jpeg",array('alt' => "legalPanel",'url' => array('controller' => 'events','action'=>'event5')))?>
	<p class="eThumbP">Legal Panel</p>
        </div>

        <div class="three mobile-one columns <?=echoActiveIfPageis("event6")?> eThumb">
        <? echo $this->Html->image("events/Talks.jpeg",array('alt' => "talks",'url' => array('controller' => 'events','action'=>'event6')))?>
	<p class="eThumbP">Talks</p>
        </div>
        
        <div class="three mobile-one columns <?=echoActiveIfPageis("event2")?> eThumb">
        <? echo $this->Html->image("events/Debate.jpeg",array('alt' => "debate",'url' => array('controller' => 'events','action'=>'event2')))?>
    <p class="eThumbP">Big Debate</p>
        </div>
        
        <div class="three mobile-one columns <?=echoActiveIfPageis("event8")?> eThumb">
        <? echo $this->Html->image("events/GalaNight.jpeg",array('alt' => "galanight",'url' => array('controller' => 'events','action'=>'event8')))?>
	<p class="eThumbP">Gala Night</p>
        </div>
</div>
</div>
<?php
function echoActiveIfPageis($reqAction)
{
    $actionName = basename($_SERVER['REQUEST_URI']);
    if ($actionName == $reqAction)
        echo 'selected';
}
?>

 <?php echo $this->fetch('content'); ?>


