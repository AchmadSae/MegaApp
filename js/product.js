$('.edit-trigger').on('click', function() {

    $('#material-name').val($(this).parent().parent().children().children('p').text());
    $('#material-id').val($(this).attr('name'));
})

$('#material-name').on('click', function() {

    $(this).select();
})

$('#icon_prefix').on('keyup', function() {

    var value = $(this).val().toLowerCase();
    $('.table-content').filter(function() {

        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    })

})