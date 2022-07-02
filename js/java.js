//alimentando as constantes com elementos
const cabecalho = document.querySelector("header");
const nav = document.querySelector("nav");
const menu = document.querySelector("header svg");

//adicionando um evento de scroll ao cabeçalho
window.addEventListener("scroll",function(){
    //sempre que o scroll da pagina for maior que 0 a pafina recebera outro estilo
    cabecalho.classList.toggle("ativa",this.window.scrollY>0)
    
})
//adicionando um evento de click no menu
menu.addEventListener("click",function(){
    //classList lista o nome da classe de um objeto
    //o toggle recbe 2 parametros o nome da classe 
    //e um teste logico se for true a classe e adicionada se for false ela é removida
    nav.classList.toggle("navegacao",getComputedStyle(nav).marginTop=='1px')
    cabecalho.classList.toggle("ativa",getComputedStyle(nav).marginTop=='1px')

})