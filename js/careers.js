$(window).load(function() {
	if ($(window).width() > 980) {
		function setEqualHeight(columns) { 
			var tallestcolumn = 0;
			columns.each(function() {
				currentHeight = $(this).height();
				if(currentHeight > tallestcolumn) {
					tallestcolumn = currentHeight;
				}
			});
			columns.height(tallestcolumn);
		}
		$(document).ready(function() {
			setEqualHeight($(".ContentContainerThirds"));
			setEqualHeight($(".skillsItem"));
		});
		$(window).resize(function() {
			setEqualHeight($(".ContentContainerThirds"));
			setEqualHeight($(".skillsItem"));
		});
	} else if ($(window).width() <= 980 && $(window).width() > 480) {
		function setEqualHeight(columns) { 
			var tallestcolumn = 0;
			columns.each(function() {
				currentHeight = $(this).height();
				if(currentHeight > tallestcolumn) {
					tallestcolumn = currentHeight;
				}
			});
			columns.height(tallestcolumn);
		}
		$(document).ready(function() {
			setEqualHeight($(".skillsItem"));
		});
		$(window).resize(function() {
			setEqualHeight($(".skillsItem"));
		});
	}

/*    $('.submitButton').click(function(){
        $.ajax({
            type: "GET",
            url: "xml/careers.xml",
            dataType: "xml",
            success: parseXML
        });
    });
*/	
	$('.mobileNavContainer').hide();
	$('.menuButton').click(function(){
		if($('.mobileNavContainer').is(':hidden')){
			$('.mobileNavContainer').slideDown('fast',function(){});
		} else {
			$('.mobileNavContainer').slideUp('fast',function(){});
		}
	});
	$(window).resize(function(){
			$('.mobileNavContainer').slideUp('fast',function(){});
			
	});
});
/*function parseXML(xml){
    var searchFor = $('.formField').val();
    var reg = new RegExp(searchFor, "i");
    $(xml).find('entry').each(function(){
        var title = $(this).find('title').text();
        var titleSearch = title.search(reg);
        var desc = $(this).find('description').text();
        var descSearch = desc.search(reg);
		var length = xml.querySelectorAll("entry").length;
        $('#output').empty();
        if(titleSearch > -1){
			for(var i=0;i < length;i++){
				$('#output').append('Found <i>'+searchFor+'<\/i> in title: '+title.replace(reg, '<b>'+searchFor+'</b>')+'<br \/>');
				console.log(length);
			}
        }
        if(descSearch > -1){
            $('#output').append('Found <i>'+searchFor+'<\/i> in description: '+desc.replace(reg, '<b>'+searchFor+'</b>')+'<br \/>');
        }
    });    
}
*/
function showResult(str)
{
if (str.length==0)
  { 
  $("#livesearch").innerHTML="";
  $("#livesearch").style.border="10px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    $("#livesearch").innerHTML=xmlhttp.responseText;
    $("#livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","careers.php?q="+str,true);
xmlhttp.send();
}
//YOUTUBE VIDEO SIZE COVER
$(function() {

	// Find all YouTube videos
	var $allVideos = $("iframe[src^='http://www.youtube.com']"),

	    // The element that is fluid width
	    $fluidEl = $(".videoContainer");

	// Figure out and save aspect ratio for each video
	$allVideos.each(function() {

		$(this)
			.data('aspectRatio', this.height / this.width)
			
			// and remove the hard coded width/height
			.removeAttr('height')
			.removeAttr('width');

	});

	// When the window is resized
	// (You'll probably want to debounce this)
	$(window).resize(function() {

		var newWidth = $fluidEl.width();
		
		// Resize all videos according to their own aspect ratio
		$allVideos.each(function() {

			var $el = $(this);
			$el
				.width(newWidth)
				.height(newWidth * $el.data('aspectRatio'));

		});

	// Kick off one resize to fix all videos on page load
	}).resize();

});

//YOUTUBE POSTER IMAGE
$(function() { 
    var videos  = $(".video");
 
        videos.on("click", function(){
            var elm = $(this),
                conts   = elm.contents(),
                le      = conts.length,
                ifr     = null;
 
            for(var i = 0; i<le; i++){
              if(conts[i].nodeType == 8) ifr = conts[i].textContent;
            }
 
            elm.addClass("player").html(ifr);
            elm.off("click");
        });
});

if($(window).width() > 980){
			$(window).scroll(function() {
				  var scrolledY = $(window).scrollTop();
				  $('.careersBody').css('background-position', 'center ' + ((scrolledY*.14)) + 'px');
				});
}
// JavaScript Document