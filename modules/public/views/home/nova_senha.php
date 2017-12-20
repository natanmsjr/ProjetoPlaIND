    <div id="entrar">
        <!-- Conteúdo da página de Login -->
        <div class="container ">
                <div class="text-center">
                    <h4>Recupere sua senha</h4>
                </div>
                <form class="form-signin" method="POST" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="on" action="/">
                    <div class="form-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" autofocus="on" required>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" onclick="myFunctio()">
                        <span class="fa fa-edit"></span> Solicitar nova senha
                    </button>
                    <script>
                        function myFunction() {
                            alert("Sua solicitação foi atendida! Verifique seu e-mail!");
                        }
                    </script>
                </form>
            </div>
        </div>