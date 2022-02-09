<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <style>
        body{
            background:rgb(12, 11, 11);
            color: rgb(124, 170, 209);
        }

        nav{
            display: flex;
            justify-content: flex-end;   
        }
        nav ul{
            display: flex;

        }

        nav ul li{
            margin-right: 15px;
            list-style-type:none ;
        }

        a{
            color: rgb(8, 98, 110);
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <nav>
        <ul>
            <li> <a href= "?p=Home">Home</a></li>
            <li><a href= "?p=Login">Login</a></li>
            <li><a href= "?p=Contact">Contact</a></li>
            <li><a href= "?p=Signup">Signup</a></li>
        </ul>
    </nav>
</body>
</html>