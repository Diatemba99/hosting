

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn aqua-gradient">Gestion Ecole</button>
  <button type="button" class="btn aqua-gradient">Ajouter Admin</button>
  <button type="button" class="btn aqua-gradient">Deconnexion</button>
</div>
</div>



<div class="container">
<form class="text-center border border-light p-5" action="inscription.php" method="post">
    <p class="h4 mb-4">Inscription</p>
    <!-- pseudo -->
    <input type="text" placeholder="pseudo" class="form-control mb-4" name="pseudo">

    <!-- Email -->
    <input type="email" placeholder="mail" class="form-control mb-4" name="uname">

    <!-- Password -->
    <input type="password" placeholder="password" class="form-control mb-4" name="password">


    <!-- Sign in button -->
    <button name="submit" class="btn btn-info btn-block my-4" type="submit">S'inscrire</button>
</form>
</div>

<!------------------- C O N N E X I O N  ----------------------->
<!------------------- C O N N E X I O N  ----------------------->
<!------------------- C O N N E X I O N  ----------------------->
<!------------------- C O N N E X I O N  ----------------------->


<form action="inscription.php" method="post">
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Connexion</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">        
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" name="uname" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" name="uname" data-success="right" for="defaultForm-email">mail</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" name="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" name="password" data-success="right" for="defaultForm-pass"> password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Connexion</a>
</div>
</form>









  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>  
</body>
</html>