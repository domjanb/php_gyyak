<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Próba</title>
    </head>
    <body>
        áőúéü9öúűÖÜÓÚŐŰÁÍ
        <h1>get form</h1>
        <form action="szamol2.php" method="GET">
            A=<input type="text" name="a" id="a"/><br>
            B=<input type="text" name="b" id="b"/><br>
            <input type="submit" name="muvelet" value="+" />
            <input type="submit" name="muvelet" value="-" />
            <input type="submit" name="muvelet" value="*" />
            <input type="submit" name="muvelet" value="/" />
        </form>
        <h1>post form</h1>
        <form action="szamol2.php" method="POST">
            A=<input type="text" name="a" id="a"/><br>
            B=<input type="text" name="b" id="b"/><br>
            <input type="submit" name="muvelet" value="+" />
            <input type="submit" name="muvelet" value="-" />
            <input type="submit" name="muvelet" value="*" />
            <input type="submit" name="muvelet" value="/" />
        </form>
        <?php
        ?>
    </body>
</html>
