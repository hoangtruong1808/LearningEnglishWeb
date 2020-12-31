<!DOCTYPE html>
<html>

<head>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;

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
            width: 100%;
            
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
   
    width: 450px;
    height: 250px;
}
    </style>
</head>

<body>


<div class="container-fluid">


<div class="grid-container" style="padding-top:50px ;background-color: white" >
        <?php for ($i = 0; $i < sizeof($obj); $i++) { ?>
            
            <ul id="side-main-menu" class="side-menu list-unstyled">
            <a href="http://localhost/copy/content/autoload/<?php echo $i+1 ?>">
            <img class="image" src="<?php echo $obj[$i]->__getImage() ?>">
                <h1 style="text-align: center;font-size: 30px"> <?php echo $obj[$i]->__getTitle() ?> </h1>
            </a>
            <br>
            <h1 style="font-family:Times New Roman"> <?php echo $obj[$i]->__getDiscription() ?></h1>
        </ul>
        
           
        <?php } ?>
    </div>
    </div>

</body>

</html>