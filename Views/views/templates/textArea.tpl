{extends file ="./home.tpl"}
{block name="tableBody"}

    <form class="form-group" action="index.php?action=userQuery" method="post">
        <textarea name="message" id="message" cols="40" rows="4" tabindex="80"></textarea>
        <br>
        <input type="reset" value="reset" class="btn btn-default btnErase">
        <input type="submit" value="run" class="btn btn-default btnConfirm">
    </form>

{/block}