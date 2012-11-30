<h3>Свободное время</h3>
<div id="content-primary-table-list">
	{if isset($times)}
		{foreach from=$times item=key}
			<div class="content-primary-table-list-line">
				<div class="content-primary-table-list-time">{$key.time}</div>
				<div class="content-primary-table-list-status">{$key.sstatus}</div>
			</div>
		{/foreach}
	{/if}
</div>	
<div class="hidden">
	<input id="value-trunc_date" value="{$trunc_date}" type="hidden">
	<input id="value-doctor_id" value="{$doctor_id}" type="hidden">
</div>
