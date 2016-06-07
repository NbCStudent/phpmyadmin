{extends file ="./home.tpl"}
{block name="tableBody"}
    <div class="col-md-6 titleAddTable">
        <h3>Database : {$dbname}</h3>
    </div>
    <div class="col-md-6">
        <h3>Table : {$tableName}</h3>
    </div>
    <div class="col-md-12">
        <form action="index.php?action=addTable" method="post">
            <div class="col-md-4">
                <label for="newColumn">Column :</label>
            </div>
            <div class="col-md-4">
                <label for="sel1">Type :</label>
            </div>
            <div class="col-md-4">
                <label>Create :</label>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" name="newColumn" class="form-control" placeholder="Name it">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <select class="form-control" id="sel1">
                        <option>INT</option>
                        <option>Varchar</option>
                        <option>Date</option>
                        <option>Text</option>
                    </select>
                </div>
            </div>
            <input type="hidden" name="tableName" value="{$tableName}">
            <input type="hidden" name ="bddName" value="{$dbname}">
            <div class="col-md-4">
                <button type="submit" class="btn btnConfirm">Confirm</button>
            </div>
        </form>
    </div>
{/block}
