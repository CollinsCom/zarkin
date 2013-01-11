// JavaScript Document

$(document).ready(

	function(){
		//Tienda
		$("#estadoT").change(function(){
			if($(this).val()!=""){
				var dato=$(this).val();
				$("#loader-garantia1").show();
				$.ajax({
					type:"POST",
					dataType:"html",
					url:"action.php",
					data:"idestado="+dato+"&tarea=listCiudad",
					success:function(msg){
						$("#ciudadT").empty().removeAttr("disabled").append(msg);
						$("#loader-garantia1").hide();
					}
				});
			}else{
				$("#ciudadT").empty().attr("disabled","disabled");
			}
		});

		//Cliente
		$("#estadoC").change(function(){
			if($(this).val()!=""){
				var dato=$(this).val();
				$("#loader-garantia2").show();
				$.ajax({
					type:"POST",
					dataType:"html",
					url:"action.php",
					data:"idestado="+dato+"&tarea=listCiudad",
					success:function(msg){
						$("#ciudadC").empty().removeAttr("disabled").append(msg);
						$("#loader-garantia2").hide();
					}
				});
			}else{
				$("#ciudadC").empty().attr("disabled","disabled");
			}			
		});
	});