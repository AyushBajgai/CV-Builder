window.onload = function () {
    var mainInput = document.getElementById("nepali-datepicker");
    mainInput.nepaliDatePicker({
    dateFormat: "YYYY/MM/DD",
    ndpYear: true,
    ndpMonth: 12,
    ndpYearCount: 90,
    disableBefore: "2040-12-10",
    disableAfter: "2079-01-25",
    language: "english",
    readOnlyInput: true
    });
};

//document.getElementById("nepali-datepicker").disabled=true;