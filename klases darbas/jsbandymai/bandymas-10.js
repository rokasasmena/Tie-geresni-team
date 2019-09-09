function sudeti (a, b) {
    return a+b;
}
function atimti (a,b) {
    return a-b;
}
function dauginti (a,b) {
    return a*b;
}
function dalinti (a,b) {
    return a/b;
}
$('[value=dauginti]').click(function(){
    let a = $('#fn').val();
    let b = $('#zinute').val();

    let ats = dauginti(a,b);
    //pabaigti is lektoriaus github!
    function keistiAtsakyma(atsakymas){
        let rez = $('#rez')
        if (rez.find('span')){
            rez.find('span').html(atsakymas)
        } else {
            span = document.createElement("span");
            rez.append(span);
        }


    span = document.createElement("span");
    $('#rez').append(span);
    $('#rez > span').html(ats);
});

$('[value=sudeti]').click(function(){

    let a = parseInt ($('#fn').val())
    let b = parseInt ($('#zinute').val())
    let ats = sudeti(a,b);
    span = document.createElement("span");
    $('#rez').append(span);
    $('#rez > span').html(ats);
});


}