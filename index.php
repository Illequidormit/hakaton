<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 16.04.15
 * Time: 9:21
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Бартер Обміняйтер</title>
</head>
<body>
<?php
    include "navbar.php";
    include "templates/header.html";
?>
<div class="main-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="templates/all_items.php?cat=1">
                            <div class="well category">
                                <img src="images/category/1.png">
                                <h4>Kid world</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="well category">
                                <img src="images/category/2.png">
                                <h4>Realty</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="well category">
                                <img src="images/category/3.png">
                                <h4>Cars</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="well category">
                                <img src="images/category/4.png">
                                <h4>Work</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="well category">
                                <img src="images/category/5.png">
                                <h4>Pets</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="well category">
                                <img src="images/category/6.png">
                                <h4>Furniture</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="well category">
                                <img src="images/category/7.png">
                                <h4>Appliances</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <div class="well category">
                                <img src="images/category/8.png">
                                <h4>Services</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <h4>Швидко, легко, безкоштовно</h4>
                <button class="btn btn-block btn-primary">Подати заяву</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>