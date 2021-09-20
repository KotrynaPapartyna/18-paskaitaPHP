<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puslapiu generavimas</title>
</head>
<body>
    <form action="" method="get">
        <button type="submit" name="submit">Sukurti puslapius</button>
    </form>
    <?php 

    require_once("../connections.php");

    function randomText($n) {
        $text = "";


        for($i = 0; $i < $n ; $i++) {
            $randomNumber = rand();
            $hashedText = md5($randomNumber);
            $text .= $hashedText; // kai ciklas ivyksta dar pridedamas ir tekstas 
        }
        
        return str_replace("a", " ", $text); // PVZ- visos a raides keiciamos i tarpa

    }

    

    // sugeneruojamas atsitiktinis tekstas i DB 
    if(isset($_GET["submit"])) {
        for ($i=0; $i<50; $i++) {

            $pavadinimas = "pavadinimas".$i;
            $nuoroda = "nuoroda".$i;
            $turinys = randomText(100);
            $santrauka = randomText(1); // kadanfi ribotas sk teksto
            $kategorijos_id = rand(1, 4); // pagal DB- ne daugiau 4


            $sql = "INSERT INTO `puslapiai`(`pavadinimas`, `nuoroda`, `turinys`, `santrauka`, `kategorijos_id` ) 
            VALUES ('$pavadinimas','$nuoroda','$turinys', '$santrauka', '$kategorijos_id')";

            if(mysqli_query($conn, $sql)) {
                echo "Puslapis sukurtas sėkmingai";
                echo "<br>";
            } else {
                echo "Kažkas įvyko negerai"; // tokiu atveju tikrinti uzklausa
                echo "<br>";
            }
        }
    }

?>
</body>
</html>