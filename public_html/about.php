
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
                <br>
                <p id="abouttext">
                </p>
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
<script src="/js/helper.js"></script>
<script src="/js/about.js"></script>