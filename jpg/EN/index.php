<!doctype html>
<meta charset="utf-8">
<html>
<head>
<style>
p { clear: both; }
div.cards {
  text-align: justify;
  padding: 2em;
} 
div.text {
  text-align: justify;
  padding: 2em;
}
font.monospace
{
  font-family: "Lucida Console", Monaco, monospace;
} 
</style>
<!-- "thank you" "dear" 1960s paedos for activating CCS Suicide Death Bot against me-->
</head>
<body onhashchange="myFunction();">
<script>
function myFunction() {
	var allCards = document.getElementsByClassName("card");
	for (i=0; i<allCards.length; i++)
	{
		allCards[i].style = "border: 10px solid white;float:left;text-align:center;";
		console.log(i);
	}	
	var card = window.location.hash.substr(1);
        console.log(card);	
	document.getElementById(card).style = "border: 10px solid red;float:left;text-align:center;";
}

document.addEventListener("DOMContentLoaded", function(event) {
  myFunction();
});
</script>

<div class="text">
<h1>Hackers Cardgame</h1>

<a href="https://github.com/braindef/HackersCardgame6"><img src="./README.png"></a>
<br><br>

please respect the <a href="../../LICENSE">license</a><br>

<br><br>
Never Play "<font color=red>Red Team</font>" help out with "<font color=blue>Blue Team</font>" and save the World<br> The some from the old Generation would like that the young would become red team, but they still have the biggest surveillance system, so if a young would have success to attack satans network they would pop the legal system and force the young hacker to work for satans black world. So this cards are meant to be some sort of deffence cards to see what dirty things they use(d) against me.<br><br>

<br><br>
<font class=monospace color=green size=4em><b>If one of the two kids that normally both promise to be true to each other forever breaks the promise, they can easily break your mind but also the mind of the girl or boy you betrayed. Choose wisely, once but forever</b></font> <font class=monospace color=red size=4em><b>be careful if your parents have pedophile tendencies they would try to separate the equal aged couple.  
<br><br>
Maybe i should call my paranoja a good situational awareness like Andy does...
<br>

Source:<br>
<a href="https://github.com/braindef/HackersCardgame6">https://github.com/braindef/HackersCardgame6</a><br>
<a href="https://2hmorvqnlhwyrhvl6dwv4jqgnvhlaf2wxnrbmbhrbpmx5x3qqiwprjyd.onion/">https://2hmorvqnlhwyrhvl6dwv4jqgnvhlaf2wxnrbmbhrbpmx5x3qqiwprjyd.onion/</a>
<br><br>
<a href="https://github.com/braindef/HackersCardgame6/tree/master/pdf/EN/A4">PRINTING TEMPLATES (PDF)</a>
<br>
<a href="../../pdf/EN/A4/">PRINTING TEMPLATES local(PDF)</a>
<br><br>
<!-- and of course nobody would have the stupid idea to place microdots in such a repository https://en.wikipedia.org/wiki/Microdot-->

<br>
<!--
<audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/SpaceTripExtended.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio> <audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src='../../music/landev_--_mind_sciences.mp3' type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio> <audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/landev_game.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio> <audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/landev_horizon.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio>
</audio> <audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/landev_jba.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio>
</audio> <audio onloadeddata="this.play();" poster="a1.jpg" playsinline loop muted controls>
    <source src="../../music/landev_violent.mp3" type="audio/mp3" />
    Your browser does not support the video tag or the file format of this video.
</audio>
</div>
<div class="cards">
<p>

-->
   <?php

$files = glob("*.*");
natsort ($files);

$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

foreach($files as $file)
{
  $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  if (in_array($ext, $supported_file)) {

    $parts = explode(".", $file);
    echo '<div id="'.$parts[0].'" class="card" style="border: 10px solid white;float:left;text-align:center;">';
    echo "<font color=green>" . $parts[0] . "</font>" . "<br>";
    echo '<a href="./'.$file .'" id="'.$parts[0].'"'.' target="_blank"><img width=200 src="'.$file .'" ></a><br>';
    echo '</div>
';

} else {
    continue;
 }

}

?>
<br>
<br>
<br>
</p>
</div>
<p>
<div class="text">
Possibly you would get in serious trouble with those people, that abuses this technology if you would fork this repo *INSERT: "marc is insane"-stimulus on t1 card* but if eg. 1000 *INSERT: "marc has delusions of grandeur"-stimulus on t1 card* would fork at the same time, they would possibly not have enough manpower to target all that forked it. Additionally [I] suggest that all people creates their own cards / deck / repo without using the images or the exact text of my repository, it would spam the people abusing it *INSERT: <font color=red>against you!!!</font> (psychological warfare)* because they would have to keep eg 1000 people in check. Having different decks would make the people that abuses this sort of technolgoy leak all they have *my insert: <font color=green>also psychological warfare :D</font>*

if you are crazy enough to <font color=green>become a part of mind-control-hacking community</font> take at least 1 equal aged friend, never do such things allone, use as much different technologies as you can, eg. inkscape, illustrator, html5, demoscene videos, painted art, music ... maybe you have even better ideas...

<br>
<br>
Marc jr Landolt<br>
eidg. dipl Informatiker HF<br>
Neuenburgerstrasse 6<br>
5004 Aarau<br>
mail@marclandolt.ch<br>
062 822 61 31 (mostly unplugged)<br>
078 674 15 32 (mostly turned off and wrapped in tin foil)<br>
</p>
</body>
</html>

