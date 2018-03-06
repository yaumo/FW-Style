<?php
header("Content-Type: text/css");
date_default_timezone_set('Europe/Berlin');
$now = time();
if (date("d.m") == "01.04" || date("d.m") == "31.03")
$future = strtotime("midnight") + 86400;
else
$future = $now + 86400;
$modded = date("D, d M o H:i:s",$future);
//echo "Expires: Sat, 26 Jul 1997 05:00:00 GMT<br/>";
//echo "Expires: $modded GMT";
header("Expires: $modded CET");
header("Last-Modified: ".gmdate("D, d M Y H:i:s", filemtime(__FILE__)) ." GMT");
header("Cache-Control: private, max-age=86400");
header("Cache-Control: pre-check=86400", false);

$components = array("xxx", "csd", "wcv", "rpz", "ans", "vti", "cnr", "smn", "cid", "san", "ais", "com", "tko", "sfz");
$original = array("csd", "wcv", "rpz", "ans", "cnr", "smn", "cid", "san", "ais", "com");
$original_o2 = array("csd", "wcv", "rpz", "ans", "cnr", "smn", "cid", "san", "com");
$original_o3 = array("csd", "wcv", "rpz", "ans", "cnr", "smn", "cid", "com");
$original_o4 = array("wcv", "rpz", "ans", "cnr", "smn", "san", "com");

if(isset($_GET["o"])){
    foreach($original as $k=>$c){
            echo '@import url("./cmp/'.$c.'.css");
';
    }
} 
elseif(isset($_GET["o2"])){
    foreach($original_o2 as $k=>$c){
            echo '@import url("./cmp/'.$c.'.css");
';
    }
} 

elseif(isset($_GET["o3"])){
    foreach($original_o3 as $k=>$c){
            echo '@import url("./cmp/'.$c.'.css");
';
    }
} 

elseif(isset($_GET["o4"])){
    foreach($original_o4 as $k=>$c){
            echo '@import url("./cmp/'.$c.'.css");
';
    }
} 

else {
    foreach($components as $k=>$c){
        if(isset($_GET[$c])){
            echo '@import url("./cmp/'.$c.'.css");
';
        }
    }
}

if(!isset($_GET['xxx'])){
    echo '.framebannerbg 		{ background-color: #C85424; background-image: url(images/bannerbg2.jpg); border-bottom: 1px solid #000000; }
';
}
?>
/* BETTER SUNFIRE */
/* Stylegenerator v 0.1 by sniGG */
/* http://www.fwwiki.de/index.php/Benutzer:Doran */

/* Hilfe gibt es im Styleforum: http://forum.freewar.de/viewtopic.php?f=18&t=40823 */

/* Besteht aus: */
/* 1. Freewar.de StyleSheet Cold Sunfire v1.0 - (C) 2004 (Sotrax) */
/* 2. Einigen Features aus dem "Kaspersky Style" -(isdrador) http://kstyle.infos.lc */
/* 3. Den Runenpuzzle-�nderungen von Po1son*/
/* 4. Diversen �nderungen von Latzhosentr�ger */
/* 5. Diversen �nderungen von sniGG */

/* Dank geht an alle, die Inhalte zur Verf�gung gestellt haben, insbesondere Sotrax und isdrador. */
/* Auch bedanke ich mich bei allen, die tatkr�ftig geholfen haben. */

/* Einige Inhalte dieses Styles werden mittlerweile von vielen anderen Styles �bernommen. Wenn jemand etwas �bernehmen will, muss er eine PN an Latzhosentr�ger schreiben. */



/* global */
	p,ul,ol,div,td,span,layer,table,body	 
				{ font-family: Arial, helvetica, sans-serif; font-size: 12px; color: #222222; }
	p 			{ margin: 0px; padding: 0px; }

/* body */
	body 			{ background-color: #ffffff; margin: 0px; }

/* table */
	table 			{ border:0px; border-collapse: collapse; } /* cellspacing & cellpadding & border =0 no longer needed
	td 			{ padding:0px; margin:0px; }

/* scrollbars */
/* body, textarea 		{ scrollbar-base-color:#BBBBBB; scrollbar-3dlight-color:#FFFFFF; scrollbar-arrow-color:#007F9F; scrollbar-darkshadow-color:#999999; scrollbar-face-color:#D5D5D5; scrollbar-highlight-color:#FFFFFF; scrollbar-shadow-color:#636363; scrollbar-track-color:#F5F5F5; } */

/* links */
	a:link 			{ color:#CC3300; text-decoration:none; font-weight:bold; }
	a:visited 		{ color:#CC3300; text-decoration:none; font-weight:bold; }
	a:active 		{ color:#FF3300; text-decoration:hover; font-weight:bold; }
	a:hover 		{ color:#FF3300; text-decoration:underline; font-weight:bold; }

/* fonts */
	h1 			{ font-size:12px; font-weight:bold; margin-bottom: 0px;}
	.medium 		{ font-size:11px; }
	.small 			{ font-size:10px; }

/* colors */
	.fontcolor 		{ color: #555555; }
	.white 			{ color: #ffffff; }

/* bgcolors */
	.body 			{ background-color: #FFFFFF; }
	.divider 		{ background-color: #555555; }
	.outline 		{ background-color: #999999; }
	.menubg			{ background-color: #F1F1F1; }
	.brightbg		{ background-color: #E5E5E5; }
	.verybrightbg		{ background-color: #F1F1F1; }
	.reallybrightbg		{ background-color: #FAFAFA; }
	.whitebg		{ background-color: #FFFFFF; }
	.blackbg 		{ background-color: #000000; }
	.brownbg 		{ background-color: #E1D8D1; }

/* forms */
	.registerinput 	 	{ width: 100%; font-size: 10px; }
	.registersubmit  	{ font-size: 10px; }
	.logininput 	 	{ width: 100%; font-size: 10px; }
	.loginsubmit		{ width: 100%; font-size: 10px; }

/* forms */
	.input 			{ font-size: 11px; background-color: #FFECD3; height: 17px; border: 1px solid #C85424; }
	textarea		{ font-size: 12px; background-color: #FFECD3; border: 1px solid #C85424; }
	select 			{ font-size: 11px; background-color: #DBEBEF; }

/* chat buttons */
.submitsagen {
    background-image: url("images/button_bg2.jpg");
    border: 1px solid #777777;
    color: #000000;
    font-size: 11px;
    font-weight: bold;
    height: 17px;
    margin-left: 2px;
    margin-right: 2px;
    padding-bottom: 2px;
    width: 80px;
}
.submitclan {
    background-image: url("images/button_bg2.jpg");
    border: 1px solid #777777;
    color: #D20000;
    font-size: 11px;
    font-weight: bold;
    height: 17px;
    margin-right: 2px;
    padding-bottom: 2px;
    width: 80px;
}
.submitschreien {
    background-image: url("images/button_bg2.jpg");
    border: 1px solid #777777;
    color: #004DA7;
    font-size: 11px;
    font-weight: bold;
    height: 17px;
    margin-right: 2px;
    padding-bottom: 2px;
    width: 87px;
}
.submitgroup {
    background-image: url("images/button_bg2.jpg");
    border: 1px solid #777777;
    color: #E36B30;
    font-size: 11px;
    font-weight: bold;
    height: 17px;
    margin-right: 2px;
    padding-bottom: 2px;
    width: 80px;
}
.submitwhisper {
    background-image: url("../images/button_bg2.jpg");
    border: 1px solid #777777;
    color: #006600;
    font-size: 11px;
    font-weight: bold;
    height: 17px;
    margin-right: 2px;
    padding-bottom: 2px;
    width: 88px;
}
.submitglobalchat 	{
    background-image: url("images/button_bg2.jpg");
    border: 1px solid #777777;
    color: #6e621e;
    font-size: 11px;
    font-weight: bold;
    height: 17px;
    margin-right: 2px;
    padding-bottom: 2px;
    width: 80px;
}



/* banner stuff */
	.bannerad 		{ border: 1px solid #C85424; }

/* text classes */
	.chattext 		{ color: #000000; font-size: 13px; }
	.chattextscream		{ color: #004DA7; font-size: 13px; }
	.chattextclan 		{ color: #D20000; font-size: 13px; }
	.chattextworldsay 	{ color: #000000; background-color: #C1CEF9; font-size: 13px; }
	.chattextwhisper 	{ color: #006600; font-size: 13px; }
	.healthmed		{ color: #FF8000; }
	.healthok 		{ color: #309000; }
	.healthcritical 	{ color: #D20000; }
	.chatpics 		{ visibility: visible; }

/* Wetter */
	.chattextinfo 		{ color: #A37300; font-size: 13px; } 	/* normales Wetter */
	.chattextinfo 		{ font-style: italic; }
	.chattextinfo:before 	{ content: "Bemerkenswert: "; font-weight: bold; color: #A37300; } /* Bemerkenswertzeile - l�schen/rauskommentieren wenn unerw�nscht */



	.framechatformbg 	{ background-color: #E7E7E7; }
	.framechattextbg 	{ background-color: #F8F8F8; margin: 10px; margin-top: 5px; margin-bottom: 5px; margin-right: 5px; }
	.framemainbg 		{ margin: 10px; background-image: url(images/mainbg.jpg); background-repeat: repeat-y; background-position: right; }
	.frameitembg 		{ margin: 10px; background-color: #DCDCDC; background-image: url(images/itembg.jpg); }
	.framemapbg 		{ margin: 10px; margin-top: 3px; background-color: #C1BDBA; background-image: url(images/itembg.jpg); }
	.framemenubg 		{ background-color: #C1BDBA; background-image: url(images/itembg.jpg); }

/* main module */
	td.mainheader 		{ font-size: 35px; background-image: url(images/headerbg.jpg); }
	table.areadescription 	{ border: 1px solid #FFDAA9; background-color: #FFF8EF; width: 100%; }
	td.areadescription 	{ padding: 0px; }
	.imageborder 		{ border: 1px solid #C85424; background-color: #C85424; margin-right: 1px; margin-bottom: 1px;}
	p.maincaption 		{ font-weight: bold; font-size: 30px; padding: 1px; padding-left: 1px; background-image: url(images/headerbg.jpg); }
	p.maincaption2 		{ font-weight: bold; font-size: 12px; padding: 1px; padding-left: 1px; background-image: url(images/bluebg.jpg); }
	p.maindesc1 		{ padding: 1px; padding-left: 1px; background-color: #ECE9E6; border: 1px solid #D6CBC2; border-top: 1px; width: 300px; }
	p.maindesc2 		{ border: 1px solid #FFDAA9; background-color: #FFF8EF; width: 100%; }
	p.listplaceitemsrow 	{ padding: 1px; padding-left: 1px; background-color: #ECE9E6; border: 1px solid #D6CBC2; border-top: 0px; }
	p.listusersrow 		{ padding: 1px; padding-left: 1px; background-color: #ECE9E6; border: 1px solid #D6CBC2; border-top: 0px; }

/* item module */
	p.listcaption 		{ border: 1px solid #A2A09F; font-weight: bold; padding: 1px; padding-left: 5px; background-image: url(images/button_bg.jpg); }
	p.listsubcaption 	{ border-bottom: 1px solid #D6CBC2; }
	p.listrow 		{ padding: 2px; padding-left: 5px; background-color: #ECE9E6; border: 1px solid #D6CBC2; border-top: 0px; }
	p.listitemrow 		{ padding: 2px; padding-left: 5px; background-color: #ECE9E6; border: 1px solid #D6CBC2; border-top: 0px; border-top: 1px solid #D6CBC2; margin-bottom: 3px; }
	p.listplaceitemsrow 	{ padding: 2px; padding-left: 5px; background-color: #ECE9E6; border: 1px solid #D6CBC2; border-top: 0px; }
	.valueincreased 	{ font-weight: bold; color: #ff0000; }
	.itemamount 		{ font-weight: bold; color: #751700; }
	.itemequipped 		{ font-weight: bold; color: #ff0000; }
	.itemmagic 		{ font-weight: bold; color: #008800; }
	.iteminventorypics 	{ visibility: visible; }

/* map module */
	p.positiontext 		{ background-color: #BBBBBB; border: 1px solid #555555; color: #000000; font-size: 10px; margin-left: 0px; margin-right: 0px; margin-bottom: 3px; padding-left: 0px; padding-right: 0px; width: 100%; }

/* main module */
	p.personlistcaption 	{ border: 1px solid #A2A09F; font-weight: bold; padding: 2px; padding-left: 5px; background-image: url(images/buttonblue_bg.jpg); }
	p.itemlistcaption	{ border: 1px solid #A2A09F; font-weight: bold; padding: 2px; padding-left: 5px; background-image: url(images/buttonorange_bg.jpg); }

/* misc */
	.borderbg 		{ background-color: #D0CFCF; }
	img.nocango 		{ background: transparent;}
	a.nocango 		{ background: #transparent; height: 50px; width: 50px; border-width: 0; display: block;}
	a.nocango:hover 	{ background: url(images/map/nocango.gif) top left no-repeat; cursor: default;}
	.abilitymenu 		{ border:0px; border-collapse: collapse; }
	.abilitymenu tr 	{ padding: 2px; padding-left: 5px; background-color: #ECE9E6; }
	.abilitymenu td 	{ text-align: right; padding: 2px; padding-left: 5px; border: 1px solid #D6CBC2; }
	td.c1 			{ text-align: left;}
	.bold td		{ font-weight:bold;}
	#plantrow 		{ border: 1px solid #A2A09F; font-weight: bold; padding: 2px; padding-left: 5px; background-image: url(images/buttongreen_bg.jpg); }
	.friendlist 		{ border-collapse: collapse; }
	.friendlist tr 		{ background-color: #ECE9E6; }
	.friendlist td 		{ padding: 3px; border-bottom: 1px solid #D6CBC2; }



/* Einstellungen */
	a[href*="profil.php?action=skip"]:before 	{ content: url(images/check.png); padding-right: 2px; }
	a[href*="profil.php?action=skip"]:hover 	{ color: #D20000 !important; }
	a[href*="profil.php?action=show"]:before 	{ content: url(images/cross.png); padding-right: 2px; }
	a[href*="profil.php?action=show"]:hover 	{ color: #008800 !important; }
	a[href*="profil.php?action=enable"]:before 	{ content: url(images/cross.png); padding-right: 2px; }
	a[href*="profil.php?action=enable"]:hover 	{ color: #008800 !important; }
	form > input[name="ownstyle"] 			{ width: 100%; }

/* Item-/Gelduebergabe */
	.frameitembg a[href*="item.php?action=transfer2"] 	{ display: inline-block; margin: 0px 0px 5px 5px; }
	.frameitembg a[href*="item.php?action=moneytransfer3"] 	{ display: inline-block; margin: 0px 0px 5px 5px; }



/* Zust�nde blinken beim Auslaufen */
	span[title*="(2 Minuten)"] { color:#D20000; text-decoration:blink;}
	span[title*="(1 Minuten)"] { color:#D20000; text-decoration:blink; font-size: larger; font-weight: bold;}
	span[title*="(0 Minuten)"] { color:#D20000; text-decoration:blink; font-size: larger; font-weight: bold;}





/* Rassen der Clanmitglieder im Clanmenu */

	.frameitembg *[title*="Mensch"]:after 	{ display: block; content:" ("attr(title)")"; color:#000000; }
	.frameitembg *[title*="Onlo"]:after 	{ display: block; content:" ("attr(title)")"; color:#000000; }
	.frameitembg *[title*="Natla"]:after 	{ display: block; content:" ("attr(title)")"; color:#000000; }
	.frameitembg *[title*="dunkler"]:after 	{ display: block; content:" ("attr(title)")"; color:#000000; }
	.frameitembg *[title*="Serum"]:after 	{ display: block; content:" ("attr(title)")"; color:#000000; }
	.frameitembg *[title*="Taruner"]:after 	{ display: block; content:" ("attr(title)")"; color:#000000; }


/* Spezialworldsays ausblenden */

	/* Gelb */
	p.worldsay table tr[bgcolor="#FFDA47"] 		{ display:none; }
	p.worldsay table tr[bgcolor="#FFDA47"] td	{ display:none; }

	/* Pink */
	p.worldsay table tr[bgcolor="#FFAEA1"] 		{ display:none; }
	p.worldsay table tr[bgcolor="#FFAEA1"] td 	{ display:none; }

	/* Orange */
	p.worldsay table tr[bgcolor="#F8A370"] 		{ display:none; }
	p.worldsay table tr[bgcolor="#F8A370"] td 	{ display:none; }

/* Inventar-Platzschaffende �nderungen */
	p.listcaption + p.listrow .small b + b 		{ margin: 0 0 0 -6px; }
	p.listcaption + p.listrow .small b + b:before 	{ content: " | "; background: #ECE9E6; }

	p.listcaption + p + p + p + p + p + p + p.listrow .valueincreased, p.listcaption + p + p + p + p + p + p + p + p.listrow .valueincreased, p.listcaption + p + p + p + p + p + p + p + p + p.listrow .valueincreased { display:inline-block; width:150px; }
	p.listcaption + p + p + p + p + p + p + p.listrow, p.listcaption + p + p + p + p + p + p + p + p.listrow, p.listcaption + p + p + p + p + p + p + p + p +p.listrow { overflow:hidden; white-space:nowrap; }
	
	/* Modified by Cembon */
	p[title~="Zustand:"] a { font-size: 0; }
	p[title~="Zustand:"] a:before { content: "Waffe"; font-size: 12px; }	
	
	.valueincreased 				{color:#309000; font-size: smaller;}

 	#phasespacer 					{display:none;}

	#fastspell1, #fastspell2, #fastspell3, #fastspell4, #fastspell5, #fastspell6, #fastspell7, #fastspell8, #fastspell9 { margin-top: -1px;}
	#fastspell 					{margin: -10px 5px 0px 0px; }
	#fastspell td 					{padding: 0px 5px 0px 0px;}

	.frameitembg 					{ margin: 10px; margin-top: 1px; background-color: #DCDCDC; background-image: url(images/itembg.jpg); }
	.frameitembg img[src$="item_divider.gif"] 	{margin-top: -5px;height: 9px;}

/*Bilder verkleinern (Vote/Brief/Sieg/Niederlage) */
	img[src$="brief.jpg"] 						{width: 100px; }
	img[src$="sieg.jpg"] 						{ width: 50px; }
	img[src$="niederlage.jpg"] 					{ width: 50px; }
	img[src="http://voting.gdynamite.de/images/gd_animbutton.gif"] 	{width: 25px !important; }
	img[src="http://www.gamessphere.de/img/graphics/vote.gif"] 	{width: 25px;}
	img[src="http://www.freewar.de/images/vote.gif"] 		{width: 25px !important; }

/*Cursor Fix*/
	*[onclick] 		{ cursor: pointer; }

/*Texteingabe gr��er: Modnachricht, Feuervogel, Post, Postvogel, Notizzettel...*/
	.frameitembg textarea 	{ width: 100%; height: 50%;}
	.framemainbg textarea	{ width: 100% !important; height: 70% !important; }

/*Sponsorsterne*/
	img[src$="sponsor.gif"] 	{ margin-right: 1px; }
	img[src$="sponsor2.gif"] 	{ margin-right: 1px; }
	img[src$="sponsor3.gif"]	{ margin-right: 1px; }
    
/* inv fix */
.frameitembg{
 overflow-x: hidden;
 }
 
 #listrow_int ~ p.listrow[title$="100%"] a::after {
    position: absolute;
    right: 20px;
 }
 
 .aggressivenpc {
	color:#d00;
	display:inline-block;
	padding-right:3px
}
/* von Teepflanze geklaut */

/*gigantische */
img[src$="spindel.gif"] {
background: rgba(255, 113, 113, 0.71) !important;
border: 2px inset rgb(53, 53, 53)!important;
border-top-left-radius: 20px;
border-bottom-right-radius: 20px;
}

/*klein */
img[src$="spindel2.gif"] {
background: rgba(127, 253, 103, 0.57) !important;
border: 2px inset rgb(53, 53, 53)!important;
border-top-left-radius: 20px;
border-bottom-right-radius: 20px;
}

/*normale */
img[src$="spindel3.gif"] {
background: rgba(255, 252, 89, 0.76)!important;
border: 2px inset rgb(53, 53, 53)!important;
border-top-left-radius: 20px;
border-bottom-right-radius: 20px;}
