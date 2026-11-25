<?php
require_once '../repositories/MusicaRepository.php';

if ($_POST) {
    $musica = new Musica(
        $_POST['titulo'],
        $_POST['artista'],
        $_POST['genero'],
        $_POST['link']
    );

    (new MusicaRepository())->criar($musica);
    header("Location: index.php");
}
?>

<form method="post">
    <h1>Cadastre uma música</h1>
    <input name="titulo" placeholder="Título da Música" required><br>
    <input name="artista" placeholder="Artista / Banda" required><br>
    <input name="genero" placeholder="Gênero" required><br>
    <input name="link" placeholder="Link (YouTube / Spotify)" required><br>
    <button>Salvar</button>
</form>