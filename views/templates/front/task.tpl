{extends file='page.tpl'}
<form method="POST">
	<div class="panel">
		<div class="panel-heading">
			{l s='Configuration' mod='gradiadsense'}
		</div>
		<div class ="panel-body">
			{if isset($STR_BANNER)}
		    <div>
		        <div class="col-lg-3"></div>
		        <div>
		            <img src="/modules/gradiadsense/img/{$STR_BANNER}" class="img-thumbnail" width="400" />
		        </div>
		    </div>
		    {/if}


				<div class="form-group">
					<img src="{$STR_BANNER}" alt="">
				</div>
				<div class="form-group">
					<label for="Banner">{l s='Imagen del banner' mod='gradiadsense'}</label>
					<input type="file" class="form-control form-control-file" id="Banner" name="Banner" file="{$STR_BANNER}" >
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