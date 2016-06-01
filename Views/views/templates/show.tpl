{extends file ="./home.tpl"}
{block name="tableBody"}
    <table>
        <thead>
            <tr>
                <th class="th1">Table</th>
                <th class="th1" colspan="2">Action</th>
                <th class="th1">Lines</th>
                <th class="th1">Type</th>
                <th class="th1">Collation</th>
                <th class="th1">Size</th>
                <th class="th1">Loss</th>
            </tr>
        </thead>
        <tbody>
                {foreach $dbcol as $col}
                    <tr>
                        <td class="td1">{$col}</td>
                        <td class="td1"><span class="btn btn-default btnTable">Display</span></td>
                        <td class="td1"><span class="btn btn-default btnTable">Erase</span></td>
                        <td class="td1"></td>
                        <td class="td1"></td>
                        <td class="td1"></td>
                        <td class="td1"></td>
                        <td class="td1"></td>
                    </tr>
                {/foreach}
        </tbody>
        <tfoot>
            <tr>
                <td class="th1"><b>Tables</b></td>
                <td class="th1" colspan="2"><b>Sum</b></td>
                <td class="th1"><b></b></td>
                <td class="th1"><b>InnoDB</b></td>
                <td class="th1"><b>ut8-unicode_ci</b></td>
                <td class="th1"><b></b></td>
                <td class="th1"><b>Tables</b></td>
            </tr>
        </tfoot>
    </table>
{/block}