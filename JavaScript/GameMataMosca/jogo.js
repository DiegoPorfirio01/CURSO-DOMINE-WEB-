var altura = 0
var largura = 0


function ajustaTamanhoPalcoJogo() {
    altura = innerHeight
    largura = innerWidth
    console.log(altura, largura)
}

ajustaTamanhoPalcoJogo()


function posicaoRandom() {
    //removendo mosca, caso já exista não remover






    var posicaox = Math.floor(Math.random() * largura) - 90
    var posicaoy = Math.floor(Math.random() * altura) - 90

    posicaox = posicaox < 0 ? 0 : posicaox
    posicaoy = posicaoy < 0 ? 0 : posicaoy


    console.log(posicaoy, posicaox)

    var mosca = document.createElement('img')
    mosca.src = 'imagens/mosca.png'
    mosca.className = tamanhoAleatorio() + ' ' + ladoAleatorio()
    mosca.style.left = posicaox + 'px'
    mosca.style.top = posicaoy + 'px'
    mosca.style.position = 'absolute'
    mosca.id = 'mosca'
    mosca.onclick = function() {
        this.remove()
    }
    document.body.appendChild(mosca)
    console.log(ladoAleatorio())


}

function tamanhoAleatorio() {
    var classe = Math.floor(Math.random() * 3)

    switch (classe) {
        case 0:
            return 'mosca1'
        case 1:
            return 'mosca2'
        case 2:
            return 'mosca3'
    }
}

function ladoAleatorio() {
    var classe = Math.floor(Math.random() * 2)

    switch (classe) {
        case 0:
            return 'ladoa'
        case 1:
            return 'ladob'

    }
}