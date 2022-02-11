/**
 * File primary-navigation.js.
 *
 * Required to open and close the mobile navigation.
 */
 var toggle = document.querySelector('#toggle');
 var menu = document.querySelector('.wp-block-navigation__container');
 var menuItems = document.querySelectorAll('.wp-block-navigation__container li a');
 
 toggle.addEventListener('click', function(){
   if (menu.classList.contains('is-active')) {
	 this.setAttribute('aria-expanded', 'false');
	 menu.classList.remove('is-active');
   } else {
	 menu.classList.add('is-active'); 
	 this.setAttribute('aria-expanded', 'true');
	 //menuItems[0].focus();
   }
 });