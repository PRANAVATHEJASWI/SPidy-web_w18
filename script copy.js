const blob = document.querySelector("#blob");
const body = document.querySelector("body");

body.addEventListener("mousemove", function (dets) {
  let half = blob.offsetWidth / 2;
  blob.style.left = `${dets.x - half}px`;
  blob.style.top = `${dets.y - half}px`;
});