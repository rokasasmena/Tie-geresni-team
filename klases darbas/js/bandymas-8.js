let studentas = {
    vardas: 'Vardenis',
    pavarde: 'Pavardenis',
    kursas: 'IT-4'
    pazymiai: [7, 8, 9, 8, 7, 6, 5, 4, 3, 5, 6, 7, 8, 6, 6, 7, 8, 9]
};

$('p').click(function () {
    $('#demo').html(studentasStringuose(studentas));
});

function studentasStringuose(stud) {
    let txt = ' ';
    for (i = 0; i < Object.keys(stud).length; i++){
        let key = Object.keys(stud)[i];
        txt += stud[key] + ' ';
    }

    return txt;
    }