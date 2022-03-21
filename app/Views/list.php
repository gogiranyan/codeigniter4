<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News List</title>
    <style>
        body{
            margin: 0 auto;
            padding: 0;
            text-align: center;
        }
        ul{
            width: 50%;
            margin: 0 auto;
            padding-inline-start: 0px;
        }
        li{
            list-style: none;
            border:#333 1px solid;
            margin: 10px 0;
        }
        hr{
            border: none;
            border-top: #666 1px solid;
        }
        @media (max-width:750px){
            ul{
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h1>News List</h1>
    <a href="#">Add News</a>
    <ul>
        <li>
            <h3>News title</h3>
            <p>News content</p>
            <hr/>
            <p>
                <span>2021-05-03 00:00:00</span>
                <a href="#">Update</a> / 
                <a href="#">Delete</a>
            </p>
        </li>
    </ul>
</body>
</html>