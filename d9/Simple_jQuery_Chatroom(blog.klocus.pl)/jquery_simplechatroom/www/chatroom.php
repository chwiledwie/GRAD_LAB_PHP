<?php
require('chatconfig.php');
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>

<title>Simple jQuery Chatroom : AdvanceByDesign</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Author" content="AdvanceByDesign">

<script language="Javascript" type="text/Javascript" src="jquery.js"></script>
<script language="Javascript" type="text/Javascript">
<!--
var chat_username = "";
var chat_refresh = 0;
var last_update = 0;
var last_post = 0;
var post_delay = <?php echo $chat_timelimit; ?>;
var post_delay_comment = 0;

function chat_delay_update() {
	tmp = (new Date().getTime()/1000);
	if((last_post+post_delay)<tmp) {
		$("#id_chat_delay").css("display","none");
		$("#id_chat_send").removeAttr('disabled');
		clearInterval(post_delay_comment);
		return;
	}
	
	$("#id_chat_delay").html("You can post again in "+Math.round((last_post+post_delay)-tmp)+" seconds...");
}

function chat_update() {
	last_update = new Date().getTime();
	
	$.get("chatview.php", { lastfetch : last_update }, function(data) {
		$("#chat_text").html(data);
		$("#chat_text").scrollTop($("#chat_text").height()+$("#chat_text").scrollTop());
	});
}

function post_message() {
	if((last_post+post_delay)>=(new Date().getTime()/1000)) { return; }
	
	var chat_message = $("#id_chat_message").val();
	if(chat_message.length) {
		$.post("chatsend.php",{ username : chat_username, message : chat_message });
		$("#id_chat_message").val("");
	}
	
	$("#id_chat_send").attr('disabled','disabled');
	last_post = (new Date().getTime()/1000);
	post_delay_comment = window.setInterval('chat_delay_update();', 1000);
	chat_delay_update();
	$("#id_chat_delay").css("display","block");
}

$(function() {
	$("#chat_container").css("display","block");
	
	$("#id_chat_set_username").click(function() {
		var tmp = $("#id_chat_username").val();
		
		if(tmp.match(/^[a-z0-9_\-\s]{3,12}$/i)==null) {
			$("#id_chat_username").addClass("chat_bad_username");
		} else {
			$("#chat_form_username").css("display","none");
			$("#chat_form_message").css("display","block");
			chat_username = tmp;
			
			chat_refresh = window.setInterval('chat_update();', <?php echo $chat_refresh*1000; ?>);
			
			$("#id_chat_send").click(function() {
				post_message();
			});
			$("#id_chat_message").keypress(function(event) {
				if(event.which==13) {
					post_message();
				}
			});
		}
	});
});
// -->
</script>

<style type="text/css">
body {
	font-size:0.7em;
	font-family:Helvetica, Arial, sans-serif;
	color:#777777;
}
#chat_container {
	display:none;
	padding:5px;
	border:2px solid #DDDDDD;
	border-radius:8px;
	width:420px;
	text-align:left;
}
.chat_bad_username {
	border:3px solid #C00;
	
}
#id_chat_username {
	width:200px;
}
#id_chat_set_username {
	width:120px;
}
#chat_text {
	width:400px;
	height:150px;
	border:1px solid #CCC;
	padding:8px;
	overflow:auto;
}
#chat_form_message {
	display:none;
}
#id_chat_message {
	width:300px;
}
#id_chat_send {
	width:100px;
}

.chat_line { }
.chat_user {
	font-weight:bold;
	color:#CC0000;
	padding-right:8px;
}
#chat_noscript div {
	padding:10px;
	width:400px;
	border:2px solid #CC0000;
	background-color:#FFFFDD;
}
#id_chat_delay {
	display:none;
	font-weight:bold;
	color:#999999;
}
</style>
</head>

<body>

<noscript id="chat_noscript">
<div>Your browser must have Javascript enabled to use the chatroom.</div>
</noscript>
<center>
<div id="chat_container">
	<p><h1>Simple chat room</h1>
	Simple jQuery chat room.  This software is provided completely free by AdvanceByDesign!
	</p>
	<div id="chat_text">Please enter a username!</div>
	<div id="chat_form">
		<div id="chat_form_username">
			<input type="text" maxlength="12" id="id_chat_username">
			<input type="button" value="Set" id="id_chat_set_username">
			<p id="chat_form_bad_username">
				Your username can only contain letters, numbers, underscores, hyphens,
				and blank spaces, and must be between 3 and 12 characters in length.
			</p>
		</div>
		<div id="chat_form_message">
			<input type="text" id="id_chat_message" placeholder="Enter message here" maxlength="<?php echo $chat_maxline; ?>">
			<input type="button" id="id_chat_send" value="Send">
			
			<div id="id_chat_delay">
				Please wait before posting again...
			</div>
		</div>
	</div>
</div>
</center>

</body>
</html>