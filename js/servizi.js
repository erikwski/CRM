const API = wski.getLinkApi("servizi");
$.get(API + "test").done((j) => console.log(j));
