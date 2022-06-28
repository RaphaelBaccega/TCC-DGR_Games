// Filtro
$(".dropdown-item").on("click", function () {
  var filter = $(this).attr("data-cad");

    $("#jogos .jogo").each(function () {
      if (!$(this).hasClass(filter)) {
        $(".paginacao").hide();
        $(this).hide();
      } else {
        $(this).show();
        $(".paginacao").show();
      }
    });

});

$("#apagar-filtro").on("click", function(){
  $("#jogos .jogo").each(function () {
    $(this).hide();
  });
  $("#jogos .jogo").slice(0, 8).each(function(){
    $(this).show();
  })
  $(".paginacao").show();
})

