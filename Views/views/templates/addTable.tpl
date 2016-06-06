{extends file ="./home.tpl"}
{block name="tableBody"}
    <h3>Base de donnée : {$dbname}</h3><br>
    <h4>Table : {$tableName}</h4>
    <form action="index.php?action=valdationTable" method="post">
        <label for="newDB">Column: </label>
        <input type="text" name="newColum">
        <select name="option">
          <option value="int">INT</option>
          <option value="varchar">Varchar</option>
          <option value="date">Date</option>
          <option value="text">Text</option>
        </select>
        <input type="hidden" name="tableName" value="{$tableName}">
        <input type="hidden" name ="bddName" value="{$dbname}">
        <br>
        <input type="submit" value="valider">
    </form>
{/block}
