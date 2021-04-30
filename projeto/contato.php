<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Junior Compra e Venda de Veículos</title>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>                                
    </head>
    <body>

    <?php
        include("topo.php");        
    ?>


        <div id='corpo'>
            <main>
                <h2>Fale Conosco</h2>
                <section class="caixa">
                    <fieldset>
                        <legend>Informe os seus dados a seguir:</legend>
                        <div class="row ">
                            <div class="col-lg-7 mx-auto">
                                <div class="card mt-2 mx-auto p-4 bg-light">
                                    <div class="card-body bg-light">
                                        <div class="container">
                                            <form action="recebe_dados.php" method="post">
                                                <div>
                                                    <label for="nome">Nome: </label>
                                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu Nome" required="required" data-error="Valid email is required.">
                                                </div>
                                                <div>
                                                    <label for="idade">Idade: </label>
                                                    <input type="text" name="idade" id="idade" class="form-control" placeholder="Sua Idade" required="required" data-error="Valid email is required.">
                                                </div>
                                                <div>
                                                    <label for="email">Email: </label>
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="Entre com seu Email" required="required" data-error="Valid email is required.">
                                                </div>
                                                <div>
                                                    <label for="cidade">Cidade: </label>
                                                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Sua Cidade" required="required" data-error="Valid email is required.">
                                                </div>
                                                <div>
                                                    <label for="estado">Estado: </label>
                                                    <select name="estado" id="estado" class="form-control" placeholder="Seu estado" required="required" data-error="Valid email is required.">
                                                        <option>Espírito Santo</option>
                                                        <option>Minas Gerais</option>
                                                        <option>São Paulo</option>
                                                        <option>Rio de Janeiro</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="mensagem">Mensagem:</label>
                                                    <textarea name="mensagem" id="mensagem"></textarea>
                                                </div>
                                                <div>
                                                    <button type="submit"  class="btn btn-success btn-send pt-2 btn-block ">Enviar</button>
                                                    <button type="reset"  class="btn btn-success btn-send pt-2 btn-block ">Limpar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </section>

                <section class="caixa">                                
                    <h3>Veja a localização da nossa empresa:</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7431.364893401971!2d-46.52344479754766!3d-21.363017328583833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2s!4v1600798676220!5m2!1spt-BR!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
                </section>

    

            </main>
        </div>

       
 


    </body>
</html>