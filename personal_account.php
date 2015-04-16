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
                    <form method="post" enctype="multipart/form-data">
                        <h5>Title</h5>
                        <input type="text" name="title" placeholder="title">
                        <h5>Description</h5>
                        <textarea placeholder="Description" name="descr"></textarea>
                        <h5>Category</h5>
                        <select name="category">
                            <option value="1">1111</option>
                            <option value="2">2222</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        <input type="file" name="fileToUpload" id="fileToUpload"/>
                        <input type="submit" name="add_item">
                    </form>
                    <?php
                        include("classes/ItemData.php");
                        $Item = new ItemData();
                        if(isset($_POST['add_item'])){
                            $Item->addItem($_POST['title'], $_POST['descr'], $_POST['category'],$_FILES['fileToUpload']['name']);
                        }
                    ?>
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