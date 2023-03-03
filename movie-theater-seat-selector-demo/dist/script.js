const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.occupied)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");

loadUI();

let ticketPrice = 5;

// Save the selected movie index and price
function setMovieData(movieIndex) {
	localStorage.setItem("selectedMovieIndex", movieIndex);
}

// Update total and count
function updateSelectedCount() {
	const selectedSeats = document.querySelectorAll(".row .seat.selected");

	const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

	localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

	const selectedSeatsCount = selectedSeats.length;

	count.innerText = selectedSeatsCount;
	total.innerText = selectedSeatsCount * ticketPrice;

	setMovieData(movieSelect.selectedIndex);
}

// Get data from localstorage and load the UI
function loadUI() {
	const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

	if (selectedSeats !== null && selectedSeats.length > 0) {
		seats.forEach((seat, index) => {
			if (selectedSeats.indexOf(index) > -1) {
				seat.classList.add("selected");
			}
		});
	}

	const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

	if (selectedMovieIndex !== null) {
		movieSelect.selectedIndex = selectedMovieIndex;
	}
}

// Movie select event
movieSelect.addEventListener("change", (e) => {
	ticketPrice += 5;
	setMovieData(e.target.selectedIndex);
	updateSelectedCount();
});

// Seat click event
container.addEventListener("click", (e) => {
	if (
		e.target.classList.contains("seat") &&
		!e.target.classList.contains("occupied")
	) {
		e.target.classList.toggle("selected");

		updateSelectedCount();
	}
});

// Initial count and total set
updateSelectedCount();