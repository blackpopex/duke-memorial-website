//Clear Input field when close BTN is clicked
$(document).ready(function () {
  $("#SearchBTN").click(function () {
    $("#searchQuery").val("");
    $("#showSearchResult").empty();
    $("#searchResult").show();
    $("#searchWrapper").removeClass("show-searchResultWrapper");
  });
});
