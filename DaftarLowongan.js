document.addEventListener("DOMContentLoaded", function () {

    var filterKategori =
        document.getElementById("filter-kategori");

    filterKategori.addEventListener("change", function () {

        var kategoriDipilih = this.value;

        var rows =
            document.querySelectorAll("#tabel-body tr");

        for (var i = 0; i < rows.length; i++) {

            var kategori =
                rows[i].cells[3].innerText;

            if (
                kategoriDipilih === "Semua" ||
                kategori === kategoriDipilih
            ) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }

        updateStatistik();
    });

    updateStatistik();
});

function updateStatistik() {

    var rows =
        document.querySelectorAll("#tabel-body tr");

    var visible = 0;

    for (var i = 0; i < rows.length; i++) {

        if (rows[i].style.display !== "none") {
            visible++;
        }
    }

    document.getElementById("statistik").innerHTML =
        "<strong>Statistik:</strong> Menampilkan " +
        visible +
        " lowongan";
}