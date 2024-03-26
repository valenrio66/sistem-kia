document.addEventListener('DOMContentLoaded', function () {
	// Tangkap formulir
	const form = document.querySelector('#updatePersalinanNifas');

	// Tambahkan event listener untuk event submit
	form.addEventListener('submit', function (event) {
		// Hentikan pengiriman formulir default
		event.preventDefault();

		// Tampilkan SweetAlert konfirmasi
		Swal.fire({
			title: 'Konfirmasi',
			text: 'Apakah Anda yakin ingin mengubah data Persalinan dan Nifas ini?',
			icon: 'question',
			showCancelButton: true,
			confirmButtonText: 'Ya',
			cancelButtonText: 'Batal'
		}).then((result) => {
			// Jika pengguna mengonfirmasi, kirimkan formulir
			if (result.isConfirmed) {
				form.submit();
				Swal.fire({
					title: 'Sukses!',
					text: 'Data Persalinan dan Nifas berhasil diubah.',
					icon: 'success',
					showConfirmButton: false,
					timer: 1500
				})
			} else {
				Swal.fire({
					title: 'Gagal!',
					text: 'Gagal mengubah data Persalinan dan Nifas ini.',
					icon: 'error'
				})
			}
		});
	});
});