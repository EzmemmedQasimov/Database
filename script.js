
function UpperA() {
    let str = document.getElementById("name").value;
    let y = str.replace(/\w\S*/g, function (text) { return text.charAt(0).toUpperCase() + text.substr(1).toLowerCase(); });
    document.getElementById("name").value = y;

}

function UpperC() {
    let str = document.getElementById("city").value;
    let y = str.replace(/\w\S*/g, function (text) { return text.charAt(0).toUpperCase() + text.substr(1).toLowerCase(); });
    document.getElementById("city").value = y;

}

function UpperCoun() {
    let str = document.getElementById("country").value;
    let y = str.replace(/\w\S*/g, function (text) { return text.charAt(0).toUpperCase() + text.substr(1).toLowerCase(); });
    document.getElementById("country").value = y;

}

UpperA();
UpperV();
