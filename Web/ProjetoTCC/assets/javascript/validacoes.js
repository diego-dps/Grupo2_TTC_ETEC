/*Validações do Login*/

$(function() {
        $('#login').submit(function() {
            var obj = this;
            var form = $(obj);
            var dados = new FormData(obj);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: dados,
                processData: false,
                cache: false,
                contentType: false,
                success: function(data) {
                    if (data == "ErroUsuario") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de usuário está vazio!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSenha") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de senha está vazio!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "Sucesso") {

                        Swal.fire({
                            icon: 'success',
                            title: 'Login efetuado com sucesso!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        })
                    }
                }
            })
            return false;
        })
    }

);

/*Validações do Login  Responsivo*/

$(function() {
        $('#loginResponsivo').submit(function() {
            var obj = this;
            var form = $(obj);
            var dados = new FormData(obj);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: dados,
                processData: false,
                cache: false,
                contentType: false,
                success: function(data) {
                    if (data == "ErroUsuario") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de usuário está vazio!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSenha") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de senha está vazio!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "Sucesso") {

                        Swal.fire({
                            icon: 'success',
                            title: 'Login efetuado com sucesso!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        })
                    }
                }
            })
            return false;
        })
    }

);

/*Validações do Cadastro de Funcionários*/

$(function() {
        $('#cadastroFuncionario').submit(function() {
            var obj = this;
            var form = $(obj);
            var dados = new FormData(obj);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: dados,
                processData: false,
                cache: false,
                contentType: false,
                success: function(data) {
                    if (data == "ErroNome") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de nome está vazio!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK',
                        });
                    }
                    if (data == "ErroEmail") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de email está vazio!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "Errocpf") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de CPF está vazio!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroPass") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo de senha está vazio!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroCelular") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'Digite um número de celular válido!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroConfSenha") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'O campo confirmação de senha está vazio!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroSenhaNaoConfere") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'As senhas não coincidem!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "ErroCargo") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Erro ao preencher campos',
                            text: 'Selecione um cargo!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        });
                    }
                    if (data == "Sucesso") {

                        Swal.fire({
                            icon: 'success',
                            title: 'Cadastro realizado com sucesso!',
                            confirmButtonColor: " #dc3545",
                            confirmButtonText: 'OK'
                        })
                    }
                }
            })
            return false;
        })
    }

);