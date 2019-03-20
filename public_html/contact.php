
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
<div class="contactmain">
    <h2>&nbsp;</h2>
    <h2 class="h1-responsive font-weight-bold text-center my-4">Kontakt os</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Hvis du har nogle spørgsmål så tøv ikke med at kontakte os det
        kan du gøre nedenfor eller ved at sende os en mail. </p>
    <p class="text-center w-responsive mx-auto mb-5"> Vi bestræber os på at svare på alle henvendelser inden for et døgn.</p>

    <div class="container">
        <div class="row">
            <form class="col-md-8">
                <div class="form-group">
                    <label for="formGroupExampleInput">Fulde navn</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Fuldenavn">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Besked</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <button type="button" class="btn btn-primary">Send</button>
            </form>

            <div class="col-md-4 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Odense, Lærkevej 2, Danmark</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 45 88 88 88 88 </p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contact@intelrobotics.com</p>
                    </li>
                </ul>
            </div>
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