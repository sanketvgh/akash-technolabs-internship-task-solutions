let form = document.getElementById("signupForm");

let formMessage = $(".form__message");
let isRequestMade = false;

form.addEventListener("submit", function(e) {
  form.setAttribute("method", "post");
  e.preventDefault();
  let formData = new FormData(form);
  for (let key of formData.keys()) {
    formData.set(key, formData.get(key).trim());
  }
  if (!isRequestMade) {
    sendToServer(formData);
    isRequestMade = true;
  }
});

function sendToServer(user) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../server/signup/index.php", true);
  xhr.onloadstart = function() {
    //show loader
    mainLoader(true);
  };
  xhr.onload = function() {
    //reseting stuff
    clearErrorMessage();
    if (xhr.status == 200 && xhr.readyState == 4) {
      let response = JSON.parse(xhr.response);
      console.table(response);
      if (response.status == "fail") {
        updateErrorMessage(response.data);
        isRequestMade = false;
        return;
      }
      if (response.status == "success") {
        window.location.replace("../notes/");
        isRequestMade = false;
        return;
      }
      isRequestMade = true;
    }
  };
  xhr.onloadend = function() {
    mainLoader(false);
  };
  xhr.send(user);
}
