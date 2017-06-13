/**
 * Created by 91178 on 13.06.2017.
 */
(function( $ ) {

    $(document).ready(function () {
        var form = $('#uploadPhotoForm');
        var fileField = $('#photo');

        var action = form.attr('action');
        fileField.on('change', function () {
            var labelField = $('#label');
            var self = $(this);
            if (labelField.val() !== null && labelField !== undefined) {
                 var formData = {
                     label: labelField.val(),
                     image: self.val()
                 };
                 console.log(formData);
                $.ajax({
                    url: action,
                    type: 'post',
                    data: formData,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        console.log(data);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                })
            }
        })


    });

})(jQuery);

