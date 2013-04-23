<?php $this->extend('/Common/events');?>

<div class="row">
    <div class="twelve columns panel">
      <? echo $this->Html->image("gallery/bakesale/bakesale1.png",array('alt'=>'bakesale','class'=>'imgborder'));?>
      
    </div>
  </div>
  

  
  <div class="row">
   <div class="four columns panel subpanel"style="text-align:center;">
      
      <h4 style="text-align:center"><strong>Bake Sale</strong></h4>
                
                <table style="margin:auto auto 0px">  
                    <tbody>
                        <tr>
                            <td>Date  </td>
                            <td>25th March 2013</td>
                            
                        </tr>
                        <tr>
                          <td>Time  </td>
                            <td>10:15 AM - 03:30 PM</td>
                        </tr>
                        <tr>
                          <td>Venue </td>
                            <td>Pi R cube , PESIT</td>
                        </tr>
                    </tbody>
                </table>
      
      
    </div>
    <div class="eight columns">
      <h4>Bake Sale</h4>
      <p>The Samarpana Fund Raiser Bake Sale organized on 25th March, 2013 was a great success. It catered to the over-crowded Pi R Cube as the turnout for the Fund Raiser was absolutely fantastic. Every food item was selling like hot cakes and most of the items were sold out even before both the college break hours ended. In the end, everyone was glad for having contributed to a worthwhile cause in the sweetest manner possible.
      </p>
      <p>Check out the pictures in Gallery
      <?echo $this->Html->link('Bakesale',array('controller' => 'gallery','action'=>'bakesale'));?></p>
    </div>
  </div>