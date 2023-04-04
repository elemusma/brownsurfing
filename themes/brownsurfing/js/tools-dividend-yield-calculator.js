const initialAmount = document.querySelector('#initialAmount');
let initialAmountValue = false
const stockPrice = document.querySelector('#stockPrice');
let stockPriceValue = false
const numberOfShares = document.querySelector('#numberOfShares');
const dividendYield = document.querySelector('#dividendYield');
let dividendYieldValue = false
const timePeriod = document.querySelector('#timePeriod');
// let timePeriodValue = false
const annualEarnings = document.querySelector('#annualEarnings');

// initialAmount.addEventListener('change', function () {
//     let initialAmountValue = true
// })

stockPrice.addEventListener('change', function () {
    let stockPriceValue = true

    numberOfShares.value = Math.floor(+(initialAmount.value / stockPrice.value))
    // numberOfShares.value = +numberOfSharesValue
    console.log(typeof numberOfShares.value)
})

timePeriod.addEventListener('change', function () {
    if (timePeriod.value == 'monthly') {
        var timePeriodValue = 12
    }
    if (timePeriod.value == 'quarterly') {
        var timePeriodValue = 4
    }
    if (timePeriod.value == 'annually') {
        var timePeriodValue = 1
    }
    annualEarnings.value = (numberOfShares.value * dividendYield.value * timePeriodValue).toFixed(2)
})