{extends file ="./home.tpl"}
{block name="tableBody"}
    <div class="col-md-12 informationTitle">
        <h4>Database : <b>{$dbname}</b></h4>
    </div>
    <div class="col-md-3 informationButton">
        <button id="aff_stat" class="btn btnConfirm" data-toggle="modal" data-target="#alert_aff_stat_bdd">Display statistics</button>
    </div>
    <div class="col-md-3 informationButton">
        <button id="aff_stat" class="btn btnConfirm" data-toggle="modal" data-target="#alert_rename_bdd">Rename</button>
    </div>
    <div class="col-md-9">
        <button id="btn_drop" class="btn btn-danger btnErase" data-toggle="modal" data-target="#alert_drop_bdd_comfirm">
            &nbsp;Erase</button>
    </div>
    <br>
    <!-- Modal Confirmation Drop BDD -->
    <div id="alert_drop_bdd_comfirm" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content modalColor">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Do you really want to erase <b>{$dbname}</b> ?</h4>
                </div>
                <div class="modal-body">
                    <!--<p>Confirmation suppression:&nbsp;</p>-->
                    <button type="button" class="btn btn-default btnErase" data-dismiss="modal">Cancel</button>
                    <a href="index.php?action=deleteBDD&db_name={$dbname}" class="btn btnConfirm">Confirmer</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Rename BDD -->
    <div id="alert_rename_bdd" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content modalColor">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Rename DATABASE: <b>{$dbname}</b> ?</h4>
                </div>
                <div class="modal-body">
                    <form action="index.php?action=renameDB" method="post">
                      <input type="hidden" value="{$dbname}" name="olddb">
                      <label for="newdb">New name:</label>
                      <input type="text" name="newdb">
                      <input type="submit" class="btn btnConfirm" value="Confirm">
                  </form>
                    <button type="button" class="btn btn-default btnErase" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Aff stat BDD -->
    <div id="alert_aff_stat_bdd" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content modalColor">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Some informations on : <b>{$dbname}</b></h4>
                </div>
                <div class="modal-body">
                    <table>
                        <thead>
                            <tr>
                                <th class="th1">Number of tables</th>
                                <th class="th1">Memory spacce</th>
                                <th class="th1">Creation date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="td1">{$dbstat.0.nb_table}</td>
                                <td class="td1">{$dbstat.0.sum_length}</td>
                                <td class="td1">{$dbstat.0.create_time}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btnConfirm" data-dismiss="modal">Cancel</button>
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
            </tr>
        </thead>
        <tbody>
                {foreach $dbcol as $col}
                    <tr>
                        <td class="td1">{$col.TABLE_NAME}</td>
                        <td class="td1"><a href="index.php?action=showTable&dbname={$dbname}&tableName={$col.TABLE_NAME}"
                                           class="btn btn-default btnDisplayTable">Display</a></td>
                        <td class="td1"><a href="index.php?action=deleteTable&tableName={$col.TABLE_NAME}&dbname={$dbname}" class="btn btn-default btnEraseTable">Erase</a></td>
                        <td class="td1">{$col.TABLE_ROWS}</td>
                        <td class="td1">{$col.TABLE_TYPE}</td>
                        <td class="td1">{$col.TABLE_COLLATION}</td>
                        <td class="td1">{$col.DATA_LENGTH}</td>
                    </tr>
                {/foreach}
        </tbody>
        <tfoot>
            <tr>
                <td class="th1"><b>Table</b></td>
                <td class="th1" colspan="2"><b>Action</b></td>
                <td class="th1"><b>Lines</b></td>
                <td class="th1"><b>Type</b></td>
                <td class="th1"><b>Collation</b></td>
                <td class="th1"><b>Size</b></td>
            </tr>
        </tfoot>
    </table>
{/if}
        <br>
        <form action="index.php?action=addTable" method="post">
            <div class="col-md-12 informationAddTable">
                <label for="tableName">Add one table :</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="tableName" class="form-control" placeholder="Name it">
                    <input type="hidden" name="DBname" value="{$dbname}">
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btnConfirm">Confirm</button>
            </div>
        </form>
{/block}
