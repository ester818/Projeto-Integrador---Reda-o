<?php

if(isset($_GET["email"]) && isset($_GET["senha"])) {
    $email = $_GET["email"];
    $senha = $_GET["senha"];

    if($email == "eu" && $senha == "eu") {
        $msg = "Usuario autenticado";
    }else{
        $msg = "Usuario ou senha inválidos";
    }
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Se torne um corretor</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Envie sua redação</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ser-corretor.html">Seja um corretor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-aluno" href = "login.html">Já sou aluno</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="hero">Quero ser um corretor</div>

<div class="container">
    <h2>Junte-se a nós como corretor!</h2>

    <p><strong>Função:</strong> Corrigir redações com atenção e responsabilidade.</p>

    <p><strong>Missão:</strong> Ajudar estudantes a evoluírem na escrita, com correções claras e comentários construtivos.</p>

    <p>Como corretor, você será peça-chave no desenvolvimento das habilidades de escrita dos nossos alunos. Seu trabalho vai além da correção: você vai orientar, sugerir e motivar quem está em busca de melhorar.</p>

    <p>Usamos cores para auxiliar na correção, como:</p>

    <p><span><conectivos>Azul: Geralmente indica conectivos e a organização do texto. </conectivos></span></p>
    <p><span><tese>Laranja: Pode sinalizar a tese (o ponto de vista) defendida no texto ou argumentos históricos. </tese></span></p>
    <p><spam><reper>Rosa: Frequentemente utilizada para marcar o repertório sociocultural do texto, sejam citações, fatos históricos ou dados. </reper></spam></p>
    <p><spam><erro>Vermelho: Pode ser usado para apontar erros gramaticais ou argumentos de teorias acadêmicas. </erro></spam></p>
    <p>Por que usar cores na correção?
      Mais didático: Torna a correção mais clara e fácil de entender para o estudante, que visualiza de forma imediata onde precisa melhorar. 
      Organização: Ajuda a identificar a estrutura da redação e a função de cada parte do texto. 
      Direcionamento: Cada cor foca em um aspecto específico, como gramática ou argumentação, para que o aluno possa se concentrar em uma área por vez. 
      </p>



    <h3>O que buscamos em você:</h3>
    <ul>
        <li>Facilidade com ferramentas digitais</li>
        <li>Comentários objetivos e úteis</li>
        <li>Boa comunicação com o público jovem</li>
    </ul>

    <h1>Cadastre-se para ser corretor</h1>

    <form action="ser-corretor.html" method="GET">
        <input name="email">
        <input name="senha" type="password" >
        <button type="submit">Logar</button>
    </form>

    <?php 
    if(isset($msg)) {
        echo "<h1>$msg</h1>";
    }
    ?>


</div>
</body>
</html>