
<!DOCTYPE html>
<html lang="dk">
<head>
    <meta charset="UTF-8">
    <title>Hjem</title>
    <link rel="stylesheet" href="libs/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/font-awesome/css/all.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<!-- Using banner from banner.html -->

<div class="bg-dark">
    <?php require_once "../templates/banner.html"; ?>
    <div class="container">
        <?php require_once "../templates/navbar.html"; ?>
    </div>
</div>

<div class="aboutmain">
    <p style="height: 50px">&nbsp;</p>
    <div class="aboutbox container" style="border:1px solid black; border-radius: 5px; padding: 25px">
        <div class="media">
            <div class="media-body">
                <h5 class="mt-0 mb-1">Om virksomheden</h5>
                <p></p>
                <p>Virksomheden startede i 1998, hvor vi solgte rugbrød til private, Kent sagde man burde kunne lave rugbrød automatisk, så teamet gik i gang med at undersøge markedet for automatiske robotter men fandt hurtigt ud af der ikke var særlig mange på markedet, og dem der var solgte robotter til overpris. Christian forslog så om virksomheden ikke skulle begynde at fokusere på robotter i stedet for rugbrød, Kent var lidt uenig eftersom rugbrød var hans store passion. Tobias fik dog Kent overtalt til at ligge sin drøm på hylden.</p>
                Teamet gik i gang med de første tegninger til en prototype. De fandt hurtigt ud af det ville være dyrere end forventet, så de begyndte at søge investore.
                Efter den første investore kom på gik det stærkt. Den første udgave blev færdig og der var rigtig mange henvendelser, så mange at virksomheden ikke kunne følge med.
                Virksomheden havde svært med at følge med væksten i forhold til antal ansatte. Der blev ansat nye hver uge, for overhovedet at kunne svare på alle henvendelserne.
                <p>Som årene gik forblev dog virksomhedens vækst.
                Virksomheden er nu kommet på verdenskortet med afdelinger i Canada og Japan.
                    Hele IntelRobotics teamet er spændt på fremtiden og glæder sig til alle de nye udfordringer de støder på.</p>
            </div>
            <img class="d-flex ml-3" src="/assets/omvirksomhedenimg.png" alt="Generic placeholder image" height="350px" width="500px">
        </div>
    </div>
    <p style="height: 50px; margin: 0">&nbsp;</p>
</div>



<?php require_once "../templates/footer.html"; ?>

</body>
</html>
<script src="libs/jquery/jquery-3.3.1.min.js"></script>
<script src="libs/popper/popper.min.js"></script>
<script src="libs/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>