/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function (){
    $('.year').click(clickYears);
    $('.blood').click(tBlood);
    $('#nome-id').click(nomeAdd);  
    $('#mail').click(maillist);
    //$('.my-delete').click(my_delete);
    path = $('#url').val();
});

//path = '/becker/web/app_dev.php'; 

// Funcion para enviar datos AJAX via post
function sendfilter(url ,jsondata, callback){
    $.post(url,jsondata,callback,'json');
};
/*function my_delete(){
    alert($(this).parent().parent().parent().attr('id'));
    //$(this).parent('tr');
};*/

// A ejecutar para crear una lista de correos...
function maillist(){
    alert('make list');
};

// Annade un nuevo filtro en la lista de filtros
function addFilter(id,text, onClick){
    var num =10;
    var points = '...';
    if(text.length < num-1  ){
        num = text.length;
        points = '';
    }
    var elem = $('<a id="'+id+''+'" class="actfilter"> <span  class="label label-lg label-grey arrowed-right" style="cursor: hand;" >'+
            text.substr(0,num)+points+'</span></a>');
    $('#filters').append(elem);
    elem.click(onClick);
};

// Elimina un elemento del html
function remFilter(id){
    $('#'+id).remove();
};

// Acciones a realizar cuando se elimina un filtro de tipo nome
function nomeDelete(){
    var json= { 
            'filter':'NM',
            'action':'del',
            'name':'',
            'match':''
        };
    //alert($(this).attr('id'));
    $('#filtName').remove();
    sendfilter(path+'/r/ajaxfilter/', json, function(data){
        if(data.status == 'OK'){
            updateData(data.result,data.paginator);
        }
        else{
            alert('Fiter non founded');
        }
        
    });
};

//Actualiza la secccion de datos 
function updateData(html, paginator){
    $('#mytbody').html(html);
    $('#my-paginator').html(paginator);
};

//Acciones a ejecutar cuando se annade un filtro de tipo nome ...
function nomeAdd(){
    if($('#filtername').val()!="" && $('#filtername').val()!=null){
        var check = 'false';
        if($('#chType').is(':checked')){
            check = 'true';
        }
        remFilter('filtName');
        var json= { 
            'filter':'NM',
            'action':'add',
            'name':$('#filtername').val(),
            'pos':$('#filters').children().length,
            'match':check
        };
        sendfilter(path+'/r/ajaxfilter/', json, function(data){
            if(data.status == 'OK'){
                addFilter('filtName',$('#filtername').val(),nomeDelete);
                updateData(data.result, data.paginator);
            }
        });
    }
    else{
        alert('Tem que inserir um nome');
    }
};

//Acciones a ejecutar cuando se annade un filtro de tipo blood. 
function tBlood(){
    var json= {
            'action':'add',
            'filter':'TB',
            'id':$(this).attr('id'),
            'name':$(this).attr('name')
        };
    var tmp = this;
    sendfilter(path+'/r/ajaxfilter/',json, function(data){
          if(data.status == 'OK'){
                addFilter('filtBlood',$(tmp).attr('name')   ,bloodDelete);
                updateData(data.result, data.paginator);
          }
        });
};
function bloodDelete(){
    var json= { 
            'filter':'TB',
            'action':'del',
            'id':'',
            'name':''
        };
    //alert($(this).attr('id'));
    $('#filtBlood').remove();
    sendfilter(path+'/r/ajaxfilter/', json, function(data){
        if(data.status == 'OK'){
            updateData(data.result,data.paginator);
        }
        else{
            alert('Fiter non founded');
        }
        
    });
};

// A ejecutar cuando se hace click en el filtro years
function clickYears(){                   
    var json= {
            'filter':'YE',
            'from':$(this).attr('from'),
            'to':$(this).attr('to')
        };
    sendfilter('...',json, function(data){
           // alert(data);
        });  
    alert($(this).attr('id'));
    return true;
};
