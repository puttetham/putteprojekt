// EXPAND EXPERIENCE ON ABOUT PAGE

$(document).ready(function () {
    $('.hidden').hide();
    $('i').click(function () {
        // .parent() selects the A tag, .next() selects the P tag
        $(this).parent().next().slideToggle(200);
    });
    $('.hidden').slideUp(1000);
});


/*
var hiddens = document.getElementsByClassName('hidden');
var arrows = document.getElementsByTagName("i");

    for (var i = 0; i < arrows.length; i++) {
         var v = arrows[i];
         arrows[i].addEventListener('click', expand);
    }

    function expand() {
        var number = Number(this.id);
        var hidden = hiddens[number];

        if (hidden.style.display == 'block') {
            hidden.style.display = 'none';
        } else {
            hidden.style.display = 'block';
    }
};
*/
