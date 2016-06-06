{extends file ="./home.tpl"}
{block name="tableBody"}
    <form action="index.php?action=checkAddDB" method="post">
        <div class="col-md-12">
            <label for="newDB">Nouvelle Base de donnée :</label>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="newDB" class="form-control" placeholder="Donnez-lui un nom">
            </div>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btnConfirm">Valider</button>
        </div>
    </form>
{/block}