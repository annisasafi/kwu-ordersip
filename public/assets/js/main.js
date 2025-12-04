// Main JavaScript for OrderSip

document.addEventListener('DOMContentLoaded', function () {
    console.log('OrderSip Ready!');

    // Mobile Menu Toggle (if needed)
    // const menuToggle = document.querySelector('.menu-toggle');
    // const navLinks = document.querySelector('.nav-links');
    // if(menuToggle) {
    //     menuToggle.addEventListener('click', () => {
    //         navLinks.classList.toggle('active');
    //     });
    // }

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
