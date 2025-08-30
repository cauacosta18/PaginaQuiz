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
        $num_res_certas = 0;
        $num_questoes = 5;

        for ($i=1; $i <= $num_questoes; $i++) { 
            $res = $_POST["Q$i"];

            if ($i==1) {
                $res_certa = "B";
            } elseif ($i==2) {
                $res_certa = "B";
            } elseif ($i==3) {
                $res_certa = "C";
            } elseif ($i==4) {
                $res_certa = "C";
            } else {
                $res_certa = "D";
            }
            
            if ($res == $res_certa) {
                $num_res_certas++;
            }
        }

        $nota_total = $num_res_certas*( 10/$num_questoes);
    ?>
    <header>
      <h1>Quiz de Inglês</h1>
      <a href="index.php">Início</a>
    </header>
    <main>
        <section id="resultado">
            
            <div id="nota">
                <?php
                    echo ("
                        <h2>Nota final: $nota_total</h2>
                        <p>Acertos: $num_res_certas</p>
                        <p>Valor por questão: ".(10/$num_questoes)."</p>
                    ")
                ?>
                
                <a href="index.php">Voltar</a>
            </div>
            <div>
                <ul>
                    <li>
                        <details>
                            <summary>
                                1 &rpar; 
                                <?php
                                    $res = $_POST["Q1"];
                                    if ($res == "B") {
                                        echo ("
                                            &check;
                                        ");
                                    } else {
                                        echo ("
                                            X
                                        ");
                                    }
                                ?>
                            </summary>
                            <div class="details-content">
                                <p>Qual dos substantivos abaixo é contável em inglês?</p>
                                
                                <p>Advice</p>
                                <p class="res-certa">Person</p>
                                <p>Knowledge</p>
                                <p>Information</p>
                                
                            </div>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>2 &rpar;
                                <?php
                                    $res = $_POST["Q2"];
                                    if ($res == "B") {
                                        echo ("
                                            &check;
                                        ");
                                    } else {
                                        echo ("
                                            X
                                        ");
                                    }
                                ?>
                            </summary>
                            <div class="details-content">
                                <p>A palavra “people” (pessoas) é:</p>
                                
                                <p>Um substantivo incontável</p>
                                <p class="res-certa">A forma plural de "person"</p>
                                <p>Um adjetivo</p>
                                <p>Um verbo</p>
                                
                            </div>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>3 &rpar;
                                <?php
                                    $res = $_POST["Q3"];
                                    if ($res == "C") {
                                        echo ("
                                            &check;
                                        ");
                                    } else {
                                        echo ("
                                            X
                                        ");
                                    }
                                ?>
                            </summary>
                            <div class="details-content">
                                <p>Qual destas palavras é um substantivo incontável em inglês?</p>
                                
                                <p>Friend</p>
                                <p>Stranger</p>
                                <p class="res-certa">Advice</p>
                                <p>Teacher</p>
                                
                            </div>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>4 &rpar;
                                <?php
                                    $res = $_POST["Q4"];
                                    if ($res == "C") {
                                        echo ("
                                            &check;
                                        ");
                                    } else {
                                        echo ("
                                            X
                                        ");
                                    }
                                ?>
                            </summary>
                            <div class="details-content">
                                <p>Complete a frase corretamente: "You can't count ______, but you can count people."</p>

                                <p>Teachers</p>
                                <p>Friends</p>
                                <p class="res-certa">Advice</p>
                                <p>Children</p>
                                
                            </div>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>5 &rpar;
                                <?php
                                    $res = $_POST["Q5"];
                                    if ($res == "D") {
                                        echo ("
                                            &check;
                                        ");
                                    } else {
                                        echo ("
                                            X
                                        ");
                                    }
                                ?>
                            </summary>
                            <div class="details-content">
                                <p>Complete a frase com a melhor opção: We met many interesting ___ at the conference.</p>

                                <p>Informations</p>
                                <p>Peoples</p>
                                <p>Persons</p>
                                <p class="res-certa">People</p>
                                
                            </div>
                        </details>
                    </li>
                    
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