<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo Digital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="main">
    <?php
        // Variáveis
        $nome = "Hiago";
        $sobrenome = "Assunção";
        $idade = 26;
        $experience = "Atualmente estudo desenvolvimento em front-end e Programação Web";
        $objetivo = "Ingressar na área";

        // Constante
        define("Cargo", "Desenvolvedor Front-end");

        echo "<h1>Currículo Digital</h1>";
        echo "<p><b>Nome:</b> $nome $sobrenome</p>";
        echo "<p><b>Idade:</b> $idade anos</p>";
        echo "<p><b>Endereço:</b> Rua Paulo Jackson, Cabula. Salvador, Bahia, Brasil.</p>";
        echo "<p><b>Cargo:</b> ". Cargo .".</p>";
        echo "<p><b>Experiência:</b> $experience</p>";
        echo "<p><b>Objetivo:</b> $objetivo </p>";

    ?>
   </div> 
   <div class="tabela">
    <?php
        echo "<h2>Informações do Servidor</h2>";
        echo "<table>";
        echo "<tr><th>Variável</th><th>Tipo</th><th>Tamanho</th></tr>";
        echo "<tr><td>Nome</td><td>" . gettype($nome) . "</td><td>" . strlen($nome) . "</td></tr>";
        echo "<tr><td>Idade</td><td>" . gettype($idade) . "</td><td>x</td></tr>";
        echo "<tr><td>Cargo</td><td>Constante</td><td>" . strlen(Cargo) . "</td></tr>";
        echo "</table>";
    ?>
   </div>
   <div class="info">
    <?php
         echo "<h2>Informações do PHP</h2>";
         phpinfo();
    ?>
   </div>
</body>
</html>