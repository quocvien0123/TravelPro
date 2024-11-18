// Animations
const registerButton = document.getElementById("register");
const loginButton = document.getElementById("login");
const container = document.getElementById("container");

registerButton.addEventListener("click", () => {
    container.classList.add("right-panel-active");
});

loginButton.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
});

// Check Register Error
const form = document.querySelector("form");
const username = document.getElementById("username");
const usernameError = document.querySelector("#username-error");
const email = document.getElementById("email");
const emailError = document.querySelector("#email-error");
const password = document.getElementById("password");
const passwordError = document.querySelector("#password-error");

// Show input error message
function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = "form-control error";
    const small = formControl.querySelector("small");
    small.innerText = message;
}

// Show success outline
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = "form-control success";
    const small = formControl.querySelector("small");
    small.innerText = "";
}

// Check email is valid
function checkEmail(email) {
    const emailRegex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
    return emailRegex.test(email);
}

email.addEventListener("input", function() {
    if (!checkEmail(email.value)) {
        emailError.textContent = "*Email không hợp lệ";
    } else {
        emailError.textContent = "";
    }
});


// Check required fields
function checkRequired(inputArr) {
    let isRequired = false;
    inputArr.forEach(function(input) {
        if (input.value.trim() === "") {
            showError(input, `*Vui lòng nhập thông tin`);
            isRequired = true;
        } else {
            showSuccess(input);
        }
    });

    return isRequired;
}

// Get fieldname
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

// Event listeners
form.addEventListener("submit", function(e) {
    e.preventDefault();

    if (!checkRequired([username, email, password])) {
        // checkLength(username, 3, 15)
        // checkLength(password, 6, 25)
        // checkEmail(email)
    }
});

// Check Login Error

let lgForm = document.querySelector(".form-lg");
let lgEmail = document.querySelector(".email-2");
let lgEmailError = document.querySelector(".email-error-2");
let lgPassword = document.querySelector(".password-2");
let lgPasswordError = document.querySelector(".password-error-2");

function showError2(input, message) {
    const formControl2 = input.parentElement;
    formControl2.className = "form-control2 error";
    const small2 = formControl2.querySelector("small");
    small2.innerText = message;
}

function showSuccess2(input) {
    const formControl2 = input.parentElement;
    formControl2.className = "form-control2 success";
    const small2 = formControl2.querySelector("small");
    small2.innerText = "";
}

// Check email is valid
function checkEmail2(lgEmail) {
    const emailRegex2 = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
    return emailRegex2.test(lgEmail);
}

lgEmail.addEventListener("input", function() {
    if (!checkEmail2(lgEmail.value)) {
        lgEmailError.textContent = "*Email không hợp lệ";
    } else {
        lgEmailError.textContent = "";
    }
});


function checkRequiredLg(inputArr2) {
    let isRequiredLg = false;
    inputArr2.forEach(function(input) {
        if (input.value.trim() === "") {
            showError2(
                input,
                `*${getFieldNameLg(input)} Vui lòng nhập thông tin!`
            );
            isRequiredLg = true;
        } else {
            showSuccess2(input);
        }
    });

    return isRequiredLg;
}

function getFieldNameLg(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

lgForm.addEventListener("submit", function(e) {
    e.preventDefault();

    if (!checkRequiredLg([lgEmail, lgPassword])) {
        checkEmail2(lgEmail);
    }
});