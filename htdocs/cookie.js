let popUp = document.getElementById("cookiePopup");
//User klickt "Akzeptieren" Button
document.getElementById("acceptCookie").addEventListener("click", () => {
  //Create date object
  let d = new Date();
  //Zeit um 1 Minute erhöhen (cookie wird nach 1 minute gelöscht)
  d.setMinutes(2 + d.getMinutes());
  //Cookie erstellen mit dem Namen = myCookieName, value = thisIsMyCookie und expiry time=1 minute
  document.cookie = "myCookieName=thisIsMyCookie; expires = " + d + ";";
  //Hide popup
  popUp.classList.add("hide");
  popUp.classList.remove("show");
});
//Check ob cookie schon vorhanden ist
const checkCookie = () => {
  //Cookie lesen und Trennung bei "="
  let input = document.cookie.split("=");
  //Nach unserem Cookie überprüfen
  if (input[0] == "myCookieName") {
    //Hide popup
    popUp.classList.add("hide");
    popUp.classList.remove("show");
  } else {
    //Show popup
    popUp.classList.add("show");
    popUp.classList.remove("hide");
  }
};
//Check ob cookie beim Laden der Seite vorhanden ist
window.onload = () => {
  setTimeout(() => {
    checkCookie();
  }, 2000);
};