$(document).ready(function(){

	$(".btn-detalle-pedido").on('click', function(e){
		e.preventDefault();

		var id_pedido = $(this).data('id');
        var path = $(this).data('path');
        var token = $(this).data('token');
        var modal_title = $(".modal-title");
        var modal_body = $(".modal-body");
        var loading = '<p><i class="fa fa-circle-o-notch fa-spin"></i> Cargando datos</p>';
        var table = $("#table-detalle-pedido tbody");
        var data = {'_token' : token, 'order_id' : id_pedido};

        modal_title.html('Detalle del Pedido: ' + id_pedido);
        table.html(loading);

        $.post(
        	path,
        	data,
        	function(data){
        		//console.log(response);
        		table.html("");

                for(var i=0; i<data.length; i++){

                    var fila = "<tr>";

                    fila += "<td>" + data[i].product.nombre + "</td>";
                    fila += "<td>$ " + parseFloat(data[i].precio).toFixed(2) + "</td>";
                    fila += "<td>" + parseInt(data[i].quantity) + "</td>";
                    fila += "<td>$ " + (parseFloat(data[i].quantity) * parseFloat(data[i].precio)).toFixed(2) + "</td>";
                    fila += "</tr>";

                    table.append(fila);
                }
        	},
        	'json'
        );

	});


});
