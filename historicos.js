var form = document.getElementById('form');

form.addEventListener('submit',function(e){
    e.preventDefault();
    console.log('click')
    var datos= new FormData(form);
    
    console.log(datos.get('start'))
    console.log(datos.get('end'))

})