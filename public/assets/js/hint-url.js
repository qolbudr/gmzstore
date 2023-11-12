$("[name=username]").on('keyup', (e) => {
    const value = e.target.value

    if(value != '') {
        $("#url-hint").removeClass('d-none');
        $("#url-hint h6").text(`${value}.gmzstore.id`)
    } else {
        $("#url-hint").addClass('d-none');
    }
})