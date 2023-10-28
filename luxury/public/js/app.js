//Input number
const plus = document.querySelector(".plus");
const minus = document.querySelector(".minus");
const num = document.querySelector(".num");

let a = 1;

plus.addEventListener("click", () => {
  a++;
  a = (a < 10) ? "" + a : a;
  num.innerText = a;
});

minus.addEventListener("click", () => {
  if (a > 0) {
    a--;
    a = (a < 10) ? "" + a : a;
    num.innerText = a;
  }
});

// Cập nhật giỏ hàng
const price = document.querySelector('.price').textContent;
const subTotal = document.querySelectorAll('.sub-total');
const btnUpdate = document.querySelector('.btn-update');
// const number = document.querySelector('.num').textContent;

btnUpdate.addEventListener('click', function () {
  const total = price * a;
  // subTotal.forEach(element => {
  //     element
  // });
  alert(total);
});