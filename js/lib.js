jQuery.fn.center = function (absolute) {
	return this.each(function () {
		var t = jQuery(this);

		t.css({
			position:	absolute ? 'absolute' : 'fixed', 
			left:		'50%', 
			top:		'50%', 
			zIndex:		'99'
		}).css({
			marginLeft:	'-' + (t.outerWidth() / 2) + 'px', 
			marginTop:	'-' + (t.outerHeight() / 2) + 'px'
		});

		if (absolute) {
			t.css({
				marginTop:	parseInt(t.css('marginTop'), 10) + jQuery(window).scrollTop(), 
				marginLeft:	parseInt(t.css('marginLeft'), 10) + jQuery(window).scrollLeft()
			});
		}
	});
};

var path = 'http://www.zarkin.com/';
var cargotod=false;

$(document).ready(function() {					   
						   
	$(".logo-dos a").click(function (e) { 
		e.preventDefault();
		var wher=$(this).attr("href");
			var widt=$(window).width();
			var hei=$(window).height();
			if($(".cole-thumbs").length){
				$(".cole-thumbs").fadeOut("slow",function(){
					$(".bgtop").show().animate({top:"-"+(hei/2)+"px"}, 1000, function() {});
					$(".bgbot").show().animate({bottom:(hei/2)+"px"}, 1000, function() {window.location=wher;});	
					});
			}else{
				$(".bgtop").show().animate({top:"-"+(hei/2)+"px"}, 1200, function() {});
				$(".bgbot").show().animate({bottom:(hei/2)+"px"}, 1000, function() {window.location=wher;});				
			}
			
	 });
	$(".updown").click(function (e) { 
		e.preventDefault();
		var wher=$(this).attr("href");
			var widt=$(window).width();
			var hei=$(window).height();
			if($(".cole-thumbs").length){
				$(".cole-thumbs").fadeOut("slow",function(){
					$(".bgtop").show().animate({top:"-"+(hei/2)+"px"}, 1000, function() {});
					$(".bgbot").show().animate({bottom:(hei/2)+"px"}, 1000, function() {window.location=wher;});	
					});
			}else{
				$(".bgtop").show().animate({top:"-"+(hei/2)+"px"}, 1200, function() {});
				$(".bgbot").show().animate({bottom:(hei/2)+"px"}, 1000, function() {window.location=wher;});				
			}
			
	 });
	$(".boton a, .boton-l a").click(function (e) { 
		e.preventDefault();
		$(this).hover().stop();
		var wher=$(this).attr("href");
			var widt=$(window).width();
			if($(".cole-thumbs").length){
				$(".cole-thumbs").fadeOut("slow",function(){
					$(".bgtop").show().animate({left:"-"+widt+"px"}, 1200, function() {});
					$(".bgbot").show().animate({left: widt+"px"}, 1200, function() {window.location=wher;});	
					});
			}else{
				$(".bgtop").show().animate({left:"-"+widt+"px"}, 1200, function() {});
				$(".bgbot").show().animate({left: widt+"px"}, 1200, function() {window.location=wher;});			
			}
			
	 });
	
	var wher = "coleccion/casual/parte1/bianca.jpg";
	 $(".next").click(function (e) { 
		e.preventDefault();
		
		/*if(){
			$('.flechaizq').show();
		}else{
			$('.flechaizq').hide();
		}*/
		
		//alert(nextfoto(wher));
		
		
		
		
		$(".nex").attr("href",nextfoto(wher));
		$(".pre").attr("href",prevfoto(wher));
				var widt=$(window).width();
				$(".bgtop").show().animate({left:"-"+widt+"px"}, 1200, function() {
					$("body").css("background-image","url("+path+"images/ajax-loader.gif)");
					$(".bgtop img").attr("src",wher);
					$('.bgtop').waitForImages(function() {
						
						$(".bgtop").show().animate({left: '0'}, 1200, function() {
							$("body").css("background-image","none");
							
							});
					});
				});
				$(".bgbot").show().animate({left: widt+"px"}, 1200, function() {
					
					$(".bgbot img").attr("src",wher);
					$('.bgbot').waitForImages(function() {
						$(".bgbot").show().animate({left: '0'}, 1200, function() {});
					});
				});
				wher=$(this).attr("href");
				
				// PARA OCULTAR LAS FLECHAS DE LA GALERIA
		
				if(wher == fotos[fotos.length-2]){
					$('.flechader').hide();
				}else{
					$('.flechader').show();	
				}
				
				if(wher == fotos[fotos.length-1]){
					$('.flechaizq').hide();
				}else{
					$('.flechaizq').show();	
				}
	 });
	$(".thumb a").click(function (e) { 
		e.preventDefault();
		var winw=$(window).width();
		var winh=$(window).height();
		var whers=$(this).attr("href");
		$(this).find("img").animate({
			top: '0px', 
			left: '0px', 
			width: (winw+500)+'px', 
			height: (winh+500)+'px',
			marginLeft:"-"+(winw/1.5)+"px",
			marginTop:"-"+(winh/1.5)+"px",
			opacity:"0"
		}, 200,function(){
			$(this).hide();
			window.location=whers;
			});
	 });
	
			var widt=$(window).width();
			$(".bgtop").css("left","-"+(widt+150)+"px");
			$(".bgbot").css("left",(widt+150)+"px");
			var winhs=$(window).height();
			var winh=$(window).height()/2;
			$(".bgbot img").css("top","-"+winh+"px");
	$('.black').waitForImages(function() {
		$("body").css("backgroundImage","none");
		$(".bgtop").show().animate({left: '0'}, 1200, function() {});
		$(".bgbot").show().animate({left: '0'}, 1200, function() {
			cargotod=true;
    		$(".idioma").fadeIn('slow');
			if($(".cole-thumbs").length){
				$(".cole-thumbs").center();
				$(".cole-thumbs").fadeIn("slow");
				}
			if($(".bienvenido").length){
				/*$(".barra").slideDown(function(){*/
					$(".bienvenido").slideDown(function(){
						
					});
				/*});*/
			}
			if($(".bienvenido").length){
				/*$(".barra").slideDown(function(){*/
					$(".bienvenido").slideDown(function(){
						if($('#scrollbar1').length){
							$('#scrollbar1').tinyscrollbar();
						}
					});
				/*});*/
			}
  		});

	});
	 
	 
	 $(window).resize(function() {
  			var winhs=$(window).height()/2;
			$(".bgbot img").css("top","-"+winhs+"px");
		});
	$(".out").click(function (e) { 
		var wher=$(this).attr("href");
	 	e.preventDefault();
		$(".idioma").fadeOut('slow',function(){
			var widt=$(window).width();
			$(".bgtop").show().animate({left:"-"+widt+"px"}, 1200, function() {});
			$(".bgbot").show().animate({left: widt+"px"}, 1200, function() {window.location=wher;});
			
			});
		
	 });
	 $(".thumb").hover(function() {
	$(this).css({'z-index' : '101'});
	$(this).find('img').addClass("hover").stop()
		.animate({
			marginTop: '-10px', 
			marginLeft: '-10px', 
			top: '50%', 
			left: '50%', 
			width: '160px', 
			height: '160px',
			padding: '0px'
		}, 200);
	} , function() {
	$(this).css({'z-index' : '0'});
	$(this).find('img').removeClass("hover").stop()
		.animate({
			marginTop: '0', 
			marginLeft: '0',
			top: '0', 
			left: '0', 
			width: '130px', 
			height: '130px', 
			padding: '0px'
		}, 400);
});
if($(".boton").length){
	$(".boton").hover(function () { 
		$(this).find("div.submenu").css("z-index","99").show();
		},function(){
		$(this).find("div.submenu").css("z-index","100").hide();
	 });
	}
	$(".out").hover(function () { 
		var te=$(this).html();
		$(this).shuffleLetters({"text":te});
		},function(){
		$(this).html(te);
	 });
	 $(".not").unbind('click');
});
function nextfoto(foto) { 
  	return fotos[($.inArray(foto, fotos) + 1) % fotos.length]; 
}
function prevfoto(foto) { 
  	return fotos[($.inArray(foto, fotos) - 1 + fotos.length) % fotos.length];
}

$(document).ready(function(){
	$('#flecha-izq').css('visibility','hidden');
	$('#flecha-der').click(function(){
		$(this).css('visibility','hidden');
		$('#tmb-estilos').animate({'position':'relative','left':'0px'},'500');
		$('#flecha-izq').removeAttr('style');
	})

	$('#flecha-izq').click(function(){
		$(this).css('visibility','hidden');
		$('#tmb-estilos').animate({'position':'relative','left':'-614px'},'500');
		$('#flecha-der').removeAttr('style');
	})
});

$(document).keydown(function(tecla){
	//derecha
    if (tecla.keyCode == 39) {
    	$('#flecha-der').css('visibility','hidden');
		$('#tmb-estilos').animate({'position':'relative','left':'0px'},'500');
		$('#flecha-izq').removeAttr('style');
    }

    //izquierda
    if (tecla.keyCode == 37) {
    	$('#flecha-izq').css('visibility','hidden');
		$('#tmb-estilos').animate({'position':'relative','left':'-614px'},'500');
		$('#flecha-der').removeAttr('style');
    }
});