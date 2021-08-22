let saveButton = $("#saveButton");

function sendToServer(user) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../server/notes/index.php", true);
  xhr.onloadstart = function() {
    //show loader
    saveButton.addClass("saving");
    saveButton.val("Saving..");
  };
  xhr.onload = function() {
    //reseting stuff
    clearErrorMessage();
    if (xhr.status == 200 && xhr.readyState == 4) {
      let response = JSON.parse(xhr.response);
      if (response.status == "fail") {
        saveButton.val("Unsaved");
        updateErrorMessage(response.data);
        $("#response_message").html(
          `<br><p style='color: red'>${response.message || ""}</p>`
        );
        isRequestMade = false;
        return;
      }
      if (response.status == "success") {
        saveButton.val("Saved");
        $("#response_message").html(
          `<br><p style='color: green'>${response.data.message || ""}</p>`
        );
        isRequestMade = false;
        return;
      }
      isRequestMade = true;
    }
  };
  xhr.onloadend = function() {
    saveButton.removeClass("saving");
  };
  xhr.send(user);
}

function getNoteData(note) {
  note.delete("title");
  note.delete("content");
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../server/notes/index.php", true);
  xhr.onloadstart = function() {
    mainLoader(true);
  };
  xhr.onload = function() {
    if (xhr.status == 200 && xhr.readyState == 4) {
      let response = JSON.parse(xhr.response);
      if (response.status == "fail") {
      }
      if (response.status == "success") {
        updateValue(response.data);
      }
    }
  };
  xhr.onloadend = function() {
    mainLoader(false);
  };
  xhr.send(note);
}

function deleteNote(id) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../server/notes/delete.php?id=" + id, true);
  xhr.onloadstart = function() {
    mainLoader(true);
  };
  xhr.onload = function() {
    if (xhr.status == 200 && xhr.readyState == 4) {
      let response = JSON.parse(xhr.response);
      if (response.status == "fail") {
        alert("faild to delete");
      }
      if (response.status == "success") {
        window.location.replace("index.php");
      }
    }
  };
  xhr.onloadend = function() {
    mainLoader(false);
  };
  xhr.send();
}

$("#delete_note").on("click", function() {
  deleteNote($("#note_id").val());
});
