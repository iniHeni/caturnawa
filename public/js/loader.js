function removeLoader() {
    $("#loadingDiv").fadeOut(200, () => {
      $("#loadingDiv").remove();
    });
  }
  
  $(window).on("load", () => {
    setTimeout(removeLoader, 2000);
  
    $("body").css(
      "overflow-y",
      "hidden",
      setTimeout(() => {
        $("body").css("overflow-y", "visible");
      }, 2000)
    );
  });