const checkoutBill = document.querySelector(".checkout-bill");
let donwload;
const paymentMethods = document.querySelectorAll(".pm");
const cartData = JSON.parse(localStorage.getItem("data") || "[]");

const populateBill = () => {
  checkoutBill.innerHTML = "";

  let billNo = Math.floor(Math.random() * 55555) + 12345;
  let date = new Date();
  let totalAmt = 0;

  checkoutBill.innerHTML += `
        <div class="bill-title">
            <h1>TrendyShoes</h1>
        </div>
        <div class="billno-date">
            <div class="bill-no">Bill no: ${billNo}</div>
            <div class="date">Date: ${date.getMonth()}/${date.getDate()}/${date.getFullYear()}</div>
        </div>
        <div class="bill-items"></div>
    `;

  const billItems = document.querySelector(".bill-items");

  cartData.forEach((item) => {
    let indTotal = parseInt(item.price) * parseInt(item.units);
    totalAmt += item.price;

    billItems.innerHTML += `
            <div class="ind-bill-item">
                <div class="item-name">${item.pName}</div>
                <div class="unit-price">
                    <div class="price">$ ${item.price}</div>
                </div>
            </div>
        `;
  });

  checkoutBill.innerHTML += `
        <div class="total">
            <div class="total-txt">Total</div>
            <div class="total-price">$ ${totalAmt}</div>
        </div>
    `;
};
populateBill();

paymentMethods.forEach((elem, i) => {
  elem.addEventListener("click", () => {
    if (i == 0) {
      elem.className = "pm cod choosen-payment";
      paymentMethods[1].className = "pm esewa";
    } else if (i == 1) {
      elem.className = "pm esewa choosen-payment";
      paymentMethods[0].className = "pm cod";
    }
  });
});
