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
        var myformulario = $('.ajaxdatos');
        limpiaForm(myformulario);
        $('.elemento').toggle();
    })
}

function limpiaForm(miForm) {
    $(':input', miForm).each(function() {
        var type = this.type;
        var tag = this.tagName.toLowerCase();
        if (type == 'text' || type == 'password' || tag == 'textarea')
        this.value = "";
        else if (type == 'checkbox' || type == 'radio')
        this.checked = false;
        else if (tag == 'select')
        this.selectedIndex = -1;
    });
}