<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduardo Barros de Souza</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="título">
            <h1>EduBarZa</h1>
        </div>
        <button class="menu-toggle">☰</button>
        <nav class="menu">
            <a href="#início">Início</a>
            <a href="#Sobre">Sobre mim </a>
            <a href="#novidades">novidades </a>
            <a href="#contato">contato </a>
        </nav>
    </header>
    
    <div id="início" class="início">
        <div class="content2">
        <h1>Bem vindo! Eu sou Eduardo Barros de Souza,</h1>
        <p>estudante do primeiro período de ciência da computação na Universidade Veiga de Almeida e assistente financeiro de profissão.</p>
        <p>E este é meu primeiro site!</p>
    </div>
    <div class="img1">
        <img src="img/foto 1 site.png" alt="foto minha">
    </div>
    </div>
    
    <div id="Sobre" class="texto1">
        <div class="content">
        <h1>Sobre mim</h1>
        <p>Sou Eduardo Barros, tenho 30 anos, sou neurodivergente, nascido e criado em São João de Meriti, Baixada Fluminense do Rio de Janeiro. Em 2026 fui selecionado pelo ProUni para o curso de ciência da computação na Universidade Veiga de Almeida, minha segunda vez no ensino superior. No passado cursei Licenciatura em História na Universidade Federal Rrural do Rio de Janeiro, mas ão conclui o curso. Minha vida profissional foi toda voltada para a área de administração, na parte financeira, função que exerço desde 2021, tendo passado por 3 empresas. A nova graduação tem objetivo de me empreender em uma nova carreira, sendo uma das motivações para aplicar os conhecimentos na empresa de minha família. A primeira etapa desse desenvolvimento é um site responsivo e moderno para o negócio.</p>
        <p>Interesses pessoais: música, sociologia, história, exercício físico e jogos</p>
        </div>
        <div class="links">
        <a href="https://www.instagram.com/hell.duardo/" target="_blank"> <i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/eduardo-barros-souza/" target="_blank"> <i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/Hell-duardo" target="_blank"> <i class="fab fa-github"></i></a>
    </div>
    </div>

    <div id="novidades" class="texto2">
        <div class="img2">
            <img src="img/foto 2 site.png" alt="logo bonappetit">
        </div>
        <div class="content2">
            <h1>Um início chamado Bonappetit</h1>
            <p>Meu primeiro projeto será construir um site para a empresa Bonappetit, uma empresa do ramo de alimentação, servindo café da manhã, almoços, lanches e doces artesanais. O negócio consiste em uma loja física localizada no campus Tijuca da Universidade Veiga de Almeida e em serviço de buffet e coffee break em todos os tipos de evento.</p>
            <p>Conteúdo:</p>
            <ul>
                <li> Barra de navegação com menu "hambúrguer" para mobile; </li>
                <li> Home com painéis de imagens-link para cupons e novidades sobre a loja;</li>
                <li> Informações completas sobre todos os serviços com imagens e vídeo;</li>
                <li> Informações sobre a loja (cardápio, localização, horário de funcionamento, links);</li>
                <li> Formulário de contato para solicitar serviço de buffet.</li>
                </ul>
        </div>

    </div>
    <div id="contato" class="Formulário">
        <h1>Vamos trabalhar juntos!</h1>
        <form action="enviar.php" method="POST">
        <div class="campo">    
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>
        </div>
        <div class="campo">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
        </div>
        <div class="campo">
            <label for="mensagem">Mensagem:</label><br>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea><br><br>
        </div>

            <button type="submit">Enviar</button>
        </form>
    </div>
    
<footer class="rodapé">
    &copy; Eduardo Barros de Souza - 2026 - AVA 1 Desenvolvimento Web UVA
</footer>
<script src="script.js"></script>
</body>
</html>