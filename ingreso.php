<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA FORM</title>
</head>
<body>
  <h1>Personal data form</h1>

  <form method="post" action="mete.php">
    <input type="text" 
    id="id_number"
    placeholder="Enter your ID Number"
    required>
    <br>

    <input type="text" 
    id="name"
    placeholder="Enter your name"
    required>
    <br>
    
    <input type="text" 
    id="last_name"
    placeholder="Enter your last-name"
    required><br>
    
    <button id="b1">SEND</button>
  </form>

  <p id="respuesta"></p>

  <script src="./jquery.js"></script>

  <script>
    let x=$(document)
    x.ready(inicializarEventos)

    function inicializarEventos() {
      let x= $("#b1")
      x.click(fuera)
    }

    function fuera() {
      let x=$("#id_number").val() // captura el valor dentro de id_number y asignarlo a x
      let y = $("#name").val();
      let z = $("#last_name").val();
      $.ajax({ // objeto ajax -> elementos asincronos
        async:true,
        type:"POST",
        dataType:"html",
        url:"mete.php",
        data:{d1:x, d2:y, d3:z},
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
      $("#respuesta").text(datos)
    }

    function problemas() {
      $("#respuesta").text("Intente luego")
    }

  </script>
</body>
</html>