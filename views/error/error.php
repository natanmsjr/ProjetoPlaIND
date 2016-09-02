<?php

    $sql = "SELECT * FROM users";
    $sql = $this->db->query($sql);
    
    if($sql->rowCount() > 0){
        $reg = $sql->fetch();
    }
?>

<div class="container">

        <div class="row">

            <div class="col-lg-12">

                <h2 class="page-header"><strong> 404 - Desculpe, página não encontrada!</strong></h2>

                <div class="text-justify">
                    <div class="col-lg-12">
                        <ol>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="#">A Plataforma</a></li>
                            <li><a href="/propriedade_industrial">Propriedade Industrial</a>
                                <ol>
                                    <li><a href="/propriedade_industrial/marca">Marca</a></li>
                                    <li><a href="/propriedade_industrial/desenho_industrial">Desenho Industrial</a></li>
                                    <li><a href="/propriedade_industrial/patente">Patente</a></li>
                                    <li><a href="/propriedade_industrial/software">Software</a></li>
                                </ol>
                            </li>
                            <li><a href="#">Institucional</a></li>
                            <li><a href="/contato">Contato</a></li>
                            <li><a href="/login">Login</a></li>
                        </ol>
                        
                    </div>
                </div>

            </div>
        </div>

    </div>