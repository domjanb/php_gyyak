<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Palacsinta</title>
    </head>
    <body>
        <form action="megrendeles.php" method="POST">
            Név: <input type="text" name="neve" id ="neve"/><br>
            Cím: <input type="text" name="cim" id ="cim"/><br>
            Palacsinta: <br>
            <select multiple name="palacsinta[]" id="palacsinta">
                <option value="kakaos">kakaós</option>
                <option value="lekvaros">lekváros</option>
                <option value="fehejas">fahéjas</option>
                <option value="turos">túrós</option>
                <option value="podingos">pudingos</option>
            </select>
            <br>
            Extrák: <br>
            Tejszínhab:
            <input type="checkbox" name="tejszinhab" value="tejszinhab"/><br>
            Meggy:
            <input type="checkbox" name="meggy" value="meggy"/><br>
            Porcukor:
            <input type="checkbox" name="porcukor" value="porcukor"/><br>
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
