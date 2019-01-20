<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">

    <title>Ajax - La fonction ajax()</title>

  </head>

  

  <body>

    <button id="action">Lancer la requête AJAX</button><br />


    <script src="jquery.js"></script>

    <script>

      $(function() {

        $('#action').click(function() {

          $.ajax({

            type: 'GET',

            url: 'proverbes.php?l=7',

            timeout: 3000,

            success: function(data) {

              alert(data); },

            error: function() {

              alert('La requête n\'a pas abouti'); }

          });    

        });  

      });

      </script>

  </body>

</html>

