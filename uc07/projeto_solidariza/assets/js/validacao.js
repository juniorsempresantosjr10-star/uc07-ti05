// Validação do formulário de cadastro

const form = document.getElementById('form-cadastro');

//se o formulário existir, adiciona os eventos de validação

if(formCadastro) {
    const inputCep = document.getElementById('cep');
    const inputUf = document.getElementById('uf');
    const inputSenha = document.getElementById('senha');
    const inputConfirmarSenha = document.getElementById('confirmar-senha');
    const errorSenha = document.getElementById('error-senha');
    const msgCepStatus = document.getElementById('cep-status');

// Validação do campo CEP

inputCep.addEventListener('input', (evento) => {
    let valor = evento.target.value.replace(/\D/g, '');

    valor = valor.substring(0, 8);

    if(valor.length > 5) {
        valor = valor.replace(/(\d{5})(\d)/, '$1-$2');
    }
    evento.target.value = valor;

    inputCep.classList.remove('erro');

});

// Validação do campo UF

inputUf.addEventListener('input', (evento) => {
    evento.target.value. evento.target.valeu.replace(/[^a-zA-Z]/g, '').toUpperCase();

});

// Validação do campo senha

function validarSenha() {
    const senha = inputSenha.value;
    const confirmarSenha = inputConfirmarSenha.value;

    if(senha === '') {
        msgErroSenha.textContent = 'Por favor, digite uma senha.';
        inputConfirmarSenha.classList.remove('input-erro, input-sucesso');
        return false;
    }

    if(senha !== confirmarSenha) {
        msgErroSenha.textContent = 'As senhas não coincidem.';
        inputConfirmarSenha.classList.add('input-erro');
        inputConfirmarSenha.classList.remove('input-sucesso');
        return false;
    }else {
        msgErroSenha.textContent = '';
        inputConfirmarSenha.classList.remove('input-erro');
        inputConfirmarSenha.classList.add('input-sucesso');
        return true;
        
    }

    }

    inputSenha.classList.remove('input-erro');
    inputConfirmarSenha.addEventListener('input', validarSenha);

    // Validação final
    
    formCadastro.addEventListener('submit', (evento) => {
        let = formularioValido = true;
        if(!validarSenha()) {
            formularioValido = false;
            inputConfirmarSenha.focus();
        }

        const cep = inputCep.value.replace(/\D/g, '');
        if(cep.length !== 8) {
            formularioValido = false;
            inputCep.classList.add('erro');
            msgCepStatus.textContent = 'CEP inválido. Digite um CEP válido.';
            msgCepStatus.classList.add('texto-erro');
            inputCep.focus();
        }

        if(!formularioValido) {
            evento.preventDefault();
        }

    });

}