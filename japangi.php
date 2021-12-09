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
    <form action="out.php" method="get">
        <div class="container">
            <header>
                <h2>음료수를 살수있는 자판기입니다.</h2>
            </header>
            <div class="main">
                <p>돈전송하기 :<input type="number" name="money"></p>
            </div>
        </div>
    </form>
</body>
</html>