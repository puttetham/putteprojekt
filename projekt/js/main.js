// START HANGMANGAME

$(document).on('keydown', function(e) {
    if (e.ctrlKey && (String.fromCharCode(e.which).toLowerCase() === 'q')) {
        $('.hangman').toggle().focus().attr('src', 'hangman/index.html');
    }
});
