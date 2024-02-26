'use strict';

/*Tìm kiếm*/

$('.categories').change(function(){
    ajaxSearch();
});

$('#datepicker .inp-date-s').change(function(){
    ajaxSearch();
});

$('#created').change(function(){
    ajaxSearch();
})

$('#submitSearch').click(function(){
    ajaxSearch();
})

$('#searchHome').click(function(){
    $("#formHome").submit();
})

$('#searchHomeMobile').click(function(){
    $("#formHomeMobile").submit();
})

/*$('.inp-s-head').keydown(function(){
    setTimeout( function () {
        $("#formHome").submit();
        $("#formHomeMobile").submit();
    },1000);

})*/
/*
$('#nameSearch').keyup(function(){
    setTimeout( function () {
        ajaxSearch();
    },4000);
})
*/

function ajaxSearch(){
    $("#search").submit();
}

