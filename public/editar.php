<?php
require_once '../repositories/MusicaRepository.php';

$repo = new MusicaRepository();

if ($_POST) {
    $musica = new Musica(
        $_POST['titulo'],
        $_POST['artista'],
        $_POST['genero'],
        $_POST['link']
    );

    $repo->atualizar($_POST['id'], $musica);
    header("Location: index.php");
}

$musica = $repo->buscarPorId($_GET['id']);
?>

<form method="post">
    <input type="hidden" name="id" value="<?= $musica['id'] ?>">
    <input name="titulo" value="<?= $musica['titulo'] ?>"><br>
    <input name="artista" value="<?= $musica['artista'] ?>"><br>
    <input name="genero" value="<?= $musica['genero'] ?>"><br>
    <input name="link" value="<?= $musica['link'] ?>"><br>
    <button>Atualizar</button>
</form>