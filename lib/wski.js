class Wski {
  constructor() {}

  getLinkApi(l) {
    return "/api/api." + l + ".php?f=";
  }
  validateEmail(email) {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  }
  caricaPagina(url, full_url) {
    window.location = full_url ? url : "../views/" + url;
  }
}
