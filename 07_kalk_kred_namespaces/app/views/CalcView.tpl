{extends file="templates/main.tpl"}

{block name=kalk_kred}

<div class="pure-g">

	<div class="pure-u-1 form-box">
	  <div class="l-box">
		<h2>Oblicz ratę kredytu</h2>

		<form class="pure-form" action="{$conf->action_url}calcComputeView" method="post">
		  <input id="id_kwota"   type="text" name="kwota"   placeholder="Kwota"   value="{$form->kwota}" />
		  <input id="id_lata"    type="text" name="lata"    placeholder="Lata"    value="{$form->lata}" />
		  <input id="id_procent" type="text" name="procent" placeholder="Procent" value="{$form->procent}" />

		  <input type="submit" class="pure-button" value="Oblicz miesięczną ratę kredytu">
		</form>
	  </div>
	</div>

	<div class="results-container">

	{* wyświetlenie listy błędów, jeśli istnieją *}
	{if $msgs->isError()}
		<ol class="message-list error-list">
		{foreach $msgs->getErrors() as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}

	{if !$msgs->isError()}
		{if $msgs->isInfo()}
			<ol class="message-list info-list">
			{foreach $msgs->getInfos() as $msg}
			{strip}
				<li>{$msg}</li>
			{/strip}
			{/foreach}
			</ol>
		{/if}

		{if isset($result->result)}
			<div class="result">Miesięczna rata wynosi<br><span style="font-family: monospace; font-size: 2.5em;">{round($result->result, 2)} zł</span></div>
		{/if}
	{/if}
	</div>

</div>

{/block}