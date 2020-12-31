<html>

<head>


    <style>
        
        .container_label {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            left: 100px;
            width: 300px;
        }

        /* Hide the browser's default radio button */
        .container_label input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0px;
            height: 25px;
            width: 25px;

            background-color: #eee;
            border-radius: 50%;
        }


        /* When the radio button is checked, add a blue background */
        .container_label input:checked~.checkmark {
            background-color: green;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container_label input:checked~.checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container_label .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }

        /*-------------------------------------------------------------------------*/
        .b {
            border-radius: 50%;
            width: 50px;
            /* Full width */
            height: 50px;
            background-color: deepskyblue;
        }



        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }


        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>

</head>

<body>

    <div class="container-fluid" style="padding-top: -50px ;background-color: white">
        <div class="row">
            <div class="col-sm-8" style="background-color: white">
                <?php for ($i = 0; $i < sizeof($obj); $i++) { ?>
                    <div class="container" id="<?php echo $i + 1 ?>">

                        <h2 style="font-family: Times New Roman; font-size: 20px">
                            <input type="text" style="border-radius: 50%;width: 40px;height: 40px; text-align: center;background-color: aqua ;font-family: Arial" value="<?php echo $i + 1 ?>">
                            <?php echo $obj[$i]->__getquestions() ?>
                        </h2>

                        <label class="container_label"><?php echo $obj[$i]->__getb() ?>

                            <input type="radio" name="question_<?php echo $i + 1 ?>" value="B">
                            <span  id="<?php echo ($i * 4 + 1) ?>" class="checkmark"></span>
                        </label>
                        <label class="container_label"><?php echo $obj[$i]->__getb() ?>

                            <input type="radio" name="question_<?php echo $i + 1 ?>" value="B">
                            <span id="<?php echo ($i * 4 + 2) ?>" class="checkmark"></span>
                        </label>
                        <label class="container_label"><?php echo $obj[$i]->__getc() ?>

                            <input type="radio" name="question_<?php echo $i + 1 ?>" value="C">
                            <span id="<?php echo ($i * 4 + 3) ?>" class="checkmark"></span>
                        </label>
                        <label class="container_label"><?php echo $obj[$i]->__getd() ?>

                            <input type="radio" name="question_<?php echo $i + 1 ?>" value="D">
                            <span id="<?php echo ($i * 4 + 4) ?>" class="checkmark"></span>
                        </label>


                    </div>
                <?php } ?>
            </div>
            <div class="col-sm-4 ">
                <div class="container" style="background-color:midnightblue ; height: 500pxs; width: 100%">
                    <h1 style="color: aliceblue">Question Palette</h1>
                    <p>
                        <?php for ($i = 1; $i <= sizeof($obj); $i++) { ?>

                            <button class="b" id="button<?php echo $i ?>"> <a href="#<?php echo $i ?>" style="width: 20px;height: 20px; background-color: deepskyblue; color: red"> <?php echo $i ?></a></button>
                            <?php if ($i % 7 == 0) {
                                echo "<br> <br>";
                            }
                            ?>
                        <?php } ?>

                    </p>

                    <div class="container" style="padding-left: 150px">
                        <button id="Submit" style="width: 200px;height: 50px; border-radius: 15px">
                            <img src="https://cdn4.iconfinder.com/data/icons/glyphlibrary-one/100/paper-aeroplane-512.png" alt="" ; style="width: 50px;height: 50px">
                            Submit</button>
                        <br>
                        <br>
                        <button style="width: 200px;height: 50px; border-radius: 15px">
                            <img src="https://gamethinking.io/wp-content/uploads/sites/5/2018/05/review-icon-png-1-720x722.png" alt="" ; style="width: 50px;height: 50px; padding-bottom: 5px">
                            Review</button>
                        <br>
                        <br>
                        <button onclick="document.getElementById('id01').style.display='block'" style="width: 200px;height: 50px; border-radius: 15px">
                            <img src="https://cdn0.iconfinder.com/data/icons/business-human-resources-2/128/61-512.png" alt="" ; style="width: 50px;height: 50px; padding-bottom: 5px">
                            Solution</button>
                    </div>
                </div>
                <div>
                    <br> <br> <br> <br> <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <button style=" background-color:  white; border: 0;position: fixed" id="myBtn" title="Go to top"> <img style="width: 100px;height: 100px" src="https://getdrawings.com/free-icon/top-icon-57.png" alt=""></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php

    $list_answer = array();
    for ($i = 0; $i < sizeof($obj); $i++) {
        $list_answer[$i] = $obj[$i]->__getanswer();
        echo $list_answer[$i];
    }
    $list = json_encode($list_answer);
    ?>
    

    <?php //sử lý sự kiện check đáp án ?>
    <script>
        document.getElementById("Submit").onclick = function() {

            <?php

            $list_answer = array();
            for ($i = 0; $i < sizeof($obj); $i++) {
                $list_answer[$i] = $obj[$i]->__getanswer();
            }
            $list = json_encode($list_answer);
            ?>

            var list_Ans = <?php echo $list; ?>;
            //alert(a[19]);
            var sizeofobj = "<?php echo sizeof($obj); ?>";
            for (var i = 0; i < sizeofobj; i++) {
                var checkbox = document.getElementsByName("question_" + (i + 1));
                for (var j = 0; j < checkbox.length; j++) {
                    
                    var ID = 0;
                    var answer = list_Ans[i];
                    if (answer == 'A') {
                        ID = i * 4 + 1;
                    } else if (answer == 'B') {
                        ID = i * 4 + 2;
                    } else if (answer == 'C') {
                        ID = i * 4 + 3;
                    } else if (answer == 'D'){
                        ID = i * 4 + 4;
                    }
                   
                    if (checkbox[j].checked === true) {
                        // thay đổi màu button
                       
                        //---------------
                        var selected = checkbox[j].value;

                        
                        if (selected == answer) {
                          
                        } else {

                            var a = document.getElementById(ID);
                            a.style.backgroundColor = "red";
                        }
                    } else if(j==3) {

                        
                        var a = document.getElementById(ID);
                        a.style.backgroundColor = "red";
                    }
                }
                
            }
        }
    </script>


    <?php // code solution-----------------------------------  
    ?>
    <div id="id01" class="modal">

        <div class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <h1 style="color: blue">Review your answers</h1>
            </div>

            <div class="container" style="background-color:#f1f1f1; padding-left: 50px ">
                <table>
                    <?php $index = 0 ?>
                    <?php for ($i = 1; $i <= sizeof($obj) / 5; $i++) { ?>
                        <tr>
                            <?php for ($j = 1; $j <= 5; $j++) {     ?>
                                <td style="width: 200px; height: 50px; border: 1px solid black; text-align: center">
                                    <?php echo "Q" . ($index + 1) . " : " . $obj[$index]->__getanswer();
                                    $index++; ?>
                                </td>

                            <?php } ?>

                        </tr>
                    <?php } ?>

                </table>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

            </div>
        </div>



        <script>
            //Khi người dùng cuộn chuột thì gọi hàm scrollFunction
            window.onscroll = function() {
                scrollFunction()
            };
            // khai báo hàm scrollFunction
            function scrollFunction() {
                // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    //nếu lớn hơn 20px thì hiện button
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    //nếu nhỏ hơn 20px thì ẩn button
                    document.getElementById("myBtn").style.display = "none";
                }
            }
            //gán sự kiện click cho button
            document.getElementById('myBtn').addEventListener("click", function() {
                //Nếu button được click thì nhảy về đầu trang
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            });
        </script>
        <?php //thực hiện chức năng trên page 
        ?>


</body>

</html>