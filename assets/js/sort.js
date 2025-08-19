document.addEventListener("DOMContentLoaded", function () {
    const table = document.getElementById("data-table");
    const select = document.getElementById("sort");
    const limitSelect = document.getElementById("limit-select");

    select.addEventListener("change", function () {
        const selectedValue = select.value;

        const rows = Array.from(table.querySelectorAll("tbody tr"));

        rows.sort((a, b) => {
            if (selectedValue === "nomor") {
                const aValue = parseInt(a.querySelector("td:nth-child(1)").textContent);
                const bValue = parseInt(b.querySelector("td:nth-child(1)").textContent);
                return aValue - bValue;
            } else if (selectedValue === "nama") {
                const aValue = a.querySelector("td:nth-child(4)").textContent.toLowerCase();
                const bValue = b.querySelector("td:nth-child(4)").textContent.toLowerCase();
                return aValue.localeCompare(bValue);
            } else if (selectedValue === "terbaru") {
                const aValue = new Date(convertDateFormat(a.querySelector("td:nth-child(3)").textContent));
                const bValue = new Date(convertDateFormat(b.querySelector("td:nth-child(3)").textContent));
                return bValue - aValue; // Mengurutkan dari tanggal terbaru ke tanggal terlama
            }
        });

        for (const row of rows) {
            table.querySelector("tbody").appendChild(row);
        }
    });

    // Fungsi untuk mengonversi tanggal dari "DD Month YYYY" menjadi "YYYY-MM-DD"
    function convertDateFormat(dateString) {
        const months = {
            "Januari": "01",
            "Februari": "02",
            "Maret": "03",
            "April": "04",
            "Mei": "05",
            "Juni": "06",
            "Juli": "07",
            "Agustus": "08",
            "September": "09",
            "Oktober": "10",
            "November": "11",
            "Desember": "12"
        };

        const parts = dateString.split(" ");
        const day = parts[0];
        const month = months[parts[1]];
        const year = parts[2];

        return `${year}-${month}-${day}`;
    }

    limitSelect.addEventListener("change", function () {
        // Kode untuk membatasi jumlah data sesuai dengan pilihan limitSelect
        const selectedLimit = parseInt(limitSelect.value);
        const rows = Array.from(table.querySelectorAll("tbody tr"));
        for (let i = 0; i < rows.length; i++) {
            if (i < selectedLimit) {
                rows[i].style.display = "table-row";
            } else {
                rows[i].style.display = "none";
            }
        }
    });
});
