/** External Links - Opens links in a new window - Add rel="external" to links **/

function externalLinks() { if (!document.getElementsByTagName) return; var anchors = document.getElementsByTagName("a"); for (var i=0; i<anchors.length; i++) { var anchor = anchors[i]; if (anchor.getAttribute("href") && anchor.getAttribute("rel") == "external") anchor.target = "_blank"; } } window.onload = externalLinks;

/** Background Gallery - Backstretch **/

$(function() { $.backstretch([ "images/backgrounds/1.jpg", "images/backgrounds/2.jpg" ], { fade: 750, duration: 5000 }); });
$(function() { var docHeight = $(document).height(); $(".backstretch").append("<div id='patternoverlay'></div>"); $("#patternoverlay").height(docHeight); });

/** Newsletter Signup Validation - http://www.spruce.it/noise/simple-ajax-contact-form/ **/

$(function() {
  $("#contact .sendbutton").click(function()
  {
	function validateEmail($email)
	{
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if( !emailReg.test( $email ) ) { return false; }
		else { return true; }
	}
	var email = $("#form_email").val();
    var dataString = '&email=' + email;
	if(email=='' || validateEmail(email)==false)
	{
		$('p.success').css({'display':'none'});
		$('#form_email').css({'border':'2px solid #B02B2C'});
	}
	else
	{
		$('#form_email').css({'border':'2px solid #99CC00'});
		$.ajax({ type: "POST", url: "mail.php", data: dataString, success: function(){ $('.success').fadeIn(1000); } });
		$("#form_email").val('');
	}
	return false;
  });
});

/** Latest Tweets **/

jQuery(function($){
	$("#filter").tweet({
		username: "google", /** change username **/
		count: 3, /** number of tweets **/
		filter: function(t){ return ! /^@\w+/.test(t.tweet_raw_text); }
	});
});

