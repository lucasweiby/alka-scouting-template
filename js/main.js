$(document).ready(function () {
  var i = setInterval(function () {
    clearInterval(i);

    $(".alka-loading").fadeOut("slow");
    $(".alka-content").toggle("fast");
    $(".alka-home").toggle("fast");
  }, 2000);

  invertColors();

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
  }
});

function invertColors() {
  // var isModelPage;

  // if ($(".alka-header-page").attr("alka-model-name") != undefined) {
  //   $(".alka-header-menu").css("filter", "invert(0)");
  //   $(".alka-header-page").css("filter", "invert(1)");
  //   $(".alka-home-link").css("filter", "invert(1)");
  //   isModelPage = true;
  // } else {
  //   $(".alka-header-menu").css("filter", "invert(1)");
  //   $(".alka-header-page").css("filter", "invert(0)");
  //   $(".alka-home-link").css("filter", "invert(0)");
  //   isModelPage = false;
  // }

  $(".alka-header-menu").on("click", function () {
    $(".alka-menu").css("transform", "translateX(0)");

    var i = setInterval(function () {
      clearInterval(i);

      $(".alka-header-menu").css("display", "none");
      $(".alka-header-page").css("display", "none");
      $(".alka-header").css("width", "auto");
    }, 100);

    // $(".alka-home-link").css("filter", "invert(1)");
  });

  $(".alka-menu-close").on("click", function () {
    $(".alka-menu").css("transform", "translateX(100%)");

    var i = setInterval(function () {
      clearInterval(i);

      $(".alka-header").css("width", "100%");
      $(".alka-header-menu").css("display", "flex");
      $(".alka-header-page").css("display", "inline-block");
    }, 100);

    // $(".alka-home-link").css("filter", isModelPage ? "invert(1)" : "invert(0)");
    // isModelPage = false;
  });
}
