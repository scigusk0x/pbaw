{if $msgs->isError()}
<div class="message-list error-list">
	<ol>
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
</div>
{/if}
{if $msgs->isInfo()}
<div class="message-list info-list">
	<ol>
	{foreach $msgs->getInfos() as $info}
	{strip}
		<li>{$info}</li>
	{/strip}
	{/foreach}
	</ol>
</div>
{/if}
