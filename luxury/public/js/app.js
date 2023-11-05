//Input number
const plus = document.querySelector(".plus");
const minus = document.querySelector(".minus");
const num = document.querySelector(".num");

let a = parseInt(num.textContent);

plus.addEventListener("click", () => {
  a++;
  a = (a < 10) ? + a : a;
  num.innerText = a;
});

minus.addEventListener("click", () => {
  if (a > 0) {
    a--;
    a = (a < 10) ? + a : a;
    num.innerText = a;
  }
});

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

// Xóa sản phẩm ra khỏi giỏ hàng
const remove = document.querySelector('#remove-product-id');
const product_id = document.querySelector('#product-id');

remove.addEventListener('click', function () {
  product_id.remove();
})