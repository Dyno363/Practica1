
//costante de consulta
const imagenes = document.querySelectorAll('.img-galeria')
const imagenLight = document.querySelector('.agregar-imagen');
const contenedorLight = document.querySelector('.imagen-light')
const closeLight = document.querySelector('.close')

// a cada imagen se le otorga una accion con evento de tipo click
imagenes.forEach(imagen => {
    // cada ves que se le de click va a dar el src de la imagen
    imagen.addEventListener('click',()=>{
        aparecerImagen(imagen.getAttribute('src'));
    })
});
contenedorLight.addEventListener('click',(e)=>{
    //si se da click a cualquier cosa que no sea la imagen se quite las clases de show y showimage
    if(e.target !== imagenLight){
        contenedorLight.classList.toggle('show')
        imagenLight.classList.toggle('showImage')
        hamburguer.style.opacity = '1';
    }
})
const aparecerImagen = (imagen)=>{
    // es la imagen de lightbox sea igual al src de la imgen que se le dio click
    imagenLight.src = imagen;
    // cuando se le de click a la imagen se le ponga o quite la clase show
    contenedorLight.classList.toggle('show')
    //cuando se le de click a la imagen se le ponga o quite la clase showImage
    imagenLight.classList.toggle('showImage')

    hamburguer.style.opacity = '0';
}

