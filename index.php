<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione utente</title>
</head>

<body>
    <h1>Form per inserimento dati</h1>
    <?php
    echo "<p>Ciao! Benvenuto nella piattaforma. Inserisci i tuoi dati nel form sottostante:</p>";
    ?>
    <form>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cognome">Cognome:</label><br>
        <input type="text" id="cognome" name="cognome" required><br><br>

        <label for="eta">Età:</label><br>
        <input type="number" min="1" max="120" id="eta" name="eta" required><br><br>

        <label for="nazionalita">Nazionalità:</label><br>
        <input type="text" id="nazionalita" name="nazionalita" required><br><br>

        <button type="submit">Invia</button>
    </form>
</body>

</html>