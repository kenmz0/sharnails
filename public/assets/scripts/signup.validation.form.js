const errors_msg = {
    "email": "Please enter a valid email address.",
    "emptyField": "This field cannot be empty.",
    "password": "Password must be at least 6 characters long.",
    "confirmPassword": "Passwords do not match.",
    "phoneMustBeNumeric": "Phone number must contain only digits.",
    "phoneMustBe10Digits": "Phone number must be exactly 10 digits long."
};
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('signup-form');
    const firstNameInput = document.getElementById('first_name');
    const phoneInput = document.getElementById('phone_number');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        let valid = true;
        const firstName = firstNameInput.value.trim();
        const phone = phoneInput.value.trim();
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();
        const confirmPassword = confirmPasswordInput.value.trim();

        if (firstName === '') {
            valid = false;
            firstNameInput.classList.add('input-error');
            displayErrors({ element: firstNameInput.parentElement, errorText: errors_msg.emptyField });
        }

        if (phone !== '') {
            valid = false;
            phoneInput.classList.add('input-error');
            if (!validateTel(phone)) {
                displayErrors({ element: phoneInput.parentElement, errorText: errors_msg.phoneMustBeNumeric });
            } else {
                displayErrors({ element: phoneInput.parentElement, errorText: errors_msg.phoneMustBe10Digits });
            }
        }

        if (!validateEmail(email)) {
            valid = false;
            emailInput.classList.add('input-error');
            displayErrors({ element: emailInput.parentElement, errorText: errors_msg.email });
        }

        if (password === '') {
            valid = false;
            passwordInput.classList.add('input-error');
            displayErrors({ element: passwordInput.parentElement, errorText: errors_msg.emptyField });
        } else if (password.length < 6) {
            valid = false;
            passwordInput.classList.add('input-error');
            displayErrors({ element: passwordInput.parentElement, errorText: errors_msg.password });
        }

        if (confirmPassword === '') {
            valid = false;
            confirmPasswordInput.classList.add('input-error');
            displayErrors({ element: confirmPasswordInput.parentElement, errorText: errors_msg.emptyField });
        } else if (password !== confirmPassword) {
            valid = false;
            confirmPasswordInput.classList.add('input-error');
            displayErrors({ element: confirmPasswordInput.parentElement, errorText: errors_msg.confirmPassword });
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
                console.log(data);
            } else {
                console.error('Error en la solicitud:', response.statusText);
            }
        } catch (error) {
            console.error('Error en la solicitud:', error);
        }
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validateTel(phone_number) {
        const re = /^[0-9]{10}$/;
        return re.test(phone_number);
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