// document.addEventListener('DOMContentLoaded', function () {
// 	// Tangkap formulir
// 	const form = document.querySelector('#loginForm');

// 	// Tambahkan event listener untuk event submit
// 	form.addEventListener('submit', function (event) {
// 		// Hentikan pengiriman formulir default
// 		event.preventDefault();

// 		// Panggil SweetAlert untuk konfirmasi
// 		Swal.fire({
// 			title: 'Apakah Anda yakin?',
// 			text: 'Klik "Ya" untuk melanjutkan login',
// 			icon: 'warning',
// 			showCancelButton: true,
// 			confirmButtonColor: '#3085d6',
// 			cancelButtonColor: '#d33',
// 			confirmButtonText: 'Ya, login sekarang!',
// 			cancelButtonText: 'Batal'
// 		}).then((result) => {
// 			// Cek hasil dari SweetAlert
// 			if (result.isConfirmed) {
// 				form.submit(); // Jika pengguna mengonfirmasi, kirimkan formulir
// 				Swal.fire({
// 					title: 'Sukses!',
// 					text: 'Berhasil Login',
// 					icon: 'success',
// 					showConfirmButton: false,
// 					timer: 1500
// 				});
// 			} else {
// 				Swal.fire({
// 					title: 'Gagal!',
// 					text: 'Gagal Login',
// 					icon: 'error'
// 				});
// 			}
// 		});
// 	});
// });

// document.addEventListener('DOMContentLoaded', function () {
// 	// Tangkap formulir
// 	const form = document.querySelector('#loginForm');

// 	// Tambahkan event listener untuk event submit
// 	form.addEventListener('submit', function (event) {
// 		// Hentikan pengiriman formulir default
// 		event.preventDefault();

// 		// Panggil SweetAlert untuk menampilkan hasil login
// 		Swal.fire({
// 			title: 'Sedang memproses...',
// 			text: 'Mohon tunggu sebentar',
// 			icon: 'info',
// 			showConfirmButton: false,
// 			allowOutsideClick: false
// 		});

// 		// Kirimkan formulir secara asynchronous
// 		form.submit();
// 	});
// });

// document.addEventListener('DOMContentLoaded', function () {
//     // Tangkap formulir
//     const form = document.querySelector('#loginForm');

//     // Tambahkan event listener untuk event submit
//     form.addEventListener('submit', function (event) {
//         // Hentikan pengiriman formulir default
//         event.preventDefault();

//         // Kirimkan formulir secara asynchronous
//         fetch('/login/attemptLogin', {
//             method: 'POST',
//             body: new FormData(form),
//             headers: {
//                 'X-Requested-With': 'XMLHttpRequest'
//             }
//         })
//         .then(response => response.json())
//         .then(data => {
//             // Periksa hasil dari proses login
//             if (data.success) {
//                 // Jika login berhasil, tampilkan SweetAlert sukses
//                 Swal.fire({
//                     title: 'Sukses!',
//                     text: 'Berhasil Login',
//                     icon: 'success',
//                     showConfirmButton: false,
//                     timer: 1500
//                 });
//                 // Redirect ke halaman dashboard
//                 window.location.href = '/dashboard';
//             } else {
//                 // Jika login gagal, tampilkan SweetAlert gagal
//                 Swal.fire({
//                     title: 'Gagal!',
//                     text: data.message,
//                     icon: 'error'
//                 });
//             }
//         })
//         .catch(error => {
//             console.error('Error:', error);
//         });
//     });
// });