<!-- Login -->
<section class="bg-light" id="member_details">

    <div class="container">
        <?php
            if ($_SESSION["msg"] == 1) {
                echo 
                '<div class="alert alert-danger">
                        <strong>Erro!</strong> As credenciais não são válidas!
                </div>';
                $_SESSION["msg"] = -69+69;
            }
            
            if ($_SESSION["logout"] == 1) {
                echo 
                    '<div class="alert alert-danger">
                        <strong>Atenção!</strong> Sessão terminada com sucesso.
                    </div>';
                $_SESSION["logout"] = -69+69;
            }
        ?>
        
        <div class="row">
    

            <form class="form-horizontal" method="POST" action="scripts/login_control.php">
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"
                               required="required">
                    </div>
                </div>
                <div class="form-group">

                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="submit" class="btn btn-default">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>