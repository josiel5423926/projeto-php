function exibir_categoria(categoria) {
  //Alerta categoria
  let elementos = document.getElementsByClassName("container_intens");
  console.log(elementos);
  for (var i = 0; i < elementos.length; i++) {
    console.log(elementos[i].id);

    if (categoria == elementos[i].id) {
      elementos[i].style = "display:block";
    } else {
      elementos[i].style = "display:none";
    }
  }
}

function exibir_todos() {
  let elementos = document.getElementsByClassName("container_intens");

  for (var i = 0; i < elementos.length; i++) {
    elementos[i].style = "display:block";
  }
}
let destaque = (imagem) => {
  console.log(imagem);
  if (imagem.style.width === "120%") {
    imagem.style.width = "100%";
    imagem.style.height = "50%";
  } else {
    imagem.style.width = "120%";
    imagem.style.height = "80%";
  }
};
