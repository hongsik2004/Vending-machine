<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>get방식으로 만든 대충만든 자판기</title>
    </head>
    <body>
<style>
        *{
            margin : 0;
            padding : 0;
        }
        .container {
            width: 1200px;
            margin : 0 auto;
        }
        header{
            width: 100%;
            height : 100px;
            background-color: #3ab9e391;
            border: 1px solid #000;
            border-bottom : none;
        }
        header > h2{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            line-height: 3;
        }
        .main {
            background-color: #5152727a;
            width: 100%;
            height : 400px;
            border : 1px solid #000;
            position: relative;
            display: flex;
        }
        .none{
            display: none;
        }
        .save-money{
            position: absolute;
            bottom:0;
            right:0;
            border : 1px solid #000;
            color:red;
            background-color: #47d1ff;
            width: 120px;
            height:30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .imgs{
            width: 100%;
            height: 100%;
            display: flex;
        }
        .imgs img {
            width: 200px;
        }
        .drink{
            width: 400px;
            display: flex;
            justify-content: space-around;
        }
        .drink2{
            width: 600px;
        }
        .drink2 img{
            width: 400px;
        }
        .drink b{
            display: flex;
            justify-content: center;
            align-items:center;
        }
        .drink button{
            margin-top:190px;
        }
        .drink2 b{
            position: absolute;
            top: 50%;
            margin:5px;
            margin-left:10px;
        }
        button {
            width: 120px;
            color:red;
            background: #000;
            border:none;
            border-radius:10px;
            height: 30px;
            cursor: pointer;
        }
        button:hover{
            transition: 0.7s;
            background-color: #00000085;
        }
        .not-money{
            margin-left:400px;
            font-size:30px;  
            display: flex;
            justify-content:center;
            align-items:center;
            /* text-align:center; */
            font-weight:bold;
            color:red;
        }
        p{
            text-align:center;
        }
        a{
            color:blue;
            text-decoration:none;
            color: blue;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <form action="result.php" method="get">
    <?php $moneys = $_GET['money'];?>
    <?php echo "<input class='none' type='number' name='money' value='$moneys'>"?>
                <div class="container">
            <header>
                <h2>음료수를 살수있는 자판기입니다.</h2>
            </header>
            <div class="main">
                <b class="save-money">현재 돈 : <?= $moneys ?><br></b>
                <?php
                if($moneys >= 1500){?>
                <div class="imgs">
                    <div class="drink">
                        <img src="./images/coca.jpg" alt=""><br>
                        <b>코카콜라</b>
                        <button type="submit" name="btn" value="1500">구매</button>
                    </div>
                    <div class="drink">
                        <img src="./images/saida.png" alt="">
                        <b>사이다</b>
                        <button type="submit" name="btn" value="1300">구매</button>
                    </div>
                    <div class="drink">
                        <img src="./images/pokari.jpg" alt="">
                        <b>포카리</b>
                        <button type="submit" name="btn" value="1000">구매</button>
                    </div>
                 <?php
                 }else if($moneys >= 1300){
                 ?>        
                    <div class="drink2">
                        <img src="./images/saida.png" alt="">
                        <b>사이다&nbsp;&nbsp;<button type="submit" name="btn" value="1300">구매</button></b>
                    </div>
                    <div class="drink2">
                        <img src="./images/pokari.jpg" alt="">
                        <b>포카리&nbsp;&nbsp;<button type="submit" name="btn" value="1000">구매</button></b>
                    </div>
                 <?php }else if($moneys >= 1000){ ?>
                    <div class="drink3">
                        <img src="./images/pokari.jpg" alt="">
                        <b>포카리</b>
                        <button type="submit" name="btn" value="1000">구매</button>
                    </div>
                </div>
        </form>
                <?php }else {?>
                    <p class="not-money">살수있는 음료수가 없습니다!!</p>
                    <a href="japangi.php">다시 돈 넣으러 가기</a>
                <?php }?>
            </div>
</body>
</html>