<html>

<head>
    <style>

    </style>
</head>

<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7" >
            <h1 style="font-size: 50px; color: blue">6 Minute English</h1> <br>
           
                <div class="container-fluid" style="left: 0px ;width: 100% ; height: 450px ; background-color: aqua; background: url(<?php echo $obj->__getImage(); ?>); background-repeat: no-repeat;background-size:100% 450px;">
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                   
                    <audio controls style="width: 100%" id="controll">
                        <source src="<?php echo $obj->__getAudio(); ?>">


                    </audio>
                </div>
                <br> <br>
            <h1 style="font-size: 30px">Introduction</h1>
            <h1 style="font-family: 'Times New Roman';font-weight: 100"><?php echo $obj->__getIntroduction() ?> </h1>
                <br> <br>
            <h1 style="font-size: 30px">Vocabulary</h1>
            <br>
            <?php for ($i=0;$i<sizeof($vo_lesson);$i++){ ?>
                <h1> <?php echo $vo_lesson[$i]->__getWord(); ?></h1>
                <h1 style="font-family: 'Times New Roman';font-weight: 100"> <?php echo $vo_lesson[$i]->__getDiscription(); ?></h1>
            <?php } ?>
            </div>
            <div class="col-sm-3"></div>
        </div>


    </div>

</body>

</html>