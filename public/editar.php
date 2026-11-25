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

<style>
    body { font-family: Arial; margin: 40px; }
    h1 { color: #2c7e8f; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; }
    input { border: 1px solid #2c7e8f; padding: 8px; margin-bottom: 10px; width: 250px; }
    button { background: #599fad; border: 1px solid #2c7e8f; padding: 8px 16px; font-weight: bold; color: white; }
</style>

<form method="post">
    <h1>Edite o cadastro da música</h1>
    <input type="hidden" name="id" value="<?= $musica['id'] ?>">
    <input name="titulo" value="<?= $musica['titulo'] ?>"><br>
    <input name="artista" value="<?= $musica['artista'] ?>"><br>
    <input name="genero" value="<?= $musica['genero'] ?>"><br>
    <input name="link" value="<?= $musica['link'] ?>"><br>
    <button>Atualizar</button>
</form>