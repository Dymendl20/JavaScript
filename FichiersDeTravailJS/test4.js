function Product(name, ht) {
    function ttc(ht) {
        var tva = 19.6;
        var tvaTot = (ht * 19.6) / 100;
        return tvaTot + ht;
    }
    this.nom = name;
    this.ht = ht;
    this.ttc = ttc(this.ht);
}
debugger;
var produits = [];
var produit1 = new Product("Robe", 100);
produits[produits.length] = produit1;
var produit2 = new Product("Pantalon", 200);
produits[produits.length] = produit2;

for (i in produits) {
    console.debug(produits[i].nom + ' prix ht=' + produits[i].ht + ' prix ttc=' + produits[i].ttc);
}
debugger;
for (prop in produit1) {
    console.debug(prop);
}