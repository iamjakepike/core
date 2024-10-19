jQuery(document).ready(($) => {
	const navToggle = document.querySelector(".js-open-nav"); // Toggle button
	const navMenu = document.querySelector(".js-nav"); // Navigation menu

	navToggle.addEventListener("click", function () {
		const isOpen = navToggle.getAttribute("data-open") === "true";

		navToggle.setAttribute("data-open", !isOpen);
		navToggle.setAttribute("aria-expanded", !isOpen);

		// Toggle visibility of the menu
		if (!isOpen) {
			navMenu.classList.add("is-open");
			navMenu.setAttribute("aria-hidden", "false");
		} else {
			navMenu.classList.remove("is-open");
			navMenu.setAttribute("aria-hidden", "true");
		}
	});
});
