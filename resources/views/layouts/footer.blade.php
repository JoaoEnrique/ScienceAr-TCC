<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>

    <style>
        footer{
            font-family: 'Poppins';
            color: #F6F6F6;
        }
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            background-color: #542066;
        }

        .footer-section {
            flex: 1;
            margin: 20px;
        }

        .footer-section h2, p, ul {
            margin-bottom: 10px;
        }

        .footer-section ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-section li {
            margin-bottom: 5px;
            list-style-type: none;
        }

        .footer-section a {
            text-decoration: none;
            color: #F6F6F6;
        }

        .footer-section a:hover {
            text-decoration: underline;
        }

        .menu {
            display: block;
        }

        .midia{
            display: flex;
        }
    </style>

</head>
<body>
    <footer>
        <div class="footer-content">
                <div class="footer-section">
                    <h4>Contato</h4>
                    <li>Endereço: Rua Sonho Gaúcho, 641</li>
                    <li>Telefone: (11) 2045-4000</li>
                    <li>E-mail: divciencias@gmail.com</li>
                </div>

                <div class="footer-section">
                    <h4>Baixe nosso APP:</h4>
                    <div style="text-align: center; margin-right: 53%">
                        <a target="_Blank" download="science_ar" href="https://drive.google.com/file/d/1GJ1jG3KB4xPZo4U7Baa3_yoyxNfCzZvk/view?usp=sharing">
                            <img src="{{asset('img/android.png')}}" height="80px" width="80px"><br>
                            Android
                        </a>
                    </div>
                </div>

                <div class="footer-section">
                    <h4>Menu</h4>
                    <ul class="menu">
                        <li class="menu-item"><a href="/augmented-reality">RA</a></li>
                        <li class="menu-item"><a href="/list-material">Material</a></li>
                        <li class="menu-item"><a href="/quiz">Quiz</a></li>
                        <li class="menu-item"><a href="/about">Sobre Nós</a></li>
                        <li class="menu-item"><a href="/quiz/progress">Meu progresso</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4>Desenvolvedores</h4>
                    <ul class="menu">
                        <li><a target="_BLANK" href="https://br.linkedin.com/in/jo%C3%A3oenrique">João Enrique Barbosa Santos Alves</a></li>
                        <li><a target="_BLANK" href="https://br.linkedin.com/in/j%C3%BAlia-dias-gon%C3%A7alves-411854211">Júlia da Silva Dias Gonçalves</a></li>
                        <li><a target="_BLANK" href="https://br.linkedin.com/in/sarah-jandozza-207347214">Sarah Jandozza Laurindo</a></li>
                    </ul>
                </div>
        </div>
    </footer>
</body>
</html>