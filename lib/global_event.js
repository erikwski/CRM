$("#logout").click(() => {
  $.get("../api/api.login.php?f=logout").done(
    () => (window.location = "../login.php")
  );
});
