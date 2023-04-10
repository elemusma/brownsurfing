var numerInputs = document.querySelectorAll(".number-input");


for (i = 0; i < numerInputs.length; i++) {
    console.log(numerInputs[i])
    numerInputs[i].addEventListener("input", function () {
        // Replace any non-numeric, comma, or period characters with an empty string
        this.value = this.value.replace(/[^0-9,\.]/g, "");
    });
}

// Select the input fields and the calculate button
const initialAmountInput = document.getElementById("initialAmount");
const stockPriceInput = document.getElementById("stockPrice");
const numberOfSharesInput = document.getElementById("numberOfShares");
const calculateButton = document.getElementById("calculateButton");
const calculateProfitButton = document.querySelector('#calculateProfitButton');

const numberShares = document.querySelector(".col-number-shares");
const dividendYield = document.querySelector(".col-dividend-yield");
const timePeriod = document.querySelector(".col-time-period");
const calculateProfits = document.querySelector(".col-calculate-profits-btn");


// Add an event listener to the calculate button
calculateButton.addEventListener("click", function () {
    // Calculate the number of shares based on the initial amount and stock price
    const initialAmount = parseFloat(initialAmountInput.value.replace(/,/g, ''));
    const stockPrice = parseFloat(stockPriceInput.value.replace(/,/g, ''));
    const numberOfShares = Math.floor(initialAmount / stockPrice);

    // Update the "Number of Shares" input field with the calculated value
    numberOfSharesInput.value = numberOfShares.toLocaleString();

    numberShares.classList.remove('inactive');
    numberShares.classList.add('active');
    dividendYield.classList.remove('inactive');
    dividendYield.classList.add('active');
    timePeriod.classList.remove('inactive');
    timePeriod.classList.add('active');
    calculateProfits.classList.remove('inactive');
    calculateProfits.classList.add('active');

});


// const numberOfSharesInput = document.querySelector('#numberOfShares');

const dividendYieldInput = document.querySelector('#dividendYield');
const timePeriodSelect = document.querySelector('#timePeriod');
const annualEarningsCol = document.querySelector('.col-annual-earnings');
const annualEarningsInput = document.querySelector('#annualEarnings');
// const annualEarningsInput = document.createElement('input');
annualEarningsInput.type = 'number';
annualEarningsInput.name = 'annual-earnings';
annualEarningsInput.id = 'annualEarnings';
annualEarningsInput.readOnly = true;
// document.querySelector('.col-calculate-profits-btn').appendChild(annualEarningsInput);

calculateProfitButton.addEventListener('click', () => {

    annualEarningsCol.classList.remove('inactive');
    annualEarningsCol.classList.add('active');

    const numberOfShares = numberOfSharesInput.value;
    const dividendYield = dividendYieldInput.value;
    const timePeriod = timePeriodSelect.value;
    let annualEarnings = numberOfShares * dividendYield;
    if (timePeriod === 'monthly') {
        annualEarnings *= 12;
    } else if (timePeriod === 'quarterly') {
        annualEarnings *= 4;
    }

    annualEarningsInput.value = annualEarnings.toFixed(2);
    // annualEarningsInput.value = annualEarnings.toFixed(2);
});