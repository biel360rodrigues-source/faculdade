function inserir(num){
    let resultado = document.getElementById("resultado")
    resultado.value = resultado.value + num
}

function limpar(){
    document.getElementById("resultado").value = ""
}

function apagar(){
    let resultado = document.getElementById("resultado")
    resultado.value = resultado.value.slice(0,-1)
}

function calcular(){
    let resultado = document.getElementById("resultado")

    try{
        resultado.value = eval(resultado.value)
    }
    catch{
        resultado.value = "Erro"
    }
}