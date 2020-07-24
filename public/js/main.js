$(document).ready(() => {


    $('#login-btn').on('click', function () {

        const username = $('#username').val();
        const password = $('#password').val();
        const warningContainer = $('.warning-message-container');
        const emptyInputWarningMessage = `<p>Please add your username and password.</p>`;
        const warningMessages = `<p>Your user name or password was incorret.</p>
                                 <p>Please try it again.</p>`;

        if (username == "" || password == "") {
            $(warningContainer).empty();
            $(warningContainer).append(emptyInputWarningMessage);
        }
        else {
            $.post('index/process', { username: username, password: password }, function (data, status) {
                if (status == "success" && data == "success") {
                    window.location = "http://localhost/speakerportal/columns";
                }
                else {
                    $(warningContainer).empty();
                    $(warningContainer).append(warningMessages);
                }
            })
        }
    })

    $("tbody").sortable({
        cursor: "grabbing",
        opacity: 0.8,
        snpa: true,
        update: function (event, ui) {
            const warningContainer = $('.warning-message-container');
            $(warningContainer).empty();
            $(this).children().children().each(function (index) {

                let position = $(this).data('position');
                let dataIndex = $(this).data('post-id');

                if (position != (index + 1)) {
                    $(this).data('position', (index + 1)).addClass('updated');
                }
            })
        }
    });

    $("#save-position-btn").on('click', function () {
        saveNewPositions();
    })

    function saveNewPositions() {
        const warningContainer = $('.warning-message-container');
        $(warningContainer).empty();
        let newPositions = [];
        $('.updated').each(function () {
            let postID = $(this).data('post-id');
            let position = $(this).data('position');
            let tableID = $(this).parent().parent().parent().parent().attr('id');

            let newPositionObject = {
                id: postID,
                position: position,
                tableid: tableID
            };

            newPositions.push(newPositionObject);
            $(this).removeClass('updated');
        });

        $.ajax({
            url: 'columns/updatePosition',
            method: 'POST',
            dataType: 'text',
            data: {
                update: 1,
                positions: newPositions
            }, success: function (response) {
                if (response == "success") {
                    const successSaveMessage = `<p>Your list has been succesful saved.</p>`;
                    $(warningContainer).append(successSaveMessage);
                }
                else {
                    const successSaveMessage = `<p>Your list has not been succesful saved.</p>`;
                    $(warningContainer).append(successSaveMessage);
                }
            }
        })
    }
})

