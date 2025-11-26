/* Commento multilinea */
// Commento in linea

// Stampa in console
console.log("Ciao, mondo!");

//Mostra un popup con un messaggio
window.alert("Benvenuto");

//Mostra un popup con una richiesta che restituisce true o false
console.log(window.confirm("Sei sicuro?"));

//Mostra un popup che chiede un dato
window.prompt("Inserisci un numero");

//Dichiarazione di variabile
var stringa1 = "Ciao mondo"; //Variabile globale
let stringa2 = "Ciao mondo"; //Variabile locale
const costante = "Ciao mondo"; //Costante

//Stringhe
var stringa = "Insieme di caratteri";
console.log(stringa[2]); //String

//Interi -> int
var intero = 1;
console.log(typeof intero); //Number

//Decimali -> float;
var decimale = 1.2;
console.log(typeof decimale); //Number

//Boolean
var bool = true;
console.log(typeof bool); //Booleani

//Array
var array = [1, 2, 3, 4, 5, 6];
console.log(typeof array); //Object

//Oggetto
var object = {
    "nome": "Mario",
    "età": 30
};
console.log(typeof object); //Objec

//Operatori aritmetici
var a = 1;
var b = 2;
var c = 3;

console.log(a+b);
console.log(a-b);
console.log(a*b);
console.log(a/b);
console.log(a%b); //Resto della divisione

//Incrementi
a = 1;
console.log(a++); //Leggo e poi incremento
console.log(++a); //Incremento e poi leggo

//Operatori logici
console.log(a < b);
console.log(a <= c);
console.log(a == 3); //Uguaglianza
console.log(a == "3"); //Uguaglianza per valore
console.log(a === "3"); //Uguaglianza per valore e per tipo

console.log(!(a < b)); //Not
console.log(a == 3 && b == 1); //And
console.log(a == 3 || b == 1); //Or

//Concatenazione
console.log(stringa1 + stringa2);

a = 2; //è in formato numero
b = 3;
c = "1"; //è in formato stringa perchè tra virgolette
var somma = a + c; // Qui somma è una stringa perchè c è una stringa

console.log(a+b); //Somma, stampa 5
console.log(a+c); // Concatenazione, 2 attaccato a 1, stampa 21
console.log(somma+b); // 213
console.log(somma > 20); // Somma viene convertita in numero, quindi vero
console.log(somma.length); //Lunghezza della stringa 
console.log(a+b+c); // 51, in php sarebbe stato 6 perchè + è somma e basta

var d;
console.log(d); //Undefined, i campi indefiniti vengono troncati
d = undefined;

var e = null;
console.log(typeof e); //Null, i campi nulli rimangono, rimane il falso

var oggetto = {
    "nullo": null,
    "undefined": undefined
};
console.log(oggetto);
console.log(d == true); //Falso
console.log(e == true); //Falso
console.log(d == e); //Entrambi falsi -> true
console.log(d === e); //Sono due tipi di dato diversi, Null è diverso da Undefined