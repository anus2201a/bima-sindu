///////////////*****//////////////////
// RESPONSIVE NAVIGATION
// OPEN BTN
$(document).ready(function () {
    $("#navbar").on("click", function() {
      $(".nveMenu").addClass("is-opened");
      $(".overlay").addClass("is-on");
    });

    $(".overlay").on("click", function() {
      $(this).removeClass("is-on");
      $(".nveMenu").removeClass("is-opened");
    });
  });
// CLOSE BTN
  $(".overlay").on("click", function() {
    $(this).removeClass("is-on");
    $(".nveMenu").removeClass("is-opened");
  });

  $(".close-btn-nav").click(function(){
  $(".nveMenu").removeClass("is-opened");
  $(".overlay").removeClass("is-on");
  });
  // RESPONSIVE NAVIGATION


  // Slide JS Start Here
$("#slide-serv-owl").owlCarousel({
  loop: true,
  items: 1,
  autoplay: false,
  center: true,
  loop: true,
  infinite: true,
  dots: false,
  margin: 15,
  nav: true,
  autoplayTimeout: 2000,
  autoplayHoverPause: true,
  navText: [
    '<i class="far fa-chevron-left" aria-hidden="true"></i>',
    '<i class="far fa-chevron-right" aria-hidden="true"></i>',
  ],
});
// Slide JS End Here

// Text Editor Section Start Herre
$(document).ready(function (evt) {
  // FIXME : enable image & table resize
  document.execCommand("enableAbsolutePositionEditor", false, true);
  document.execCommand("enableInlineTableEditing", false, true);
  document.execCommand("enableObjectResizing", false, true);

  // TODO : enable insert table

  $(".btns button").click(function (evt) {
    let value = null;
    if ($(this).hasClass("prompt")) {
      value = prompt("Enter the link here: ", "http://");
    }
    execCmd($(this).data("cmd"), value);
  });

  $(".btns select").change(function (evt) {
    execCmd($(this).data("cmd"), $(this).val());
  });

  $(".btns input").change(function (evt) {
    execCmd($(this).data("cmd"), $(this).val());
  });
});

function execCmd(cmd, value) {
  document.execCommand(cmd, false, value);
}

function getStyle() {
  const colour = document.queryCommandValue("ForeColor");
  const fontSize = document.queryCommandValue("FontSize");

  alert(colour + ", " + fontSize);
}

// Text Editor JS End Here

// Step Form Js Section Start Here

var currentTab = 0;
showTab(currentTab);

function showTab(n) {
  var x = document.getElementsByClassName("step");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == x.length - 1) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n);
}

function nextPrev(n) {
  var x = document.getElementsByClassName("step");
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("signUpForm").submit();
    return false;
  }
  showTab(currentTab);
}

// Step Form Js Section End Here
