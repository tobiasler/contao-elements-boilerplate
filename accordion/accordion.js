document.addEventListener('DOMContentLoaded', function() {
    console.log('Accordion script loaded');
    const accordionButtons = document.querySelectorAll('.accordion__button');

    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            console.log('Accordion button clicked');
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !expanded);

            const content = this.parentElement.nextElementSibling;
            content.classList.toggle('active');
        });
    });

});