<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');

    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f5f5f5;
      color: #444;
      font-family: 'Poppins', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    h1 {
      color: #34495E;
      opacity: 0.7;
      font-size: 8rem;
      text-align: center;
    }

    form {
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 100%;
      width: 400px;
    }

    .input {
      border: none;
      border-radius: 5px;
      color: #444;
      font-size: 1rem;
      padding: 1rem;
      /* display: block;
      width: 100%; */
    }

    .input::placeholder {
      color: #d5d5d5;
    }

    .input:focus {
      outline-color: #34495E;
      opacity: 0.6;
    }

    .todos {
      background-color: #fff;
      padding: 0;
      margin: 0;
      list-style-type: none;
    }

    .todos li {
      border-top: 1px solid #e5e5e5;
      cursor: pointer;
      font-size: 1rem;
      margin: 0.5em;
      padding: 1rem 2rem;
    }

    .todos li.completed {
      color: #b6b6b6;
      text-decoration: line-through;
    }

    small {
      color: #b5b5b5;
      margin-top: 3rem;
      padding-bottom: 10rem;
      text-align: center;
    }

    .add-button {
      padding: 1em;
      border-radius: 0.5em;
      float: right;
      background-color: #b1b1b18f;
    }
  </style>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="email">
    <input type="password" name="password">
    <button type="submit">Login</button>
  </form>
</body>

</html>