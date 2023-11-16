const d = document;

$(d).ready(function () {
  $("#textoForm").submit(function (event) {
    event.preventDefault();
    let autor = $("#autor").val();
    let texto = $("#texto").val();
    $.ajax({
      url: "./../../pruebaBD/controller/newText.php",
      type: "POST",
      data: { autor: autor, texto: texto },
      success: function (response) {
        $("#respuesta").html(response);
      },
    });
  });
});
