$(document).ready(function () {

	// just for the demos, avoids form submit
	jQuery.validator.setDefaults({
	  debug: true,
	  success: "valid"
	});
	var form = $( "#myform" );
	form.validate();

	$( "input[type=submit]" ).click(function() {
	  alert( "Valid: " + form.valid() );
	});
});