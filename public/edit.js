let formDiv = document.getElementById('formDiv');
let p = document.createElement('p');
p.setAttribute('id', 'formFeedback');
p.setAttribute('style', 'text-align:center;color:red');
document.getElementById('feedback').appendChild(p);


let submitButton = document.getElementById('submitButton');
submitButton.addEventListener("click", function (e) {
    e.preventDefault();
    console.log(submitButton);
})

document.getElementById('btnFile').addEventListener('click', function () {
    document.getElementById('uploadFile').click();
})


submitButton.addEventListener('click', function () {
    let inputs = formDiv.getElementsByTagName('input');
    let counter = 0;
    let firstNameInput = document.querySelector('[name="first_name"]')
    let lastNameInput = document.querySelector('[name="last_name"]')
    let birthdateInput = document.querySelector('[name="birthdate"]')

    for (let input of inputs) {
        console.log(input.value);
        if (input && input.value.length!==0) {
            counter++;
        }
    }

    if ([firstNameInput.value,lastNameInput.value,birthdateInput.value].some((input)=>input==0)) {
        if (p.innerText!=='Please fill in your first name , last name and birthdate') {
            p.innerText = 'Please fill in your first name , last name and birthdate';
        }
    } else if (counter < 5) {
        if (p.innerText!=='You must have completed at least 5 fields') {
            p.innerText = 'You must have completed at least 5 fields';
        }
    } else {
        let form = document.getElementById('form-edit');
        form.submit();
    }
});


