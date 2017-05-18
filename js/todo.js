var ul = document.querySelector('#list');
var taskName = document.querySelector('#taskName');

function createTask() {
    //on crée l'élément
    var li = document.createElement('li');
    //checkbox
    var checkBox = document.createElement('input');
    checkBox.type = 'checkbox';
    //texte
    var span = document.createElement('span');
    span.innerText = taskName.value;
    //bouttons
    var deleteEl = document.createElement('button');
    deleteEl.innerText = 'x';
    var upEl = document.createElement('button');
    upEl.innerText = '^';
    var downEl = document.createElement('button');
    downEl.innerText = 'v';
    //dans mon li je veux que tu mettes checkbox, span, ...
    li.appendChild(checkBox);
    li.appendChild(span);
    li.appendChild(deleteEl);
    li.appendChild(upEl);
    li.appendChild(downEl);

    //on ajoute notre <li> à notre <ul>
    ul.appendChild(li);
}

function checkTask() {
    var text = this.parentElement.querySelector('span');
    text.style.textDecoration = this.checked ? 'line-through' : '';
}

function deleteTask() {
    ul.removeChild(this.parentElement);
}

function upEl(){
    if(!this.parentElement.previousElementSibling) return;
    ul.insertBefore(this.parentElement.previousElementSibling,this.parentElement);
}

function downEl(){
    if(!this.parentElement.nextElementSibling) return;
    ul.insertBefore(this.parentElement.nextElementSibling,this.parentElement);
}