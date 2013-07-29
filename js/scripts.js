$(document).ready(function(){
	$("ul#articulos").sortable({ placeholder: "ui-state-highlight",opacity: 0.6, cursor: 'move', update: function() {
		var order = $(this).sortable("serialize");
		$.post("order.php", order, function(respuesta){
			$(".msg").html(respuesta).fadeIn("fast").fadeOut(2500);
		});
	}
});
	$('#imgLink').attr("disabled", true);

	$(".edit_link").click(function(){
		$('#imgLink').removeAttr("disabled");
	});


	$("#editLink").click(function(){
		var id = $("#getIdLink").val();
		var link = $("#imgLink").val();

		if(link == 0){
			alert("Debe seleccionar una imagen");
			return false;
		}

		$.ajax({
            url:"editLink.php",
            data:{"id":id,"link":link},
            type:"POST",
            success:
            	function(e){
            		alert("Link editado con éxito");
            	}
		}); //end ajax


	});

});

//funcion para ingregar el nombre de la img en el input de texto
function getLink(link,id){
           	//alert(link);
             $("#imgLink").val(link);
             $("#getIdLink").val(id);


}