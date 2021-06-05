function askBeforeDelete(a, id) {
  if (confirm("This Delete will be Permanent, Are you sure?")) {
    a.href = "perform/delete.php?id=" + id;
  } else {
    a.href = "#";
  }
}

function askBeforeMoveItToTrash(a, id) {
  if (confirm("You can retrive this user data by going to trash.")) {
    a.href = "perform/trashit.php?id=" + id + "&do=move";
  } else {
    a.href = "#";
  }
}

//Alert
// Selecting all required elements
const wrapper = document.querySelector(".wrapper"),
  toast = wrapper.querySelector(".toast"),
  closeIcon = toast.querySelector(".close-icon");

closeIcon.onclick = () => {
  //hide toast notification on close icon click
  wrapper.classList.add("hide");
};

setTimeout(() => {
  //hide the toast notification automatically after 5 seconds
  wrapper.classList.add("hide");
}, 5000);

setTimeout(() => {
  //remove from dom
  wrapper.remove();
}, 6000);
