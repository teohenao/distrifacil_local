<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$ing->idingreso}}">
	{{Form::Open(array('action'=>array('IngresoController@destroy',$ing->idingreso),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" 
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Cancelar Ingreso Al Inventario</h4>
			</div>
			<div class="modal-body">
				<p>Esta seguro que desea cancelar el ingreso al inventario</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
				<button type="submit" class="btn btn-primary">SI</button>
			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>