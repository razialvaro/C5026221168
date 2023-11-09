// operasi.js
function tambah() {
    var bilangan1 = document.getElementById("bil1").value;
    var bilangan2 = document.getElementById("bil2").value;
    var hasilnya = document.getElementById("hasil");

    hasilnya.innerHTML = parseFloat(bilangan1) + parseFloat(bilangan2);
}

function kali() {
    var bilangan1 = document.getElementById("bil1").value;
    var bilangan2 = document.getElementById("bil2").value;
    var hasilnya = document.getElementById("hasil");

    hasilnya.innerHTML = parseFloat(bilangan1) * parseFloat(bilangan2);
}
