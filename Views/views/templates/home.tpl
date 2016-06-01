<div class="container interface">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="page-header">
                        <img class="logoPhpmyadmin" src="Asset/img/logoPhpmyadmin.png" alt="logoPhpmyadmin">
                    </div>
                    <div class="col-md-3">
                        <div class="jumbotron">
                            <h3 class="titleJumbotron">Accueil</h3>
                            <p class="titleJumbotron">
                                <a href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
                                <a href="/phpMyAdmin/doc/html/index.html"><i class="fa fa-question" aria-hidden="true"></a></i>
                                <a href="http://dev.mysql.com/doc/refman/5.5/en/"><i class="fa fa-book" aria-hidden="true"></a></i>
                                <a href="#"><i class="fa fa-repeat" aria-hidden="true"></a></i>
                            </p>
                            <p class="bodyJumbotron">
                                <a href="index.php?action=addDB&cr={$dbadd}">Nouvelle base de données</a><br>
                                {foreach $dbnames as $dbname}
                                    <a href="index.php?action=showDB&db={$dbname}">{$dbname}</a><br>
                                {/foreach}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="tableView">
                                                {block name="tableBody"}{/block}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="tableView2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>