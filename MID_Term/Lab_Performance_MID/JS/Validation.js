const unitprice= 1000;
const days= 30;

const quantityInput= document.getElementById("quantity");
const totalPriceInput= document.getElementById("totalprice");

function calculateTotal(){

    let quantity= parseInt(quantityInput.value) || 0;

    if(quantity < 0){
        alert("Quantity cannot be negative!");

        quantity= 0;
        quantityInput.value= 0;
    }

    let total= unitprice * quantity * days;
    totalPriceInput.value = total;


    if(total> 1000){
        alert("You are eligible for a gift coupon!")
    }
}

quantityInput.addEventListener("input", calculateTotal);