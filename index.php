<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fenntarthatóság</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div><img src="./kepek/Képernyőkép 2023-03-22 114412.png" alt="torony"></div>

        <div>
            <h1>A fenntarthatóság szintjei</h1>
            <?php
            $elsoSzint = "ökoszisztéma";
            $masoidkSzint = "társadalom";
            $harmadikSzint = "gazdaság";
            $negyedikSzint = "pénz";
            echo "<ul>";
            echo "<li>$elsoSzint</li>";
            echo "<li>$masoidkSzint</li>";
            echo "<li>$harmadikSzint</li>";
            echo "<li>$negyedikSzint</li>";
            echo "</ul>";
                /* $tomb = array("A megújuló erőforrások fogyasztása", "
    több, mint amit a természet újratermelni képes
    
    ")
        */ /* echo"<tr>";
    echo"<th>",("A megújuló erőforrások fogyasztása"),"</th>";
    echo"<th>";("A környezet helyzete");"</th>";
    echo"<th>";("Fenntarthatóság");"</th>";
    echo"</tr>"; */;
            $elso = array(
                "
    A megújuló erőforrások fogyasztása",
                "több, mint amit a természet újratermelni képes",
                " a természet újratermelő kapacitásával azonos mértékű",
                "kevesebb, mint amit a természet újratermelni képes"

            );
            $masodik = array(
                "
    A környezet helyzete",
                "a környezet pusztul",
                "környezeti egyensúly",
                "a környezet megújul"


            );
            $harmadik = array(
                "
    Fenntarthatóság",
                "nem fenntartható",
                "fenntartható, nem változó állapot",
                "fenntartható fejlődés
    
    "
            );
            echo "<br>";
            echo "<table><tr><th>". $elso[0] . " - " . $masodik[0] . " - " . $harmadik[0]."</th></tr></table>";
            echo "<br>";
            /*     echo "<td>$elso[1]</td><td>$masodik[1]</td><td>$harmadik[1]</td>";
 */
            for ($i = 1; $i < count($elso); $i++) {

                print($elso[$i] . " - " . $masodik[$i] . " - " . $harmadik[$i] . "<br>");
                echo"<br>";
            }
            /* echo $elso[0];
    echo $masodik[0];
    echo $masodik[1];
    echo $masodik[2];
    echo $masodik[3];
    echo $harmadik[0];
    echo $harmadik[1];
    echo $harmadik[2];
    echo $harmadik[3];
    echo "<br>";
    echo $elso[1];
    echo $elso[2];
    echo $elso[3]; */

            ?>
        </div>
    </main>

</body>

</html>