$(document).ready(function(){
    let idForm = $('#form_ticket'),
        token =$('meta[name="csrf_token"]').attr('content'),
        date = {"token":token},
        ruta ='{{route("dates")}}';
    idForm.on("submit",function(event){
        event.preventDefault();
        $.ajax({
            url:ruta,
            method:'POST',
            data:date
        });
    })

})