let student = {
    name: 'Tomas',
    lastName: 'Tomauskas',
    group: 'IT-4',
    university: 'ktu',
    score: [7, 4, 5]
};

$('img.logo').click(function () {
    $('#demo').html(studentNstring(student.pazymiai))
});

// console.log(studentNstring(student.pazymiai));
function studentNstring(stud) {
    let txt = '';
    for (let i = 0; i < Object.keys(stud).length; i++) {
        key = Object.keys(stud)[i];
        txt += stud[key] + ' '; //         txt = stud[key] + ' ' + txt;
    }
    return txt;
}

//
$('#demo').click(function () {
    $('#demo').html(leAverage(student.pazymiai))
});

function leAverage(staveg) {
    let sum = 0;
    for (let i = 0; i < staveg.length; i++) {
        sum += staveg[i];
    }
    return sum / student.pazymiai.length
}

function PrintLTU_FlagColor() { // isspausdins tris reiksmes
    var array = new Array();
    array[0] = "Geltona";
    array[1] = "Zalia";
    array[2] = "Raudona";
    for (var i = 0; i < array.length; i++) {
        document.write("<li>" + array[i] + "<br />");
    }
}

function PrintStudent() { // isspausdins studenta
    document.write("<br>" + student.name);
    document.write(" " + student.lastName + " mokosi ");
    document.write(student.university + ", ");
    document.write(student.group + " grupeje, ");
    document.write("jo pazymiai: " + student.score);
}



