<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Radiobutton</title>
</head>
<body>

    <!-- Pasirinkti tik viena is galimu, checkbox nereikeitu naudoti, mes turetume
    dirbti su dizainu, kad sunaikintume daug elementu pasirinkima
    radiobutton
-->
    <!-- Pasirinkti lyti -->
    <!-- Input turi tureti varda -->

    <form action="checkbox.php" method="get">
        <input type="radio" name="lytis" value="Vyras" checked="true" /> Vyras
        <input type="radio" name="lytis" value="Moteris" /> Moteris
        <input type="radio" name="lytis" value="nenoriu_nurodyti" /> Nenoriu nurodyti
        <input type="submit" name="submit" value="submit" />
    
    </form>

    <?php 
        if(isset($_GET["submit"]))
        {
            $lytis = $_GET["lytis"];
            echo $lytis;
        } 
    
    ?>



    <!-- Kelis pasirinkimus -->
    <form action="checkbox.php" method="get">
        <input type="checkbox" name="reiksme[]"  value="Reiksme1" checked="true" /> Reiksme1
        <input type="checkbox" name="reiksme[]" value="Reiksme2" /> Reiksme2
        <input type="checkbox" name="reiksme[]" value="Reiksme3" /> Reiksme3
        <input type="checkbox" name="reiksme[]" value="Reiksme4" /> Reiksme4
        <input type="checkbox" name="reiksme[]" value="Reiksme5" checked="true" /> Reiksme5
        <input type="checkbox" name="reiksme[]" value="Reiksme6" /> Reiksme6
        <input type="checkbox" name="reiksme[]" value="Reiksme7" /> Reiksme7
        <input type="submit" name="submit1" value="submit" />
    </form>

    <?php 
        if(isset($_GET["submit1"]))
        {
            $reiksmes = $_GET["reiksme"]; //ne teksta, o masyva

            foreach($reiksmes as $reiksme) {
                echo $reiksme;
                echo "<br>";
            }
        } 
    
    ?>
</body>
</html>