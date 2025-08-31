<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Inglês</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/resultado.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        $letras = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
        $num_res_certas = 0;
        $num_questoes = $_POST["num-questoes"];
        $nome_quiz = $_POST["nome-quiz"];
        $descricao = $_POST["descricao"];

        for ($i=1; $i <= $num_questoes; $i++) { 
            $res = $_POST["Q$i"];
            $res_certa = $_POST["resposta-certa-$i"];

            if ($res == $res_certa) {
                $num_res_certas++;
            } else {
            }
        }

        $nota_total = $num_res_certas*(10/$num_questoes);
        $nota_total = round($nota_total,1);
    ?>
    <header>
      <h1>Quiz</h1>
      <a href="cadastrando.php">Início</a>
    </header>
    <main>
        <section id="resultado">
            
            <div id="nota">
                <?php
                    $valor_questão = round((10/$num_questoes),1);

                    echo <<<HTML
                        <h2>Nota final: $nota_total</h2>
                        <p>Acertos: $num_res_certas</p>
                        <p>Valor por questão: $valor_questão</p>

                        <form action='index.php' method='post'>
                            <input type='hidden' name='nome_quiz' value='$nome_quiz'>
                            <input type='hidden' name='num_questoes' value='$num_questoes'>
                            <input type='hidden' name='descricao' value='$descricao'>
                    HTML;
                    
                    for ($i=1; $i <= $num_questoes; $i++) {
                        $nome_questao = $_POST["nome-questao-$i"];
                        $num_opcoes = $_POST["num-opcoes-$i"];
                        $resposta_certa = $_POST["resposta-certa-$i"];

                        echo <<<HTML
                            <input type='hidden' name='nome-questao-$i' value='$nome_questao'>
                            <input type='hidden' name='num-opcoes-$i' value='$num_opcoes'>
                            <input type='hidden' name='resposta-certa-$i' value='$resposta_certa'>
                        HTML;

                        for ($a=0; $a < $num_opcoes; $a++) { 

                            $letra = $letras[$a];
                            $nome_opcao = $_POST["nome-$letra-$i"];

                            echo <<<HTML
                                <input type='hidden' name='opcao-$letra-$i' value='$nome_opcao'>
                            HTML;
                        }
                    }

                    echo <<<HTML
                        <input type='submit' value='Refazer'>
                        </form>
                    HTML;
                ?>
            </div>
            <div>
                <ul>
                    <?php
                        for ($i=1; $i <= $num_questoes; $i++) {
                            $res = $_POST["Q$i"];
                            $res_certa = $_POST["resposta-certa-$i"];
                            $nome_questao = $_POST["nome-questao-$i"];
                            $num_opcoes = $_POST["num-opcoes-$i"];

                            echo <<<HTML
                                <li>
                                    <details>
                                        <summary>
                                            $i &rpar; 
                            HTML;

                            if ($res == $res_certa) {
                                echo <<<HTML
                                    &check;
                                HTML;
                            } else {
                                echo <<<HTML
                                    X
                                HTML;
                            }
                            echo <<<HTML
                                </summary>
                                <div class='details-content'>
                                <p>$nome_questao</p>
                            HTML;
                            

                            for ($a=0; $a < $num_opcoes; $a++) { 
                                $letra = $letras[$a];
                                $nome_opcao = $_POST["nome-$letra-$i"];

                                if ($res_certa == $letra and $res_certa == $res) {
                                    echo <<<HTML
                                        <p class='res-certa res-escolhida'>$nome_opcao &check;</p>
                                    HTML;
                                } else if ($res_certa == $letra) {
                                    echo <<<HTML
                                        <p class='res-certa'> $nome_opcao </p>
                                    HTML;
                                } else if ($res == $letra){
                                    echo <<<HTML
                                        <p class='res-escolhida'>$nome_opcao X</p>
                                    HTML;
                                } else {
                                    echo <<<HTML
                                        <p> $nome_opcao </p>
                                    HTML;
                                }
                                
                            }

                            echo <<<HTML
                                    </div>
                                </details>
                            </li>
                            HTML;

                        }
                    ?> 
                </ul>
            </div>
            
        </section>
    </main>
    <footer>
        <h3>Contato</h3>
      <div>
          <p>Cauã Luiz Costa</p>
          <a id="insta" href="https://www.instagram.com/caua_costa18/?next=%2F" target="_blank">Instagram</a>
          <a id="linktree" href="https://linktr.ee/caua_costa" target="_blank">Linktr.ee</a>
      </div>
    </footer>
</body>
</html>