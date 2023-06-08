window.addEventListener('load', function() {
  var navItems = document.querySelectorAll('.nav__item');

  if (navItems) {
      navItems.forEach(function(item) {
          var children = item.children;
          for (var i = 0; i < children.length; i++) {
              children[i].classList.add('dash', 'accent');
          }
      });
  }

  // Declaration of navToggle variable
  var navToggle = document.querySelector('.hamburger-nav');
  var navItems = document.querySelectorAll('.nav__item');

  if (navToggle) {
      // Event listener for navToggle
      navToggle.addEventListener('click', () => {
          document.body.classList.toggle('nav-open');
          console.log('hello');
      });
  }

  if (navItems) {
      navItems.forEach(item => {
          var navLink = item.querySelector('a');

          if (navLink) {
              // Event listener for navLink
              navLink.addEventListener('click', () => {
                  document.body.classList.remove('nav-open');
              });
          }
      });
  }

  // Rest of your JavaScript code...
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

const otherProjects = document.getElementById('other');
const rects = document.querySelectorAll('.hamburger rect');
const fullScreenNav = document.getElementById('mainNav');


contactSection.addEventListener('mouseenter', function() {
  rects.forEach(rect => {
    rect.style.fill = 'white';
  });
});

otherProjects.addEventListener('mouseenter', function() {
  rects.forEach(rect => {
    rect.style.fill = 'var(--clr-accent)';
  });
});

fullScreenNav.addEventListener('mouseover', function() {
  rects.forEach(rect => {
    rect.style.fill = 'var(--clr-accent)';
  });
});


// contactSection.addEventListener('mouseleave', function() {
//   rects.forEach(rect => {
//     rect.style.fill = '';
//   });
// });




