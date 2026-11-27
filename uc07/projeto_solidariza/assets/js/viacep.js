async function buscarCep (cep) {
        const url = `https://viacep.com.br/ws/${cep}/json/`;

        try {
              console.log(`Buscando CEP: ${url}`);

              const response = await fetch(url);

              if (!response.ok) {
                  throw new Error(`Erro na requisição: ${response.status}`);


              }

               const data = await response.json();
               
                if (data.erro) {
                    console.error('CEP não encontrado.');
                    return {erro: true};

                }
                return {
                    erro: false,
                    cep: data.cep,
                    logradouro: data.logradouro,
                    bairro: data.bairro,
                    localidade: data.localidade,
                    uf: data.uf
                };
                
           
        } catch (error) {
            console.error('Erro ao buscar o CEP:', error);
            return null;
        }

}

const inputCep = document.getElementById('cep');

if (campoCep) {
    const campoLogradouro = document.getElementById('logradouro');
    const campoBairro = document.getElementById('bairro');
    const campoLocalidade = document.getElementById('localidade');
    const campoUf = document.getElementById('uf');
    const cepStatus = document.getElementById('cep-status');

    function limparCamposEndereco() {
        campoLogradouro.value = '';
        campoBairro.value = '';
        campoLocalidade.value = '';
        campoUf.value = '';
    }   

    campoCep.addEventListener('blur', async () => {

        const cepLimpo = campoCep.value.replace(/\D/g, '');

    cepStatus.textContent = 'Buscando CEP...';
    cepStatus.classList.remove('erro');

    const endereco = await buscarCep(campoCep.value);

    if (endereco || endereco.erro) {
        cepStatus.textContent = 'CEP não encontrado. verifique o número digitado.';
        cepStatus.classList.add('texto-erro');
        cepStatus.classList.remove('input-erro');
        campoCep.classList.add('input-erro');
        limparCamposEndereco();
        return;

    }

    cepStatus.textContent = '';
    campoLogradouro.value = endereco.logradouro;
    campoBairro.value = endereco.bairro;
    campoLocalidade.value = endereco.localidade;
    campoUf.value = endereco.uf;

    cepStatus.textContent = 'endereço encontrado com sucesso!';
    cepStatus.classList.remove('texto-erro');
    campoCep.classList.add('input-erro');
    campoCep.classList.remove('input-sucesso');

    });


}   