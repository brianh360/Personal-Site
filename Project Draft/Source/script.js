/* 
1. at my desk script

**
It's 9:49am here — I'm at my desk !
Lets users to the website know whether I am currently in office hours, mon - fri 9 - 5pm sat - sun 12pm - 4pm
if am at desk at that time, display the phone number, let the user know the current time at my desk, let the user know whether I'm at my desk or not
*/

function debounce(func, wait = 20, immediate = true) {
      var timeout;
      return function() {
        var context = this, args = arguments;
        var later = function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
      };
    };

let theIndex = document.querySelector('#index');
let theServices = document.querySelector('#services');
if (theIndex) {

let ID;

function currentTime () {
	let isAm = false;
	let isPm = true;
	let nowDate = new Date();
	let hours = nowDate.getHours();
	let minutes = nowDate.getMinutes();
	let amHere = document.querySelector('#here');
	if (hours > 12)
	{
		hours = hours - 12;
		isPm = true;
		isAm = false;

	}
	else
	{
		isAm = true;
		isPm = false;
	}

	let timePrefix = 'It\'s ';
	let timePrint = `${hours}:${minutes < 10 ? 0 : '' }${minutes}`;

	let atDesk = false;
	if (hours >= 9 && isAm)
	{
		atDesk = true;
	}

	else if (hours < 5 && isPm)
	{
		atDesk = true;
	}

	if (isAm && atDesk)
	{
		amHere.innerHTML = `${timePrefix} ${timePrint}am here — I am at my desk !`;
		amHere.style.color = '#5c7079';
		amHere.style.fontWeight = 'bold';
	}

	else if (isPm && atDesk)
	{
		// console.log(timePrefix + timePrint + 'pm' + ' here — I am at my desk !');
		amHere.innerHTML = `${timePrefix} ${timePrint}pm here — I am at my desk !`;
		amHere.style.color = '#5c7079';
		amHere.style.fontWeight = 'bold';
	}

		if (isAm && !atDesk)
	{
		console.log(timePrint + 'am' + 'I am not at my desk');
	}

	else if (isPm && !atDesk)
	{
		// console.log(timePrefix + timePrint + 'pm' + ' here — I am not at my desk !');
		amHere.innerHTML = `${timePrefix} ${timePrint} pm here — I am not at my desk !`;
		amHere.style.color = '#5c7079';
		amHere.style.fontWeight = 'bold';
	}

	if (atDesk)
	{
		displayPhoneNumber(true);
	}

	if (!atDesk)
	{
		displayPhoneNumber(false);
	}
}

function displayPhoneNumber(key) {
	let phone = document.querySelector('.displayPhone');

	if (key)
	{
		phone.style.display = 'block';
		console.log('displaying the phone number boss');
	}

	if (!key)
	{
		phone.style.display = 'none';
		console.log('if you aint at the deks they cant call!');
	}

}


function clockBounce() {
ID = setInterval(currentTime, 60000);
}

currentTime();
clockBounce();


/* Slider for the images on the homepage

** when the user is at eye level of the slider, make it swap between two or three photos. 
Slide one photo out, then slide another in, when the user scrolls away from the eye level view, stop the slider

*/

// drops down the advertisment into the footer, debounced so the scroll doesnt go crazy on the bandwith bruh. 

function dropModalIn () {
	let bannerPanel = document.querySelector('.banner-panel');
	let modal = document.querySelector('.button-dropdown-outer');
	let x = window.scrollY + window.innerHeight;
	let bannerTop = bannerPanel.offsetTop;

	if (x >= bannerTop)
	{
		modal.classList.add('active');
	} else {
		modal.classList.remove('active');

	}
}

window.addEventListener('scroll', debounce(dropModalIn));

let formText = document.querySelector('.help-block');
let formMessage = document.querySelector('form textarea');
let button = document.querySelector('#submit');

function charsLeft (e) {
let charArray = this.value.length;

	if (charArray >= 140)
	{
		formText.innerHTML = '<br />' + 'You have reached the limit of characters: 140';
		formText.classList.add('red');
			button.style.display = 'none';
			return;
	}

	if (charArray < 141)
	{
		formText.innerHTML = '<br />' + `You have ${Math.abs(charArray - 140)} characters left`;
		formText.classList.remove('red');
		button.style.display = 'block';
	}
}


formMessage.addEventListener('keydown', charsLeft);

let beenRandomized = false;

function bubbleMove () {

	if (beenRandomized)return;
let panel = document.querySelector('.contact-panel');
let panelObjects = document.querySelectorAll('.testimonial');
let panelBoundaries = panel.getBoundingClientRect();
let height = panelBoundaries.height;
let width = panelBoundaries.width;

let topDown = window.scrollY + window.innerHeight;
let panelTop = panel.offsetTop;


	if (topDown >= panelTop)
	{
		console.log('Ready to start the movements!');
		panelObjects.forEach(function (test) {

				randomize(test);
		});
		beenRandomized = true;
	}
}

function randomize (testimonial) {

	let randNum  = Math.floor(Math.random() * 20);

	if (randNum > 6)
	{
		testimonial.classList.add('test-active1');
	} else if (randNum > 8 && randNum <= 14) {
		testimonial.classList.add('test-active3');
	} else {
		testimonial.classList.add('test-active2');
	}
}

window.addEventListener('scroll', debounce(bubbleMove));

}

// Fixes the nav bar after a certain distance, 
if (theServices) {
	let nav = document.querySelector('.navbar-default');

function navScroll () {
	let y = window.scrollY;

	if (y >= 150)
	{
		nav.classList.add('nav-active');
	} 

	else if (y <= 150) {
		nav.classList.remove('nav-active');
	}
}

}

window.addEventListener('scroll', navScroll);
