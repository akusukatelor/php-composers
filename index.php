<?php
session_start();

// Inisialisasi array ToDo jika belum ada
if (!isset($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
}

$todos = &$_SESSION['todos']; // Reference biar lebih singkat

// Tambah
if (isset($_POST['tambah_submit'])) {
    $new = trim($_POST['todo']);
    if ($new !== '') {
        $todos[] = $new;
    }
    header("Location: index.php");
    exit;
}

// Hapus
if (isset($_POST['hapus_submit'])) {
    $hapusIndex = intval($_POST['hapus_index']) - 1;
    if (isset($todos[$hapusIndex])) {
        array_splice($todos, $hapusIndex, 1);
    }
    header("Location: index.php");
    exit;
}

// Reset semua data (opsional tombol reset)
if (isset($_GET['reset'])) {
    $_SESSION['todos'] = [];
    header("Location: index.php");
    exit;
}

// Cek aksi tombol
$action = $_GET['action'] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>ToDo List</title>
    <style>
        body { font-family: sans-serif; max-width: 500px; margin: auto; }
        h1 { text-align: center; }
        button, input[type="text"], input[type="number"] { padding: 5px 10px; margin: 5px 0; }
        form { margin-bottom: 20px; }
    </style>
</head>
<body>

<h1>ToDo List</h1>

<?php if ($action === 'tambah'): ?>
    <form method="POST">
        <label>Tambah kegiatan:</label><br>
        <input type="text" name="todo" required><br>
        <button type="submit" name="tambah_submit">Tambah</button>
        <a href="index.php"><button type="button">Back</button></a>
    </form>

<?php elseif ($action === 'hapus'): ?>
    <form method="POST">
        <label>Masukkan nomor yang ingin dihapus:</label><br>
        <input type="number" name="hapus_index" min="1" max="<?= count($todos) ?>" required><br>
        <button type="submit" name="hapus_submit">Hapus</button>
        <a href="index.php"><button type="button">Back</button></a>
    </form>

<?php else: ?>
    <h3>List ToDo:</h3>
    <?php if (count($todos) > 0): ?>
        <ol>
            <?php foreach ($todos as $todo): ?>
                <li><?= htmlspecialchars($todo) ?></li>
            <?php endforeach; ?>
        </ol>
    <?php else: ?>
        <p><i>Belum ada kegiatan.</i></p>
    <?php endif; ?>

    <a href="?action=tambah"><button>Tambah</button></a>
    <a href="?action=hapus"><button>Hapus</button></a>
    <a href="?reset=1"><button style="background:red; color:white;">Reset</button></a>
<?php endif; ?>

</body>
</html>
