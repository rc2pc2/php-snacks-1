<?php


 /**
  * Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
  */

$grantedMessage = 'Access granted';
$denialMessage = 'Access denied';

    if ( empty($_GET['name']) && empty($_GET['email']) && empty($_GET['age']) ){
        echo $denialMessage;
    } else {
        if ( strlen($_GET['name']) > 3
            && str_contains($_GET['email'], '.')
            && str_contains($_GET['email'], '@')
            && is_numeric($_GET['age'])){
                echo $grantedMessage;
        } else {
            echo $denialMessage;
        }
    }
?>

<form action="./index.php" method="GET">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>

    <div>
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
    </div>

    <button type="submit">Login</button>
</form>