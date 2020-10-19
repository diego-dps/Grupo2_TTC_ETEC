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
                    if(data == "CPfdeve11"){
                        Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo CPF deve conter 11 digitos!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
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
                            text: 'Deseja cadastrar novamente ?',
                            cancelButtonColor: "#d33",
                            cancelButtonText: 'Não',
                                        showCancelButton: true,  
                            confirmButtonColor: "#3085d6",
                            confirmButtonText: 'Sim'
                        }).then((result) => {
                            if (result.value){
                              window.location.replace("");
                            }else{
                                window.location.replace("TelaFuncionarios");
                            }
                        })
                    }

                    if (data == "ErroBanco") {

                        Swal.fire({
                            icon: 'error',
                            title: 'Erro ao Cadastrar!',
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

/*Validações do Cadastro de Funcionários responsivo*/
$(function() {
    $('#cadastroFuncionarioresponsivo').submit(function() {
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
                if(data == "CPfdeve11"){
                    Swal.fire({
                    title: 'Erro ao preencher campos!',
                    text: 'Digite um CPF de celular válido!',
                    icon: 'error',
                    confirmButtonText: 'Legal, vou refazer'
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
});

/*Validações do editar de Funcionários*/
$(function() {
    $('#UpdateFuncionario').submit(function() {
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
                if(data == "CPfdeve11"){
                    Swal.fire({
                    title: 'Erro ao preencher campos!',
                    text: 'Digite um CPF de celular válido!',
                    icon: 'error',
                    confirmButtonText: 'Legal, vou refazer'
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
                    }).then((result) => {
                        if (result.value){
                          window.location.replace("TelaFuncionarios");
                        }
                      })
                }
            }
        })
        return false;
    })
});

/*Validações do editar de Funcionários responsivo*/
$(function() {
    $('#UpdateFuncionarioresponsivo').submit(function() {
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
                if(data == "CPfdeve11"){
                    Swal.fire({
                    title: 'Erro ao preencher campos!',
                    text: 'Digite um CPF de celular válido!',
                    icon: 'error',
                    confirmButtonText: 'Legal, vou refazer'
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
                    }).then((result) => {
                        if (result.value){
                          window.location.replace("TelaFuncionarios");
                        }
                      })
                }
            }
        })
        return false;
    })
});

/*Cadastro de itens - tela Itens */
$(function() {
    $('#CadastroItens').submit(function() {
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
                if (data == "ErroDescricao") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de descrição está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroPreco") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de preço está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroFoto") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'Nenhuma foto foi selecionada!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Cadastro realizado com sucesso!',
                        text: 'Deseja cadastrar novamente ?',
                            cancelButtonColor: "#d33",
                            cancelButtonText: 'Não',
                                        showCancelButton: true,  
                            confirmButtonColor: "#3085d6",
                            confirmButtonText: 'Sim'
                    }).then((result) => {
                        if (result.value){
                          window.location.replace("");
                        }else{
                            window.location.replace("TelaItens");
                        }
                    })
                }
            }
        })
        return false;
    })
});

/*Cadastro de itens responsivo - tela Itens */
$(function() {
    $('#CadastroItensresponsivo').submit(function() {
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
                if (data == "ErroNomeItem") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de nome está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK',
                    });
                }
                if (data == "ErroDescricao") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de descrição está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroPreco") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de preço está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroFoto") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'Nenhuma foto foi selecionada!',
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
                    });
                }
            }
        })
        return false;
    })
});

/*Update de intens - tela Itens */
$(function() {
    $('#UpdateItens').submit(function() {
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
                if (data == "ErroNomeItem") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de nome está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK',
                    });
                }
                if (data == "ErroDescricao") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de descrição está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroPreco") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de preço está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroFoto") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'Nenhuma foto foi selecionada!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Atualização realizada com sucesso!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value){
                          window.location.replace("TelaItens");
                        }
                      })
                }
            }
        })
        return false;
    })
});

/*Update de intens - tela Itens */
$(function() {
    $('#UpdateItensresponsivo').submit(function() {
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
                if (data == "ErroNomeItem") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de nome está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK',
                    });
                }
                if (data == "ErroDescricao") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de descrição está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroPreco") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de preço está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroFoto") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'Nenhuma foto foi selecionada!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Atualização realizada com sucesso!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value){
                          window.location.replace("TelaItens");
                        }
                      })
                }
            }
        })
        return false;
    })
});

/**exclusão de itens */
$(function() {
    $('#ExcluirItens').submit(function() {
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
                if (data == "Excluir") {
                    Swal.fire({
                        title: 'Você tem certeza?',
                        text: "Você não poderá reverter isso!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, exclua!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                          Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                          )
                        }
                      })
                }
            }
        })
        return false;
    })
});

/**Exclusão de itens responsivos */
$(function() {
    $('#ExcluirItensresponsivo').submit(function() {
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
                if (data == "Excluir") {
                    Swal.fire({
                        title: 'Você tem certeza?',
                        text: "Você não poderá reverter isso!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, exclua!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                          Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                          )
                        }
                      })
                }
            }
        })
        return false;
    })
});

/**Exclusão de funcionario*/
$(function() {
    $('#ExcluirFuncionario').submit(function() {
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
                if (data == "Excluir") {
                    Swal.fire({
                        title: 'Você tem certeza?',
                        text: "Você não poderá reverter isso!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, exclua!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                          Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                          )
                        }
                      })
                }
            }
        })
        return false;
    })
});

/**Exclusão de funcionario responsivos */
$(function() {
    $('#ExcluirFuncionarioresponsivo').submit(function() {
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
                if (data == "Excluir") {
                    Swal.fire({
                        title: 'Você tem certeza?',
                        text: "Você não poderá reverter isso!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, exclua!'
                      }).then((result) => {
                        if (result.isConfirmed) {
                          Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                          )
                        }
                      })
                }
            }
        })
        return false;
    })
});

/*Validações do Recuperação de Senha*/
$(function() {
    $('#RecuperarSenha').submit(function() {
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
                if (data == "ErroEmail") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de email está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                        icon: 'success',
                        title: 'E-mail de redefinição de senha enviado!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    })
                }
            }
        })
        return false;
    })
});

/*Validações do Recuperação de Senha Responsivo*/
$(function() {
    $('#RecuperarSenhaResponsivo').submit(function() {
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
                if (data == "ErroEmail") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de email está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Sucesso") {
                    Swal.fire({
                        icon: 'success',
                        title: 'E-mail de redefinição de senha enviado!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    })
                }
            }
        })
        return false;
    })
});

/*Validações do Alterar Senha*/
$(function() {
    $('#AlterarSenha').submit(function() {
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
                if (data == "ErroNovaSenha") {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de nova senha está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroConfNovaSenha") {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de confirmar nova senha está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "ErroSenhaNaoConfere") {

                    Swal.fire({
                        icon: 'error',
                        title: 'Erro ao preencher campos',
                        text: 'As senhas não coincidem!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }
                if (data == "Sucesso") {

                    Swal.fire({
                        icon: 'success',
                        title: 'Senha alterada com sucesso!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location.replace("");
                        }
                    })
                }
            }
        })
        return false;
    })
});

/*Validações do Alterar Senha Responsivo*/

$(function() {
    $('#AlterarSenhaResponsivo').submit(function() {
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
                if (data == "ErroSenhaAtual") {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de senha atual está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }

                if (data == "ErroNovaSenha") {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de nova senha está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }

                if (data == "ErroConfNovaSenha") {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Erro ao preencher campos',
                        text: 'O campo de confirmar nova senha está vazio!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }

                if (data == "ErroSenhaNaoConfere") {

                    Swal.fire({
                        icon: 'error',
                        title: 'Erro ao preencher campos',
                        text: 'As senhas não coincidem!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    });
                }

                if (data == "Sucesso") {

                    Swal.fire({
                        icon: 'success',
                        title: 'Senha alterada com sucesso!',
                        confirmButtonColor: " #dc3545",
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location.replace("");
                        }
                    })
                }
            }
        })
        return false;
    })
});