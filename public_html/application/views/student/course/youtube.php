<style>
.button {
  width: 48px;
  height: 48px;
  cursor: pointer;
  &:hover {
    fill: white; 
  }
}

.defs {
  position: absolute;
  top: -9999px;
  left: -9999px;
}


.buttons {
  padding: 1rem;
  background: #f06d06;
  float: left;
}

body {
  padding: 1rem;
}
</style>

<h1>Pause / Play Buttons for YouTube Videos</h1>

<!-- Make sure ?enablejsapi=1 is on URL -->
<iframe id="video" src="https://www.youtube.com/embed/5hU7_W61Dp8?enablejsapi=1&html5=1" frameborder="0" allowfullscreen></iframe>

<!-- 
SVG ==
http://thenounproject.com/term/play/23255/ 
https://css-tricks.com/svg-tabs-using-svg-shape-template/
-->


<div class="buttons">
  <!-- if we needed to change height/width we could use viewBox here -->
  <button class="button" id="play-button">
    
  </button>
  <button class="button" id="pause-button">
    
  </button>
</div>
<script>
// https://developers.google.com/youtube/iframe_api_reference

// global variable for the player
var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player('video', {
    events: {
      // call this function when player is ready to use
      'onReady': onPlayerReady
    }
  });
}

function onPlayerReady(event) {
  
  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });
  
  var pauseButton = document.getElementById("pause-button");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
  });
  
}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>