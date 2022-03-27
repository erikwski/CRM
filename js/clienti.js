$("#titolo").html("Ricerca clienti");
const API = wski.getLinkApi("clienti");
$.get(API + "test").done((j) => console.log(j));
