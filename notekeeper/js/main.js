$(window).on("load", function() {
  mainLoader(false);
});

function mainLoader(show) {
  let loadingBar = $(".loading-bar");
  if (show) {
    loadingBar.addClass("loading-bar--show");
    return;
  }
  loadingBar.removeClass("loading-bar--show");
}
//start: login & signup form error message ui update
function clearErrorMessage() {
  formMessage.removeClass("form__message--show");
  formMessage.text("");
}

function updateErrorMessage(errors) {
  for (let label of Object.keys(errors)) {
    let tag = $(`#${label}Msg`);
    tag.text(errors[label]);
    tag.addClass("form__message--show");
  }
}
//end
function formatDate(date) {
  var months = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec"
  ];
  var year = date.getFullYear(),
    month = date.getMonth(),
    day = date.getDate();

  return day + ", " + months[month] + " " + year;
}
