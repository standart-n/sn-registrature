<h3>Доктора</h3>
<div id="content-side-docs-list">
	{if isset($docs)}
		{foreach from=$docs item=key}
			<a href="#doc" data-doctor_id="{$key.id}" class="content-side-docs-list-link docs-list-link-normal">{$key.caption}</a>
		{/foreach}
	{/if}
</div>	
