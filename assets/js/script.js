const clipboard = new ClipboardJS('.btn-copy');

let input = $(".form-control");
let data = "";
let path = "";

if (input.attr("data-action") == "pass") {
	data = "password";
}

if (input.attr("data-action") == "hash") {
	data = "hash";
}

if (data == "password") {
	path = "index";
} else {
	path = "hash";
}

clipboard.on('success', function (e) {
	Swal.fire({
		icon: 'success',
		title: data + " " + "copied successfully",
		text: 'you can paste it anywhere',
		showConfirmButton: true,
		confirmButtonText: 'ok'
	}).then((result) => {
		if (result.isConfirmed) {
			window.location = "http://localhost/dev/git/password-generator/" + path + ".php";
		}
	})
});


clipboard.on('error', function (e) {
	Swal.fire({
		icon: 'error',
		title: 'Oops...',
		text: 'Something went wrong try again',
	});
});