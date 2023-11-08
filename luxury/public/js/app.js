//Input number
const plus = document.querySelectorAll(".plus");
const minus = document.querySelectorAll(".minus");
const num = document.querySelectorAll(".num");

for (let i = 1; i <= plus.length; i++) {
  const element = plus[i - 1];
  element.addEventListener("click", () => {
    Num(i, "plus");
  });
}
for (let i = 1; i <= minus.length; i++) {
  const element = minus[i - 1];
  element.addEventListener("click", () => {
    Num(i, "minus");
  });
}

function Num(number, fun) {
  for (let i = 0; i < num.length; i++) {
    let a = parseInt(num[i].textContent);

    if (fun == "plus" && i + 1 == number) {
      a++;
      a = (a < 10) ? + a : a;
      num[number - 1].innerText = a;
    }
    else if (fun == "minus" && i + 1 == number) {
      if (a > 0) {
        a--;
        a = (a < 10) ? + a : a;
        num[i].innerText = a;
      }
    }
  }
}

// Cập nhật giỏ hàng
const subTotal = document.querySelectorAll('.sub-total');
const subTotalPay = document.querySelectorAll('.sub-total-pay');
const btnUpdate = document.querySelector('.btn-update');

btnUpdate.addEventListener('click', function () {
  let total = 0;
  let newprice = [];
  for (let i = 0; i < subTotal.length; i++) {
    newprice[i] = subTotal[i].textContent;
    total += parseInt(newprice[i]);
  }

  subTotalPay[0].innerHTML = param(total);
  subTotalPay[1].innerHTML = param(total);
});

function param(total) {
  // biến giá mới từ số thành chuỗi
  newtotal = total + "";
  // thêm dấu '.' vào sau chuỗi để hiển thị
  let update = "";
  let count = 1;
  for (let i = newtotal.length; i >= 1; i--) {
    if (count == 3 && i != 1) {
      update += newtotal[i - 1] + '.';
      count = 1;
    }
    else {
      update += newtotal[i - 1];
      count++
    }
  }
  update = update.split('').reverse().join('');

  return update;
}