$(document).ready(function () {
  var i = setInterval(function () {
    clearInterval(i);

    $(".alka-loading").fadeOut("slow");
    $(".alka-content").toggle("fast");
    $(".alka-home").toggle("fast");
  }, 2000);

  $(".alka-header-menu").on("click", function () {
    $(".alka-menu").css("transform", "translateX(0)");
    $(".alka-home-link").css("filter", "invert(1)");
  });

  $(".alka-menu-close").on("click", function () {
    $(".alka-menu").css("transform", "translateX(100%)");
    $(".alka-home-link").css("filter", "invert(0)");
  });

  var title = $(document).attr("title");

  // Função para comparar strings
  function compareStrings(str1, str2) {
    // Remove espaços e converte para minúsculas
    var formattedStr1 = str1.replace(/\s+/g, "").toLowerCase();
    var formattedStr2 = str2.replace(/\s+/g, "").toLowerCase();

    // Verifica se a segunda string contém a parte da primeira string
    return (
      formattedStr2.indexOf(formattedStr1) !== -1 ||
      formattedStr1.indexOf(formattedStr2) !== -1
    );
  }

  if (compareStrings(title, "models")) {
    $(".alka-header-menu").css("filter", "invert(0)");
  } else {
    $(".alka-header-menu").css("filter", "invert(1)");
  }
});
