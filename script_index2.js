var pt1 = window.document.getElementById('pt1')
pt1.addEventListener('click', parte1)

var pt2 = window.document.getElementById('pt2')
pt2.addEventListener('click', parte2)

var pt3 = window.document.getElementById('pt3')
pt3.addEventListener('click', parte3)

function parte1(){
    fechaMenu()
    document.getElementById("parte1")
}
function parte2(){
    fechaMenu()
    document.getElementsById("parte2")
}
function parte3(){
    fechaMenu()
    document.getElementById("parte3")
}

window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

function abreMenu() 
{  
  document.getElementById("menu2").style.left = "-80%";
  document.getElementById("menu2").style.height = "80%";
  document.getElementById("menu").style.height = "100vh";
  document.getElementById("menu").style.backgroundColor = "black";
  document.getElementById("menu2").style.display = "block";
  document.getElementById("menu2").style.visibility = "visible";
  document.getElementById("close").style.visibility = "visible";
}

function fechaMenu()
{
    document.getElementById("menu2").style.left = "0%";
    document.getElementById("menu").style.height = "12%";
    document.getElementById("menu").style.visibility = "visible";
}

function limpar() {
    document.getElementById("txtnome").focus();
}