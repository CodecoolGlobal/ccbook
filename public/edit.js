let inputs = document.getElementsByTagName('input');
let submitButton = document.getElementById('submitButton');


document.getElementById('btnFile').addEventListener('click',function () {
    document.getElementById('uploadFile').click();
});

submitButton.addEventListener('click', function () {
    let counter = 0;
    for (let input of inputs) {
        if (input && input.value) {
            counter++;
        }
    }
    if (counter < 5) {
        if (!document.getElementById('formFeedback')) {

            let p = document.createElement('p');
            p.setAttribute('id', 'formFeedback');
            p.setAttribute('style','text-aling:center;color:red');
            p.innerText = 'You must have completed at least 5 fields';
            document.getElementById('feedback').appendChild(p);
        }
    } else {
        let form = document.getElementById('form-edit');
        form.submit();
    }
});


