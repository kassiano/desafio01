<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Desafio</title>

    <script type="text/javascript">

        function enviar(){

            var senha = document.getElementById("passwd").value;
            if(senha == "eF5d08"){
              alert("SENHA CORRETA, ACESSO LIBERADO");

              document.getElementById("div_principal").style.display = "none";
              document.getElementById("div_passou_desafio").style.display = "block";

            }else{
              alert("SENHA INCORRETA");
            }

        }
    </script>
  </head>
  <body>

<div class="" id="div_principal">
  <p>
      Este é um desafio nível básico. Para passar vc precisa saber HTML.
  </p>
  <p>
      Digite a senha abaixo para passar pelo desafio
  </p>

  <!-- A SENHA É eF5d08 -->

  <div class="" >
      <input type="password" name="passwd" id="passwd" value="">
      <button type="button" name="bt_enviar" onclick="enviar()">Enviar</button>
  </div>

  <p>
      Para acessar o desafio digite no navegador: http://10.107.144.36/desafio
  </p>

</div>

<div class="" id="div_passou_desafio" style="display:none;">

  <p>
      PARABÉNS, VC SABE O MÍNIMO DE HTML.
  </p>

</div>
  </body>
</html>
