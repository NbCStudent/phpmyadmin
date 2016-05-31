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
                                Nouvelle base de données<br>
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
                                                {block name="tableBody"}
                                                <!--<table class="table1">
                                                    <thead class="thead1">
                                                        <tr class="tr1">
                                                            <th class="th1"></th>
                                                            <th class="th1">#</th>
                                                            <th class="th1">Nom</th>
                                                            <th class="th1">Type</th>
                                                            <th class="th1">Interclassement</th>
                                                            <th class="th1">Attributs</th>
                                                            <th class="th1">Null</th>
                                                            <th class="th1">Défaut</th>
                                                            <th class="th1">Extra</th>
                                                            <th class="th1">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbody1">
                                                        <tr class="tr1">
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                        <tr class="tr1">
                                                            <td class="td1">February</td>
                                                            <td class="td1">$80</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                        <tr class="tr1">
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                        <tr class="tr1">
                                                            <td class="td1">February</td>
                                                            <td class="td1">$80</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                        <tr class="tr1">
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                        <tr class="tr1">
                                                            <td class="td1">February</td>
                                                            <td class="td1">$80</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="tr1">
                                                            <td class="td1">Sum</td>
                                                            <td class="td1">$180</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                            <td class="td1">January</td>
                                                            <td class="td1">$100</td>
                                                        </tr>
                                                    </tfoot>
                                                </table>-->
                                                {/block}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="tableView2">
                                                <!--<table class="table2">
                                                    <thead class="thead2">
                                                    <tr class="tr2">
                                                        <th class="th2"></th>
                                                        <th class="th2">#</th>
                                                        <th class="th2">Nom</th>
                                                        <th class="th2">Type</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="tbody2">
                                                    <tr class="tr2">
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">February</td>
                                                        <td class="td2">$80</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">February</td>
                                                        <td class="td2">$80</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    <tr class="tr2">
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot class="tfoot2">
                                                    <tr class="tr2">
                                                        <td class="td2">Sum</td>
                                                        <td class="td2">$180</td>
                                                        <td class="td2">January</td>
                                                        <td class="td2">$100</td>
                                                    </tr>
                                                    </tfoot>
                                                </table>-->
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