<?php
 if(isset($_POST['submit']))
 {
   //  print_r($_POST['nome']);
    // print_r($_POST['email']);
    // print_r($_POST['categoria']);
 
include_once('config.php');

$nome= $_POST['nome'];
$email= $_POST['email'];
$categoria= $_POST['categoria'];


   $result = mysqli_query($conexao, "INSERT INTO fornecedor(fornecedor,email,categoria) VALUES('$nome','$email','$categoria')");
   $varialvel= mysqli_query($conexao, "INSERT INTO categoriaa(construcao,eletrico,informatica,papelaria,acocarbono,acoinox,descarnadeira,enxugadeira,fulao,epi,uniforme) VALUES('$categoria')");
}

?>


















<?php
 if(isset($_POST['submit']))
 {
   //  print_r($_POST['nome']);
    // print_r($_POST['email']);
    // print_r($_POST['categoria']);
 
include_once('config.php');

$nome= $_POST['nome'];
$email= $_POST['email'];
$categoria= $_POST['categoria'];


   $result = mysqli_query($conexao, "INSERT INTO fornecedor(fornecedor,email,categoria) VALUES('$nome','$email','$categoria')");
   $varialvel= mysqli_query($conexao, "INSERT INTO categoriaa(construcao,eletrico,informatica,papelaria,acocarbono,acoinox,descarnadeira,enxugadeira,fulao,epi,uniforme) VALUES('$categoria')");
}

?>














<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon"  type="">

  <title> Cadastro </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>


              
    
<form action="cadastro.php"   method='POST'>
  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Cadastro de fornecedores
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            
			<select name="categoria" id="categoria">
                          <option value="construcao">construção</option>
                          <option value="eletrico">elétrico</option>
                          <option value="informatica">Informática</option>
                          <option value="papelaria">Papelaria</option>
                          <option value='acocarbono'>Aço carbono</option>
                          <option value='acoinox'>Aço Inox</option>
                          <option value='descarnadeira'>Descarnadeira</option>
                          <option value='enxugadeira'>Enxugadeira</option>
                          <option value='fulao'>Fulão</option>
                          <option value="lubrificante">Lubrificantes</option>
                          <option value='epi'>EPI</option>
                          <option value='uniforme'>Uniforme</option>
                        </select>
						<br>
						<br>
              <div>
			  <input class="input100" type="text" id="nome" name="nome" placeholder="Nome do fornecedor">
              </div>
				<br>
				
              <div>
              <input class="input100" type="text" id='email' name="email" placeholder="Email">
			  <br>
				<br>
				<br>
				
              </div>
              <button name='submit' type="submit" class="login100-form-btn"> Enviar</button>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<button name='voltar'  type="submit" class="login100-form-btn"><a href='index.php'>Home</a></button>


              
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>

</body>
</html>