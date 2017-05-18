try {
    blablabla
    window.alert('Bonjour');
} catch (erreur) {
    console.debug(erreur.message);
    throw ("J'arrête");
}
console.debug('Bonjour');
