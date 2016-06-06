{extends file ="./home.tpl"}
{block name="tableBody"}
    <h4>Base de donnée : {$dbname}</h4>
    <button id="btn_drop" class="btn btn-danger" data-toggle="modal" data-target="#alert_drop_bdd_comfirm"><i class="glyphicon glyphicon-remove"></i>&nbsp;Suprimer</button>
    <br>
    <!-- Modal -->
    <div id="alert_drop_bdd_comfirm" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirmation Suppression Base de donnée : {$dbname}</h4>
                </div>
                <div class="modal-body">
                    <p>Confirmation suppression:&nbsp;</p>
                    <a href="index.php?action=deleteBDD&db_name={$dbname}" class="btn btn-success">Valider</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
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
            Ajouter une table :
            <form action="index.php?action=addTable" method="post">
                <label for="tablename">Nom : </label>
                <input type="text" name="tablename">
                <input type="hidden" name="DBname" value="{$dbname}">
                <input type="submit" value="valider">
            </form>
{/block}
