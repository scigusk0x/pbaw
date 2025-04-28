{extends file="main.tpl"}

{block name=res_list}

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>kwota</th>
		<th>lata</th>
		<th>procent</th>
		<th>data</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
{foreach $records as $r}
{strip}
	<tr>
		<td>{$r["kwota"]}</td>
		<td>{$r["lata"]}</td>
		<td>{$r["procent"]}</td>
        <td>{$r["data"]}</td>
		<td>
			<a class="button-small pure-button button-warning" href="{$conf->action_url}resDelete&id={$r['idres']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}