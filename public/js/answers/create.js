var Answer = function () {

    var initAjax = function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    };

    var selectSubmitButton = function () {
        // if($('.answer-form .answer').data('empty') == '1') {
        //     this.
        // } else {
        //
        // }
    };

    return {
        init: function () {
            initAjax();
            selectSubmitButton();
        },
    };
}();

jQuery(document).ready(function () {
    Answer.init();
});
