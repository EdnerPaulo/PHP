<?php
session_start();

// Verifica se a variável de controle de ID existe, caso contrário, inicializa com 1
if (!isset($_SESSION['ultimo_id'])) {
    $_SESSION['ultimo_id'] = 1;
}

// Função para adicionar um item ao carrinho
function adicionarAoCarrinho($nome, $preco, $quantidade = 1) {
    // Verifica se o item já existe no carrinho pelo nome
    $produtoExistente = null;
    
    foreach ($_SESSION['carrinho'] as $id => $item) {
        if ($item['nome'] == $nome) {
            // Encontrou o produto pelo nome, salva o ID e a quantidade
            $produtoExistente = $id;
            break;
        }
    }

    if ($produtoExistente !== null) {
        // Se o produto já existe, soma a quantidade
        $_SESSION['carrinho'][$produtoExistente]['quantidade'] += $quantidade;
    } else {
        // Caso o produto não exista, cria um novo item no carrinho com um ID auto-incrementado
        $id = $_SESSION['ultimo_id'];
        $_SESSION['ultimo_id']++;  // Incrementa o ID para o próximo item
        
        $_SESSION['carrinho'][$id] = [
            'nome' => $nome,
            'preco' => $preco,
            'quantidade' => $quantidade
        ];
    }
}

// Função para remover um item do carrinho
function removerDoCarrinho($id) {
    unset($_SESSION['carrinho'][$id]);
}

// Função para exibir o carrinho
function exibirCarrinho() {
    if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
        echo "<h3>Itens no Carrinho:</h3>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Preço</th><th>Quantidade</th><th>Total</th><th>Remover</th></tr>";

        $total = 0;
        foreach ($_SESSION['carrinho'] as $id => $item) {
            $subtotal = $item['preco'] * $item['quantidade'];
            $total += $subtotal;
            echo "<tr>
                    <td>{$id}</td>
                    <td>{$item['nome']}</td>
                    <td>R$ {$item['preco']}</td>
                    <td>{$item['quantidade']}</td>
                    <td>R$ {$subtotal}</td>
                    <td><a href='?remover={$id}'>Remover</a></td>
                </tr>";
        }

        echo "</table>";
        echo "<p><strong>Total: R$ {$total}</strong></p>";
    } else {
        echo "<p>Seu carrinho está vazio.</p>";
    }
}

// Se o parâmetro 'remover' for passado, removemos o item do carrinho
if (isset($_GET['remover'])) {
    removerDoCarrinho($_GET['remover']);
}

// Testando a adição de itens ao carrinho
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    adicionarAoCarrinho($nome, $preco, $quantidade);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Carrinho de Compras</title>
</head>
<body>

<h2>Adicione um produto ao seu carrinho:</h2>
<form method="post">
    <label for="nome">Nome do Produto:</label>
    <input type="text" name="nome" required><br><br>

    <label for="preco">Preço (R$):</label>
    <input type="number" step="0.01" name="preco" required><br><br>

    <label for="quantidade">Quantidade:</label>
    <input type="number" name="quantidade" value="1" min="1" required><br><br>

    <input type="submit" value="Adicionar ao Carrinho">
</form>

<hr>

<?php
// Exibir o carrinho de compras
exibirCarrinho();
?>

</body>
</html>
