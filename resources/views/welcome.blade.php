<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    	body{
    		margin: 0px;
    		padding: 0px;
    	}
        .button{
            border: 1px solid #7f00ff;
            background: none;
            border-radius: 6px;
            color:white;
            padding: 10px 20px;
            margin: 10px;
            text-align: center;
            cursor: pointer;
            transition: 0.8s;
            position: relative;
            overflow: hidden;
        }
        .btn{
            color: #7F00FF;
        }
        .button:hover{
            color: #fff;
        }
        .button::before{
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 0%;
            background: #7f00ff;
            z-index: -1;
            transition: 0.8s;
        }
        .btn::before{
            top:0;
            border-radius: 0 0 50% 50%;

        }
        .btn:hover::before{
            height: 180%;
        }
    </style>
    <title>Profile</title>
</head>
<body>
    <br>
    <br>
    <center>
    <div class="button btn">
    <h1><a href="Profile" style="text-decoration: none;">Profile Page</a></h1>
    </div>
    </center>

</body>
</html>