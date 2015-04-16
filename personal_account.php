<!DOCTYPE html>
<html>
<head>
    <title>Особистий кабінет | Обміняйтер</title>
</head>
<body>
<?php
require_once "navbar.php";
?>
<div class="wrap">
    <div class="container">
        <h1>Особистий кабінет</h1>
        <div class="row">
            <div class="col-sm-4 well user-info">

            </div>
            <div class="col-sm-8">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#add-item-tab">Add item</a></li>
                    <li><a data-toggle="tab" href="#offers-tab">Offers</a></li>
                    <li><a data-toggle="tab" href="#desired-tab">Desired</a></li>
                </ul>

                <div class="tab-content">
                    <div id="add-item-tab" class="tab-pane fade in active">
                        <h3>HOME</h3>
                        <p>Lorem ipsum dolor sit amet, e et dolore magna aliqua.</p>
                    </div>
                    <div id="offers-tab" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam,  ea commodo consequat.</p>
                    </div>
                    <div id="desired-tab" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde udantium, totam rem aperiam.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>