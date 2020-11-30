//Slideshow com texto e imagem
let time = 8000,
    currentImageWeb = 0,
    currentTextWeb = 0,
    text = document.querySelectorAll(".texts p"),
    images = document.querySelectorAll(".sliders img")
    max = images.length;
    maxtext = text.length;

    function nextImage(){
        images[currentImageWeb].classList.remove("selected")

        currentImageWeb++

        if(currentImageWeb >= max)
            currentImageWeb = 0

        images[currentImageWeb].classList.add("selected")
    }
    function nextText(){
        text[currentTextWeb].classList.remove("first")

        currentTextWeb++

        if(currentTextWeb >= maxtext)
            currentTextWeb = 0

        text[currentTextWeb].classList.add("first")
    }

    function startImage(){
        setInterval(() => {
            //Troca Imagem
            nextImage();
        }, time)
    }

    function startText(){
        setInterval(() => {
            //Troca text
            nextText();
        }, time)
    }
window.addEventListener("load", startText)
window.addEventListener("load", startImage)

window.addEventListener("scroll", function(){
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
function limpar() {
    document.getElementById("txtnome").focus();
}
var pt1 = window.document.getElementById('pt1')
pt1.addEventListener('click', parte1)

var pt2 = window.document.getElementById('pt2')
pt2.addEventListener('click', parte2)

var pt3 = window.document.getElementById('pt3')
pt3.addEventListener('click', parte3)

var pt4 = window.document.getElementById('pt4')
pt4.addEventListener('click', parte4)

var pt5 = window.document.getElementById('pt5')
pt5.addEventListener('click', parte5)

var pt6 = window.document.getElementById('pt6')
pt6.addEventListener('click', parte6)

var pt7 = window.document.getElementById('pt7')
pt7.addEventListener('click', parte7)

var pt8 = window.document.getElementById('pt8')
pt8.addEventListener('click', parte8)

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
function parte4(){
    fechaMenu()
    document.getElementById("parte4")
}
function parte5(){
    fechaMenu()
    document.getElementById("parte5")
}
function parte6(){
    fechaMenu()
    document.getElementById("parte6")
}
function parte7(){
    fechaMenu()
    document.getElementById("parte7")
}
function parte8(){
    fechaMenu()
    document.getElementById("parte8")
}
function fechaMenu()
{
    document.getElementById("menu2").style.left = "0%";
    document.getElementById("menu").style.height = "12%";
    document.getElementById("menu").style.visibility = "visible";
}
const accordion = document.getElementsByClassName('contentBx');
for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function () {
        this.classList.toggle('active')
    })
}