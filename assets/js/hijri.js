document.getElementById("tanggalMasehi").addEventListener("input", function () {
	convertToHijri();
});

function convertToHijri() {
	let inputDate = document.getElementById("tanggalMasehi").value;
	if (!inputDate) {
		document.getElementById("hasilHijriah").value = "";
		return;
	}

	let date = new Date(inputDate);

	// Konversi tanggal Masehi ke Julian Day Number (JDN)
	let y = date.getFullYear();
	let m = date.getMonth() + 1;
	let d = date.getDate();

	if (m < 3) {
		y -= 1;
		m += 12;
	}

	let A = Math.floor(y / 100);
	let B = 2 - A + Math.floor(A / 4);
	let JD =
		Math.floor(365.25 * (y + 4716)) +
		Math.floor(30.6001 * (m + 1)) +
		d +
		B -
		1524.5;

	// Konversi ke Hijriah dengan metode Umm al-Qura
	let HijriEpoch = 1948439.5; // JDN untuk 1 Muharram 1 H
	let daysSinceEpoch = JD - HijriEpoch;
	let hijriYear = Math.floor((daysSinceEpoch - 1) / 354.367) + 1;
	let hijriMonth, hijriDay;

	let startOfYearJD = HijriEpoch + Math.floor((hijriYear - 1) * 354.367);
	let dayOfYear = Math.floor(JD - startOfYearJD);

	let hijriMonths = [30, 29, 30, 29, 30, 29, 30, 29, 30, 29, 30, 29];
	if ((11 * hijriYear + 14) % 30 < 11) {
		hijriMonths[11] = 30; // Tahun kabisat, Dzulhijjah punya 30 hari
	}

	for (let i = 0; i < 12; i++) {
		if (dayOfYear < hijriMonths[i]) {
			hijriMonth = i + 1;
			hijriDay = dayOfYear + 1;
			break;
		}
		dayOfYear -= hijriMonths[i];
	}

	let bulanHijriah = [
		"Muharram",
		"Safar",
		"Rabi'ul Awwal",
		"Rabi'ul Akhir",
		"Jumadil Awwal",
		"Jumadil Akhir",
		"Rajab",
		"Sya'ban",
		"Ramadhan",
		"Syawal",
		"Dzulqaidah",
		"Dzulhijjah",
	];
	let hijriFormatted = `${hijriDay} ${
		bulanHijriah[hijriMonth - 1]
	} ${hijriYear} H`;
	document.getElementById("hasilHijriah").value = hijriFormatted;
}
