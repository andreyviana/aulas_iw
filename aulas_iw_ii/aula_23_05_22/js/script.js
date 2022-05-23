let botao = document.getElementById('botao')
let lamp = document.getElementById('lampada')
let imgg = document.querySelector('img#amem')

botao.onclick = function(){
    if(botao.value=='acender'){
        lamp.src='img/acesa.jpg'
        botao.value='apagar'
        imgg.src = 'img/leverbot.webp'
    }else{        
        lamp.src='img/apagada.jpg'
        botao.value='acender'
        imgg.src = 'img/leverup.webp'
    }
}