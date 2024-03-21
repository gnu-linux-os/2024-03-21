<?php
    $nota = $_POST['nota'] . "\n";

    file_put_contents('notas.txt', $nota, FILE_APPEND);

    if(!isset($_POST["ajax"])) {
        header('Location: index.php');
    }

/* if ($_SERVER["REQUEST_METHOD"] == "POST" && isset(S_POST["nota"]))
{
    $nota = $_POST["nota"];
    $file = fopen("notas.txt", "a");
    fwrite($file, $nota . "\n");
    fclose($file);
}
// Mostrar todas las notas almacenadas en notas.txt
$notas = file("notas.txt");
foreach ($notas as $nota)
{
    echo "<p>$nota</p>";
} */
?>
