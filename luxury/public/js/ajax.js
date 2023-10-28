// // Get Product Detail
// const productModalName = document.querySelector('#productModalName');
// const productModalBody = document.querySelector('.product-modal-body');
// const productModalDiv = document.querySelector('#productModal');
// const productModal = new bootstrap.Modal('#productModal');
// const lastState = window.location.pathname;

// async function getProductDetail(productId) {
//     // const url = 'api/products/show';
//     const data = { productId: productId };
//     const loader = document.querySelector('.loader');

//     loader.style.display = 'unset';
//     // Buoc 1: Gui request
//     const response = await fetch({
//         method  : 'POST',
//         headers : {
//             'Content-Type'  : 'application/json',
//             'Accept'        : 'application/json'
//         },
//         body    : JSON.stringify(data)
//     });

//     // Buoc 2: Xu ly ket qua
//     const result = await response.json();
//     let commentList = '';
//     result.comments.forEach(element => {
//         commentList += `<li>${element.rating} - ${element.comment_content}</li>`;
//     });
//     productModalName.innerHTML = result.product_name;
//     productModalBody.innerHTML = `
//     <div class="row">
//         <div class="col-md-4">
//             <img src="assets/images/${result.product_image}" alt="" class="img-fluid">
//         </div>
//         <div class="col-md-8">
//             <p>${result.product_price}</p>
//             <p>${result.product_description}</p>
//             <ul class="comment-list">
//                 ${commentList}
//             </ul>
//             <input type="text" class="form-control" id="comment-content">
//             <input type="number" class="form-control" id="rating">
//             <button class="btn btn-primary btn-comment">Send</button>
//         </div>
//     </div>
//     `;

//     loader.style.display = 'none';
// }

// Cập nhật giỏ hàng
const price = document.querySelector('.price');
const subTotal = document.querySelectorAll('.sub-total');
const btnUpdate = document.querySelector('.btn-update');

async function getUpdateCart() {
    // const url = 'api/products/show';
    // const data = { price: price };
    const loader = document.querySelectorAll('.loader');

    loader[0].style.display = 'unset';
    loader[1].style.display = 'unset';
    // Buoc 1: Gui request
    // const response = await fetch({
    //     method  : 'POST',
    //     headers : {
    //         'Content-Type'  : 'application/json',
    //         'Accept'        : 'application/json'
    //     },
    //     body    : JSON.stringify()
    // });

    // Buoc 2: Xu ly ket qua
    // const result = await response.json();
    // result.comments.forEach(element => {
    //     commentList += `<li>${element.rating} - ${element.comment_content}</li>`;
    // });
    // alert(result);
    alert(price.textContent);
    // productModalName.innerHTML = result.product_name;
    // productModalBody.innerHTML = `
    // <div class="row">
    //     <div class="col-md-4">
    //         <img src="assets/images/${result.product_image}" alt="" class="img-fluid">
    //     </div>
    //     <div class="col-md-8">
    //         <p>${result.product_price}</p>
    //         <p>${result.product_description}</p>
    //         <ul class="comment-list">
    //             ${commentList}
    //         </ul>
    //         <input type="text" class="form-control" id="comment-content">
    //         <input type="number" class="form-control" id="rating">
    //         <button class="btn btn-primary btn-comment">Send</button>
    //     </div>
    // </div>
    // `;

    loader[0].style.display = 'none';
    loader[1].style.display = 'none';
}

btnUpdate.addEventListener('click', getUpdateCart());