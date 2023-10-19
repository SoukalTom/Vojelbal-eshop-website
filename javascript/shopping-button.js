$(document).ready(function() {    
    $( "#cart-button" ).click(function() {
        $("#shopping-basket").attr('class', 'slide-in');

        $( ".shopping-basket-bg" ).css("display", "block");
        
        $( "#shopping-basket-background" ).animate({
            opacity: 0.5
        }, 500, function() {
                // Animation complete.
            });
    });

    $( "#cart-close" ).click(function() {
        $("#shopping-basket").attr('class', 'slide-out');

        $( "#shopping-basket-background" ).animate({
            opacity: 0
        }, 500, function() {
                // Animation complete.
            });

        setTimeout(function() {
            $( ".shopping-basket-bg" ).delay (500).css("display", "none");
        }, 500 );
    });
});

// ----------------------------- SHOPPING CART ----------------------------------
// removing product from shopping cart
var removeItems = document.getElementsByClassName('sc-remove-product');
checkIfCartIsEmpty()
updateCartItemsQuantity()

for (var i = 0; i < removeItems.length; i++) {
    var button = removeItems[i];
    button.addEventListener('click', removeCartItem)
}
function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    checkIfCartIsEmpty()
    updateCartItemsQuantity()
        
}

function checkIfCartIsEmpty() {
    var itemsCheck = document.querySelector('.shopping-cart-content')
    var emptyCart = document.querySelector('.empty-shopping-cart')
    if (typeof(itemsCheck) != 'undefined' && itemsCheck != null) {
        emptyCart.style.display = "none"
    } else {
        emptyCart.style.display = "block"
    }
}

var addToShoppingCart = document.getElementsByClassName('add-to-cart-btn');
for (var i = 0; i < addToShoppingCart.length; i++) {
    var addButton = addToShoppingCart[i];
    addButton.addEventListener('click', function(event){
        var addButton = event.target;
        var shopItem = addButton.parentElement;
        var name = shopItem.querySelector('.product-name').innerText;
        var price = shopItem.querySelector('.product-price').innerText;
        var picture = shopItem.querySelector('.product-img').src;
        pasteShoppingCartElement(name, price, picture);
    })
}

function updateCartItemsQuantity() {
    var pasteElement = document.getElementById('sc-content-paste');
    var cartItemsContainer = pasteElement.getElementsByClassName('shopping-cart-content');
    var totalSum = 0;
    for (var i = 0; i < cartItemsContainer.length; i++) {
        var cartItem = cartItemsContainer[i];
        var quantityElement = cartItem.querySelector('#sc-product-count');
        var quantity = parseFloat(quantityElement.value);
        totalSum += quantity;

    }
    var numberOfItems = document.querySelector('.number-of-items')
    numberOfItems.innerText = totalSum
}


function pasteShoppingCartElement(name, price, picture) {
    var pasteFile = document.getElementById('sc-content-paste');
    var cartRow = document.createElement('div');
    var itemNameList = pasteFile.getElementsByClassName('sc-product-name');
    cartRow.classList.add('shopping-cart-content')
    for (var i = 0; i < itemNameList.length; i++){
        if (itemNameList[i].innerText == name){
            var addOneMore = itemNameList[i].parentElement.parentElement;
            var updateNumber = addOneMore.querySelector('#sc-product-count')
            var countOfItems = updateNumber.value
            updateNumber.value = countOfItems * 1 + 1
            updateCartItemsQuantity()
            return;
        }
    }
    var cartRowContent = `
        <img src="${picture}">
        <div class="sc-info">
            <a class="sc-product-name">${name}</a><br>
            <div class="sc-product-price">${price}</div>
        </div>
        <input id="sc-product-count" type="number" min="0" max="10" value="1">
        <button class="sc-remove-product"> Odebrat </button>`
    cartRow.innerHTML = cartRowContent;
    pasteFile.append(cartRow);
    cartRow.getElementsByClassName('sc-remove-product')[0].addEventListener('click', removeCartItem);
    updateCartItemsQuantity()
    checkIfCartIsEmpty()
    
}




