(function() {
    function ajaxGet(url, dest) {
        var req = new XMLHttpRequest();
        req.open('GET', url, true);
        req.addEventListener('readystatechange', function(event) {
            if (req.readyState == 4 && req.status == "200") {
                dest.innerHTML = req.responseText;
            }
        });
        req.send();
    }
    window.addEventListener('load', function(event) {
        document.body.addEventListener('click', function(event) {
            if (event.target.tagName == "A") {
                event.preventDefault();
                ajaxGet(event.target.href, document.getElementById('article'));
            }
        });
    });
})();