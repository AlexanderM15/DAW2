<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        h1{
            text-align: center;
           
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['pregunta'])) {
    $pregunta = htmlspecialchars($_GET['pregunta']);
    
    $respuestas = array(
        "Sí", 
        "No", 
        "Quizás", 
        "Claro que sí", 
        "Por supuesto que no", 
        "No lo tengo claro", 
        "Seguro", 
        "Yo diría que sí", 
        "Ni de coña", 
        "Probablemente no"
    );

    $respuestaAleatoria = $respuestas[array_rand($respuestas)];

    echo "<h1>Bola 8 Mágica</h1>";
    echo "<p><strong>Tu pregunta fue:</strong> " . $pregunta . "</p>";
    echo "<p><strong>La Bola 8 dice:</strong> " . $respuestaAleatoria . "</p>";
} else {
    echo "<p>No has hecho ninguna pregunta.</p>";
}
?>

</body>
</html>