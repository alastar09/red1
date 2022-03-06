<div class="container mt-4">
    <div class="row">

    <!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Форма регистрации</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Форма авторизации</button>
  </li>  
</ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                    <h1>Форма регистрации</h1><br>
                    <form action="check.php" method="post">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Имя"><br>
                        <input type="text" class="form-control" name="surname" id="surname" placeholder="Фамилия"><br>
                        <input type="text" class="form-control" name="email" id="mail" placeholder="Email"><br>
                        <input type="text" class="form-control" name="pass" id="pass" placeholder="пароль"><br>
                        <input type="number" class="form-control" name="age" id="age" min="1" max="100" step="1" placeholder="Возраст"><br>
                        <button class="btn btn-success" type="submit">Зарегистрировать</button>
                    </form>            
                
            </div>

            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                
                    <h1>Форма авторизации</h1><br>
                    <form action="auth.php" method="post">
                        <input type="text" class="form-control" name="email" id="mail" placeholder="Email"><br>
                        <input type="text" class="form-control" name="pass" id="pass" placeholder="пароль"><br>
                        <button class="btn btn-success" type="submit">Авторизоваться</button>
                    </form> 
                
            </div>
        </div>
    </div>    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>