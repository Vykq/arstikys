import checkName from "./check-name";
import checkPhone from "./check-phone";
import checkEmail from "./check-email";
import isEmpty from "./is-empty";

const sendContactForm = () => {
    const form = document.querySelector('form.contact-form');
    const submitBtn = form.querySelector('button.sendform');
    const statusInfoBlock = form.querySelector('p.error-msg');
    const nameInput = form.querySelector('input[name="name"]');
    const phoneInput = form.querySelector('input[name="phone"]');
    const emailInput = form.querySelector('input[name="email"]');
    const msgInput = form.querySelector('textarea[name="message"]');



    const message = {
        loading: themeUrl.loading,
        success: themeUrl.success,
        failure: themeUrl.failure
    };


    const clearInputs = () => {
        form.reset();
    };



    nameInput.addEventListener('change', () => {
        if (nameInput.classList.contains('error')) {
            nameInput.classList.remove('error');
            statusInfoBlock.textContent = '';
            statusInfoBlock.classList.remove('field-error');
        }
    });

    emailInput.addEventListener('change', () => {
        if (emailInput.classList.contains('error')) {
            emailInput.classList.remove('error');
            statusInfoBlock.textContent = '';
            statusInfoBlock.classList.remove('field-error');
        }
    });


    phoneInput.addEventListener('change', () => {
        if (phoneInput.classList.contains('error')) {
            phoneInput.classList.remove('error');
            statusInfoBlock.classList.remove('field-error');
            statusInfoBlock.textContent = '';
        }
    });

    msgInput.addEventListener('change', () => {
        if (msgInput.classList.contains('error')) {
            msgInput.classList.remove('error');
            statusInfoBlock.textContent = '';
            statusInfoBlock.classList.remove('field-error');
        }
    });



    function nameValue() {
        if (checkName(nameInput, statusInfoBlock)) {
            return true;
        } else {
            return false;
        }
    }

    function emailValue() {
        if (checkEmail(emailInput, statusInfoBlock)) {
            return true;
        } else {
            return false;
        }
    }


    function phoneValue() {
        if (checkPhone(phoneInput, statusInfoBlock)) {
            return true;
        } else {
            return false;
        }
    }

    function messageValue(){
        if(isEmpty(msgInput)){
            msgInput.classList.add('error');
            statusInfoBlock.textContent = themeUrl.msg_empty;
            return false;
        } else {
            return true;
        }
    }


    const validateForm = () => {
        if (!nameValue()) {
            return false;
        }

        if (!phoneValue()) {
            return false;
        }

        if (!emailValue()) {
            return false;
        }

        if (!messageValue()) {
            return false;
        }



        return true;
    }

    const postData = async (url, data) => {
        statusInfoBlock.textContent = message.loading;
        let res = await fetch(url, {
            method: 'POST',
            body: data,
        });
        return await res.text();
    }

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (!validateForm()) {
            return false;
        }
        ;
        let formData = new FormData(form);

        postData(themeUrl.themeUrl + '/api/send-contact-form.php', formData)
            .then((res) => {
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'form_registration'
                });
                statusInfoBlock.textContent = message.success;
            })
            .catch(() => {
                statusInfoBlock.textContent = message.failure;
            })
            .finally(() => {
                submitBtn.disabled = true;
                clearInputs();
                setTimeout(() => {
                    statusInfoBlock.textContent = '';
                }, 5000);
            });
    });
}


export default sendContactForm;


