const form = document.getElementById("form");
const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const email = document.getElementById("email");
const username = document.getElementById("username");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");

// Display the error messages
function showError(input, message) {
	const formControl = input.parentElement;
	formControl.className = "form-control error";

	const small = formControl.querySelector("small");
	small.innerText = message;
}

// Success
function showSuccess(input) {
	const formControl = input.parentElement;
	formControl.className = "form-control success";
}

// Validate email
function checkEmail(input) {
	const reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if (reg.test(input.value.trim())) {
		showSuccess(input);
	} else {
		showError(input, "Email is not valid");
	}
}

// Check the required fields
function checkRequired(field) {
	let isRequired = false;
	field.forEach(function (input) {
		if (input.value.trim() === "") {
			showError(input, `${getFieldName(input)} is required`);
			isRequired = true;
		}
	});

	return isRequired;
}

// Check input length
function checkLength(input, min, max) {
	if (input.value.length < min) {
		showError(input, `${getFieldName(input)} must be at least ${min} characters`);
	} else if (input.value.length > max) {
		showError(
			input,
			`${getFieldName(input)} must be less than ${max} characters`
		);
	} else {
		showSuccess(input);
	}
}

// Check if the passwords match
function checkPasswordMatch(pass1, pass2) {
	if (pass1.value !== pass2.value) {
		showError(pass2, "Passwords do not match");
	}
}

// Get field name
function getFieldName(input) {
	return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

// Our event listeners, for when the submit button is pressed
form.addEventListener("submit", function (e) {
	e.preventDefault();

	if (!checkRequired([fname, lname, email, username, password, password2])) {
		checkLength(fname, 2, 20);
		checkLength(lname, 2, 20);
		checkLength(username, 6, 25);
		checkEmail(email);
		checkPasswordMatch(password, password2);
	}
});
