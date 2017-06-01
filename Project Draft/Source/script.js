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
let theAbout = document.querySelector('#about');
let theContact = document.querySelector('#contact');
let thePortfolio = document.querySelector('#portfolio');

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
if (theServices || theAbout || theContact || thePortfolio) {
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

// if (theServices || theAbout || theContact || thePortfolio || theIndex) {

// 	function openMobileOverlay () {

// 		overlay.classList.add('mobile-menu-overlay-active');
// 		open.style.display = 'none';
// 		close.style.display = 'block';
// 		menu.classList.add('menu-open-active');
// 		copyright.classList.add('mobile-menu-copyright-active');
// 	}	

// 	function closeMobileOverlay () {

// 		overlay.classList.remove('mobile-menu-overlay-active');
// 		open.style.display = 'block';
// 		close.style.display = 'none';
// 		menu.classList.remove('menu-open-active');
// 		copyright.classList.remove('mobile-menu-copyright-active');

// 	}


// 	let close = document.querySelector('.close-mobile-menu-overlay');
// 	let open = document.querySelector('.menu-toggle');
// 	let overlay = document.querySelector('.mobile-menu-overlay');
// 	let menu = document.querySelector('.movement-menu');
// 	let copyright = document.querySelector('.mobile-menu-copyright');

// 	open.addEventListener('click', openMobileOverlay);
// 	close.addEventListener('click', closeMobileOverlay);

// }


window.addEventListener('scroll', navScroll);

if (theContact) {

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
	
// 	let contactNav = Array.from(document.querySelectorAll('.toggle-links a'));
// 	let form1 = document.querySelector('.form-1');
// 	let form2 = document.querySelector('.form-2');

// 		form1.classList.add('form-active');
// 		contactNav[0].classList.add('contact-active');

// 		function contactFlip () {
// 			contactNav[0].classList.remove('contact-active');
// 			contactNav[1].classList.remove('contact-active');
// 			form1.classList.remove('form-active');
// 			form2.classList.remove('form-active');

// 			this.classList.add('contact-active');

// 			if (this == contactNav[0])
// 			{
// 				form1.classList.add('form-active');
// 			} else {
// 				form2.classList.add('form-active');
// 			}

// 	let deliverables = document.querySelector('input[name="deliverables"]');
// 	let checkboxes = Array.from(document.querySelectorAll('input[type="checkbox"]'));
// 	let clickToggle = 0;
// 	let lastClicked;
// 	console.log('here');
// 	console.log(checkboxes);
// 	console.log(deliverables);

// 	if (checkboxes)
// 	{
// 		checkboxes.forEach(function (box) {

// 			box.addEventListener('click', sendDeliverables);
// 		});

// 		function sendDeliverables () {

// 			if (lastClicked == this.value)
// 			{
// 				deliverables.value = "";
// 				lastClicked = "";

// 				checkboxes.forEach(function (boxes) {

// 					if (boxes.checked)
// 					{
// 						deliverables.value = boxes.defaultValue;
// 						lastClicked = deliverables.value;
// 					}
// 				});
// 				return;
// 			}

// 			deliverables.value = this.value;
// 			console.log(deliverables.value);

// 			clickToggle++;
// 			lastClicked = this.value;
// 		}
// 	}
// 	}

// 	contactNav.forEach( function (navbutton){
// 		navbutton.addEventListener('click', contactFlip);
// 	});

// 	let labels = Array.from(document.querySelectorAll('.form-row-inner label'));
// 	let labelContent = Array.from(document.querySelectorAll('label span'));
	

// 	function addHighlight (e) {
// 		if (e.target.matches('input'))return;
// 		let spanToChange = this.querySelector('span');

// 		this.classList.toggle('label-active');
// 		spanToChange.classList.toggle('wht');
// 	}

// 	labels.forEach(function (label) {
// 		label.addEventListener('click', addHighlight);
// 	});
// }




if (theIndex || theContact) {
	let button = document.querySelector('#submit');
	let field1 = document.querySelector('input[name]');
	let field2 = document.querySelector('#email');



	function displayMessage () {
		if (field1.value == "" || field2.value == "") return;
		let placeholder = document.querySelector('.thanksmessage');
		let newDiv = document.createElement('div');
		let pgraph = document.createElement('p');

		pgraph.innerHTML = 'Thank You!';
		pgraph.classList.add('alert-success');
		newDiv.appendChild(pgraph);
		placeholder.appendChild(newDiv);
	}


button.addEventListener('click', displayMessage);

}
}

var contactNav = $('.toggle-links a');
			var form1 = $('.form-1');
			var form2 = $('.form-2');
			var deliverables = $('input[name="deliverables"]');
			var checkboxes = $('input[type="checkbox"]');
			console.log(checkboxes);
			var clickToggle = 0;
			var lastClicked;

			$(form1).addClass('form-active');
			$(contactNav).first().addClass('contact-active');


			$(contactNav).each( function (navbutton) {
				navbutton.bind('click', function () {


				$(contactNav).first().removeClass('contact-active');
				$(contactNav).last().removeClass('contact-active');
				$(form1).removeClass('form-active');
				$(form2).removeClass('form-active');


				this.addClass('contact-active');

				if (this == contactNav.first())
				{
					$(form1).addClass('form-active');
				} else {
					$(form2).addClass('form-active');
				}
