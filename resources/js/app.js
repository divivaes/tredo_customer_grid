require('./bootstrap');

$(function () {

    initSelectPicker();

});


function initSelectPicker() {
    const select2Selector = $('.form-control-select2');

    if (select2Selector.length) {
        select2Selector.each(function () {
            $(this).select2({
                placeholder: "Select",
                allowClear: true
            });
        });
    }
}
