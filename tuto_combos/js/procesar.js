// JavaScript Document

$(document).ready(function(){
		$("#estado").change(function(){
			if($(this).val()!=""){
				var dato=$(this).val();
				$("#imgciudad").show();
				$.ajax({
					type:"POST",
					dataType:"html",
					url:"action.php",
					data:"idestado="+dato+"&tarea=listCiudad",
					success:function(msg){
						//alert(msg);
						$("#ciudad").empty().removeAttr("disabled").append(msg);
						$("#imgciudad").hide();
					}
				});
			}else{
				$("#ciudad").empty().attr("disabled","disabled");
			}
		});
	});