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
                <ul id="scroll">
                    <li class="poke-container">
                        <div class="info">
                            <div class="upper">
                                <h2 class="poke-title">Pikachu</h2>
                                <h2 class="poke-id">#25</h2>
                            </div>
                            <div class="lower">
                                <div class="type-holder">
                                    <p class="type">type</p>
                                    <p class="type">type</p>
                                </div>
                                    <div class="poke-attributes">
                                        <div class="icon-container">
                                            <img src="img/Eye_closed.svg" class="icon">
                                            <p>0</p>
                                        </div>
                                        <div class="icon-container">
                                            <img src="img/Eye_opened.svg" class="icon">
                                            <p>0</p>
                                        </div>
                                        <div class="icon-container">
                                            <img src="img/pokeball-2.svg" class="icon">
                                            <p>0</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="picture-holder">
                                <img src="https://pokeres.bastionbot.org/images/pokemon/25.png" class="picture">
                        </div>
                    </li>
                </ul>
            <footer>
                <input type="submit" value="Save" id="save">
            </footer>
        </form>
    </main>
</body>
</html>