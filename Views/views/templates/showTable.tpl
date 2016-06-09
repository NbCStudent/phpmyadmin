{extends file ="./home.tpl"}
{block name="tableBody"}
    <div class="col-md-12 informationTitle">
        <h4>Table : <b>{$tableName}</b></h4>
        <a href="#null"  id="previousPage"><i class="fa fa-arrow-left fa-lg returnButton" aria-hidden="true"> </i></a>
    </div>
    <table>
        <thead>
            <tr>
                {foreach $tableResult as $tab key=key}
                    {foreach $tab as $test key=key1}
                        {if {$key} == 0}
                            <th class="th1">{$key1}</th>
                        {/if}
                    {/foreach}
                {/foreach}
            </tr>
        </thead>
        <tbody>
            {foreach $tableResult as $tab key=key}
                <tr>
                    {foreach $tab as $test key=key1}
                        <td class="td1">{$test}</td>
                    {/foreach}
                </tr>
            {/foreach}
        </tbody>
    </table>
{/block}