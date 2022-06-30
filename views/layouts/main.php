<?php
    use yii\helpers\Html; // разрешить использовать объект Html
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= Html::encode($this->title) ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
            .nav > li > a{
                color: black;
            }
            .nav > li > a:hover, .nav > li > a:focus {
                background-color: #000000;
                color: white;
                text-decoration: none;
            }
            ion-icon{
                width: 8em;
                height: 3em;
            }
            input, textarea{
                border: none;
            }
        </style>
    </head>
    <body style="text-align: justify">
        <div id="profile" class="bg-white border rounded-3 p-3" style="float: right; right: 87px; top: 87px; position: absolute; text-align: center;">
            <div class="figure-img"><ion-icon name="person-outline"></ion-icon></div>
            <big><?= Yii::$app->user->identity->username ?></big><br>
            <a type="button" href="<?=Yii::$app->urlManager->createUrl(['site/logout'])?>" class="btn btn-primary">Log out</a>
        </div>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="<?=Yii::$app->urlManager->createUrl(['site/index'])?>" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">Name company</a>

                <ul class="nav nav-pills flex-wrap col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <?php
                        if($this->title == "Home"){
                            echo "<li class='nav-item'><a href='".Yii::$app->urlManager->createUrl(['site/index'])."' class='nav-link active'>Home</a></li>";
                        } else {
                            echo "<li class='nav-item'><a href='".Yii::$app->urlManager->createUrl(['site/index'])."' class='nav-link'>Home</a></li>";
                        }
                        if($this->title == "FAQ"){
                            echo "<li class='nav-item'><a href='".Yii::$app->urlManager->createUrl(['site/faq'])."' class='nav-link active'>FAQ</a></li>";
                        } else {
                            echo "<li class='nav-item'><a href='".Yii::$app->urlManager->createUrl(['site/faq'])."' class='nav-link'>FAQ</a></li>";
                        }
                        if($this->title == "About"){
                            echo "<li class='nav-item'><a href='".Yii::$app->urlManager->createUrl(['site/about'])."' class='nav-link active'>About</a></li>";
                        } else {
                            echo "<li class='nav-item'><a href='".Yii::$app->urlManager->createUrl(['site/about'])."' class='nav-link'>About</a></li>";
                        }
                    ?>
                </ul>

                <div class="col-md-3 text-end">
                    <?php if(Yii::$app->user->isGuest){ ?>
                        <a type="button" class="btn btn-outline-primary me-2" href="<?=Yii::$app->urlManager->createUrl(['site/login'])?>">Login</a>
                        <a type="button" class="btn btn-primary" href="<?=Yii::$app->urlManager->createUrl(['site/register'])?>">Sign-up</a>
                    <?php } else { ?>
                        <ion-icon onclick="$('#profile').toggle();" name="person-outline"></ion-icon>
                    <?php } ?>
                </div>
            </header>
        </div>
        <?= $content ?>
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">Name company</a>
                    <p class="text-muted">© 2022</p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="<?=Yii::$app->urlManager->createUrl(['site/index'])?>" class="nav-link p-0">Home</a></li>
                        <li class="nav-item mb-2"><a href="<?=Yii::$app->urlManager->createUrl(['site/faq'])?>" class="nav-link p-0">FAQ</a></li>
                        <li class="nav-item mb-2"><a href="<?=Yii::$app->urlManager->createUrl(['site/about'])?>" class="nav-link p-0">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">no name</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">no name</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">no name</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">no name</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">no name</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">no name</a></li>
                    </ul>
                </div>
            </footer>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script>
            $('#profile').hide();
        </script>
    </body>
</html>