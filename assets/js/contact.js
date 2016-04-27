/**	CONTACT FORM
*************************************************** **/
var _hash = window.location.hash;

/**
	BROWSER HASH - from php/contact.php redirect!

	#alert_success 		= email sent
	#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
	#alert_mandatory	= email not sent - required fields empty
**/	jQuery(_hash).show();

var hash = window.location.hash,
	isSubmission = ( hash === '#alert_success' || hash === '#alert_failed' || hash === '#alert_mandatory' );

if (isSubmission) {
	$('#contact')[0].scrollIntoView();
}