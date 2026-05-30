const errors_msg = {
    "email": "Please enter a valid email address.",
    "emptyField": "This field cannot be empty.",
    "password": "Password must be at least 6 characters long.",
    "confirmPassword": "Passwords do not match.",
    "phoneMustBeNumeric": "Phone number must contain only digits.",
    "phoneMustBe10Digits": "Phone number must be exactly 10 digits long."
};
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('signin_form');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');

    form.addEventListener('submit', async function (event) {
        event.preventDefault();
        let valid = true;
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        if (!validateEmail(email)) {
            valid = false;
            emailInput.classList.add('input-error');
            displayErrors({ element: emailInput.parentElement, errorText: errors_msg.email });
        }

        if (password === '') {
            valid = false;
            passwordInput.classList.add('input-error');
            displayErrors({ element: passwordInput.parentElement, errorText: errors_msg.emptyField });
        }

        if (!valid) {
            event.preventDefault();
        }

        try {
            const response = await fetch(form.action, {
                method: form.method,
                body: new FormData(form)
            });

            if (response.ok) {
                const data = await response.json();
                window.location.href = data.redirectUrl;
            } else {
                console.log('Usuario no encontrado o contraseña incorrecta');
                console.error('Error en la solicitud:', response.statusText);
            }
        } catch (error) {
            console.log('Database error');
            console.error('Error en la solicitud:', error);
        }
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function displayErrors({ element, errorText }) {
        console.log(errorText);
        const errorContainer = document.createElement('div');
        errorContainer.classList.add('error-container');
        const errorElement = document.createElement('p');
        errorElement.textContent = errorText;
        errorContainer.appendChild(errorElement);
        element.appendChild(errorContainer);
    }
});