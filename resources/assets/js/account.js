var elementsForm,contLogin;

$('.accountBtnForm').on('click',function () {
    $('#accountForm').submit();
});

$('#accountForm').on('submit',function (e) {
    e.preventDefault();
    elementsForm = [
        "nameAccount",
        "lastnameAccount",
        "visibleNameAccount",
        "emailAccount",
        "postalAccount",
        "phoneAccount",
        "addressAccount",
        "nameAddressAccount",
        "countryAccount",
        "statesAccount",
        "citiesAccount",
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

    var data = $(this).serialize();

    swal({
        text: "Espere un momento",
        icon: imageURL,
        button: false,
        closeOnClickOutside: false,
    });

    $.ajax({
        url: https + "accountChange",
        method: "POST",
        data: data,
        success: function (data) {
            if ($.trim(data) == "complet"){
                location.reload();
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

$("#countryAccount").change(function(){
    var country_id= $(this).val();
    getStates(country_id,'statesAccount','citiesAccount');
});

$("#statesAccount").change(function(){
    var state_id= $(this).val();
    getCities(state_id,'citiesAccount');
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
