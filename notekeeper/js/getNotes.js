$(window).on("load", function() {
  mainLoader(false);
  $(document).ready(function() {
    getNotes();
  });
});

function getNotes() {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../server/notes/getNotes.php", true);
  xhr.onloadstart = function() {
    mainLoader(true);
  };
  xhr.onload = function() {
    if (xhr.status == 200 && xhr.readyState == 4) {
      let response = JSON.parse(xhr.response);
      if (response.status == "fail") {
      }
      if (response.status == "success") {
        updateNoteContainer(response.data);
      }
    }
  };
  xhr.onloadend = function() {
    mainLoader(false);
  };
  xhr.send();
}

function get_html(id, title, date) {
  date = new Date(date);
  return `<r-cell span=1>
    <div class="note">
      <h2 class="note__title"><a href='new.php?id=${id}'>${title}</a></h2>
      <p class="note_last_updated">${formatDate(date)}</p>
    </div>
  </r-cell>`;
}

notesContainer = $("#allnotes");
function updateNoteContainer(notes) {
  if (notes.length && notes.length > 0) {
    for (var note of notes) {
      notesContainer.append(get_html(note.id, note.title, note.created));
    }
  } else {
    $("#if_no_note").append(
      `<h2 style="font-weight: 200; text-align: center; margin: 2em 0">Create your first note!</h2>`
    );
  }
}
