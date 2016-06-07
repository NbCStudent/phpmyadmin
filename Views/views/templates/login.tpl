{extends file ="./home.tpl"}

<div class="bodyLogin">
    <div class="modal show modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-center titleLogin">my-pma</h1>
                    <div class="modal-body">
                        <form class="form col-md-12 center-block" action="{{ path("login_check") }}" method="post">
                            <input class="form-control" type="hidden" name="_csrf_token" value="{{ csrf_token }}" />
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="_username" value="{{ last_username }}" required="required" placeholder="Pseudo">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" name="_password" required="required" placeholder="Mot de passe">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg btn-block btnLogin">Connexion</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
