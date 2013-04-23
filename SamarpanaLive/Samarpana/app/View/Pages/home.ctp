
<div class ="row">
    <div class="nine columns">
        <div id="homeSlider" class="imgborder">
          <?php echo $this->Html->image('Home/slide1.JPG', array('alt' => 'slide Image'))?>
          <?php echo $this->Html->image('Home/slide2.JPG', array('alt' => 'slide Image'))?>
          <?php echo $this->Html->image('Home/slide3.JPG', array('alt' => 'slide Image'))?>
          <?php echo $this->Html->image('Home/slide4.JPG', array('alt' => 'slide Image'))?>
          <?php echo $this->Html->image('Home/slide5.JPG', array('alt' => 'slide Image'))?>

        </div>
    </div>

    <div class="three columns">
        <div class="row panel subpanel">
            <div class="twelve columns ">
                <h4 style="text-align:center"><strong>Main Event</strong></h4>
                <table style="margin:auto auto 0px">  
                    <tbody>
                        <tr>
                            <td>19th April 2013</td>
                        
                        </tr>
                        <tr>
                            <td>20th April 2013</td>
                        </tr>
                    </tbody>
                </table>
               
                
                
                <h4 style="text-align:center"><strong>Marathon</strong></h4>
                <table style="margin:auto auto 0px">  
                    <tbody>
                        <tr>
                            <td>21st April 2013</td>
                        
                        </tr>
                    </tbody>
                </table>
                 <hr>
                 <? echo $this->Html->image("Home/CharityRunclick.jpg",array('alt' => "charity",'class'=>'imgborder','url' => array('controller' => 'events','action'=>'event1')))?>
                <div style="text-align:center;">
                <?echo $this->Html->link('Register',array('controller' => 'events','action'=>'event1'),array('class'=>'button','style'=>'float: none;
display: block;
border-right: none;'));?>
                </div>
                
            </div>
        </div>
        
    </div>
</div>
<hr>
<div class="row">
	<div class="eleven columns ">
		<h4>Why Samarpana?</h4>
		<p>Samarpana seeks to make our community aware of the price that we pay for our freedom and express our gratitude of those who toil and put their lives on the line so that we wouldn't have to.</p>
		<p>In return, they crave little else but a place in our memories. In return there is but one thing they ask of us: do we really care? And perhaps not just the soldiers, but every nation at large wants to know of its younger generation, if they care about the sweat, blood and tears that go into building it, <b>Samarpana is our way of responding with a resounding "YES, we do!"</b>.</p>
	</div>
</div>


<div class ="row panel subpanel">
<div class="twelve columns" style="padding-left:0px;">
	<h4>Events</h4>
</div>
<div class="six mobile-four columns" id="eventthumb1">
        <div class="three mobile-one columns eThumb hPage">
        <? echo $this->Html->image("events/CharityRun.jpeg",array('alt' => "charity",'url' => array('controller' => 'events','action'=>'event1')))?>
        <p class="eThumbP">Charity Run</p>
        </div>
	
	<div class="three mobile-one columns eThumb hPage">
        <? echo $this->Html->image("events/bakesale.jpg",array('alt' => "bakesale",'url' => array('controller' => 'events','action'=>'event7')))?>
        <p class="eThumbP">Bake Sale</p>
        </div>

        <div class="three mobile-one columns eThumb hPage">
        <? echo $this->Html->image("events/Exhibition.jpeg",array('alt' => "exhibition",'url' => array('controller' => 'events','action'=>'event3')))?>
        <p class="eThumbP">Exhibition</p>
        </div>

        <div class="three mobile-one columns eThumb hPage">
        <? echo $this->Html->image("events/Medical.jpeg",array('alt' => "medical",'url' => array('controller' => 'events','action'=>'event4')))?>
        <p class="eThumbP">Medical Camp</p>
        </div>
</div>
<div class="six mobile-four columns" id="eventthumb2">
        <div class="three mobile-one columns eThumb hPage">
        <? echo $this->Html->image("events/LegalPanel.jpeg",array('alt' => "legal",'url' => array('controller' => 'events','action'=>'event5')))?>
        <p class="eThumbP">Legal Panel</p>
        </div>

        <div class="three mobile-one columns eThumb hPage">
        <? echo $this->Html->image("events/Talks.jpeg",array('alt' => "talks",'url' => array('controller' => 'events','action'=>'event6')))?>
        <p class="eThumbP">Talks</p>
        </div>
	
	<div class="three mobile-one columns eThumb hPage">
        <? echo $this->Html->image("events/Debate.jpeg",array('alt' => "debate",'url' => array('controller' => 'events','action'=>'event2')))?>
        <p class="eThumbP">Big Debate</p>
        </div>

        <div class="three mobile-one columns eThumb hPage" >
        <? echo $this->Html->image("events/GalaNight.jpeg",array('alt' => "galanight",'url' => array('controller' => 'events','action'=>'event8')))?>
        <p class="eThumbP">Gala Night</p>
        </div>
</div>
</div>
</br>
<div class="row">
	<div class="eight columns">
                <h4>Samarpana 2012</h4>
        	<p>Samarpana ‘12 paid tribute to army officers, jawans, and policemen who have been killed in various wars and operations over the past decade, including the Kargil War, Operation Orchid against Maoist insurgents, Indo-China War, Indo-Pak War and also the counter insurgency operations being held in Kashmir and the North-East.</p>
		<p>Shankar Bidari, DGP, Karnataka and Major Ashok Sharma (retired), gallantry award winner were the guests of honour.Families of nine war veterans were honoured, along with 4 families of policemen of the CRPF, as part of Samarpana ‘12, an initiative to resurrect the lost memories of the great heroes who lost their lives during service to the nation.</p>

	</div>
	<div class="four columns panel subpanel">
        <div class="row" style="padding-right: 15px;padding-left: 15px;">            
            <a  href="https://twitter.com/samarpana_pesit" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @samarpana_pesit</a>
            
            <a class="twitter-timeline" href="https://twitter.com/search?q=%23samarpana" data-widget-id="317787884939788288">Tweets about "#samarpana"</a>


        </div>

	<div class="fb-like" data-href="https://www.facebook.com/samarpana.pesit" data-send="false" data-width="200" data-show-faces="true" data-font="arial"></div>

	</div>
</div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


<script>
    $(window).load(function(){
      $("#homeSlider").orbit({

        animation: 'horizontal-push',                  // fade, horizontal-slide, vertical-slide, horizontal-push
        animationSpeed: 800,                // how fast animtions are
        timer: true,                        // true or false to have the timer
        resetTimerOnClick: false,           // true resets the timer instead of pausing slideshow progress
        advanceSpeed: 4000,                 // if timer is enabled, time between transitions
        pauseOnHover: false,                // if you hover pauses the slider
        startClockOnMouseOut: false,        // if clock should start on MouseOut
        startClockOnMouseOutAfter: 1000,    // how long after MouseOut should the timer start again
        directionalNav: true,               // manual advancing directional navs
        captions: true,                     // do you want captions?
        captionAnimation: 'fade',           // fade, slideOpen, none
        captionAnimationSpeed: 800,         // if so how quickly should they animate in
        bullets: false,                     // true or false to activate the bullet navigation
        bulletThumbs: false,                // thumbnails for the bullets
        bulletThumbLocation: '',            // location from this file where thumbs will be
        afterSlideChange: function(){},     // empty function
        fluid: true                         // or set a aspect ratio for content slides (ex: '4x3')
        });
    });
</script>

<style>

#homeSlider { background: url(spinner.gif) center center #f4f4f4 no-repeat; height: 300px; }
#homeSlider img { display: none;text-align:center }
#homeSlider.orbit { background: none; }
#homeSlider.orbit img { display: block;  }
</style>
<div id="fb-root"></div>
