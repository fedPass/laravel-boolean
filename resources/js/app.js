require('./bootstrap');

var $ = require('jquery');

$(document).ready(function() {
    //quando faccio click su h3
    $('.faq-preview').click(function() {
        console.log('click');
        //metti tutte le icone plus
        $('.faq-preview i').removeClass('fa-minus').addClass('fa-plus');
        //chiudi tutte le tab/tutti i p display none
        $('.faq>p').hide();
        //modifica questa icona in minus
        $(this).find('.faq-preview i').removeClass('fa-plus').addClass('fa-minus');
        //mostrami questo p
        $(this).find('p').show();
    });
});
