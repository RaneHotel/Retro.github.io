<?php
require("./inc/core.php");
require("./inc/session.php");
require("./templ/cabboclient.php");

$subs = "habbo_vip";
mysql_query("UPDATE users SET home_room = '120'");
mysql_query("UPDATE users SET nux_user = 'false'");
mysql_query("UPDATE users SET nux_passed = '1'");
mysql_query("UPDATE users SET bot_frank = '1'");

	
	
if($user_rank > 2 && empty($_SESSION['slogin'])) { header("Location: $path/home"); }
mysql_query("INSERT INTO user_subscriptions (user_id, subscription_id, timestamp_activated, timestamp_expire) VALUES ('" . $userid ."', '". $subs . "', '1376239398', '1735689360')");
?>

<head>

</head>
<title>Kabbo :: Client</title>
<script type="text/javascript">

</script>

<script type="text/javascript">

    FlashExternalInterface.loginLogEnabled = true;
    
    FlashExternalInterface.logLoginStep("web.view.start");
    
    if (top == self) {
        FlashHabboClient.cacheCheck();
    }

    var flashvars = {

            "client.allow.cross.domain" : "1", 
			"client.notify.cross.domain" : "1", 
			"connection.info.host" : "51.4.148.17", 
			"connection.info.port" : "3000",
			"site.url" : "<?php echo $path; ?>", 
			"url.prefix" : "<?php echo $path; ?>", 
			"client.reload.url" : "<?php echo $path; ?>/hotel", 
			"client.fatal.error.url" : "<?php echo $path; ?>/hotel", 
			"client.connection.failed.url" : "<?php echo $path; ?>/hotel", 
			"external.variables.txt" : "<?php echo $path; ?>/game/gamedata/x_external_variables_x.php?d2d2", 
			"external.texts.txt" : "<?php echo $path; ?>/game/gamedata/x_external_flash_texts_x.txt?ddd",
			"external.override.variables.txt": "<?php echo $path; ?>/game/gamedata/override/x_external_override_variables_x.php?ddd",
			"external.override.texts.txt": "<?php echo $path; ?>/game/gamedata/override/x_external_flash_override_texts_x.txt?ddd",
			"productdata.load.url" : "<?php echo $path; ?>/game/gamedata/tr_productdata.txt?ddd",
			"furnidata.load.url" : "<?php echo $path; ?>/game/gamedata/furnidata.xml?ddd",
			"external.figurepartlist.txt" : "<?php echo $path; ?>/game/gamedata/figuredata.xml?ddd", 
			"flash.dynamic.avatar.download.configuration" : "<?php echo $path; ?>/game/gamedata/figuremap.xml?<?php echo time();?>", 
			"use.sso.ticket" : "1", 
			"sso.ticket" : "<?php echo $ticketrow['auth_ticket']; ?>", 
			"processlog.enabled" : "1", 
			"account_id" : "1", 
			"client.starting" : "Lütfen bekleyin! Kabbo basliyor...", 
			"flash.client.url" : "<?php echo $path; ?>/game/gordon/X-PRODUCTION-X/", 
			"user.hash" : "<?php echo $ticketrow['auth_ticket']; ?>", 
			"has.identity" : "1", 
			"flash.client.origin" : "popup" 


    };
    var params = {
        "base" : "<?php echo $path; ?>/game/gordon/X-PRODUCTION-X/",
        "allowScriptAccess" : "always",
        "menu" : "false"                
    };
    
    if (!(HabbletLoader.needsFlashKbWorkaround())) {
    	params["wmode"] = "opaque";
    }

    FlashExternalInterface.signoutUrl = "<?php echo $path; ?>/ausloggen";
    
	 var clientUrl = "<?php echo $path; ?>/game/gordon/X-PRODUCTION-X/Habbo-edit.swf?kabsdbosuig";

     
        swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "http://images.habbo.com/habboweb/61_c0f99b7b02ed27ad5d4d5661fe02784f/8/web-gallery/flash/expressInstall.swf", flashvars, params);
     
    window.onbeforeunload = unloading;
    function unloading() {
        var clientObject;
        if (navigator.appName.indexOf("Microsoft") != -1) {
            clientObject = window["flash-container"];
        } else {
            clientObject = document["flash-container"];
        }
        try {
            clientObject.unloading();
        } catch (e) {}
    }
    window.onresize = function() {
        HabboClient.storeWindowSize();
    }
	 

</script>

<body onload="init();" id="client" class="flashclient">
<div id="overlay"></div>
<div id="overlay"></div>
<div id="client-ui" >
<div id="flash-wrapper">
<div id="flash-container">
<script type="text/javascript">
$('content').show();
</script>
</div>



<!---
<div id="clientnachricht" style="display:none" onmousedown="startDrag(this);">
<div id="nachrichttitle">Mabbo hotele hosgeldiniz!<div id="closebbtn" class="closebbtn">X</div></div>
<div id="containerbox">
<img align="right" src="./gallery/images/frank_big_01.gif?Hh">
<span class="clienttext">
<b>Merhaba <?php echo $username; ?>, hotelimizde seni görmek ne güzel!</b><br><br>
Dün aktif <b>+110</b> kullaniciya ulastik,<br>ama bugün hedeflerimiz daha büyük!<br>
hotelimizi sizler için güncelliyoruz ve hep güncel tutuyoruz.<br>
Bugün sürpriz hediyeler yada eventler olabilir,<br>lütfen arkadaşlarınıza haber verin!<br>
Biz mabbo personel takimi olarak sizlere iyi eglenceler dileriz.<br><div style="    float: right;
    margin-top: 40px;
    margin-right: -123px;
    font-weight: 600;
    font-size: 20px;">-Mabbo Team</div><br>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like-box" data-href="https://www.facebook.com/mabboturkiye2018/" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="false" data-show-border="true"></div>

</span>
</div>
</div>
--->
</div>
</div>
<div id="content" class="client-content"></div>            
</div>

<div id="onlinewrapper">
<b><div style="    text-align: center;
    font-size: 25px;
    text-shadow: 0px 0px 20px;"><?php echo "".$onlinecounter.""; ?></b></div><hr> Kabbo Online!
</div>

<div id="onlineradio" style="position: absolute;top: 0px;right: 35%;padding: 1px 1px;border-radius: 0px 0px 3px 3px;background-color: rgb(50, 49, 46);border: 2px solid rgb(84, 82, 77);color: rgb(255, 255, 255);border-top: none;text-shadow: 0px 0px 1px rgb(113, 113, 113);z-index: 99999; height: 25px;">
<center>
<embed title="Kabbo Radio!" type="application/x-shockwave-flash" src="/player.swf?hgf" style="undefined" id="mpl" name="mpl" quality="high" allowfullscreen="true" allowscriptaccess="always" volume="10" wmode="opaque" flashvars="file=http://stream01.iloveradio.de/iloveradio1.mp3&amp;type=sound&amp;stretching=fill&amp;autostart=true&amp;controlbar=bottom&amp;" height="23" width="220">
</center> 
</div>

<script>
$(document).ready(function(){
$("#clientnachricht").fadeIn(5000);	
$("#closebbtn").click(function(){	
$("#clientnachricht").fadeOut(1000);
});
$("#clientmenu").click(function(){
$("#boxheader").toggle(1000);
$("#onlinewrapper").toggle(1000);
});
$("#close").click(function(){
$("#boxheader").toggle(1000);
$("#onlinewrapper").toggle(1000);
});
});
$(document).ready(function() {
setInterval(function() {
$('#onlinecount').load('<?php echo $path; ?>/templ/counter.php') },2000); });
</script>


	
<script language="javascript" type="text/javascript">
jQuery(document).ready(function($){
$(document).ready(function(){

setInterval(function () {
$('#onlinewrapper').load('./templ/counter.php').fadeIn("slow");
}, 2000); // refresh every 10000 milliseconds


});

var body = $( 'body' );
});

</script>



</div>
</body>
</html>
