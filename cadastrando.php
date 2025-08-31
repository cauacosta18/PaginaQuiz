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
        <h1>Bem vindo aos Quizzes</h1>
        <section class="pergunta">
            <h2>Cadastro de perguntas</h2>
            
            <form action="#perguntas" method="post" class="cadastro">
                <hr>
                <div class="campo">
                    <label for="nome-quiz">Título do quiz: </label>
                    <input type="text" class="input-texto" name="nome-quiz" id="nome-quiz" placeholder="Digite o título do seu quiz" required>
                </div>
                
                <div class="campo">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" class="input-texto" id="descricao" placeholder="Digite a descrição do seu quiz" required></textarea>
                </div>
                
                <div class="campo">
                    <label for="num-questoes">Número de questões: </label>
                    <input type="number" class="input-texto" name="num-questoes" id="num-questoes" min="1" placeholder="Número de questões" required>
                </div>
                
                <hr>
                <div class="grid">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Resetar">
                </div>
            </form>
        </section>
 
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num_questoes = $_POST["num-questoes"];
                $nome_quiz = $_POST["nome-quiz"];
                $descricao = $_POST["descricao"];

                echo <<<HTML
                    <form action='index.php' method='post' class='cadastro pergunta'>
                        <header>
                            <h3>Título: $nome_quiz</h3>
                            <p>Descrição: $descricao</p>
                            <p>N° questões: $num_questoes</p>
                        </header>
                        <div id='questoes'>
                HTML;

                for ($i = 1; $i <= $num_questoes; $i++) {
                    echo <<<HTML
                        <section>
                            <label for='nome-questao-$i'>Questão $i:</label>
                            <input type='text' class='input-texto' name='nome-questao-$i' id='nome-questao-$i' placeholder='Digite o título da questão' required>
                            
                            <label for='num-opcoes-$i'>Número de opções:</label>
                            <input type='number' class='input-texto' name='num-opcoes-$i' id='num-opcoes-$i' min='2' max='26' placeholder='Número de opções' required>

                            <div class='opcao'>
                                <div id='opcoes-container-$i' class='opcoes-container'></div>
                                <div id='opcoes-certas-$i' class='opcoes-certas'></div>
                            </div>

                        </section>
                    HTML;
                }

                echo <<<HTML
                        </div>
                        <div class='grid'>
                            <input type='submit' value='Enviar'>
                            <input type='reset' value='Resetar'>
                        </div>
                        <input name='num_questoes' value='$num_questoes' type='hidden'>
                        <input name='nome_quiz' value='$nome_quiz' type='hidden'>
                        <input name='descricao' value='$descricao' type='hidden'>
                    </form>
                HTML;
            }
        ?>

            
        
        
        



        
    </main>
    <footer>
      <h3>Contato</h3>
      <div>
          <p>Cauã Luiz Costa</p>
          <a id="insta" href="https://www.instagram.com/caua_costa18/?next=%2F" target="_blank">Instagram</a>
          <a id="linktree" href="https://linktr.ee/caua_costa" target="_blank">Linktr.ee</a>
      </div>
    </footer>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const letras = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        document.querySelectorAll('input[id^="num-opcoes-"]').forEach(input => {
            input.addEventListener('input', function () {
                const numOpcoes = parseInt(this.value);
                const index = this.id.split('-')[2]; // pega o número da questão

                const opcoesContainer = document.getElementById(`opcoes-container-${index}`);
                const respostaCertaContainer = document.getElementById(`opcoes-certas-${index}`);

                opcoesContainer.innerHTML = '';
                respostaCertaContainer.innerHTML = '';

                if (!isNaN(numOpcoes) && numOpcoes >= 2 && numOpcoes <= 26) {
                    for (let i = 0; i < numOpcoes; i++) {
                        const letra = letras[i];

                        // Input de texto para opção
                        const inputOpcao = document.createElement('input');
                        inputOpcao.type = 'text';
                        inputOpcao.name = `opcao-${letra}-${index}`;
                        inputOpcao.placeholder = letra;
                        inputOpcao.required = true;
                        inputOpcao.className = "input-texto";
                        opcoesContainer.appendChild(inputOpcao);

                        // Radio para resposta correta
                        const radio = document.createElement('input');
                        radio.type = 'radio';
                        radio.name = `resposta-certa-${index}`;
                        radio.value = letra;
                        radio.id = `resposta-${letra}-${index}`;
                        radio.required = true;

                        const label = document.createElement('label');
                        label.htmlFor = radio.id;
                        label.textContent = letra;
                        label.className = 'radio-button';

                        respostaCertaContainer.appendChild(radio);
                        respostaCertaContainer.appendChild(label);
                    }
                }
            });
        });
    });
    </script>
  </body>
</html>