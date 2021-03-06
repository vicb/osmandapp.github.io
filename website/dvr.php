<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>OsmAnd DVR - Car Video Recorder and Maps</title>
  <?php include 'blocks/default_links.html'; ?>
  <link rel="stylesheet" type="text/css" href="slick.css"/>
  <script type="text/javascript" src="scripts/jquery-3.1.0.min.js"></script>
  <script type="text/javascript" src="scripts/slick.min.js"></script>
  <script type="text/javascript" src="scripts/ga-init.js"></script>
  <script type="text/javascript" src="scripts/ga-home.js"></script>
</head>
<body>
<div class="maincontainer">
  <div class="main">
      <?php 
        $simpleheader_header_id = "DVR";
        $simpleheader_header = "OsmAnd DVR<br>Car Video Recorder + Maps";
        include 'blocks/simple_header.php';
      ?>
  </div>

    <div class="slideswrapper">
      <div class="slides">
        <img src="images/dvr/1p-en.png"/>
        <img src="images/dvr/2p-en.png"/>
        <img src="images/dvr/3p-en.png"/>
        <img src="images/dvr/4p-en.png"/>
        <img src="images/dvr/5p-en.png"/>
      </div>
      <div class="wrapper-image">
        <img src="images/dvr/5s-body.png"/>
      </div>
    </div>
    <div class="dvr-features">
      <div class="dvr-featurescontent">
      <h2>FEATURES</h2>
        <ul class="column">
          <li><div class="recover-video-recording"><span>Non-stop video recording</span></div></li>
          <li><div class="recover-video-recording"><span>Recover video recording after returning from the background mode or after incoming call</span></div></li>
          <li><div class="password-protection"><span>Password protection</span></div></li>
          <li><div class="simple-interface"><span>Simple user interface</span></div></li>
          <li><div class="location-reading"><span>Location, speed and altitude reading</span></div></li>
          <li><div class="subtitles"><span>Customizable subtitles in SRT format + Export to Camera Roll with built in subtitles</span></div></li>
          <li><div class="power-saving"><span>Power saving mode + Black screen mode</span></div></li>
          <li><div class="speedlimit"><span>Speed limit feature</span></div></li>
          <li><div class="map-providers"><span>Four Map providers, layer switching, traffic layer</span></div></li>
          <li><div class="ios7"><span>iOS 7 supported</span></div></li>  
        </ul>
        <ul class="column">
          <li><div class="photo"><span>Still photos while recording the video</span></div></li>
          <li><div class="favorites"><span>Favorites</span></div></li>
          <li><div class="videogallery"><span>Built-in video/photo gallery</span></div></li>
          <li><div class="help"><span>Built-in Help</span></div></li>
          <li><div class="gpx"><span>GPX track writing</span></div></li>
          <li><div class="portrait-landscape"><span>Portrait and landscape modes</span></div></li>
          <li><div class="carmode"><span>Car mode</span></div></li>
          <li><div class="webserver"><span>Web server</span></div></li>
          <li><div class="ipad-supported"><span>iPad supported</span></div></li> 
        </ul>
      </div>
    </div>
    <?php include 'blocks/footer.html'; ?>
  </div>
</div>
<script type="text/javascript">
  function setSliderSettings() {
    return {
      infinite: true,
      autoplaySpeed: 4000,
      arrows: false,
      slidesToShow: 1,
      autoplay: true,
      dots: true,
    }
  }

  $('.slides').slick(setSliderSettings());

  $(window).on('resize', function(){
        if (!$('.menu-hamburger').is(':visible')) {
          $('.menu').removeClass('active');
          $('.maincontainer').removeClass('menu-open');
        }

        
    });
</script>
</body>
</html>
