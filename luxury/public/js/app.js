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
const price = document.querySelector('.price').textContent;
const subTotal = document.querySelectorAll('.sub-total');
const btnUpdate = document.querySelector('.btn-update');

btnUpdate.addEventListener('click', function () {
  // cắt chuỗi giá sản phẩm
  const array = price.split(".");
  let total = "";
  // nối chuỗi giá sản phẩm và đổi thành số
  array.forEach(element => {
    total += element;
  });
  // tính ra giá mới sau khi cập nhật số lượng
  const newprice = parseInt(total) * a;
  // biến giá mới từ số thành chuỗi
  total = newprice + "";
  // thêm dấu '.' vào sau chuỗi để hiển thị
  let update = "";
  let count = 1;
  for (let i = total.length; i >= 1; i--) {
    if (count == 3 && i != 1) {
      update += total[i - 1] + '.';
      count = 1;
    }
    else {
      update += total[i - 1];
      count++
    }
  }
  update = update.split('').reverse().join('');
  // cập nhật giá mới và hiển thị lên giao diện
  subTotal.forEach(element => {
    element.innerText = update;
  });
});