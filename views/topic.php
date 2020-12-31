<!DOCTYPE html>
<html>

<head>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;

            grid-gap: 10px;
            background-color: azure;

        }

        .grid-container>div {
            background-color: rgba(255, 255, 255, 0.8);
            border: 0px solid black;
            text-align: center;
            font-size: 30px;
        }

        .image {
            width: 50%;
            border-radius: 50%;
            padding-top: 5px;
        }
        .button{
            background-color: solid black;
            width: 100%;
            height: 100%
        }
        .navbar {
  overflow: hidden;
  background-color: red;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.image{
   
    width: 200px;
    height: 200px;
}
    </style>
</head>

<body>


<div class="container-fluid">


<div class="grid-container" style="padding-top:50px " >
        <?php for ($i = 0; $i < sizeof($obj); $i++) { ?>
            
            <ul id="side-main-menu" class="side-menu list-unstyled">
            <a href="http://localhost/copy/topic/getdata/<?php echo $obj[$i]->__getTopicName()."/".$obj[$i]->__getTopicID()."/topic_vocabulary"; ?>">
            <img class="image" src="<?php echo $obj[$i]->__getImage() ?>">
                <h3 style="text-align: center;"> <?php echo $obj[$i]->__getTopicName() ?> </h3>
            </a>
        </ul>
           
        <?php } ?>
    </div>
    </div>

</body>

</html>