function add(){
    var test = document.createElement('li');
    test.appendChild(document.createTextNode('liste'))
    document.querySelector('ul').appendChild(node);
    var test = document.createElement('li');
    test.innerHTML="<i class=\"fa fa-edit\"></i>"
    document.querySelector('ul').appendChild(test);
}