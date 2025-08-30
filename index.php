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
      <h1>Quiz de Inglês</h1>
      <a href="index.php">Início</a>
    </header>
    <main>
      <h1>Substantivos Contáveis e Incontáveis</h1>
      <form action="recebedados.php" method="post">
        
        <div id="perguntas">

          <section class="pergunta" id="P1">
              <p>1 &rpar; Qual dos substantivos abaixo é contável em inglês?</p>
              <div class="grid">
                  <input type="radio" name="Q1" id="Q1A" value="A" required/>
                  <label for="Q1A" class="radio-button">Advice</label>
                  <input type="radio" name="Q1" id="Q1B" value="B" required/>
                  <label for="Q1B" class="radio-button">Person</label>
                  <input type="radio" name="Q1" id="Q1C" value="C" required/>
                  <label for="Q1C" class="radio-button">Knowledge</label>
                  <input type="radio" name="Q1" id="Q1D" value="D" required/>
                  <label for="Q1D" class="radio-button">Information</label>
              </div>
          </section>

          <section class="pergunta" id="P2">
              <p>2 &rpar; A palavra “people” (pessoas) é:</p>

              <div class="grid">
                  <input type="radio" name="Q2" id="Q2A" value="A" required/>
                  <label for="Q2A" class="radio-button">Um substantivo incontável</label>
                  <input type="radio" name="Q2" id="Q2B" value="B" required/>
                  <label for="Q2B" class="radio-button">A forma plural de "person"</label>
                  <input type="radio" name="Q2" id="Q2C" value="C" required/>
                  <label for="Q2C" class="radio-button">Um adjetivo</label>
                  <input type="radio" name="Q2" id="Q2D" value="D" required/>
                  <label for="Q2D" class="radio-button">Um verbo</label>
              </div>
          </section>

          <section class="pergunta" id="P3">
              <p>3 &rpar; Qual destas palavras é um substantivo incontável em inglês?</p>

              <div class="grid">
                  <input type="radio" name="Q3" id="Q3A" value="A" required/>
                  <label for="Q3A" class="radio-button">Friend</label>
                  <input type="radio" name="Q3" id="Q3B" value="B" required/>
                  <label for="Q3B" class="radio-button">Stranger</label>
                  <input type="radio" name="Q3" id="Q3C" value="C" required/>
                  <label for="Q3C" class="radio-button">Advice</label>
                  <input type="radio" name="Q3" id="Q3D" value="D" required/>
                  <label for="Q3D" class="radio-button">Teacher</label>
              </div>
          </section>

          <section class="pergunta" id="P4">
              <p>4 &rpar; Complete a frase corretamente: "You can't count ______, but you can count people."</p>

              <div class="grid">
                  <input type="radio" name="Q4" id="Q4A" value="A" required/>
                  <label for="Q4A" class="radio-button">Teachers</label>
                  <input type="radio" name="Q4" id="Q4B" value="B" required/>
                  <label for="Q4B" class="radio-button">Friends</label>
                  <input type="radio" name="Q4" id="Q4C" value="C" required/>
                  <label for="Q4C" class="radio-button">Advice</label>
                  <input type="radio" name="Q4" id="Q4D" value="D" required/>
                  <label for="Q4D" class="radio-button">Children</label>
              </div>
          </section>

          <section class="pergunta" id="P5">
              <p>5 &rpar; Complete a frase com a melhor opção: We met many interesting ___ at the conference.</p>

              <div class="grid">
                  <input type="radio" name="Q5" id="Q5A" value="A" required/>
                  <label for="Q5A" class="radio-button">Informations</label>
                  <input type="radio" name="Q5" id="Q5B" value="B" required/>
                  <label for="Q5B" class="radio-button">Peoples</label>
                  <input type="radio" name="Q5" id="Q5C" value="C" required/>
                  <label for="Q5C" class="radio-button">Persons</label>
                  <input type="radio" name="Q5" id="Q5D" value="D" required/>
                  <label for="Q5D" class="radio-button">People</label>
              </div>
          </section>

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
