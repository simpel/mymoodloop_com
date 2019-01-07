
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');


const setMenuState = (e) => {
	if (window.matchMedia('screen and (max-width: 768px)').matches) {
		document.getElementById("menu").classList.add("hidden");
	}
}

const toggleMenu = (e) => {
	console.log('toggle');
	document.getElementById("menu").classList.toggle("hidden");
}

window.onload = setMenuState;

document.getElementById("menuBtn").onclick = toggleMenu;

feather.replace();
