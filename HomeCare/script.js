// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Set minimum date for booking to today
const today = new Date().toISOString().split('T')[0];
const dateInput = document.getElementById('date');
if (dateInput) {
    dateInput.setAttribute('min', today);
}