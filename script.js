
function validasi(){
    var file = document.getElementById("file").value;
    var namalengkap = document.getElementById("namalengkap").value;
    var namapanggilan = document.getElementById("namapanggilan").value;
    var tempatlahir = document.getElementById("tempatlahir").value;
    var tgllahir = document.getElementById("tanggallahir").value;
    var usia = document.getElementById("usia").value;
    var jeniskelamin = document.getElementById("jeniskelamin").value;
    var kota = document.getElementById("kota").value;
    var email = document.getElementById("email").value;
    var nohp = document.getElementById("nohp").value;
    var mediasosial = document.getElementById("mediasosial").value;
    
    if (file != "" && namalengkap!="" && namapanggilan !="") {
        return true;
    } else {
        alert('Data Tidak boleh kosong')
    }
    if (namalengkap>=3 && namapanggilan >=3 && nohp>=4 ) {
        return true
    } else {
        alert('Data Kurang lengkap')
    }

    if (tempatlahir != "" && jeniskelamin!="" && kota !="") {
        return true;
    } else {
        alert('Data Tidak boleh kosong')
    }

    if (email != "" && nohp!="" && mediasosial !="") {
        return true;
    } else {
        alert('Data Tidak boleh kosong')
    }

    if(tgllahir === ""){
		alert("Data Tidak boleh kosong");
    }else{
		var today = new Date();
		var tanggallahir = new Date(tgllahir);
		var year = 0;
		if (today.getMonth() < tanggallahir.getMonth()) {
			year = 1;
		} else if ((today.getMonth() == tanggallahir.getMonth()) && today.getDate() < tanggallahir.getDate()) {
			year = 1;
		}
		var age = today.getFullYear() - tanggallahir.getFullYear() - year;
 
		if(age < 0){
			age = 0;
		}
		document.getElementById('result').innerHTML = age;
	}


}