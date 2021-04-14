function toggleModalLocation() {
  event.preventDefault();
  $(".modal-location").toggleClass("modal--close");
  document.body.style.overflowY = !$(".modal-location").hasClass("modal--close")
    ? "hidden"
    : "scroll";
}

function toggleModalSignup(event) {
  event.preventDefault();
  $(".modal-signup").toggleClass("modal--close");
  document.body.style.overflowY = !$(".modal-signup").hasClass("modal--close")
    ? "hidden"
    : "scroll";
}

function toggleModalAddLocation(event) {
  event.preventDefault();
  $(".modal-addlocation").toggleClass("modal--close");
  document.body.style.overflowY = !$(".modal-addlocation").hasClass(
    "modal--close"
  )
    ? "hidden"
    : "scroll";
}

$(document).ready(function () {
  $(".header-section__item").hover(function () {
    $(this).toggleClass("header-section__item--active");
  });
  new Swiper(".swiper-container", {
    direction: "horizontal",
    slidesPerView: 4,
    loop: true,
    spaceBetween: 10,
  });

  // MODAL LOCATION
  $("#select-location-btn").click(toggleModalLocation);
  $("#close-modal-location-btn").click(toggleModalLocation);
  $("#modal-location").click(function (event) {
    if (event.target.id === "modal-location") toggleModalLocation();
  });

  // MODAL SIGNUP
  // $('#modal-signup').click(function (event) {
  //      if (event.target.id === 'modal-signup') toggleModalSignup(event);
  // });
  // $('#signup-btn').click(toggleModalSignup);
  // $('#close-modal-signup-btn').click(toggleModalSignup);

  // MODAL ADD LOCATION
  $("#modal-addlocation").click(function (event) {
    if (event.target.id === "modal-addlocation") toggleModalAddLocation(event);
  });
  $("#modal-addlocation-btn").click(toggleModalAddLocation);
  $("#close-modal-addlocation-btn").click(toggleModalAddLocation);

  // BARS ICON
  $("#dashboard-location-btn").click(function () {
    $(".dashboard__location-btns").toggleClass(
      "dashboard__location-btns--hide"
    );
  });
});
