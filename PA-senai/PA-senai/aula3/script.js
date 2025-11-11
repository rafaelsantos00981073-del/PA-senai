const x = 10;

console.log("Hellow Word")

const alunos = ["Rafael", "Leonardo", "Alex"]

console.log(alunos)

function somar(x, y){
    return x + y

}


function bomDia(nome){
    return "Bom dia meu querido(a) " + nome
}

console.log(bomDia("Max"))
console.log(somar(10, 5))
console.log(somar(12, 7))

let titulo = document.getElementById("titulo")

titulo.innerText = "Alterando o texto a partir do java script"

console.log(titulo.innerHTML)


function sendtext(){
    let texto = document.getElementById("texto").value
    alert(texto)
    document.getElementById("texto").value = ""
}
function soma(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1 + n2)
    Number(document.getElementById("n1").value = "")
    Number(document.getElementById("n2").value = "")
}
function sub(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1 - n2)
    Number(document.getElementById("n1").value = "")
    Number(document.getElementById("n2").value = "")
}
function div(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    Number(document.getElementById("n1").value = "")
    Number(document.getElementById("n2").value = "")
    if(n1 == 0 || n2 == 0){
        alert("Não é possivel realizar essa conta")
    }
    else{
        alert(n1 / n2)
    }
}
function mult(){
    let n1 = Number(document.getElementById("n1").value)
    let n2 = Number(document.getElementById("n2").value)
    alert(n1 * n2)
    Number(document.getElementById("n1").value = "")
    Number(document.getElementById("n2").value = "")
}