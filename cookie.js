let popUp = document.getElementById("cookiePopup");
//Wenn der User den Cookie akzeptiert
document.getElementById("acceptCookie").addEventListener("click", () => {
  let d = new Date();
  //Aktuelle Zeit um 1 erhöhen
  d.setMinutes(2 + d.getMinutes());
  //Generiere Cookie withname = myCookieName, value = thisIsMyCookie und expiry time=1 minute
  document.cookie = "myCookieName=thisIsMyCookie; expires = " + d + ";";
  //Verstecke das Popup
  popUp.classList.add("hide");
  popUp.classList.remove("show");
});
//Prüfen ob das Cookie schon exisiert
const checkCookie = () => {
  let input = document.cookie.split("=");
  //Nach Cookies Prüfen
  if (input[0] == "myCookieName") {
    //popup verstecken
    popUp.classList.add("hide");
    popUp.classList.remove("show");
  } else {
    //popup zeigen
    popUp.classList.add("show");
    popUp.classList.remove("hide");
  }
};
//prüfen ob Cookie vorhanden wenn die Seite geladen wird
window.onload = () => {
  setTimeout(() => {
    checkCookie();
  }, 2000);
};