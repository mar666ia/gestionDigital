const formularioest = document.querySelector("#form");
formularioest.addEventListener('submit', (e) =>{
    e.preventDefault();
    const datos = new FormData(document.getElementById('form'));
    var nombre = datos.get('nombre');
    //alert(nombre);
    var url = "./php/ejecutarconsultas.php";
    fetch(url,{
        method:'post',
        body:datos
    })
    .then (data => data.json())
    .then (data => {
        console.log('success', data);
    })
    .catch(function(error){
        console.log('error', error);
    });
});
