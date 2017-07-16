"use strict";
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
    var data = [
        {
            value: 60,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "Symps"
        },
        {
            value: 40,
            color: "#ddd",
            highlight: "#bbb",
            label: "no yet"
        }
    ];
    var ctx = document.getElementById("syms").getContext('2d');
    var sympsChart = new Chart(ctx).Doughnut(data, {responsive: true,});

    $(".anketa .input-group input").on("change keyup",function(e){
        if(!$(this).val().length) $(this).closest('.input-group').removeClass('check').addClass('fail');
        else $(this).closest('.input-group').removeClass('fail').addClass('check');
    }).change();
});
