var elementsForm,contLogin;
$('.goPedido').on('click',function () {
    $('#orderForm').submit();
});

$('#checksOrder').change(function () {
    if(!$("#checksOrder").is(':checked')){
        $('#newsOrder').val('0');
    }else{
        $('#newsOrder').val('1');
    }
});


$('#typeChangeOrder').change(function () {
    $('#typeOrder').val($('#typeChangeOrder').val());
});

$('#orderForm').on('submit',function (e) {
    e.preventDefault();
    elementsForm = [
        "nameOrder",
        "lastnameOrder",
        "addressOrder",
        //"descriptionOrder",
        "nameAddressOrder",
        "phoneOrder",
        "countryOrder",
        "statesOrder",
        "citiesOrder",
        "emailOrder",
        "postalOrder",
        "typeOrder",
        "newsOrder"
    ];
    contLogin = validationForm(elementsForm,contLogin = 1);

    if(contLogin == 0)
    {
        swal({
            text: "Debes completar todos los datos",
            icon: imageURL,
            button: "OK!",
        });
        return false;
    }

    if(!$("#terms").is(':checked')){

        swal({
            text: "Debes aceptar la política de privacidad",
            icon: imageURL,
            button: "OK!",
        });
        return false;
    }

    var data = $(this).serialize();

    swal({
        text: "Espere un momento",
        icon: imageURL,
        button: false,
        closeOnClickOutside: false,
    });

    $.ajax({
        url: https + "goPedido",
        method: "POST",
        data: data,
        success: function (data) {
            if ($.trim(data) == "complet"){
                location.href = https + "payu";
            } else {
                swal({
                    text: "" + data,
                    icon: imageURL,
                    button: "OK!",
                });
            }
        }
    });

});

function validationForm(elementsForm,contLogin)
{
    for(var i=0;i<elementsForm.length;i++){
        $('#'+elementsForm[i]).removeClass('error');
        if ( $.trim($("#"+elementsForm[i]).val()) == "" ) {
            contLogin = 0;
            $('#'+elementsForm[i]).addClass('error');
        }
    }
    return contLogin;
}

$("#countryOrder").change(function(){
    var country_id= $(this).val();
    getStates(country_id,'statesOrder','citiesOrder');
});

$("#statesOrder").change(function(){
    var state_id= $(this).val();
    getCities(state_id,'citiesOrder');
});

function getStates(country_id,idElement,idElement2)
{
    $.ajax({
        url: https + "/getStates",
        type: "POST",
        dataType: "json",
        data:{id:country_id,action:'getStates'},
        success:function(datos){
            $('#'+idElement+' .opctions'+idElement).remove();
            $('#'+idElement2+' .opctions'+idElement2).remove();
            $.each(datos, function(index, d) {
                $('#'+idElement).append('<option class="opctions'+idElement+'" value="'+d.DisCodigo+'">'+d.DisNombre+'</option> ');
            });
        }
    });
}
function getCities(state_id,idElement)
{
    $.ajax({
        url: https + "/getCities",
        type: "POST",
        dataType: "json",
        data:{id:state_id,action:'getCities'},
        success:function(datos){
            $('#'+idElement+' .opctions'+idElement).remove();
            $.each(datos, function(index, c) {
                $('#'+idElement).append('<option class="opctions'+idElement+'" value="'+c.CiuCodigo+'">'+c.CiuNombre+'</option> ');
            });
        }
    });
}
