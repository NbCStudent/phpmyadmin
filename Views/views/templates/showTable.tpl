{extends file ="./home.tpl"}
{block name="tableBody"}
    <table>
        <thead>
            <tr>
                {foreach $tableName as $tab key=key}
                    {foreach $tab as $test key=key1}
                        {if {$key} == 0}
                            <th class="th1">{$key1}</th>
                        {/if}
                    {/foreach}
                {/foreach}
            </tr>
        </thead>
        <tbody>
            {foreach $tableName as $tab key=key}
                <tr>
                    {foreach $tab as $test key=key1}
                        <td class="td1">{$test}</td>
                    {/foreach}
                </tr>
            {/foreach}
        </tbody>
    </table>
{/block}