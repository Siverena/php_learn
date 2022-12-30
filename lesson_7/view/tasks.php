<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous">
    <style>
        .sign-in-form {
            margin: auto;
        }
        #description {
            margin-bottom: 10px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        h3{
            font-size: 25px;
            text-align: left;
        }
        .btn-primary{

        }
    </style>
</head>
<body>
<div class="container ">
    <h2>Планировщик задач</h2>
    <div class="row">

        <form method="post" class="">
            <h3>Добавить задачу</h3>

            <label for="description" class="visually-hidden">Что нужно сделать?</label>
            <textarea type="text" id="description" name="description" class="form-control mt-3" placeholder="Что нужно сделать?" required="" autofocus=""></textarea>

            <button class="w-100 btn btn-lg btn-primary mt-1" type="submit">Добавить</button>

        </form>
    </div>
    <div class="row">
        <h3>Список задач</h3>
        <?php if(count($tasks)) : ?>
        <ol>
            <?php foreach ($tasks as $key => $task) : ?>
                <li><?=$task->getDescription()?> <a href="?controller=tasks&action=markasdone&key=<?=$task->getId()?>">х</a></li>
            <?php endforeach ?>
        </ol>
        <?php else : ?>
        <p>У вас пока нет задач</p>
        <?php endif; ?>



    </div>
    <div class="mt-3">
        <a href="/">Назад</a>
    </div>
</div>
</body>
