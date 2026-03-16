const price = 1000;

document.getElementById("quantity").addEventListener("input", function(){

    let quantity = this.value;

    let total = quantity * price * 30;

    document.getElementById("total").value = total;

});