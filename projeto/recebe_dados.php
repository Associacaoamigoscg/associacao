<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Junior Compra e Venda de Veículos</title>
        <link rel="stylesheet" href="estilo.css" type="text/css">
    </head>
    <body>

    <?php
        include("topo.php");        
    ?>


        <div id='corpo'>
            <main>
               <h1>Dados informados</h1>
               <?php
                    //Variáveis criadas para armazenar dados recebidos pelo formulário
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $cidade = $_POST['cidade'];
                    $uf = $_POST['estado'];
                    $msg = $_POST['mensagem'];
                    $idade_usuario = $_POST['idade'];
                    //Escrevendo as variáveis criadas com o conteúdo recebido pelo formulário
                    echo "Nome: " . $nome . "<br>";
                    echo "Idade: " . $idade_usuario . "<br>";
                    echo "E-mail:" . $email . "<br>";
                    echo "Cidade:" . $cidade . "<br>";
                    echo "Estado:" . $uf . "<br>";
                    echo "Mensagem:" . $msg . "<br>";
                    //Criando um vetor PHP para armazenar todas as variáveis
                    $contato = array("Nome" => $nome, "Idade" => $idade_usuario, "Email" => $email, "UF" => $uf, "cidade" => $cidade, "Mensagem" => $msg);
                    //Escrevendo o vetor PHP criado com todas as variáveis
                    echo "<hr> Vetor criado: <br>";
                    print_r($contato);                
                
                    //Verificar se o arquivo dados.json já existe
                    if(file_exists("dados.json")){
                        // se existe, extrai a informação do arquivo
                        $string = file_get_contents("dados.json");
                        // transformando o arquivo dados.json em um vetor PHP
                        $json = json_decode($string, true);
                    }
                
                    // Adicionando no vetor $json o vetor $contato com as variáveis recebidas pelo formulário
                    $json["contatos"][] = $contato;    
                
                    // abre o arquivo dados.json em modo de escrita
                    $fp = fopen('dados.json', 'w');
                    //Se der algum erro, entra neste if
                    if($fp == false){
                        print(error_get_last());
                    }
                    // escreve no arquivo em json
                    fwrite($fp, json_encode($json));
                    // fecha o arquivo
                    fclose($fp); 
               
               ?>
                <h3 style='text-align:center;'>Contato cadastrado com sucesso.</h3>
            </main>
        </div>

       
 


    </body>
</html>