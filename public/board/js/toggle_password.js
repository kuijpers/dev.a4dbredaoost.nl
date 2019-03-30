// $(document).ready(function() {

	function toggleCurrentPassword() {
		var x = document.getElementById("current_password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}

	function toggleNewPassword() {
		var x = document.getElementById("new_password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}

	function toggleRepeatNewPassword() {
		var x = document.getElementById("repeat_new_password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}


// });