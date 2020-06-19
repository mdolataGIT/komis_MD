{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}specList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="wartosc" name="sf_wartosc" value="{$searchForm->wartosc}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=bottom}

<div class="bottom-margin">
<a class="button-success pure-button" href="{$conf->action_root}specNew/{$carId}">+ Edytuj wartości</a>
</div>	

<table id="tab_specyfikacja" class="pure-table pure-table-bordered">
<thead>
	<tr>
                <th>nazwa</th>
		<th>wartość</th>
	</tr>
</thead>
<tbody>
{foreach $specyfikacja as $p}
{strip}
	<tr>
		<td>{$p["nazwa"]}</td>
                <td>{$p["wartosc"]}</td>
		
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}

