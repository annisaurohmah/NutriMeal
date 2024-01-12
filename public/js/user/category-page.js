async function getBackToCategorialPage(){
        var route = "http://127.0.0.1:8000/foodpage/";
        window.location.href = route;
};

$(document).ready(function () {
    $("#backToCategorialPage").click(getBackToCategorialPage);
});