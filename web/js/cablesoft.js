$(document).on('ready',constructor);

function constructor()
{
    ajaxsimple();
    ajaxdatos();
    efectoformulario();
}

function ajaxsimple()
{
    $('#administrar, #dinamico').on('click','.ajaxsimple',function(e){
        e.preventDefault();
        var enlace = $(this).attr('href');
        $.ajax({
            url:enlace,
            type:'get',
            success:function(info){
                $('#dinamico').html(info);
            },
            error:function(){
                $('#dinamico').html('Error en la consulta');
            }
        })
    })
}

function ajaxdatos()
{
    $('#dinamico').on('submit','.ajaxdatos',function(e){
        e.preventDefault();
        var accion = $(this).attr('action');
        var datos = $(this).serialize();
        $.ajax({
            url:accion,
            type:'POST',
            data:datos,
            success:function(info){
                $('#dinamico').html(info);
            },
            error:function(){
                $('#dinamico').html('Error al guardar los datos');
            }
        })
    })
}

function efectoformulario()
{
    $('#dinamico').on('click','.activar',function(){
        $('.elemento').toggle();
    })
}