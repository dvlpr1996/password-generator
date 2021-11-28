const clipboard = new ClipboardJS('.btn-copy');

let input = $(".form-control");
let data = "";

if (input.attr("data-action") == "pass") {
	data = "password";
}

if (input.attr("data-action") == "hash") {
	data = "hash";
}

clipboard.on('success', function (e) {
	Swal.fire({
		icon: 'success',
		title: data + " " + "copied successfully",
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