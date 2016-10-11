'use strict';

$(function () {

    $('#status').removeClass('statusShow');
    $('#status').addClass('statusHide');

    $('.btn').click(function () {
        var heavyUrl = $('.light-url').val();
        $.ajax({
            url: 'shorten/url?heavyUrl=' + heavyUrl,
            contentType: 'application/json',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            error: function (e, m, x) {

                console.log(e.responseText);
            },
            success: function (r) {
                setStatus(r);
            }

        });

        function setStatus(data) {
            $('#status').removeClass('statusHide');
            $('#status').addClass('statusShow');
            $('#statusSuccessMsg').val(data);
        }

    });

    // click events
    document.body.addEventListener('click', copy, true);

    // event handler
    function copy(e) {
        // find target element
        var
            t = e.target,
            c = t.dataset.copytarget,
            inp = (c ? document.querySelector(c) : null);
        // is element selectable?
        if (inp && inp.select) {

            // select text
            inp.select();

            try {
                // copy text
                document.execCommand('copy');
                inp.blur();

                // copied animation
                t.classList.add('copied');
                setTimeout(function() { t.classList.remove('copied'); }, 1500);
            }
            catch (err) {
                alert('please press Ctrl/Cmd+C to copy');
            }

        }

    }

});
