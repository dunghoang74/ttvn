<input type="text" class="inputGeo {if $complexField}complexField{/if}" value="{$value|escape:'html'}" name="{if $complexField}{$complexField}[{$id}][{$complexStep}]{elseif $parentID}{$parentID}[{$id}]{else}{$id}{/if}" />