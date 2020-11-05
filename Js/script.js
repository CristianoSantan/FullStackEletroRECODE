//  -----------------------------------   Exibição por categoria 
function exibirCategoria(categoria) {
    let elementos = document.getElementsByClassName('boxProduto');
    console.log(elementos);
    for(var i=0; i<elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id){
            elementos[i].style = "";
        }
        else {
            elementos[i].style = "display:none";
        }  
    }
}
//  -----------------------------------   Exibir todos
let exibirTodos = () => {
    let elementos = document.getElementsByClassName('boxProduto');

    for(var i=0; i<elementos.length; i++){
            elementos[i].style = ""; 
    }
}
//  -----------------------------------   Destacar imagem   
let destaque = (imagem) => {
    if(imagem.height == 160) {
        imagem.height = 120;
    }
    else {
        imagem.height = 160;
    }
}
