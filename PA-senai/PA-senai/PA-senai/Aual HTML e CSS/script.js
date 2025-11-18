function somar(){
    let v1 = Number(document.getElementById("v1").value)
    let v2 = Number(document.getElementById("v2").value)

    let soma = v1 + v2

    document.getElementById("resultado").innerHTML="resultado soma: " + soma;

}
function sub(){
    let v1 = Number(document.getElementById("v1").value)
    let v2 = Number(document.getElementById("v2").value)

    let sub = v1 - v2

    document.getElementById("resultado").innerHTML="resultado subtração: " + sub;

}
function mult(){
    let v1 = Number(document.getElementById("v1").value)
    let v2 = Number(document.getElementById("v2").value)

    let mult = v1 * v2

    document.getElementById("resultado").innerHTML="resultado multiplicação: " + mult;

}
function div(){
    let v1 = Number(document.getElementById("v1").value)
    let v2 = Number(document.getElementById("v2").value)

    let div = v1 / v2

    document.getElementById("resultado").innerHTML="resultado divisão: " + div;
    

}