<input type="text" name="{$id}[equal]" id="{$id}" class="searchString" value="{if $value.multi_like_and.0}{$value.multi_like_and.0|escape:'html'}{else}{$value.equal|escape:'html'}{/if}"/>

{if $useAutocomplete == 1}
	{include file='../field_types/search/autocomplete.tpl'}
{/if}