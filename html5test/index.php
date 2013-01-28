<html>
<head>
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>HTML5 test</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<style>
body { background: black; }
</style>
</head>
<body>
<img src="/images/whatislove.gif" style="width:100%;">
<br/><br/>
<!--
//easy way lol
<audio id="audio_player" autoplay loop>
  <source src="/audio/whatislove.wav" type="audio/ogg">
  <source src="/audio/whatislove.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>
-->
<script type="text/javascript">
$(document).ready(function(){ 
  var audio = document.createElement('audio');
  audio.loop = true;
	
  var source1 = document.createElement('source');
  source1.type= 'audio/wave';
  source1.src= '/audio/whatislove.wav';
  audio.appendChild(source1);

  var source2 = document.createElement('source'); 
  source2.type = 'audio/mp3';
  source2.src = '/audio/whatislove.mp3';
  audio.appendChild(source2);	

  if (!(audio.canPlayType('audio/wav') || audio.canPlayType('audio/mp3')))
  {
    alert ( ' no audio support with this browser :( ')
  }
	
  audio.load();
  audio.play();
});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38010242-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
