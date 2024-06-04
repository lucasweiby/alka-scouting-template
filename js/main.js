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

  $(document).on('mousemove', function(e) {
    $('.alka-circularcursor').css({
      left: e.pageX,
      top: e.pageY
    });
  })

  $("#defaultOpen").click();
  $("#defaultOpen").addClass('active');
});

function openTab(evt, tabName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("alka-models-navigation-tab");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tabName).style.display = "grid";
  evt.currentTarget.className += " active";
}


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

