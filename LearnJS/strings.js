var txt = "This is a text";
var txt2 = "with four words";
document.getElementById("string").innerHTML = "String : " + txt;
document.getElementById("string1").value = txt.length;
document.getElementById("string2").value = txt.slice(0,4);
document.getElementById("string3").value = txt.substr(10,4);
document.getElementById("string4").value = txt.replace("text", "string");
document.getElementById("string5").value = txt.toUpperCase();
document.getElementById("string6").value = txt.toLowerCase();
document.getElementById("string7").value = txt.concat(" ", txt2);