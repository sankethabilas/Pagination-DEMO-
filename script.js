function loadPage(x) {
  var page = x;

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4 && r.status == 200) {
      var t = r.responseText;
      document.getElementById("loadpage").innerHTML = t;
    }
  }
  r.open("GET", "paginationProcess.php?p=" + page, true);
  r.send();
}
