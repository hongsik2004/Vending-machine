<!DOCTYPE html>
    <html lang="ko">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get방식으로 만든 대충만든 자판기</title>
    </head>
    <body>
<?php
    $moneys = $_GET['money'];
    $btn = $_GET['btn'];
    $coca = $moneys - 1500;
    $saida = $moneys - 1300;
    $pokari = $moneys - 1000;
?>
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
        text-align: center;
        align-items: center;
        font-size: 30px;
        line-height: 3;
    }
    .main {
        width: 100%;
        height : 400px;
        border : 1px solid #000;
        background-color: #5152727a;
    }
    p{
        text-align:center;
        margin-top : 100px;
        font-size:30px;
    }
    input{
        width: 150px;
    }
    </style>
    <form action="">
        <div class="container">
            <header>
                <h2>음료수를 살수있는 자판기입니다.</h2>
            </header>
            <div class="main">
                <?php
                if($btn =="1500"){
                    echo "<p>코카콜라를 사고 남은 돈 :". $coca . "원 입니다.</p>";
                }else if($btn =="1300"){
                    echo "<p>사이다를 사고 남은 돈 :". $saida . "원 입니다.</p>";
                }else if($btn == "1000"){
                    echo "<p>포카리를 사고 남은 돈 :". $pokari . "원 입니다.</p>";
                }    ?>
                
            </div>
        </div>
    </form>
    </body>
    </html>