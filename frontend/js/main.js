$(document).ready(function() {
    // $('#btn_login').click(function() {
    //     //console.log(form_data);
    //     $.ajax({
    //         type:"POST",
    //         url:'http://localhost/todo-list/welcome/login',
    //         data:form_data,
    //         success:function(data) {
    //             console.log(data);
    //             // if(data.sukses) {
    //             //     console.log(data);
    //             //     //$location.path('http://localhost/todo-list/todo')
    //             // }
    //             // else {
    //             //     //alert('username/password salah');
    //             // }
    //         }
    //     });
    // });

    $('#form_login').submit(function(event) {
        var form_data = {
            'username' : $('#username').val(),
            'password' : $('#password').val(),
        };

        $.ajax({
            type        : 'POST',
            url         : 'http://localhost/todo-list/welcome/login',
            data        : form_data,
            dataType    : 'json',
            encode      : true,
            success:function(data) {
                if(data.sukses) {
                    alert('yey');
                    // $location.path('http://localhost/todo-list/todo');
                    // window.location.href = "http://localhost/todo-list/todo";
                }
                else {
                    alert('username/password salah');
                }
            }
        });

        event.preventDefault();
    });
});
