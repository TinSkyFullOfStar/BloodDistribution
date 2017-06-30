/**
 * Created by TinSky on 2017/6/29.
 */
$(document).ready(function () {
    $('.submit').on('click', function () {
        $.ajax({
            type: 'POST',
            url: 'http://localhost/BloodDistribution/public/login',
            data: {
                _token: '4AwDLdA2KTur1UUoQb7ZITuUL52hhzw0q6KPuPpz',
                uName: $('#uName').val(),
                uPwd: $('#uPwd').val()
            },
            dataType: 'json',
            success: function (data) {

            },
            error: function (err) {

            }
        })
    })
});