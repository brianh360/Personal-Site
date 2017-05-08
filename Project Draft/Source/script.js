/* 
1. at my desk script

**
It's 9:49am here — I'm at my desk !
Lets users to the website know whether I am currently in office hours, mon - fri 9 - 5pm sat - sun 12pm - 4pm
if am at desk at that time, display the phone number, let the user know the current time at my desk, let the user know whether I'm at my desk or not
*/
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
	if (hours > 9 && isAm)
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

window.addEventListener('scroll', dropModalIn);
