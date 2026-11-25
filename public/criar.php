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

<style>
    body { font-family: Arial; margin: 40px; }
    h1 { color: #2c7e8f; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; }
    input { border: 1px solid #2c7e8f; padding: 8px; margin-bottom: 10px; width: 250px; }
    button { background: #599fad; border: 1px solid #2c7e8f; padding: 8px 16px; font-weight: bold; color: white; }
</style>

<form method="post">
    <h1>Cadastre uma música</h1>
    <input name="titulo" placeholder="Título da Música" required><br>
    <input name="artista" placeholder="Artista / Banda" required><br>
    <input name="genero" placeholder="Gênero" required><br>
    <input name="link" placeholder="Link (YouTube / Spotify)" required><br>
    <button>Salvar</button>
</form>