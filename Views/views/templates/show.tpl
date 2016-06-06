{extends file ="./home.tpl"}
{block name="tableBody"}
    <div class="col-md-12">
        <h4>Base de donnée : {$dbname}</h4>
    </div>
    <div class="col-md-12">
        <button id="btn_drop" class="btn btn-danger btnErase" data-toggle="modal" data-target="#alert_drop_bdd_comfirm">
            &nbsp;Supprimer</button>
    </div>
    <br>
    <!-- Modal -->
    <div id="alert_drop_bdd_comfirm" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Voulez-vous réellement supprimer la base {$dbname} ?</h4>
                </div>
                <div class="modal-body">
                    <!--<p>Confirmation suppression:&nbsp;</p>-->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <a href="index.php?action=deleteBDD&db_name={$dbname}" class="btn btnConfirm">Confirmer</a>
                </div>
            </div>

        </div>
    </div>
    {if $dbcol}
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
        {else}
        <br><br>
        <form action="index.php?action=addTable" method="post">
            <div class="col-md-12">
                <label for="tableName">Ajouter une table :</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="tableName" class="form-control" placeholder="Donnez-lui un nom">
                    <input type="hidden" name="DBname" value="{$dbname}">
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btnConfirm">Valider</button>
            </div>
        </form>
    {/if}
{/block}
