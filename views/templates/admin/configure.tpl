<form method="POST">
	<div class="panel">
		<div class="panel-heading">
			{l s='Configuration' mod='gradiadsense'}
		</div>
		<div class ="panel-body">

				<div class="form-group">
					<label for="Banner">{l s='URL de la Imagen del banner' mod='gradiadsense'}</label>
					<input type="input" class="form-control" id="Banner" name="Banner" value="{$GRADIADSENSE_STR_BANNER}" >
				</div>
				<div class="form-group">
					<label for="Descripcion">{l s='Descripción de la publicidad' mod='gradiadsense'}</label>
					<input type="text" name="Descripcion" id="Descripcion" class="form-control" value="{$GRADIADSENSE_STR_DESCRIPCION}" />
				</div>
				<div class="form-group">
					<label for="Titulo">{l s='Titulo de la publicidad' mod='gradiadsense'}</label>
					<input type="text" name="Titulo" id="Titulo" class="form-control" value="{$GRADIADSENSE_STR_TITULO}" />
				</div>
				<div class="form-group">
					<label for="Cta">{l s='CTA' mod='gradiadsense'}</label>
					<input type="text" name="Cta" id="Cta" class="form-control" value="{$GRADIADSENSE_STR_CTA}"/>
				</div>
				<div class="form-group">
					<label for="Url">{l s='URL' mod='gradiadsense'}</label>
					<input type="text" name="Url" id="Url" class="form-control" value="{$GRADIADSENSE_STR_URL}"/>
				</div>
				<div class="form-group">
					<label for="Switche"><input data-toggle="Switche" class="" id="Switche" data-inverse="false" type="checkbox" value="{$GRADIADSENSE_STR_SWICHE}" name="Switche" checked> Activar Publicidad</label>
				</div>
		</div>
		<div class ="panel-footer">
			<button type="submit" name="saveing" class="btn btn-default pull-right">
				<i class="process-icon-save"></i>
				{l s='Save' mod='gradiadsense'}
			</button>

		</div>
	</div>	
</form>