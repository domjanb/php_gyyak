<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="sorsol.php" method="POST">
            <h2>Csapatok vesszovel elválasztva</h2>
            <textarea rows="5" cols="50" name="csapatok"></textarea><br>
            Csoport mérete:
            <select name="darab">
                <?php
                    for ($i = 2; $i <= 8; $i++) {
                        print "<option value='$i'>$i</option>";
                    }
                
                ?>
            </select>
            <br>
            <input type="submit" value="Mehet a sorsolás:"/>    
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
