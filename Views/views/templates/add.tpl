{extends file ="./home.tpl"}
{block name="tableBody"}
    <form action="index.php?action=checkAddDB" method="post">
        <label for="newDB">Nouvelle Base de donnée :</label>
        <input type="text" name="newDB">
        <br>
        <input type="submit" value="valider">
    </form>
{/block}