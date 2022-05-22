if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
  $("#whatsapp").replaceWith(
    '<a href="https://api.whatsapp.com/send/?phone=%2B593992664880&text&app_absent=0" target="_blank">+593 99 266 4880</a>'
  );
} else {
  $("#whatsapp").replaceWith(
    '<a href="https://web.whatsapp.com/send/?phone=%2B593992664880&text&app_absent=0" target="_blank">+593 99 266 4880</a>'
  );
}
$(".menu-icon").click(function () {
  $(".menu").toggleClass("active");
  $(".menu-icon").toggleClass("active")
  $(".menu-icon i").toggleClass("fa-times");
});

