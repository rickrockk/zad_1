<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    $surname = 'Зубенко';
    $name = 'Михаил';
    $otchestvo = 'Петрович'
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container justify-content-between">
              <a class="navbar-brand" href="#"><img src="logo.jpg" alt="" width="225" height="60"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <span class="navbar-text">
                  Лабораторная работа №1. Hello World!
                </span>
            </div>
          </nav>
    </header>
    <main>
        <div class="container w-50">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Отчество</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $surname ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $otchestvo ?></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </main>
    <footer class="pt-5">
        <p class="text-center text-muted">Задание для самостоятельной работы</p>
      </footer>
</body>
</html>