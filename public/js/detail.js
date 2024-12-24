let count = 0;
//if add to cart btn clicked
$(".cart-btn").on("click", function () {
  let cart = $("#cart");
  // find the img of that card which button is clicked by user
  let imgtodrag = $(this)
    .parent(".buttons")
    .parent(".content")
    .parent(".card")
    .find("img")
    .eq(0);
  if (imgtodrag) {
    // duplicate the img
    var imgclone = imgtodrag
      .clone()
      .offset({
        top: imgtodrag.offset().top,
        left: imgtodrag.offset().left,
      })
      .css({
        opacity: "0.8",
        position: "absolute",
        height: "150px",
        width: "150px",
        "z-index": "99999",
      })
      .appendTo($("body"))
      .animate(
        {
          top: cart.offset().top + 5,
          left: cart.offset().left + 12,
          width: 75,
          height: 75,
        },
        1000,
        "easeInOutExpo"
      );

    setTimeout(function () {
      count++;
      $(".navbar .navbar-extra .numb").text(count);
    }, 1500);

    imgclone.animate(
      {
        width: 0,
        height: 0,
      },
      function () {
        $(this).detach();
      }
    );
  }
});

// Toggle class active untuk search form
const searchForm = document.querySelector(".search-form");
const searchBox = document.querySelector("#search-box");

document.querySelector("#search-button").onclick = (e) => {
  searchForm.classList.toggle("active");
  searchBox.focus();
  e.preventDefault();
};

// Klik di luar sidebar untuk menghilangkan nav
const sb = document.querySelector("#search-button");

document.addEventListener("click", function (e) {
  if (!sb.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove("active");
  }
});
