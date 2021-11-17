const clipboard = new ClipboardJS('.btn-copy');

clipboard.on('success', function (e) {
	Swal.fire({
		icon: 'success',
		title: 'Password copied successfully',
		text: 'you can paste it anywhere'
	});
});

clipboard.on('error', function (e) {
	Swal.fire({
		icon: 'error',
		title: 'Oops...',
		text: 'Something went wrong try again',
	});
});