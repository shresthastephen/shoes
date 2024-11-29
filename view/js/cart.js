const addToCartBtns = document.querySelectorAll(".buy-icon");
const cart = document.querySelector(".cart-sec");
const mainBuyIcon = document.querySelector(".main-buy-icon");

let data = [];
let showCart = false;

const makeCart = () => {
  data = JSON.parse(localStorage.getItem("data") || "[]");

  cart.innerHTML = "";
  cart.innerHTML += "<h2>Shopping Cart</h2>";

  let totalPrice = 0;

  data.forEach((item, i) => {
    totalPrice += data[i].price;
    cart.innerHTML += `<div class="ind-cart">
                <div class="cart-name">${data[i].pName}</div>
                <div class="cart-price">${data[i].price}</div>
            </div>`;
  });

  cart.innerHTML += `
    <div class="total-price">
        <span>Total: </span>
        <span>${totalPrice}</span>

    </div>  
    <div class ="checkoutbtn">
    
    <button class = "checkbtn"><a href="./../view/checkout.php">Checkout</button>
    </div>
    `;
  console.log("abc");
};
makeCart();

const handleShowCart = () => {
  showCart = !showCart;
  if (showCart) cart.className = "cart-sec show-cart";
  else cart.className = "cart-sec";
};

addToCartBtns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    let indData = {
      pName:
        addToCartBtns[i].parentElement.previousElementSibling
          .previousElementSibling.previousElementSibling.innerText,
      price: parseInt(
        addToCartBtns[i].parentElement.previousElementSibling.innerText.replace(
          "$",
          ""
        )
      ),
    };

    if (data.length == 0) data.push(indData);
    else {
      let index = data.findIndex((item) => {
        return item.pName == indData.pName && item.price == indData.price;
      });

      if (index < 0) data.push(indData);
    }

    localStorage.setItem("data", JSON.stringify(data));
    makeCart();
  });
});
mainBuyIcon.addEventListener("click", handleShowCart);
