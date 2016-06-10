<!-- Home Page -->

<!-- Entire interface -->

<div class="container interface">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default interfaceColor">
                <div class="panel-body">
                    <div class="page-header">
                        <a href="index.php?action=logout" class="pull-right deconnectButton"><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
                        <a href="index.php"><img class="logoPhpmyadmin" src="Asset/img/logoPhpmyadmin2.png" alt="logoPhpmyadmin"></a>
                    </div>

                    <!-- Jumbotron - Left sidebar -->

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

                                <!-- Display the databases name -->

                                {foreach $dbnames as $dbname}
                                    <a class="linkJumbotron" href="index.php?action=showDB&db={$dbname}"><b>{$dbname}</b></a><br>
                                {/foreach}

                                <a class="linkJumbotron" href="index.php?action=userQuery"><b>Text Area</b></a>
                            </p>
                        </div>
                    </div>

                    <!-- Panel - Right section -->

                    <div class="col-md-9">
                        <div class="panel panel-default informationColor">
                            <div class="panel-body">
                                <div class="col-md-12">
                                <div class="tableView">

                                    <!-- Display the user name -->

                                    {block name="tableBody"}
                                        <h1 class="informationMessage">Welcome <span class="userColor">{$userName}</span> !<h1>
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
