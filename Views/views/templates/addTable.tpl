{extends file ="./home.tpl"}
{block name="tableBody"}
    <h3>Base de donnée : {$dbname}</h3><br>
    <h4>Table : {$tableName}</h4>
    <form action="index.php?action=" method="post">
        <label for="newDB">Column: </label>
        <input type="text" name="newDB">
        <br>
        <input type="submit" value="valider">
    </form>
{/block}