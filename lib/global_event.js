$("#logout").click(() => {
  $.get("../api/api.login.php?f=logout").done(
    () => (window.location = "../login.php")
  );
});
$("#div_menu").click(() => $("#menu, #menu_opacity").addClass("active_header"));
$("#menu_opacity").click(() =>
  $("#menu, #menu_opacity").removeClass("active_header")
);
