<?php
require_once '../repositories/MusicaRepository.php';

$repo = new MusicaRepository();
$musicas = $repo->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Músicas</title>
    <style>
		h1 { text-align: center; color: #2c7e8f; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 48px; }
        body { font-family: Arial; margin: 40px; }
        nav a { margin-right: 15px; text-decoration: none; font-weight: bold; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #2c7e8f; padding: 8px; }
        th { background: #599fad; color: white;}
    </style>
</head>
<body>

<h1>Sistema de Cadastro de Músicas</h1>

<nav>
    <a href="index.php">📋 Listar Músicas</a>
    <a href="criar.php">➕ Nova Música</a>
</nav>

<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Artista/Banda</th>
        <th>Gênero</th>
        <th>Link</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($musicas as $m): ?>
        <tr>
            <td><?= $m['id'] ?></td>
            <td><?= $m['titulo'] ?></td>
            <td><?= $m['artista'] ?></td>
            <td><?= $m['genero'] ?></td>
            <td><a href="<?= $m['link'] ?>" target="_blank">▶ Ouvir</a></td>
            <td>
                <a href="editar.php?id=<?= $m['id'] ?>">✏️ Editar</a> |
                <a href="excluir.php?id=<?= $m['id'] ?>"
                   onclick="return confirm('Deseja excluir?')">🗑️ Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>