$(document).ready(function() {
    
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
                    // $location.path('http://localhost/todo-list/todo');
                    window.location.href = "http://localhost/team/frontend/todo.html";
                }
                else {
                    alert('username/password salah');
                }
            }
        });

        event.preventDefault();
    });

});
