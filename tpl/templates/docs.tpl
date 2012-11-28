<h3>Доктора</h3>
<div id="content-side-docs-list">
	{if isset($docs)}
		{foreach from=$docs item=key}
			<a href="#doc" class="content-side-docs-list-link">{$key.caption}</a>
		{/foreach}
	{/if}
</div>	
