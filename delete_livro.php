<?php
require_once './vendor/autoload.php';
use ExemploPDOMySql\MySQLConnection;

$bd = new MySQLConnection();
$livro = null;

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $comando = $bd->prepare('SELECT * FROM generos WHERE id = :id');
    $comando->execute([':id' => $_GET['id']]);

    $livro = $comando->fetch(PDO::FETCH_ASSOC);
} else {
    $comando = $bd->prepare('DELETE FROM generos WHERE id = :id');
    $comando->execute([':id' => $_POST['id']]);

    header('Location:/index.php');
}

$_title = 'Remover Gênero';
?>

<?php include('./includes/header.php'); ?>

            <h1>Remover livro</h1>
            <p>Tem certeza que deseja remover o livro <?= $livro['titulo']?> ?</p>
            <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?= $livro['id'] ?>" />
                <a class="btn btn-secondary" href="/index.php">Voltar</a>
                <button class="btn btn-danger" type="submit">Excluir</button>
            </form>

<?php include('./includes/footer.php'); ?>