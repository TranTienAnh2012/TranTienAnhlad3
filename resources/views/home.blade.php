<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h1{
            text-align: center;
        }
        header{
            height: 100px;
            background-color:grey ;
            display: flex;
            justify-content: space-between;
        }
        .idea1{
            margin-top:  20px ;
            margin-left:40px ;
        }
        .idea2 ul  {
            display: flex;
            margin-top:  20px ;
        }
        .idea2 ul li{
            list-style: none;
        }
        .idea2 a{
            margin-right:10px ;
            text-decoration: none;
        }
       
        nav{
            height: 50px;
            background-color: grey;
        }
        aside{
            height: 500px;
            background-color:#c0c0c0;
            width: 20%;
        }
        article{
            height: 500px;
            width: 80%;
        }
    </style>
</head>
<body>
    
    <div>
        <header>
            <div class="idea1">
                <button>tim kiem</button>
                <input type="text">
            </div>
            <h1> My Web </h1>
            <div class="idea2">
                <ul>
                    <li> <a href="">Đăng Nhập</a></li>
                    <li> <a href="">Đăng Xuất</a></li>
                    <li><a href="">Thoát</a></li>
                </ul>
            </div>
        </header>

        <nav>
            <ul>
                <li><a href=""></a> </li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        

        </nav>

        <aside>

        </aside>

        <article>

        </article>
    </div>
</body>
</html>