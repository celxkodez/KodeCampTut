<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>

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
  <h1>todos</h1>
  <form id="form" action="" method="POST">
    <input type="text" name="title" class="input" id="input" placeholder="Enter your todo" autocomplete="off">
    <button type="submit" class="add-button">Add New</button>

    <ul class="todos" id="todos">
      <?php foreach ($todos as $todo) : ?>

        <li class="completed">
          <a href="/markcompleted.php?id=<?= $todo['id'] ?>">
            <?= $todo['title'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </form>
  <!-- <small>Left click to toggle completed <br> Right click to delete todo</small> -->

  <script>
    // const form = document.getElementById("form");
    // const input = document.getElementById("input");
    // const todosUL = document.getElementById("todos");

    // const todos = JSON.parse(localStorage.getItem("todos"));

    // if (todos) {
    //   todos.forEach((todo) => addTodo(todo));
    // }

    // form.addEventListener("submit", (e) => {
    //   e.preventDefault();

    //   addTodo();
    // });

    // function addTodo(todo) {
    //   let todoText = input.value;

    //   if (todo) {
    //     todoText = todo.text;
    //   }

    //   if (todoText) {
    //     const todoEl = document.createElement("li");
    //     if (todo && todo.completed) {
    //       todoEl.classList.add("completed");
    //     }

    //     todoEl.innerText = todoText;

    //     todoEl.addEventListener("click", () => {
    //       todoEl.classList.toggle("completed");
    //       updateLS();
    //     });

    //     todoEl.addEventListener("contextmenu", (e) => {
    //       e.preventDefault();

    //       todoEl.remove();
    //       updateLS();
    //     });

    //     todosUL.appendChild(todoEl);

    //     input.value = "";

    //     updateLS();
    //   }
    // }

    // function updateLS() {
    //   todosEl = document.querySelectorAll("li");

    //   const todos = [];

    //   todosEl.forEach((todoEl) => {
    //     todos.push({
    //       text: todoEl.innerText,
    //       completed: todoEl.classList.contains("completed"),
    //     });
    //   });

    //   localStorage.setItem("todos", JSON.stringify(todos));
    // }
  </script>
</body>

</html>