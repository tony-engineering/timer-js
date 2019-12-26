<!DOCTYPE html>
<html>
<head>
    <title>timer-js</title>
</head>
<style>
        body {
            background:aquamarine
        }
        input[type="Username"] {
            background-color: rgb(45, 157, 248);
        }
        input[type="Password"] {
            background-color: rgb(45, 157, 248);
        }
    </style>
</head>
<body>
    <h1>Dusinsk C.L.E Bank</h2>

    Please enter your username and password to access the system.
    <br/>
    <form action="verifcation.php" method="post">
      Username: <input type="Username" name="Username"><br/>
      <br/>
      Password: <input type="password" name="Password"><br/>
      <input type="submit">
    </form>

</body>
</html>