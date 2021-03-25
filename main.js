




const valutes = {};

const elementUSD = document.querySelector('[course="USD"]');
const elementEUR = document.querySelector('[course="EUR"]');
const elementGBP = document.querySelector('[course="GBP"]');

const input = document.getElementById('inputRUB');
const inputValute = document.getElementById('inputValute');




setInterval(fetchCourses(),10000);


async function fetchCourses(){
    const response = await fetch('https://www.cbr-xml-daily.ru/daily_json.js');
    const json = await response.json();
    const valute = json.Valute;

    valutes.USD = valute.USD;
    valutes.EUR = valute.EUR;
    valutes.GBP = valute.GBP;

    elementUSD.innerHTML = valutes.USD.Value.toFixed(2);
    elementEUR.innerHTML = valutes.EUR.Value.toFixed(2);
    elementGBP.innerHTML = valutes.GBP.Value.toFixed(2);

    if(valutes.USD.Previous<valutes.USD.Value)
        document.querySelector('[course="USD"]').classList.toggle('green');
    else
        document.querySelector('[course="USD"]').classList.toggle('red');


    if(valutes.EUR.Previous<valutes.EUR.Value)
        document.querySelector('[course="EUR"]').classList.toggle('green');
    else
        document.querySelector('[course="EUR"]').classList.toggle('red');


    if(valutes.GBP.Previous<valutes.GBP.Value)
        document.querySelector('[course="GBP"]').classList.toggle('green');
    else
        document.querySelector('[course="GBP"]').classList.toggle('red');


}


const select = document.querySelector('#selectValute');

input.oninput = function(){
      inputValute.value= (parseFloat(input.value)/valutes[select.value].Value).toFixed(2);

}

select.addEventListener('change',function(e){
    inputValute.value= (parseFloat(input.value)/valutes[select.value].Value).toFixed(2);

});

inputValute.oninput = function (){
    input.value = (inputValute.value*valutes[select.value].Value).toFixed(2);
}

