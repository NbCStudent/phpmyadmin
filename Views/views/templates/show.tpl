{extends file ="./home.tpl"}
{block name="tableBody"}
    {foreach $dbcol as $col}
        {$col}
    {/foreach}
{/block}