//start: note edtior
var editor = new Simditor({
  textarea: $("#newNoteTextArea"),
  placeholder: "Write your sweet note..",
  toolbar: [
    "bold",
    "italic",
    "underline",
    "strikethrough",
    "ol",
    "ul",
    "blockquote",
    "table",
    "hr",
    "indent",
    "outdent",
    "alignment"
  ],
  upload: false
});

let isSaved = false;

let form = document.getElementById("noteForm");
let formMessage = $(".form__message");
let isRequestMade = false;
let title = $("#title");

form.addEventListener("submit", function(e) {
  form.setAttribute("method", "post");
  e.preventDefault();
  let formData = new FormData(form);
  formData.set("content", editor.getValue());
  for (let key of formData.keys()) {
    formData.set(key, formData.get(key).trim());
  }
  formData.set("update", "true");
  if (!isRequestMade) {
    sendToServer(formData);
    isRequestMade = true;
  }
});

$(document).ready(function() {
  let formData = new FormData(form);
  if (formData.has("id")) getNoteData(formData);
});

editor.on("valuechanged", function() {
  saveButton.val("Save");
});

function updateValue(data) {
  editor.setValue(data.content);
  title.val(data.title);
  $("#note_info").append(
    `<r-cell span=1><h5>Created: </h5>${formatDate(
      new Date(data.created)
    )}</r-cell><r-cell span=2><h5>Last saved: </h5>${formatDate(
      new Date(data.last_updated)
    )}</r-cell>`
  );
}
