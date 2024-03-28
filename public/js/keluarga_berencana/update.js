document.addEventListener('DOMContentLoaded', function () {
	// Tangkap formulir
	const form = document.querySelector('#updateKeluargaBerencana');

	// Tambahkan event listener untuk event submit
	form.addEventListener('submit', function (event) {
		// Hentikan pengiriman formulir default
		event.preventDefault();

		// Tampilkan SweetAlert konfirmasi
		Swal.fire({
			title: 'Konfirmasi',
			text: 'Apakah Anda yakin ingin mengubah data Keluarga Berencana ini?',
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
					text: 'Data Keluarga Berencana berhasil diubah.',
					icon: 'success',
					showConfirmButton: false,
					timer: 1500
				})
			} else {
				Swal.fire({
					title: 'Gagal!',
					text: 'Gagal mengubah data Keluarga Berencana ini.',
					icon: 'error'
				})
			}
		});
	});
});