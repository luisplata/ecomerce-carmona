$(document).ready(function () {
    if (window.location.href.replace(https, '') == 'shop') {

        $('.sectionShopInfo .delete').click(function () {
            var id_product = $(this).attr('id');
            swal("¿Seguro de eliminar este producto?", {
                buttons: {
                    cancel: "Cancelar",
                    catch: {
                        text: "Eliminar",
                        value: "delete",
                    },
                    defeat: false,
                },
                icon: "warning",
            })
                .then((value) => {
                    switch (value) {
                        case "defeat":
                            return false;
                            break;
                        case "delete":
                            $.ajax({
                                url: https+"deleteMoreOrder",
                                method: "POST",
                                data: {id_product:id_product,action:'deleteMoreOrder'},
                                success: function (data) {
                                    if($.trim(data) == 1){
                                        location.reload();
                                    }else{
                                        swal({
                                            text: "Error, hubo problemas ¡intentelo nuevamente!",
                                            icon: "warning",
                                            button: "OK!",
                                        });
                                    }
                                }
                            });
                            break;
                        default:
                            return false;
                    }
                });
        });

        $('.sectionShopInfo .cant .less').click(function () {
            var price_type =  $('#price_type').val();
            var dolar =  $('#dolar').val();
            var id =$(this).attr('id'),
                id_product=$(this).attr('id_product');
            var cant_number = parseInt($.trim($(".productCant"+id).html())) - 1;
            $(".productCant"+id).html('&ensp;'+cant_number+'&ensp;');
            var cant = $.trim($(".productCant"+id).html());
            $.ajax({
                url: https+"lessMoreOrder",
                method: "POST",
                data: {id:id,id_product:id_product,action:'lessMoreOrder'},
                success: function (data) {
                    if(cant == 0){
                        location.reload();
                    }
                    if($.trim(data) == 0){
                        swal({
                            text: "Error, hubo problemas ¡intentelo nuevamente!",
                            icon: "warning",
                            button: "OK!",
                        });
                    }else if($.isEmptyObject(data)){
                        swal({
                            text: "Error, hubo problemas ¡intentelo nuevamente!",
                            icon: "warning",
                            button: "OK!",
                        });
                    }else{
                        $.each(data, function(index, c) {
                            var suma=0,total=0;
                            var precio = "" + c.price;
                            precio = parseInt(precio.replace(".", ""));
                            if(c.descount > 0){
                                suma = (precio - (precio * c.descount / 100)) * cant;
                            }else{
                                suma = precio * cant;
                            }
                            if(price_type == 2){
                                suma = parseInt(suma * dolar);
                            }
                            total = new Intl.NumberFormat().format(suma);
                            total = total.replace(/,/g , ".");
                            $(".priceTotal"+id).html("$"+ total );
                        });
                        subtotal();
                    }
                }

            });
        });

        $('.sectionShopInfo .cant .plus').click(function () {
            var price_type =  $('#price_type').val();
            var dolar =  $('#dolar').val();
            var id =$(this).attr('id'),
                id_product=$(this).attr('id_product');
            var cant_number = parseInt($.trim($(".productCant"+id).html())) + 1;
            $(".productCant"+id).html('&ensp;'+cant_number+'&ensp;');
            var cant = $.trim($(".productCant"+id).html());
            $.ajax({
                url: https + "plusMoreOrder",
                method: "POST",
                data: {id:id,id_product:id_product,action:'plusMoreOrder'},
                success: function (data) {
                    if($.trim(data) == 0){
                        swal({
                            text: "Error, hubo problemas ¡intentelo nuevamente!",
                            icon: "warning",
                            button: "OK!",
                        });
                    }else if($.isEmptyObject(data)){
                        swal({
                            text: "Error, hubo problemas ¡intentelo nuevamente!",
                            icon: "warning",
                            button: "OK!",
                        });
                    }else{
                        $.each(data, function(index, c) {
                            var suma=0,total=0;
                            var precio = "" + c.price;
                            precio = parseInt(precio.replace(".", ""));
                            if(c.descount > 0){
                                suma = (precio - (precio * c.descount / 100)) * cant;
                            }else{
                                suma = precio * cant;
                            }
                            if(price_type == 2){
                                suma = parseInt(suma * dolar);
                            }
                            total = new Intl.NumberFormat().format(suma);
                            total = total.replace(/,/g , ".");
                            $(".priceTotal"+id).html("$"+ total );
                        });
                        subtotal();
                    }
                }

            });
        });

        function subtotal()
        {
            var price_type =  $('#price_type').val();
            var dolar =  $('#dolar').val();
            $.ajax({
                url: https + "subtotalpay",
                method: "POST",
                data: {id:0,action:"subtotalpay"},
                success: function (data) {
                    if ($.trim(data) > 0){
                        var total = parseInt(data);
                        if(price_type == 2){
                            total = parseInt(total * dolar);
                        }
                        total = new Intl.NumberFormat().format(total);
                        total = total.replace(/,/g , ".");
                        if(price_type == 1){
                            $('.total').html('$'+total+' COP');
                        }else{
                            $('.total').html('$'+total+' USD');
                        }
                    }else if($.trim(data) == 0){
                        location.reload();
                    } else {
                        swal({
                            text: "Error, hubo problemas",
                            icon: imageURL,
                            button: "OK!",
                        });
                    }
                }
            });
        }

    }
});
