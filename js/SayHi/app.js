var bob= new Person('Bob');
var alice= new Person('Alice');

document.querySelector('.sayHi').onclick = bob.sayHi.bind(bob);
document.querySelector('.sayBye').onclick = bob.sayBye(bob);

document.querySelector('.sayHi').onclick = alice.sayHi.bind(alice);
document.querySelector('.sayBye').onclick = alice.sayBye(alice);