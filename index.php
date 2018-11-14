<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Cantarell:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Pokédex</title>
</head>
<body>
    <main>
        <form>
            <div id="scroll">
                <ul>
                    <?php templater ?>
                </ul>
            </div>
            <footer>
                <input type="submit" value="Save" id="save">
            </footer>
        </form>
    </main>
</body>
</html>