document.addEventListener('DOMContentLoaded', function () {
	// Tangkap formulir
	const form = document.querySelector('#updateAntenatal');

	// Tambahkan event listener untuk event submit
	form.addEventListener('submit', function (event) {
		// Hentikan pengiriman formulir default
		event.preventDefault();

		// Tampilkan SweetAlert konfirmasi
		Swal.fire({
			title: 'Konfirmasi',
			text: 'Apakah Anda yakin ingin mengubah data antenatal ini?',
			icon: 'question',
			showCancelButton: true,
			confirmButtonText: 'Ya',
			cancelButtonText: 'Batal'
		}).then((result) => {
			// Jika pengguna mengonfirmasi, kirimkan formulir
			if (result.isConfirmed) {
				Swal.fire({
					title: 'Sukses!',
					text: 'Data Antenatal berhasil diubah.',
					icon: 'success',
					showConfirmButton: false,
					timer: 1000
				}).then(() => {
					form.submit();
				});
			} else {
				Swal.fire({
					title: 'Gagal!',
					text: 'Gagal mengubah data antenatal ini.',
					icon: 'error'
				})
			}
		});
	});
});