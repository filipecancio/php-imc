<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <title>PHP IMC</title>
</head>

<body>
    <div class="imc-container">
        <h1>Calcule o seu IMC</h1>
        <form class="imc-form">
            <div class="imc-quest">
                <p>Gênero: </p>
                <select name="genero" id="genero">
                    <option value="outro">Outro</option>
                  <option value="feminino">Feminino</option>
                  <option value="masculino">Masculino</option>
                </select>
            </div>
            <div class="imc-quest">
                <p>Altura (em metros): </p>
                <input type="number" />
            </div>
            <button id="imc-btn">calcular</button>
        </form>
    </div>
</body>

</html>