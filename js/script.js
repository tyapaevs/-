const barSum = document.getElementById('scroll_number_1');
const inpSumIncome = $('#sum_income_1')[0];
const result = document.getElementById('result_number');
//const inpSumIncome = document.getElementById('sum_income');


barSum.addEventListener('change', onChangeBarSum)

function onChangeBarSum(event) {
    const value = event.target.valueAsNumber;
    $(inpSumIncome).val(value);
    //inpSumIncome.value = value;
}

const barSumAdd = document.getElementById('scroll_number_2');
const inpSumAddIncome = $('#sum_income_2')[0];
//const inpSumIncome = document.getElementById('sum_income');

barSumAdd.addEventListener('change', onChangeBarSumAdd)

function onChangeBarSumAdd(event) {
    const value = event.target.valueAsNumber;
    $(inpSumAddIncome).val(value);
    //inpSumIncome.value = value;
}


function getDateFromString(text) {
    [day, month, year] = text.split('.');
    return new Date(Number(year), Number(month) - 1, Number(day));
}

function daysInMonth(date) {
    const year = date.getFullYear();
    const month = date.getMonth();
    return new Date(year, month, 0).getDate();
}

function daysInYear(date) {
    const year = date.getFullYear();
    return ((year % 4 === 0 && year % 100 > 0) || year %400 == 0) ? 366 : 365;
}

const currentDate = new Date();

$( "#datepicker" ).val(currentDate.toLocaleDateString())
const datepicker = $( "#datepicker" ).datepicker({
    dateFormat: "dd.mm.yy",
});

const btnSubmit = document.getElementById('submitForm');

btnSubmit.addEventListener('click', function() {    
    const summIncome1 = $('#sum_income_1').val();
    const summAdd = $('#sum_income_2').val();
    const selectedDate = getDateFromString(datepicker.val());
    const daysInYearVal = daysInYear(selectedDate);
    const daysInMonthVal = daysInMonth(selectedDate);
    const checkRadio = $('input[name="ch"]:checked').val();

    $.ajax({
        method: "POST",
        url: "../culc.php",
        data: { 
            sum_1: summIncome1,
            sum_2: summAdd,
            daysn: daysInMonthVal,
            daysy: daysInYearVal,
            isAdd: checkRadio === 'true'
        },
        dataType: 'json',
        success: function(response) {
            result.innerHTML = `${response}`;
        }
    })
})