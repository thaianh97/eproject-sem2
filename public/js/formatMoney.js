//vanilla js

var moneyEls = document.getElementsByClassName("money");
for(var i = 0; i < moneyEls.length; i++){
    var money = moneyEls[i].textContent;
    //format
    var moneyFormatted = money.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    moneyEls[i].textContent = moneyFormatted;
}
