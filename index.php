<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload images and search duplicate</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Загрузка и проверка на дубликаты изображений</h2>
      <p class="lead">Загрузки n-ое количество изображений, количество изображений не ограничено.</p>
    </div>

    <div class="row">
      <div class="col">
        <h4 class="mb-3">Загрузить изображения</h4>
        <form class="needs-validation" method="post" action="upload.php" enctype="multipart/form-data">
          <div class="row g-3">
            <div class="col-12">
                <input type="file" id="inputfile" name="inputfile[]" multiple></br>
          </div>
          <hr class="my-4">
          <div class="row g-3">
            <div class="col-12">
            
          </div>
          <input class="w-100 btn btn-primary btn-lg" type="submit" value="Загрузить файлы">
        </form>
      </div>
    </div>
    <!-- <hr class="my-4">
    <div class="row">
      <div class="col text-center">
        <h4 class="mb-3">Дубликаты изображений</h4>
        <div class="duplicate">
          <img src="" alt="" width="400" height="300">
          <img src="" alt="" width="400" height="300">
          <h4>Является ли изображение дубликатом ?</h4>
          <input class="w-25 btn btn-primary btn-lg" type="submit" value="Да">
          <input class="w-25 btn btn-primary btn-lg" type="submit" value="Нет">
        </div>
      </div>
    </div> -->
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2022 oxo1f</p>
  </footer>
</div>
<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="form-validation.js"></script>
</body>
</body>
</html>