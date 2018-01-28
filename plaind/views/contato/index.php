    <!-- Página de contato -->
    <div class="container">
        
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <br>
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/"><span class="fa fa-home"></span></a></li>
                    <li class="active">Contato</li>
                </ol>
            </div>
        </div>
        
        <!-- conteúdo da página -->
        <div class="row">
            <div class="col-md-12">
                <div class="column-title">
                     <h3>Envie-nos uma mensagem</h3>
                </div>
                <form name="sentMessage" id="contactForm" class="form-signin" method="POST" accept-charset="UTF-8" action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Nome" required pattern="[A-Za-z]+$" />
                        <input type="tel" class="form-control" id="phone" placeholder="Telefone" required pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" />
                        <input type="email" class="form-control" id="email" placeholder="E-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                        <textarea rows="10" cols="100" class="form-control" id="message" placeholder="Mensagem" maxlength="999" style="resize:none" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>