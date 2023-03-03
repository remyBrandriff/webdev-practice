// HTML elements -> variables

var numSquares = 9;
var colors = [];
var pickedColor;

var squares = document.querySelectorAll(".square");
var resetButton = document.querySelector("#reset");
var modeButtons = document.querySelectorAll(".mode");
var h1 = document.querySelector("h1");
var messageDisplay = document.querySelector("#message");
var colorDisplay = document.getElementById("colorDisplay");

init();

function init() {
	setupModeButtons();
	setupSquares();
	reset();
}

function setupModeButtons() {
	for (var i = 0; i < modeButtons.length; i++) {
		modeButtons[i].addEventListener("click", function () {
			modeButtons[0].classList.remove("selected");
			modeButtons[1].classList.remove("selected");
			this.classList.add("selected");
			this.textContent === "Easy" ? (numSquares = 3) : (numSquares = 9);
			reset();
		});
	}
}

function setupSquares() {
	for (var i = 0; i < squares.length; i++) {
		// enable click listeners for squares
		squares[i].addEventListener("click", function () {
			// get color of selected square
			var clickedColor = this.style.backgroundColor;

			// compare color to pickedColor
			if (clickedColor === pickedColor) {
				messageDisplay.textContent = "Correct!";
				resetButton.textContent = "Do you want to play again?";
				changeColors(clickedColor);
				h1.style.background = clickedColor;
			} else {
				this.style.background = "#232323";
				messageDisplay.textContent = "Wrong! Try again?";
			}
		});
	}
}

function reset() {
	colors = generateRandomColors(numSquares);

	// get new color from array
	pickedColor = pickColor();

	// change colorDisplay to match pickedColor
	colorDisplay.textContent = pickedColor;
	resetButton.textContent = "New Colors";
	messageDisplay.textContent = "";

	// change colors of squares
	for (var i = 0; i < squares.length; i++) {
		if (colors[i]) {
			squares[i].style.display = "block";
			squares[i].style.background = colors[i];
		} else {
			squares[i].style.display = "none";
		}
	}
	h1.style.background = "#136c84";
}

// add event listener to reset button
resetButton.addEventListener("click", function () {
	reset();
});

function changeColors(color) {
	// loop through all squares
	for (var i = 0; i < squares.length; i++) {
		// change color
		squares[i].style.background = color;
	}
}

function pickColor() {
	var random = Math.floor(Math.random() * colors.length);
	return colors[random];
}

function generateRandomColors(num) {
	// create array
	var arr = [];

	// get random color and push to array
	for (var i = 0; i < num; i++) {
		arr.push(randomColor());
	}

	return arr;
}

function randomColor() {
	// get R G B values to create a random color using RGB code
	var r = Math.floor(Math.random() * 256);
	var g = Math.floor(Math.random() * 256);
	var b = Math.floor(Math.random() * 256);
	return "rgb(" + r + ", " + g + ", " + b + ")";
}
