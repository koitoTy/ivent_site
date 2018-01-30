<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<header>

<div class="box">
	<ul>
		<li>
		<a href="">About</a>
		</li>
		<li>	
		<a href="">Investors</a>
		</li>
		<li>
		<a href="">Careers</a>
		</li>
		<li>
		<a href="">Environment</a>		
		</li>
		<li>
		<a href="">EN / SE / NO / FI LANG: EN</a>
		</li>
		<!--  Шапка в классе Box с фикс. размером, он будет нужен дальше..->  -->
	</ul>
</div>
<div class="head-image">
</div>
<div class="head-text"><!--  Доделать надпись  --></div>
</header>
<div class = "content">
<div class="box">

		<li class="bord-down-1">
		<span id = "pr"></span>  <a href="promotion.html">Promotion</a>
		</li>
		<li class="bord-down-2">	
		<span id = "tc"></span>  <a href="ticket.html">Tickets</a>
		</li>
		<li class="bord-down-3">
		<span id = "at"></span>  <a href="Attractions.html">Attractions</a>
		</li>
		<li class="bord-down-4">
		<span  id = "fr"></span>  <a href="fr.html">Financial Report</a>		
		</li>		
		<li class="bord-down-5">
		<span id = "ac"></span>  <a href="about.html" >About Company</a>
		</li>
		<li class="bord-down-6">
		<span  id = "cr"></span>  <a href="careers.html">Careers</a>
		</li>
		<li class="bord-down-7">
		<span  id = "en"></span>  <a href="Events.html">Events & News</a>
		</li>
		<!--  Шапка в классе Box с фикс. размером, он будет нужен дальше..->  -->
	
</div>
<h3>Tickets and Admission</h3>

<?php
/*

$a = rand(89, 99);
$b = rand(0, 100);
$b = $b/100;

$a += $b;

echo "<h3 style=\"margin-left: 15%;\">$ $a </h3>";

*/

?>
<form method="post" ction="#"> <!-- action="что-то.phpaction="php/form-handler.php"" -->
	Adult:<select class="selecter" name="adult">
		<option value="0" >0</option>
		<option value="1" >1</option>
		<option value="2" >2</option>  <!-- onchange="adt(this.value)" -->
		<option value="3" >3</option>
		<option value="4" >4</option>		
	</select> 
	Child: <select class="selecter" name="child">
		<option value=0 >0</option>
		<option value=1 >1</option>
		<option value=2 >2</option> <!-- onchange="chd(this.value)" -->
		<option value=3 >3</option>
		<option value=4 >4</option>				
	</select>
	Senjor: <select class="selecter" name="senjor">
		<option value=0 onchange="sj(this.value)">0</option>
		<option value=1 onchange="sj(this.value)">1</option>
		<option value=2 onchange="sj(this.value)">2</option>
		<option value=3 onchange="sj(this.value)">3</option>
		<option value=4 onchange="sj(this.value)">4</option>				
	</select>
	<button value="2">Buy</button>
</form>

<?php
	if(isset($_POST)){
	$adult = $_POST['adult'];
	if($adult > 0){
		if($adult >= 1){
?>
<div class="ticket-adult" id="adult1">
<label>Adult</label>
<input onchange="change1(this.value)">
<div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-adult1" /><span id="sp1"></span></div>
<input type="checkbox">  Fast Pass >>
</div>
<?php
		if($adult > 1){
?>
<div class="ticket-adult" id="adult2">
<label>Adult</label>
<input onchange="change2(this.value)">
<div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-adult2" /><span id="sp1"></span></div>
<input type="checkbox">  Fast Pass >>
</div>
<?php 
			if($adult > 2){

?>
<div class="ticket-adult" id="adult3">
<label>Adult</label>
<input onchange="change3(this.value)">
<div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-adult3" /><span id="sp1"></span></div>
<input type="checkbox">  Fast Pass >>
</div>
<?php

				if($adult > 3){

?> 
<div class="ticket-adult" id="adult4">
<label>Adult</label>
<input onchange="change4(this.value)">
<div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-adult4" /><span id="sp1"></span></div>
<input type="checkbox">  Fast Pass >>
</div> 
<?php	
	}}}}}	
?>
<?php
	$child = $_POST['child'];
	if($child > 0){
		if($child >= 1){
?>
<div class="ticket-child" id="child1">
<label>Child</label>
<input onchange="change1(this.value)">
<div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-child1" /><span id="sp1"></span></div>
<input type="checkbox" onchange="onchange_a_1('ticket-child1')">  Fast Pass >>
</div>
<?php
		if($child > 1){
?>
<div class="ticket-child" id="child2">
<label>Child</label>
<input onchange="change1(this.value)">
<div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-child2" /><span id="sp1"></span></div>
<input type="checkbox" onchange="onchange_a_2('ticket-child2')">  Fast Pass >>
</div>
<?php
		if($child > 2){
?>
<div class="ticket-child" id="child3">
<label>Child</label>
<input onchange="change1(this.value)">
<div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-child3" /><span id="sp1"></span></div>
<input type="checkbox" onchange="onchange_a_3('ticket-child3')">  Fast Pass >>
</div>
<?php
		if($child > 3){
?>
<div class="ticket-child" id="child4">
<label>Child</label>
<input onchange="change1(this.value)">
<div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-child4" /><span id="sp1"></span></div>
<input type="checkbox" onchange="onchange_a_4('ticket-child4')">  Fast Pass >>
</div>

<?php
	}}}}
    /* скрипт на изменение кнопки */
    } /* убрать и не забыть вернуть */ 
        // сделано!
?>
<?php 
    $senjor = $_POST['senjor'];
    if($senjor>=1){
?>
    <div class="ticket-child" id="child4">
    <label>Senjor</label>
    <input onchange="change1(this.value)">
    <div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-child4" /><span id="sp1"></span></div>
    <input type="checkbox" onchange="onchange_a_4('ticket-child4')">  Fast Pass >>
    </div>
    <?php
        if($senjor > 1){
    ?>
    <div class="ticket-child" id="child4">
    <label>Senjor</label>
    <input onchange="change1(this.value)">
    <div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-child4" /><span id="sp1"></span></div>
    <input type="checkbox" onchange="onchange_a_4('ticket-child4')">  Fast Pass >>
    </div>
    <?php
        if($senjor > 2){
    ?>
    <div class="ticket-child" id="child4">
    <label>Senjor</label>
    <input onchange="change1(this.value)">
    <div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-child4" /><span id="sp1"></span></div>
    <input type="checkbox" onchange="onchange_a_4('ticket-child4')">  Fast Pass >>
    </div>
    <?php
        if($senjor > 3){
    ?>
    <div class="ticket-child" id="child4">
    <label>Senjor</label>
    <input onchange="change1(this.value)">
    <div><img src="img/Funny Island Ticket-2x.png" class="ticket" id="ticket-child4" /><span id="sp1"></span></div>
    <input type="checkbox" onchange="onchange_a_4('ticket-child4')">  Fast Pass >>
    </div> 
    <?php
        }}}}}
    ?>
</div>
<footer class="footer">
<div class="copyright-t">©2016, Funny Island Company. Attraction photos from Unsplash. Europe map from public domain.</div>
</footer>

</body>
</html>