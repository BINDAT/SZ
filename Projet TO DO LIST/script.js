//In effective//

//Ajout EV//
var list = document.querySelector('ul')/*selection du tableau*/
list.addEventListener('click',function(ev){
    if (ev.target.tagName === 'LI'){} /*Cible liste pour un ajout*/
});

//Creation//
function newElement(){
var li = document.createElement("li");/*recupe sur liste du ul*/
var inputValue = document.getElementById("task");/*ICI recupe le task id pour la liste*/
var tagName = document.createTextNode("task")
{document.getElementById("liste").appendChild(li);}/*a la recherche de l'id liste*/
}
document.getElementById("task").value="";
var span = document.createElement("ajout")/*Creer un span*/

/*Ce code n'est pas fonctionnel maintenant mais il le sera dans un futur proche
et il est inspiré du code https://www.w3schools.com/howto/howto_js_todolist.asp
que j'essais de contenser est le récrire par la suite beaucoup de focntion ont disparue*/
//Ajout EV//

//In learn//
/*function newElement() {
    var li = document.createElement("li");
    var inputValue = document.getElementById("task").value;
    var t = document.createTextNode(inputValue);
    li.appendChild(t);
    if (inputValue === '') {
      alert("You must write something!");
    } else {
      document.getElementById("liste").appendChild(li);
    }
    document.getElementById("task").value = "";
  
    var span = document.createElement("SPAN");
    var txt = document.createTextNode("\u00D7");
    span.className = "close";
    span.appendChild(txt);
    li.appendChild(span);
  
    for (i = 0; i < close.length; i++) {
      close[i].onclick = function() {
        var div = this.parentElement;
        div.style.display = "none";
      }
    }
  } */