$(document).ready(function()
{
	var $_GET = {};

	document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
		function decode(s) {
			return decodeURIComponent(s.split("+").join(" "));
		}
	
		$_GET[decode(arguments[1])] = decode(arguments[2]);
	});
	
	if ( $_GET['Panel'] == 1 )
	{ window.onload = LoadDPDLink(); }
	else 
	{ window.onload = Loadslider(); }
	
	$("li.DPDLink").click(function(){LoadDPDLink();});
});

function loading(){
	$(".panel-body1").html();
	 $(".panel-body1").hide();
	 $(".panel-body1").fadeIn("slow");
};

function Loadslider(){loading();$(".panel-body1").load('data/main.php');};
function LoadDPDLink(){loading();$(".panel-body1").load('data/ListData.php');};