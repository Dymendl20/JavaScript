var sentence = "Cupcake ipsum trallala dolor maggi saf safal.";
var words = sentence.split(' ');
var el = document.getElementById('text');

var i = 0;
var interval = setInterval(function(){
    el.innerText += ' ' + words[i];
    i++;
    if (!words[i]) {
        clearInterval(interval);
    }
    //Arrêter si je n'ai pas de mot suivant
},500);