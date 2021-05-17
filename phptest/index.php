<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP App</title>
    </head>
    <body>
        <p>
            <?php 
                echo 'Just a test!';
                print('Congrats this works very fine!</br>'); 
                $version = phpversion();
                print('<HR>Running PHP:' . $version);
            ?>
        </p>
    </body>
</html>
