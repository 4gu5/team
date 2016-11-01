$(document).ready(function() {

    function getTodo() {
        $('#get_list').html('');

        $.ajax({
            url: 'http://localhost/team/backend/jsondata',
            dataType: 'text',
            success: function(data) {
                var json = $.parseJSON(data);
                for (var i = 0; i < json.length; ++i) {
                    $('#get_list').append('<div class=\"col-md-3 list\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><div class=\"row\"><div class=\"col-md-8\">'+json[i].judul+'</div><div class=\"col-md-4\"><button type=\"button\" class=\"close\"><span id=\"delete_todo\" data-id=\"'+json[i].id_list+'\">&times;</span></button></div></div></div><div class=\"panel-body\">'+json[i].deskripsi+'</div></div></div>');
                }
            }
        });
    }

    getTodo();

    $('#form_login').submit(function(event) {
        var form_data = {
            'username' : $('#username').val(),
            'password' : $('#password').val(),
        };

        $.ajax({
            type        : 'POST',
            url         : 'http://localhost/team/backend/login',
            data        : form_data,
            dataType    : 'json',
            encode      : true,
            success:function(data) {
                if(data.sukses) {
                    window.location.href = "http://localhost/team/frontend/todo.html";
                }
                else {
                    alert('username/password salah');
                }
            }
        });

        event.preventDefault();
    });

    $('#form_list').submit(function(event) {
        var form_list = $('#form_list').serialize();

        $.ajax({
            type        : 'POST',
            url         : 'http://localhost/team/backend/input',
            data        : form_list,
            success:function(data) {
                getTodo();
                $("#form_list").trigger('reset');
            }
        });

        event.preventDefault();
    });

    function after_load() {
        $("#delete_todo").click(function() {
            var id = $(this).data('id');
            $.ajax({
                type: "POST",
                url: 'http://localhost/team/backend/delete' + id,
                data: '',
                success: function(data) {
                    getTodo();
                }
            });
        });
    }

});
