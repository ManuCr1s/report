import ENV from './routes_report.js';
$(document).ready(function(){
    let idForm = $('#form_ticket');
    idForm.on("submit",function(event){
        event.preventDefault();
        let ruta = ENV.dates,
            formData = $(this).serialize();
        $.ajax({
            url:ruta,
            type:'POST',
            data:formData,
            dataType:'json',
            success:function(response){
                console.log(response);
            },
            error:function(error){
                console.log(error.response);
            }
        });
    })
})