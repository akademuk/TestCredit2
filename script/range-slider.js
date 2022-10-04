const valueMoney = document.getElementById("valueMoney");
const innerMoney = document.getElementById("innerMoney");
const valueDate = document.getElementById("valueDate");
const innerDate = document.getElementById("innerDate");
const innerMoneyCalc = document.getElementById("innerMoneyCalc");
let resultCalc = document.getElementById("resultCalc");
let sum = document.getElementById("resultPercent");
const valuePercent = 0.0001;

function rangeMoney(){
    rangePercent = (valueMoney.value / valueMoney.max)*100;
    valueMoney.style.background = `linear-gradient(to right, #57C533 ${rangePercent}%, #CDCBCB ${rangePercent}%`;
    innerMoney.textContent = valueMoney.value + " KZT";
    innerMoneyCalc.textContent = valueMoney.value + " KZT";

    rangeDate = (valueDate.value / valueDate.max)*100;
    valueDate.style.background = `linear-gradient(to right, #57C533 ${rangeDate}%, #CDCBCB ${rangeDate}%)`;
    innerDate.textContent = valueDate.value + " дней";

    letDate = (Number(valueDate.value) * Number(valuePercent));
    valPer = (Number(valueMoney.value) * Number(letDate));
    let summ = (Number(valueMoney.value) + Number(valPer))
    let res = (summ - Number(valueMoney.value))
    sum.textContent = Math.round(res * 100) / 100 + " KZT";

    resultCalc.textContent = (Number(valueMoney.value) + Number(res)) + " KZT";

    // let sumDate = document.getElementById("resultDate");
    // var days = valueDate.value;
    
    // var newDate = new Date(Date.now()+days*24*60*60*1000)
    // sumDate.textContent = newDate.toLocaleDateString('de-DE');
}
rangeMoney();
