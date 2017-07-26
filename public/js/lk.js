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

	new Chartist.Pie('.ct-chart', {
	  series: [60, 40]
	}, {
	  donut: true,
	  donutWidth: 30,
	  donutSolid: true,
	  startAngle: 0,
	  showLabel: true
	});
});
