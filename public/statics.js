window.onload = () =>
{
    let navSearch = document.getElementById("navSearch");
    navSearch.addEventListener("focusin", navFocusIn, true);
    navSearch.addEventListener("focusout", navFocusOut, true);
}


function  checkPass() {
    if (document.getElementById('pass').value ===
        document.getElementById('confPass').value) {
        document.getElementById('confPass').style.backgroundColor = 'green';
        document.getElementById("submit").disabled= false;
    } else {
        document.getElementById('confPass').style.backgroundColor = 'red';
        document.getElementById("submit").disabled= true;
    }
}

function checkStatus(statusId){
    document.getElementById("friendStatus")
}



function navFocusIn(){
    let nS = document.getElementById("navSearch");
    nS.placeholder = "Search CodeCoolers";
    nS.style.width = '18rem';
}

function navFocusOut(){
    let nS = document.getElementById("navSearch");
    const yourText = `&#xf002;`

    const parser = new DOMParser();
    nS.placeholder = '';
    nS.placeholder = nS.placeholder.concat(parser.parseFromString(yourText, "text/html").body.textContent, "   Search");
    nS.style.width = '8rem';

}

function currentDate(){
    return new Date().getFullYear();
}