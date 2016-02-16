$('.form-group').hide();

$('.changeTitle').on('click', function (e) {
    e.preventDefault();
    if ($(this).next().is(':visible')) {
        $(this).next().hide();
    } else {
        $(this).next().show();
    }
});