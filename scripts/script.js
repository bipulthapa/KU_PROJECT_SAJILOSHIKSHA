function doFirst() {
  sideCloseBtn = document.getElementById("side-news-close-btn"); // side news close button
  sideCloseBtn.addEventListener('click',closeSideNews,false);
}

function closeSideNews() {
  document.getElementById("id02").style.display = "none";
}

window.addEventListener('load',doFirst,false);
