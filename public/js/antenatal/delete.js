function confirmDelete(event) {
	event.preventDefault(); // Hentikan tindakan default (mengikuti link)

	return Swal.fire({
		title: 'Apakah Anda yakin?',
		text: "Anda tidak akan bisa mengembalikan ini!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#d33',
		cancelButtonColor: '#3085d6',
		confirmButtonText: 'Hapus'
	}).then((result) => {
		if (result.isConfirmed) {
			Swal.fire({
				title: "Sukses!",
				text: "Berhasil menghapus data antenatal ini.",
				icon: "success",
				showConfirmButton: false,
				timer: 1500
			}).then(() => {
				window.location.href = event.target.href; // Melanjutkan dengan mengikuti link
			})
		} else {
			Swal.fire({
				title: "Gagal!",
				text: "Gagal menghapus data antenatal ini.",
				icon: "error"
			})
		}
	});
}