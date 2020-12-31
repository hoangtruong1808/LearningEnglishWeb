<html>

<head>
    
    
    <style>
        .container {
            width: 100%;

            background-color: white;
        }

        .container-1 {
            width: 100%;

            background-color: black;
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="text-align: center;background-color: black">
        <h2 style="text-align: center; color: aliceblue; ">
            <?php
            echo $unit->__getUnitName() . ': ' . $unit->__getDescription();
            ?>
        </h2>
        <h3 style="text-align: center; color: aliceblue">
            <?php
            echo $unit->__getKeyWord();
            ?>
        </h3>
    </div>

    <div class="container-fluid">
        <h4>SELECT A UNIT</h4>

        <div class="widget widget-bbcle-activitynav bbcle-highlightme" data-widget-index="7" id="_highlighted-widget-7">
            <ol class="activities">
                <?php for ($i = 1; $i <= $count ; $i++) { // $count 
                ?>

                    <li>
                        <a class="activity active">
                            <?php // thẻ href còn thiếu 
                            ?>
                            <a href="http://localhost/copy/unit/loadunit/LOWER-INTERMEDIATE/Unit <?php echo $i ?>" class="activity ">

                                <span class="activity-button"></span>
                                <span data-i18n-message-id="Activity" class="not-translated _bbcle_translate_wrapper" lang="en">Activity</span> <?php echo $i ?> <span data-course-item="course;lower-intermediate;unit-30;session-1;activity-1" class="progress-enabled completed hide"></span>
                            </a>
                    </li>
                <?php } ?>
            </ol>

        </div>
    </div>
    <?php for ($i = 0; $i < sizeof($session); $i++) { ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5">
                    <img src="<?php echo $session[$i]->__getImageUrl() ?>">
                </div>
                <div class="col-sm-7">

                    <div class="container-fluid" style="width: 900px">
                        <h1>Session <?php echo $i + 1 ?></h1>
                        <h2><?php echo $session[$i]->__getSessionName() ?> </h2>
                        <h3><?php echo $session[$i]->__getDescription() ?></h3>
                    </div>
                </div>
            </div>
            <div class="container" style="width: 100% ;height: 50px;background-color:aliceblue "></div>
        </div>
    <?php } ?>

</body>

</html>