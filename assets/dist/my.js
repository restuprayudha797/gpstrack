// awal dari fungsi flsahdata

// akhir dari fungsi flashdata

// awal dari fungsi kirim
$(".tombol-kirim").on("click", function (e) {
	e.preventDefault();
	Swal.fire({
		title: "You are sure",
		text: "Are the password and username correct?",
		icon: "question",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Accept",
	}).then((result) => {
		if (result.isConfirmed) {
			$("#myForm").submit();
		}
	});
});
// akhir dari fungsi kirim

const flashData = $(".flash-data").data("flashdata");

if (flashData == "Succeed") {
	Swal.fire("Login", flashData, "success");
} else if (flashData == "Fail") {
	Swal.fire("Login", flashData, "error");
} else if (flashData == "tes") {
	Swal.fire("Logout", flashData, "success");
} else if (flashData == "Failed") {
	Swal.fire("Error 404", "Silahkan Login Terlebih Dahulu!", "warning");
}
