//Add .dash to the menu toggle because wordpress wont let me use my classes for <a> tags
window.addEventListener('load', function() {
    var navItems = document.querySelectorAll('.nav__item');
  
    navItems.forEach(function(item) {
      var children = item.children;
      for (var i = 0; i < children.length; i++) {
        children[i].classList.add('dash', 'accent');
      }
    });
  });

// Toggle the fullscreen nav open/close
const navToggle = document.querySelector('.hamburger-nav');
const navItems = document.querySelectorAll('.nav__item');

navToggle.addEventListener('click', () => {
  document.body.classList.toggle('nav-open');
  console.log('hello');
});

navItems.forEach(item => {
  const navLink = item.querySelector('a');
  
  navLink.addEventListener('click', () => {
    document.body.classList.remove('nav-open');
  });
});

// Back to the top button

const backToTop = document.querySelector('#backToTop');

backToTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

const cursor = document.createElement('div');
cursor.classList.add('cursor');
document.body.appendChild(cursor);

// Function to update cursor position
function updateCursorPosition(event) {
    cursor.style.left = event.clientX + 'px';
    cursor.style.top = event.clientY + 'px';
}

// Function to toggle cursor size on link hover
function toggleCursorSize(event) {
    const target = event.target.closest('a, button');
    if (target) {
        cursor.classList.add('large');
    } else {
        cursor.classList.remove('large');
    }
}

// Change the cursor color when it hovers over the contact section

const contactSection = document.getElementById('contact');

document.addEventListener('mouseover', function(event) {
    if (contactSection.contains(event.target)) {
        cursor.classList.add('black');
    }
});

document.addEventListener('mouseout', function(event) {
    if (!contactSection.contains(event.target)) {
        cursor.classList.remove('black');
    }
});

// Add event listeners
window.addEventListener('mousemove', updateCursorPosition);
document.addEventListener('mouseover', toggleCursorSize);
document.addEventListener('mouseout', toggleCursorSize);

// Slider function
const sliderCopy = document.querySelector(".slider__container").cloneNode(true);
document.querySelector(".slider").appendChild(sliderCopy);





