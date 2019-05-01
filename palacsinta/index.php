<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Palacsinta</title>
    </head>
    <body>
        <?php
            include_once 'common.php';
        ?>
        <form action="megrendeles.php" method="POST">
            Név: <input type="text" name="neve" id ="neve"/><br>
            Cím: <input type="text" name="cim" id ="cim"/><br>
            Palacsinta: <br>
            <select size="<?php print count($palacsintaar) ?>" multiple name="palacsinta[]" id="palacsinta">
                <?php
                    foreach ($palacsintaar as $p => $ar) {
                        print "<option value='$p'>$p - $ar Ft</option>";
                    }
                ?>
                
            </select>
            <br>
            Extrák: <br>
            <?php
                foreach ($extrak as $p => $ar) {
                    print "$p ($ar) <input type='checkbox' name='$p' value='$p'/><br>";
                    }
                ?>
            
            Megjegyzés:<br>
            <textarea name="megjegyzes" id="megjegyzes" rows="5" cols="30">
                
            </textarea><br>
            <input type="submit" name="elkuld" value="elküld"/>
        </form>
        <?php
            include_once 'common.php';
        ?>
    </body>
</html>
