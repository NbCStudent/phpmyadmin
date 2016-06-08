<div class="container interface">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default interfaceColor">
                <div class="panel-body">
                    <div class="page-header">
                        <a href="index.php"><img class="logoPhpmyadmin" src="Asset/img/logoPhpmyadmin2.png" alt="logoPhpmyadmin"></a>
                    </div>
                    <div class="col-md-3">
                        <div class="jumbotron jumbotronColor">
                            <h3 class="titleJumbotron">Toolbox</h3>
                            <p class="titleJumbotron">
                                <a href="index.php"><i class="fa fa-home fa-lg iconJumbotron" aria-hidden="true"></i></a>
                                <a href="https://docs.phpmyadmin.net/en/latest/"><i class="fa fa-question fa-lg iconJumbotron" aria-hidden="true"></a></i>
                                <a href="http://dev.mysql.com/doc/refman/5.5/en/"><i class="fa fa-book fa-lg iconJumbotron" aria-hidden="true"></a></i>
                                <a href="#" id="page_refresh"><i class="fa fa-repeat fa-lg iconJumbotron" aria-hidden="true"></a></i>
                            </p>
                            <p class="bodyJumbotron">
                                <a class="linkJumbotron" href="index.php?action=addDB"><b>Create new database</b></a><br>
                                {foreach $dbnames as $dbname}
                                    <a class="linkJumbotron" href="index.php?action=showDB&db={$dbname}"><b>{$dbname}</b></a><br>
                                {/foreach}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default informationColor">
                            <div class="panel-body">
                                <div class="col-md-12">
                                <div class="tableView">
                                    {block name="tableBody"}
                                        <h1 class="informationMessage">WELCOME {$userName} !<h1>
                                    {/block}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
