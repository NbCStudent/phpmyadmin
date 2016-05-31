{extends file='home.tpl'}

{block name="tableBody"}
    {foreach $dbcol as $col}
        {$col}<br>
    {/foreach}
{/block}