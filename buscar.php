<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TABLE</title>
</head>
<body>

<form action="post" action="bus.php">
  <label>Buscar por cedula</label>
  <input type="text" id="busca">
  <button type="submit" id="b">Buscar</button>
</form>


  <div id="respuesta"></div>

  <script src="./jquery.js"></script>

  <script>
    let x=$(document)
    x.ready(inicializarEventos)

    function inicializarEventos() {
      let x= $("#b")
      x.click(fuera)
    }

    function fuera() {
      let x=$("#busca").val() // captura el valor dentro de id_number y asignarlo a x

      $.ajax({ // objeto ajax -> elementos asincronos
        async:true,
        type:"POST",
        dataType:"html",
        url:"bus.php",
        data:{d1:x},
        beforeSend:llego,
        success:llegada,
        timeout:5000, // segundos de chance para que se ejecute
        error:problemas // si pasa el timeout entonces que arroje un error
    })
    return false
    }

    function llego() {
      let x = $("#respuesta")
      x.html("<h2>Cargando</h2>") // poner imagen de loading
    }

    function llegada(datos) {
      $("#respuesta").html(datos)
    }

    function problemas() {
      $("#respuesta").text("Intente luego")
    }

  </script>

</body>
</html>