let search = document.querySelector(".search-box");

document.querySelector("#search-icon").onclick = () => {
  search.classList.toggle("active");
  navbar.classList.remove("active");
};

let navbar = document.querySelector(".navbar");

document.querySelector("#menu-icon").onclick = () => {
  navbar.classList.toggle("active");
  search.classList.remove("active");
};

window.onscroll = () => {
  navbar.classList.toggle("active");
  search.classList.remove("active");
};

let header = document.querySelector("header");

window.addEventListener("scroll", () => {
  header.classList.toggle("shadow", window.scrollY > 0);
});

/*cart muncul*/
let shoppingButton = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let body = document.querySelector('body');
let shopLogo = document.querySelector('bx bx-cart-alt');

shoppingButton.addEventListener('click', () => {
  if (body.classList.contains('active')) {
      body.classList.remove('active');
  } else {
      body.classList.add('active');
  }
});

closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

/*reservasi form*/
function validateForm() {
  let date = document.getElementById("date").value;
  let hours = document.getElementById("hours").value;
  let name = document.getElementById("name").value;
  let number = document.getElementById("number").value;
  let person = document.getElementById("person").value;

  if (date === "" || hours === "hour-select" || name === "" || number === "" || person === "") {
      alert('Please fill in all fields');
      return false;
  }

  // Kode validasi tambahan bisa ditambahkan di sini

  alert('Your reservation has been submitted!');
  return true;
}

