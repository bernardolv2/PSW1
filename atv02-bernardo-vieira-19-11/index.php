<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
<div id="imagem-esquerda">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC128Y9-TDPq-XwtCZCarGmgNHr0nEjtsNGg&s" alt="Logo esquerda">
</div>
<h1 id="titulo-form">FORMULÁRIO PSW</h1>
<div id="imagem-direita">
<img src="https://static.vecteezy.com/ti/vetor-gratis/p1/14932882-de-contorno-de-icone-de-verificacao-de-documento-papel-de-formulario-vetor.jpg" alt="Logo direita">
</div>
</header>
<nav>
<ul>
<li><a href="#home">Início</a></li>
<li><a href="#perfil">Perfil</a></li>
<li><a href="#news">Notícias</a></li>
<li><a href="#contact">Contato</a></li>
<li><a href="#about">Sobre</a></li>
</ul>
    </nav>
    <main>
 <div id="formulario">
<h2>CRIE UMA CONTA</h2>
<button onclick="alert('Insira seus dados')">SOBRE</button>
<form action="perfil.php" method="post">
<label for="nome">Digite seu nome:</label>
<input type="text" id="nome" name="nome" placeholder="Ex: Bernardo" required>

<label for="sobrenome">Digite seu sobrenome:</label>
<input type="text" id="sobrenome" name="sobrenome" placeholder="Ex: Vieira" required>

<label for="nascimento">Insira sua data de nascimento:</label>
<input type="date" id="nascimento" name="nascimento" required>

<label for="genero">Qual seu gênero?</label>
<select id="genero" name="genero">
<option value="masculino">Masculino</option>
<option value="feminino">Feminino</option>
<option value="nao-binario">Não Binário</option>
<option value="outro">Outro</option>
</select>

 <label for="telefone">Telefone:</label>
 <input type="tel" id="telefone" name="telefone" placeholder="Ex: 77981076782" pattern="[0-9]{11}" required>

<label for="numero">Número da casa:</label>
 <input type="number" id="numero" name="numero" placeholder="Ex: 129" required>

                <label for="bairro">Bairro:</label>
<input type="text" id="bairro" name="bairro" placeholder="Ex: Paraíso" required>

<label for="rua">Rua:</label>
 <input type="text" id="rua" name="rua" placeholder="Ex: Praça Gasparino" required>

<label for="email">E-mail:</label>
<input type="email" id="email" name="email" placeholder="Ex: exemplo@gmail.com" required>

 <label for="cep">CEP:</label>
<input type="text" id="cep" name="cep" placeholder="Ex: 12345-678" pattern="\d{5}-\d{3}" required>

<label for="cpf">CPF:</label>
 <input type="text" id="cpf" name="cpf" placeholder="Ex: 123.456.789-10" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>

<label for="senha">Nova senha:</label>
<input type="password" id="senha" name="senha" placeholder="Ex: senha123" required>

<label for="cor">Selecione sua cor favorita:</label>
<input type="color" id="cor" name="cor">

<label>Qual sua linguagem de programação preferida?</label>
<input type="checkbox" id="html" name="linguagem" value="html">
<label for="html">HTML</label>
<input type="checkbox" id="css" name="linguagem" value="css">
<label for="css">CSS</label>
<input type="checkbox" id="js" name="linguagem" value="javascript">
<label for="js">JavaScript</label>
<input type="checkbox" id="python" name="linguagem" value="python">
<label for="python">Python</label>

<label for="bio">Escreva uma auto-biografia sobre você:</label>
<textarea id="bio" name="bio" rows="4" placeholder="Ex: Sou Bernardo e gosto de futebol, história e matemática."></textarea>

<div>
<input type="submit" value="Enviar">
<input type="reset" value="Limpar">
</div>
</form>
</div>
</main>
<footer>
<p>&copy; 2024 - Bernardo Vieira Levi</p>
    </footer>
</body>
</html>
