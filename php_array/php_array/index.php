<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Joias</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Menu principal */
        .menu, .submenu, .subsubmenu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu {
            background-color: #333;
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Para telas pequenas */
        }

        .menu li {
            position: relative;
        }

        .menu a {
            text-decoration: none;
            color: white;
            padding: 15px 20px;
            display: block;
            transition: background-color 0.3s;
        }

        .menu a:hover {
            background-color: #555;
        }

        /* Submenu */
        .submenu, .subsubmenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #444;
            min-width: 200px; /* Largura mínima para submenus */
        }

        .subsubmenu {
            left: 100%;
            top: 0;
        }

        /* Mostrar submenu ao passar o mouse */
        .menu li:hover > .submenu,
        .submenu li:hover > .subsubmenu {
            display: block;
        }

        /* Menu responsivo */
        .menu-icon {
            display: none;
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            background-color: #333;
            color: white;
            text-align: center;
        }

        @media (max-width: 768px) {
            .menu {
                display: none;
                flex-direction: column;
                background-color: #333;
            }

            .menu.active {
                display: flex;
            }

            .menu-icon {
                display: block;
            }

            .submenu, .subsubmenu {
                position: static;
                display: none;
                background-color: #555;
            }

            .menu li:hover > .submenu,
            .submenu li:hover > .subsubmenu {
                display: block;
            }
        }
    </style>
</head>
<body>
    <!-- Ícone do menu de hambúrguer para mobile -->
    <div class="menu-icon" onclick="toggleMenu()">☰</div>

    <?php
        $menu = array(
            "Home" => "index.php",
            "Categorias" => array(
                "Anéis" => array(
                    "Ouro" => "anel_ouro.php",
                    "Prata" => "anel_prata.php",
                    "Diamante" => "anel_diamante.php",
                ),
                "Brincos" => array(
                    "Ouro" => "brinco_ouro.php",
                    "Prata" => "brinco_prata.php",
                    "Diamante" => "brinco_diamante.php",
                ),
                "Colares e Pingentes" => array(
                    "Ouro" => "colar_ouro.php",
                    "Prata" => "colar_prata.php",
                    "Diamante" => "colar_diamante.php",
                ),
                "Pulseiras" => array(
                    "Ouro" => "pulseira_ouro.php",
                    "Prata" => "pulseira_prata.php",
                    "Diamante" => "pulseira_diamante.php",
                ),
                "Tiaras" => array(
                    "Ouro" => "tiara_ouro.php",
                    "Prata" => "tiara_prata.php",
                    "Diamante" => "tiara_diamante.php",
                )
            ),
            "Promoções" => "promocoes.php",
            "Contato" => "contato.php"
        );

        function exibirMenu($menu) {
            echo "<ul class='menu' id='menu'>"; // Inicia a lista do menu

            foreach ($menu as $nome => $link) {
                if (is_array($link)) {
                    // Se for uma categoria com subitens
                    echo "<li><a href='#'>$nome</a>"; // Link principal
                    echo "<ul class='submenu'>"; // Inicia a lista de subitens

                    foreach ($link as $subnome => $sublink) {
                        if (is_array($sublink)) {
                            // Se houver subsubitens (ex.: Ouro, Prata, Diamantes)
                            echo "<li><a href='#'>$subnome</a>"; // Subcategoria
                            echo "<ul class='subsubmenu'>"; // Inicia a lista de subsubitens

                            foreach ($sublink as $subsubnome => $subsublink) {
                                echo "<li><a href='$subsublink'>$subsubnome</a></li>"; // Subsubitem
                            }

                            echo "</ul></li>"; // Fecha a lista de subsubitens
                        } else {
                            echo "<li><a href='$sublink'>$subnome</a></li>"; // Subitem
                        }
                    }

                    echo "</ul></li>"; // Fecha a lista de subitens
                } else {
                    // Se for um link simples
                    echo "<li><a href='$link'>$nome</a></li>";
                }
            }

            echo "</ul>"; // Fecha a lista do menu
        }

        // Exibe o menu
        exibirMenu($menu);
    ?>

    <script>
        // Função para alternar o menu em dispositivos móveis
        function toggleMenu() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>