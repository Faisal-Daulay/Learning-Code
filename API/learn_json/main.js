// JSON.stringify = mengubah json ke dalam bentuk array
// JSON.parse = mengubah array ke dalam bentuk array

// let mahasiswa = {
//     nama: "Faisal",
//     alamat: "Medan",
//     email: "faisal@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));

// let xajax = new XMLHttpRequest();
// xajax.onreadystatechange = function () {
//     if (xajax.readyState == 4 && xajax.status == 200) {
//         let data_kfc = JSON.parse(this.responseText);
//         console.log(data_kfc);
//     }
// }

// xajax.open('GET', 'data.json', true);
// xajax.send();

$.getJSON('data.json', function (data) {
    console.log(data);
});
