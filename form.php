<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
         margin: 0;
         padding: 0;
         font-family: sans-serif;
         background: url(studio.jpg) no-repeat; 
         background-size: cover;
    }
   
    .container1 
    {
        text-align: left;
        margin-left: 490px;
        margin-top: 50px;

    }
    h1
    {
        text-align: center;
        color: white;
        margin-left: 1px;
        margin-top: 150px;
        font-size: 50px;
        font-family: 'Times New Roman';
        -webkit-text-stroke: 2px rgb(212, 130, 22);
        
    }
    input
    {
        font-size: 20px;
        text-align: center;
        font-family: 'Times New Roman';
        height: 30px; width: 350px;
        color: black;
        border-color:red;
    }
    hr
    {
        margin-left: 400px;
        margin-right: 370px;
        border-color:red;
    }
    h2
    {
        font-family: 'Times New Roman';
        font: bold;
        color: black;
        font-display: bold;
        
    }
    .btn
    {
        margin-left: 520px;
        margin-top: 30px;
        width: 100px;
        cursor: grab;
    }
    
</style>
<body> 
    <div class="container">
        <h1>User Login</h1>
        <hr>
        <form method="post" action="insert.php">
        <div class="container1">
        <h2>Username:</h2>
        <input type="text" name="username" placeholder="Username"> <br>
        <h2>Password:</h2>
        <input type="password" name="password" style="margin-left: 4px; margin-top: 5px" placeholder="Password" > <br>
        </div>
        <div class="btn">
        <input class="btn" type="submit" value="Submit" style="margin-left: 100px; margin-top: 5px " >
        </div>
    </div>
    </form>
 
</body>
</html>