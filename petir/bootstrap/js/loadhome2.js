$(document).ready(function()
{
	window.onload = Loadslider();
	
	$("li.DPDLink").click(function(){LoadDPDLink();});
});

function loading(){
	$(".panel-body1").html();
	 $(".panel-body1").hide();
	 $(".panel-body1").fadeIn("slow");
};

function Loadslider(){loading();$(".panel-body1").load('data/main.php');};
function LoadDPDLink(){loading();$(".panel-body1").load('data/ListData.php');};