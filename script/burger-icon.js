var birgerButton = $('.birger-button');
birgerButton.on('click', function() {
$(this).toggleClass('active');
$(this).toggleClass('not-active');
});