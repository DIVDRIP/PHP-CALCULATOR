<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap');

        *{
            margin: 0;
            padding: 0;
        }

        .hero{
            height: 100vh;
            width: 100vw;
            background-color: #132A4C;
            position: absolute;
        }

        .header{
            width: 100%;
            height: 30%;
        }

        .header h2{
            color: #fff;
            padding-top: 19px;
            font-weight: 900;
            text-align: center;
        }

        .main-img{
            width: 50%;
            height: 70%;
        }

        .main-img img {
            width: 542px;
            position: relative;
            margin-top: -83px;
            margin-left: 52px;
        }
        .content{
            display: flex;
            flex-direction: row;
            position: absolute;
            width: 100%;
            height: 70%;

        }

        .main {
            background-color: #fff;
            border-radius: 27px;
            float: right;
            width: 562px;
            height: 400px;
            align-content: center;
            position: relative;
            margin-top: -22px;
            margin-left: 162px;
            position: relative;
        }
        .main form{
            text-align: center;
            position: relative;
            font-size: 18px;
            padding-top: 140px;
        }

        .main form .num{
            width: 404px;
            height: 38px;
            border-radius: 7px;
            text-align: center;
        }

        .tem{
            padding-top: 18px;
            font-size: 23px;
        }
        .btn {
            font-size: 25px;
            width: 188px;
            font-weight: bold;
        }

        .para{
            width: 100%;
            height: auto;
        }

        .para p {
            text-align: center;
            font-size: 27px;
            font-weight: bolder;
            padding-top: 34px;
            font-family: 'Caveat', cursive;
        }

    </style>
</head>
<body>
    <div class="hero">
        <div class="header">
            <h2>Temperature Conversion</h2>
        </div>
        <div class="content">
            <div class="main-img">
                <img src="back.png" alt="">
            </div>

            <div class="main">
                <form method="POST">
                    <input type="number" name="num" class="num" placeholder="Enter Temperature">
                    <div class="tem">
                        <label for="">°C</label>
                        <input type="radio" value="cel" name="units">
                        <label for="">°F</label>
                        <input type="radio" value="feh" name="units">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Convert Now" name="submit">
    
                </form>
                <div class="para">
                    <p>
                        <?php

                            if(isset($_POST['submit'])){
                                $num = $_POST['num'];
                                $temp = $_POST['units'];

                                if($temp == "cel"){
                                    $result = $num * 9/5 + 32;
                                    echo "The Conversion value of {$num}°C in °F is ". $result;
                                }
                                else{
                                    $result = ($num-32) * 5/9;
                                    echo "The Conversion value of {$num}°F in °C is ". $result;
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