//Mostrar y ocultar menu
//valores costantes de consulta 
const Men = document.querySelector('.men')
const menu = document.querySelector('.menu-navegacion')

//eventos si dan click quite o ponga la clase spread si la tiene
Men.addEventListener('click', ()=>{
    menu.classList.toggle("spread")
})
// si alguien toca la clic a cualquier parte de la pantallla 
window.addEventListener('click', e =>{
    //condicion si el elemeto si tiene la clase spread realize la funcion
    if(menu.classList.contains('spread') 
    // si se toca cualquier elemento que no sea el menu con la clase spread, cierre el menu
        && e.target != menu && e.target != Men){
        console.log('cerrar')
        menu.classList.toggle("spread")
    }
})
