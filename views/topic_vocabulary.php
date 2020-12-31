<!DOCTYPE html>
<html>
    <head>
        <style>
            .image1{
                width: 215px;
                height: 185px;
            }
        </style>
    </head>
    <body>
    <?php for ($i = 0; $i < sizeof($obj); $i++) { ?>
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5">
               
                    <img style="width: 400px; height: 300px;" src="<?php echo $obj[$i]->__getImageUrl() ?> ">
                </div>
                <div class="col-sm-7">
                <div class="row">
                            <div class="col-sm-3">
                                <h1 style="font-size: 40px; color: blue"> <?php echo $obj[$i]->__getWord() ?> </h1>

                            </div>
                            <div class="col-sm-2">
                                <h2 style="text-align: center; margin: 10px"> ( <?php echo $obj[$i]->__getCategory() ?> )</h2>
                            </div>
                            <div class="col-sm-7">
                                <h2 style=" margin: 10px"> <?php echo $obj[$i]->__getMeaning() ?></h2>
                            </div>
                            </br>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-1">
                                    <?php $audio= $obj[$i]->__getPronounceUrl()?>
                                    
                                    <button style="border: 0" onclick="playSound('<?php echo $audio ?>')"  ><img style="width: 50px;height: 50px" src="https://f0.pngfuel.com/png/175/178/sound-computer-icons-audio-video-png-clip-art.png" alt=""></button>  
                                    <div id="sound"></div>
                                
                                </div>
                                <div class="col-sm-11">
                                    <h2 style=" margin: 10px">( <?php echo $obj[$i]->__getSpell() ?> )</h2>
                                    </br>
                                </div>
                               
                            </div>
                        </div>
                        <div class="container">
                            <h2 > <?php echo $obj[$i]->__getExample() ?></h2>
                            </br>
                            <h2 style="color: orange; font-family: Bradley Hand ITC">( <?php echo $obj[$i]->__getTrainstale() ?> )</h2>
                            
                        </div>
                    
                </div>
            </div>
            <div class="container" style="width: 100% ;height: 50px;background-color:aliceblue "></div>
        </div>
    <?php } ?>
    <script>
      /**
        * Plays a sound using the HTML5 audio tag. Provide mp3 and ogg files for best browser support.
        * @param {string} filename The name of the file. Omit the ending!
        */
      function playSound(filename){
        var mp3Source = '<source src="'+filename+'" type="audio/mpeg">';
        var oggSource = '<source src="' + filename + '.ogg" type="audio/ogg">';
        var embedSource = '<embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3">';
        document.getElementById("sound").innerHTML='<audio autoplay="autoplay">' + mp3Source + oggSource + embedSource + '</audio>';
      }
    </script>
    </body>
</html>