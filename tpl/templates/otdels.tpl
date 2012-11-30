<h3>Отделы</h3>
<div id="content-side-otdels-list">
	{if isset($otdels)}
		{foreach from=$otdels item=key}
			<a href="#doc" data-otdel_id="{$key.id}" class="content-side-otdels-list-link otdels-list-link-normal">{$key.caption}</a>
		{/foreach}
	{/if}
</div>	
