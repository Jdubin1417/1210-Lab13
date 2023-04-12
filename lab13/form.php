<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <style>
    body {
      margin: 0;
      height: 100vh;
      width: 100vw;
      background: rgba(0,0,0,.9);
      color: #ddd;
    }
    form {
      display: block;
      width: 400px;
      height: 100px;

      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);

      font-size: 1.5rem;
      font-family: sans-serif;
    }

    input[type='text'],
    input[type='password'] {
      display: block;
      margin: 20px auto;
      width: 250px;
      height: 40px;
      font-size: 1.5rem;
      padding: 5px;
    }

    input[type='submit'] {
      display: block;
      margin: 20px auto;
      width: 150px;
      height: 40px;

      font-size: 1.5rem;
      color: #ddd;
      background: rgba(100,100,255,1);
      border-width: 0;
    }

    input[type='submit']:hover {
      transition: .5s;
      background: rgba(0,0,255,1);
    }
  </style>
</head>
<body>

<form method="POST">
  <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
    Invalid password
  <?php } ?>
  <p>Enter password for access:</p>
  <input type="password" name="password" autofocus>
  <input type="submit" value='Submit'>
</form>

</body>
</html>