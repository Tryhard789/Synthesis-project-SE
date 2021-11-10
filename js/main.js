let carts = document.querySelectorAll('.add-to-cart-link');

let products = [
    {
        name: 'Pizza',
        tag:'pizza',
        price:10,
        inCart:0
    },
    {
        name: 'Doritos',
        tag:'doritos',
        price:20,
        inCart:0
    },
    {
        name: 'Ice Cream',
        tag:'cream',
        price:30,
        inCart:0
    },
    {
        name: 'Banh Mi',
        tag:'banhmi',
        price:40,
        inCart:0
    },
    {
        name: 'Hamburger',
        tag:'hamburger',
        price:50,
        inCart:0
    },
    {
        name: 'Sushi',
        tag:'sushi',
        price:60,
        inCart:0
    },
    {
        name: 'Pepsi',
        tag:'pepsi',
        price:5,
        inCart:0
    },
    {
        name: 'Mountain Dew',
        tag:'mountain',
        price:6,
        inCart:0
    },
    {
        name: 'Beer',
        tag:'beer',
        price:7,
        inCart:0
    },
    {
        name: 'Diet Coke',
        tag:'dcoke',
        price:8,
        inCart:0
    },
    {
        name: 'Coca',
        tag:'coca',
        price:9,
        inCart:0
    },
    {
        name: 'Lime juice',
        tag:'lime',
        price:10,
        inCart:0
    }
]

for(let i = 0; i < carts.length; i++){
    carts[i].addEventListener('click',()=>{
        cartNumbers(products[i]);
        price(products[i]);
    })
}
function reloadCart(){
    let productNumbers = localStorage.getItem('cartNumbers');
    if(productNumbers){
        document.querySelector('.product-count').textContent = productNumbers + 1;
    }
}
function cartNumbers(product){
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);
    if(productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.product-count').textContent = productNumbers + 1;
    }
    else{
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.product-count').textContent = 1;
    }

    setItems(product);
}

function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems =JSON.parse(cartItems);

    if(cartItems != null){
        if(cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}
function price(product){
    let cartCost = localStorage.getItem('totalCost');
    if(cartCost != null){
        cartCost = parseInt(cartCost);
        localStorage.setItem('totalCost', cartCost + product.price);
    } else {
        localStorage.setItem('totalCost', product.price);
    }
}

function displayCart(){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".productcontainer");
    let cartCost = localStorage.getItem('totalCost');
    if( cartItems && productContainer){
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML +=`
            <div class="ptag">
            <div class="pname">${item.name}</div>
            <div class="pprice">${item.price}</div>
            <div class="pquan">${item.inCart}</div>
            </div>
            `
        });
        productContainer.innerHTML +=`<div class="checkout"><h3>Total : ${cartCost}</h3></div>`;
    }
}
function displayBill(){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".finalCart");
    let cartCost = localStorage.getItem('totalCost');
    if( cartItems && productContainer){
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML +=`
            <tr>
                <td>${item.inCart} x </td>
                <td>${item.name}</td>
                <td>$${item.price * item.inCart}</td>
            </tr>
            `
        });
        let finalcost = document.querySelector('.totalcost');
        finalcost.innerHTML = '$' + cartCost;
    }
}
function saveData(i){
    localStorage.setItem('productId', i);  
}
function getId(){
    let i = localStorage.getItem('productId');
    i = parseInt(i);
    let product = products[i];
    document.getElementById("pic").src = "img/product-" + (i+1) + ".png";
    document.getElementById("productname").innerHTML = product.name;
    document.getElementById("price").innerHTML = `$${product.price}`;
}
function clearCart(){
    localStorage.clear();
    location.reload();
}
function addInDetail(){
    let i = localStorage.getItem('productId');
    i = parseInt(i);
    cartNumbers(products[i]);
    price(products[i]);
}
reloadCart();
displayCart();
displayBill();