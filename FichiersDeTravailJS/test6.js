window.addEventListener('load', function(event) {
    var myForm = document.getElementById('myForm');
    myForm.addEventListener('submit', function(event) {
        if (myForm.nom.value == '') {
            myForm.nom.style.border = "2px solid red";
            var msgErr = document.getElementById('msg-err');
            if (!msgErr) {
                msgErr = document.createElement('p');
                msgErr.id = "msg-err";
                msgErr.textContent = "Erreur";
                msgErr.style.color = "red";
                myForm.parentElement.insertBefore(msgErr, myForm);
            }
        }
        document.body.style.backgroundColor = "#cccccc";
        event.preventDefault();
    });
});