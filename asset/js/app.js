$(document).ready(function(){
	$('.tabel-userakun').dataTable({
		dom: 'Bfrtip',
		buttons: [
			{
				extend: 'pdfHtml5',
				filename: 'Laporan User Akun PT. IBP',
				title: 'Laporan User Akun PT. IBP',
				text: 'Export PDF',
				header: true,
				message: 'Berikut adalah daftar dari penggunaan Username dari karyawan lapangan PT. Inti Benua Perkasatama (MUSIMMAS GROUP) :',
				pageSize: 'A4',
				exportOptions: {
					columns: [0,1,2,3,4],
				}
			},
			{
				extend: 'excel',
				text: 'Export Excel',
				title: 'Laporan User Akun PT. IBP',
				filename: 'Laporan User Akun PT. IBP',
				exportOptions: {
					columns: [0,1,2,3,4],
				}
			},
		],
		responsive: true,
		autoWidth: true,
	});

	$('.tabel-profil').dataTable({
		dom: 'Bfttip',
		buttons: [
			{
				extend: 'pdfHtml5',
				filename: 'Laporan Biodata Karyawan PT. IBP',
				title: 'Laporan Biodata Karyawan PT. IBP',
				text: 'Export PDF',
				header: true,
				message: 'Berikut adalah daftar dari Biodata Karyawan dari karyawan lapangan PT. Inti Benua Perkasatama (MUSIMMAS GROUP) :',
				pageSize: 'A4',
				exportOptions: {
					columns: [0,1,2,3,4,5,6,7],
				}
			},
			{
				extend: 'excel',
				text: 'Export Excel',
				title: 'Laporan User Akun PT. IBP',
				filename: 'Laporan User Akun PT. IBP',
				exportOptions: {
					columns: [0,1,2,3,4,5,6,7],
				}
			},
		],
		responsive: true,
		autoWidth: true,
	});

	$('.tabel-tbt').dataTable({
		dom: 'Bfttip',
		buttons: [
			{
				extend: 'pdfHtml5',
				filename: 'Laporan Tema TBT PT. IBP',
				title: 'Laporan Tema TBT PT. IBP',
				text: 'Export PDF',
				header: true,
				message: 'Berikut adalah laporan Tema TBT dari karyawan lapangan PT. Inti Benua Perkasatama (MUSIMMAS GROUP) :',
				pageSize: 'A4',
				exportOptions: {
					columns: [0,1],
				}
			},
			{
				extend: 'excel',
				text: 'Export Excel',
				title: 'Laporan Tema TBT PT. IBP',
				filename: 'Laporan Tema TBT PT. IBP',
				exportOptions: {
					columns: [0,1],
				}
			},
		],
		responsive: true,
		autoWidth: true,
	});
});