
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
<p style="height: 20px">&nbsp;</p>
<div class="productsmain container">
    <div class="card-deck" id="products-output">
        <!-- Button trigger modal -->
        <button type="button" class="products btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
            Launch demo modal
            <div class="card">
                <img class="productimg card-img-bottom" src="/assets/productimg.png" alt="Card image cap">
            </div>
        </button>

        <button type="button" class="products btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
            Launch demo modal
            <div class="card">
                <img class="productimg card-img-bottom" src="/assets/productimg.png" alt="Card image cap">
            </div>
        </button>

        <button type="button" class="products btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
            Launch demo modal
            <div class="card">
                <img class="productimg card-img-bottom" src="/assets/productimg.png" alt="Card image cap">
            </div>
        </button>
        <button type="button" class="products btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
            Launch demo modal
            <div class="card">
                <img class="productimg card-img-bottom" src="/assets/productimg.png" alt="Card image cap">
            </div>
        </button>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="productmodal" tabindex="-1" role="dialog" aria-labelledby="modaltitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modaltitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalbody">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Luk</button>
            </div>
        </div>
    </div>
</div>

<p style="height: 20px">&nbsp;</p>


<?php require_once "../templates/footer.html"; ?>

</body>
</html>
<script src="libs/jquery/jquery-3.3.1.min.js"></script>
<script src="libs/popper/popper.min.js"></script>
<script src="libs/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="/js/helper.js"></script>
<script src="/js/products.js"></script>