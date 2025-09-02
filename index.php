<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atividade Inglês</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <header>
      <h1>Quiz</h1>
      <a href="cadastrando.php">Início</a>
    </header>
    <main>    
      <?php
        $letras = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

        $nome_quiz = $_POST["nome_quiz"];
        $num_questoes = $_POST["num_questoes"];
        $descricao = $_POST["descricao"];

        echo <<<HTML
          <h1 id="titulo-quiz">$nome_quiz</h1>
          <form action="recebedados.php" method="post">
          <div id="perguntas">
        HTML;

        for ($i=1; $i <= $num_questoes; $i++) {
          $nome_questao = $_POST["nome-questao-$i"];
          $num_opcoes = $_POST["num-opcoes-$i"];
          $resposta_certa = $_POST["resposta-certa-$i"];

          echo <<<HTML
            <section class='pergunta' id='P$i'>
              <p>$i &rpar; $nome_questao</p>
              <div class='grid'>
          HTML;

          for ($a=0; $a < $num_opcoes; $a++) { 

            $letra = $letras[$a];
            $nome_opcao = $_POST["opcao-$letra-$i"];
            
            echo <<<HTML
              <input type='radio' name='Q$i' id='Q$i$letra' value='$letra' required/>
              <label for='Q$i$letra' class='radio-button'>$nome_opcao</label>
              <input name='resposta-certa-$i' value='$resposta_certa' hidden>
              <input name='nome-questao-$i' value='$nome_questao' hidden>
              <input name='num-opcoes-$i' value='$num_opcoes' hidden>
              <input name='nome-quiz' value='$nome_quiz' hidden>
              <input name='num-questoes' value='$num_questoes' hidden>
              <input name='descricao' value='$descricao' hidden>
              <input name='nome-$letra-$i' value='$nome_opcao' hidden>
            HTML;
          }
          echo <<<HTML
              </div>
            </section>
          HTML;
        }
      ?>
        </div>
        <div class="grid">
          <input type="submit" value="Enviar" />
          <input type="reset" value="Resetar" />
        </div>
      </form>
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
