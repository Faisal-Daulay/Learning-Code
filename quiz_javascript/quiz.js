var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;

var questions = [
	["Apakah kepanjangan dari HTML ?", "Hyper Text Mark Up Language", "Hyper Text Mark Language", "Hight Text Mark Up Language", "A"],
	["Perintah br digunakan untuk ?", "Membuat garis", "Menulis teks pada baris berikutnya (ganti baris)", "Mengatur ukuran font", "B"],
	["Berikut ini adalah Bahasa Pemrograman Web, kecuali ?", "PHP", "HTML", "EXL", "C"],
	["Perintah untuk mengubah warna huruf menjadi merah dalam HTML adalah ?", "img src = red ", "font size = 20 ", "font color = red ", "C"],
	["CSS merupakan singkatan dari ?", "Cascading Sheet Style", "Cascading Style Sheet", "Conversion Sheet Style", "B"],
	["Bagaimana cara menuliskan komentar pada CSS ?", "// ini komentar //", "/* ini komentar */", "// ini komentar", "B"],
	["Properti yang digunakan untuk mengubah warna latar belakang ?", "background-color:", "background-color-style", "color:", "A"],
	["Dibawah ini yang merupakan sebuah web server adalah ?", "Phyton", "XAMPP", "PHP", "B"],
	["Semua variabel dalam PHP Dimulai dengansymbol ?", "#", "&", "$", "C"],
	["Fungsi dari Variabel ialah…?", "Meyimpan suatu data yang akan diproses", "Menyimpan gambar", "Menampung data HTML", "A"],
];

function _(x) {
	return document.getElementById(x);
}

function renderQuestion(){
	test = _("test");
	if (pos >= questions.length) {
		test.innerHTML = "<h2>You Got "+correct+" of "+questions.length+" question correct</h2>";
		_("test_status").innerHTML = "Test Complate";
		pos = 0;
		correct = 0;
		return false;
	}

	_("test_status").innerHTML = "Question "+ (pos+1) +" of "+ questions.length;
	question = questions[pos][0];
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	test.innerHTML ="<h3>"+question+"</h3>";
	test.innerHTML +="<input type='radio' name='choices' value='A'>"+chA+"<br/>";
	test.innerHTML +="<input type='radio' name='choices' value='B'>"+chB+"<br/>";
	test.innerHTML +="<input type='radio' name='choices' value='C'>"+chC+"<br/><br/>";
	test.innerHTML +="<button onclick='checkAnswer()'>Next</button>";
}

function checkAnswer() {
	choices = document.getElementsByName("choices");
	for(var i = 0; i < choices.length; i++){
		if (choices[i].checked) {
			choice = choices[i].value;
		}
	}
	if (choice == questions[pos][4]) {
		correct++;
	}
	pos++;
	renderQuestion();
}

window.addEventListener("load", renderQuestion, false);