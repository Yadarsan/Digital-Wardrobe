document.addEventListener("DOMContentLoaded", () => {
    // Smooth Scroll for Navigation Links
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            document.querySelector(e.target.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Form Submission Handling
    const form = document.querySelector('form[name="contact"]');
    if (form) {
        form.addEventListener('submit', handleSubmit);
    }
});

function handleSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    const responseMessageElement = document.getElementById('responseMessage');

    fetch('/', {
        method: 'POST',
        body: formData,
        headers: { 'Accept': 'application/json' }
    })
    .then(response => {
        console.log('Response Status:', response.status); // Log response status
        return response.text(); // Read response as text
    })
    .then(text => {
        console.log('Response Text:', text); // Log response text
        if (text.includes('Message sent successfully')) {
            responseMessageElement.textContent = 'Message sent successfully.';
        } else {
            throw new Error('Failed to send message.');
        }
    })
    .catch(error => {
        console.error('Fetch Error:', error); // Log fetch error
        responseMessageElement.textContent = error.message;
    });
}
