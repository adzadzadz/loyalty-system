//this script is based on coding by Reverse Fad http://www.revfad.com
function flip() {
 // var result = flipString(document.f.original.value.toLowerCase());
 var elemP = document.querySelectorAll("p");
 var elemH = document.querySelectorAll("h1");
 var elemSpan = document.querySelectorAll("span");
 
 for (var i = elemP.length - 1; i >= 0; i--) {
 	var flipped = flipString(elemP[i].innerHTML);
 	elemP[i].innerHTML = flipped;
 }
 for (var i = elemH.length - 1; i >= 0; i--) {
 	var flipped = flipString(elemH[i].innerHTML);
 	elemH[i].innerHTML = flipped;
 }
 for (var i = elemSpan.length - 1; i >= 0; i--) {
 	var flipped = flipString(elemSpan[i].innerHTML);
 	elemSpan[i].innerHTML = flipped;
 }
 // var result = flipString(document.body.innerHTML);
 // console.log(result);
 // document.body.innerHTML = result;
}
function flipString(aString) {
 var last = aString.length - 1;
 var result = new Array(aString.length)
 for (var i = last; i >= 0; --i) {
  var c = aString.charAt(i)
  var r = flipTable[c]
  result[last - i] = r != undefined ? r : c
 }
 return result.join('')
}
var flipTable = {
a : '\u0250',
b : 'q',
c : '\u0254', 
d : 'p',
e : '\u01DD',
f : '\u025F', 
g : '\u0183',
h : '\u0265',
i : '\u0131', 
j : '\u027E',
k : '\u029E',
//l : '\u0283',
m : '\u026F',
n : 'u',
r : '\u0279',
t : '\u0287',
v : '\u028C',
w : '\u028D',
y : '\u028E',
'.' : '\u02D9',
'[' : ']',
'(' : ')',
'{' : '}',
'?' : '\u00BF',
'!' : '\u00A1',
"\'" : ',',
'<' : '>',
'_' : '\u203E',
';' : '\u061B',
'\u203F' : '\u2040',
'\u2045' : '\u2046',
'\u2234' : '\u2235',
'\r' : '\n' 
}

for (i in flipTable) {
	flipTable[flipTable[i]] = i
}

flip();
