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
    <!-- Using navbar from navbar.html -->
    <div class="backgroundimg">
        <div class="main container">


            <p style="height: 20px;">&nbsp;</p>
            <h3 class="sectiontitle container text" style="color:white">Seneste nyheder</h3>
            <p style="height: 20px;">&nbsp;</p>

        <div class="card-deck" id="news-output">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>

        </div>
            <p style="height: 20px; margin: 0">&nbsp;</p>
        </div>
    </div>
<div class="core-wrapper">
    <p style="height: 20px;">&nbsp;</p>
    <div class="aboutbox container" style="border:1px solid black; border-radius: 5px; padding: 25px">

        <h3 class="sectiontitle container text">Kerneværdier</h3>
        <p style="height: 20px;">&nbsp;</p>

        <hr>
        <div class="media">
            <img class="d-flex align-self-start mr-3" src="/assets/Trust.png" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0">Tillid</h5>
                <p>Tillid eller tiltro er en følelse og er dét fænomen, som viser sig ved, at et individ har en forventning om eller tro på, at et andet individ er pålideligt. På græsk og oldnordisk er ordet for (til)lid det samme som (til)tro.</p>
                <p>Ifølge K.E. Løgstrup er menneskers tillid medfødt, hvorimod mistillid læres under opvæksten.</p>
            </div>
        </div>

        <hr>
        <div class="media">
            <div class="media-body">
                <h5 class="mt-0 mb-1">Respekt</h5>
                Ære er et antropologisk og sociologisk begreb som bruges af mange mennesker og kulturer om en persons, families eller folkegruppes oplevede værdi. Beslægtede begreber er hæder, anseelse, respekt og værdighed.
            </div>
            <img class="d-flex ml-3" src="/assets/Respect.png" alt="Generic placeholder image">
        </div>

        <hr>
        <div class="media">
            <img class="d-flex align-self-start mr-3" src="/assets/SecureConnection.png" alt="Generic placeholder image">
            <div class="media-body">
                <h5 class="mt-0 mb">Sikkerhed</h5>
                It-sikkerhed (også kendt som cyber-sikkerhed eller computersikkerhed) er informationssikkerhed anvendt på computere og datanet (computernetværk).
                <p>Området dækker alle processerne og mekanismerne med hvilken computer-baseret udstyr, information og services er beskyttet mod utilsigtet eller uautoriseret adgang, ændring eller destruktion. It-sikkerhed omfatter også beskyttelse mod uplanlagte hændelser og naturkatastrofer.</p>
            </div>
        </div>
        <hr>
        <!--<p style="height: 20px;">&nbsp;</p>-->
        <div class="media">
            <div class="media-body">
                <h5 class="mt-0 mb-1">Vækst</h5>
                Økonomisk vækst er egentlig et upræcist begreb, idet det kan betegne vækst i flere forskellige økonomiske størrelser. Normalt bruges begrebet dog i betydningen ”vækst i realt BNP”, altså i bruttonationalproduktet i faste priser. Et lands årlige økonomiske vækst forstået på denne måde udtrykker dermed den procentvise stigning i landets produktion, når der renses for inflation.
            </div>
            <img class="d-flex ml-3" src="/assets/Growth.png" alt="Generic placeholder image">
        </div>
    </div>
    <p style="height: 50px; margin:0">&nbsp;</p>
</div>
    </div>

    <?php require_once "../templates/footer.html"; ?>

    </body>
</html>
<script src="libs/jquery/jquery-3.3.1.min.js"></script>
<script src="libs/popper/popper.min.js"></script>
<script src="libs/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="/js/helper.js"></script>
<script src="/js/index.js"></script>