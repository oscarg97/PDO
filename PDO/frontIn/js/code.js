$(document).ready(ini);
function ini(){
	$("#btnRegistrar").click(enviarDatos);
}
function enviarDatos(){
	var user = $("#usr").val();
	var pss = $("#pwd").val();
	$.ajax({
		url:"registrar2.php",
		success:function(result){
			if(result == "Guardado"){
				$("#nick").html("Pene");
			}else{
				$("#result1").html("Un campo no esta completo");
			}
		},
		data:{
			usr:user,
			pass:pss
		},
		type:"GET"
	});
}