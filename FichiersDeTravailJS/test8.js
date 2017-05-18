window.addEventListener('load', function(event) {
    var myForm = document.getElementById('myForm');
    myForm.addEventListener('submit', function(event) {
        event.preventDefault();
        var req = new XMLHttpRequest();
        var url = myForm.action;
        req.open('POST', url, true);
        req.addEventListener('readystatechange', function(event) {
            if (req.readyState == 4 && req.status == "200") {
                document.getElementById('article').innerHTML = req.responseText;
            }
        });
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
        req.send('nom=' + myForm.nom.value);

    });
    document.body.addEventListener('click', function(event) {
        if (event.target.tagName == "A") {
            event.preventDefault();
            var req = new XMLHttpRequest();
            var url = event.target.href;
            req.open('GET', url, true);
            req.addEventListener('readystatechange', function(event) {
                if (req.readyState == 4 && req.status == "200") {
                    document.getElementById('article').innerHTML = req.responseText;
                }
            });
            req.send();
        }
    });
});