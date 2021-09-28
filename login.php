<?php
session_start();
include('config/conexao.php');

?>

<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Sistema de cadastro - Bootstrap </title>

  <!-- ==================================================== CSS BOOTSTRAP ================================================= -->
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/" rel="stylesheet" 
  integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

   <!-- ==================================================== UNICONS ==================================================== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!-- ==================================================== BUNDLE JS BOOTSTRAP ==================================================== -->

  <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
  <form class="needs-validation" novalidate method="POST" action="valida.php">
      <img class="mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57" />
      <h1 class="h3 mb-3 fw-normal">Sistema de Cadastro com Bootstrap </h1>
      <p class="mt-1 mb-0 text-primary">USUARIO: admin</p>
        <p class="mt-1 mb-0 text-primary">SENHA: 123</p>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" name="usuario" placeholder="Informe seu usuário" required>
        <label for="floatingInput">Usuário</label> 
        <div class="invalid-feedback">
          Informe o Usuário.
        </div>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Password" required>
        <label for="floatingPassword">Senha</label>
        <div class="invalid-feedback">
          Informe a Senha.
        </div>
      </div>

      <div class="checkbox mb-3">
        <label>
       
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Acessar</button>
      <p class="mt-5 mb-1 text-muted">&copy; 2021 - <?php echo date('Y') ?></p>
      <p class="mt-1 mb-1 text-muted">Sistema de Cadastro - All Rights Reserved</p>
      <p class="mt-1 mb-1 text-muted">Versão 1.0</p>

    </form>
  </main>

<!-- ==================================================== BUNDLE JS BOOTSTRAP ========================================================================= -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>

<script>
 // SCRIPT DE VALIDAÇÃO DO PROPRIO BOOTSTRAP
  (function() {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>