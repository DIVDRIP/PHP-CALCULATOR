<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tilt+Neon&family=Tilt+Warp&display=swap');


        *{
            margin: 0;
            padding: 0;
            font-family: 'Tilt Warp', cursive;
        }

        .background{
            background-color: rgb(114, 114, 246);
            width: 100vw;
            height: 100vh;
            position: absolute;
        }

        .container{
            background-color: #000;
            width: 50vw;
            height: 50vh;
            margin: auto auto;
            background-position: center;
            position: relative;
            margin-top: 25vh;
            border-radius: 20px;
        }
        .screen{
            width: 100%;
            height: 100%;
            position: relative;
        }

        .screen-body-item-left {
            width: 50%;
            display: flex;
            flex-direction: column;
            font-size: 33px;
            color: #fff;
            padding-left: 58px;
            padding-top: 140px;
        }

        .screen-body-item {
            width: 50%;
            float: right;
            margin-top: -191px;
            margin-right: -151px;
        }


        .line {
            height: 79px;
            width: 3px;
            background-color: rgb(114, 114, 246);
            float: left;
            margin-left: -8px;
            margin-top: 8px;
        }


        .app-form-group{
            padding-top: 7px;
        }

        .app-form-control{
            text-align: center;
            color: #000;
        }

        .app-form-group input{
            height: 40px;
            width: 219px;
            background-color: #fff;
            border-radius: 9px;
        }

        .app-form-group input::placeholder{
            color: #000;
        }
        

        .select-style{
            padding-top: 9px;
        }

        .select-style select{
            width: 219px;
        }



        .select-style select option:first-child{
            display: none;
        }

        .submit-btn{
            padding-top: 9px;
        }


        p{
            text-align: center;
            font-size: 27px;
            padding-top: 70px;
            color: yellow;
            font-family: 'Neon', cursive;
        }

    </style>
    
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-body">
                    <div class="screen-body-item-left">
                        
                        <div class="app-title">
                            <div class="line"></div>

                            <div class="animated infinite pulse">
                                PHP <br> CALCULATOR <br>
                            </div>
                        </div>
                    </div>
                    <div class="screen-body-item">
                        <div class="app-form">
                            <form method="POST">
                                <div class="app-form-group">
                                    <input type="number" class="app-form-control" placeholder="Enter Number" name="num1">
                                </div>
                                <div class="app-form-group">
                                    <input type="number" class="app-form-control" placeholder="Enter Number" name="num2">
                                </div>
                                <div class="select-style">
                                    <select name="operation" value="operation">
                                        <option value="-" selected>Select Operation</option>
                                        <option value="add">ADD</option>
                                        <option value="sub">SUB</option>
                                        <option value="mult">MULT</option>
                                        <option value="div">DIV</option>
                                    </select>
                                </div>
                                <div class="submit-btn">
                                    <input class="btn btn-primary" type="submit" value="Submit" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="showdata">
                    <p>
                        <?php
                            if(isset($_POST['submit'])){
                                $num1 = $_POST['num1'];
                                $num2 = $_POST['num2'];

                                $operation = $_POST['operation'];

                                switch($operation){
                                    case "add" : $sum = $num1 + $num2;
                                    echo "The addition of two numbers is {$sum}";
                                    break;

                                    case "sub" : $sub = $num1 - $num2;
                                    echo "The subtraction of two numbers is {$sub}";
                                    break;

                                    case "mult" : $mult = $num1 * $num2;
                                    echo "The multiplication of two numbers is {$mult}";
                                    break;

                                    case "div" : $div = $num1 / $num2;
                                    echo "The division of two numbers is {$div}";
                                    break;

                                    default: echo "Sorry it's not exist";
                                }
                            }

                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>