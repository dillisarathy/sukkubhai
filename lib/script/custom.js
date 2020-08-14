$(document).ready(function(){
	setTimeout(function(){
		$('#cookieConsentContainer').find($('button')).click();
	},10000)
	setTimeout(function(){
		$('#biryani')[0].click();
	},10000);

	var options = {
		enableHighAccuracy: true,
		timeout: 50000,
		maximumAge: 0
	};
	
	function success(pos) {
		var crd = pos.coords;
		if($('#bh-sl-address'))
		{
			$('#bh-sl-address').val(`${crd.latitude} , ${crd.longitude}`);
		}
	}
	
	function error(err) {
		console.warn(`ERROR(${err.code}): ${err.message}`);
		$('#textOutlet').show();
	}
	navigator.geolocation.getCurrentPosition(success, error, options);
});

function submitAction()
{
	$('#formSuccess').show();
	$('#formContent').hide();
	$('#formButton').hide();
}