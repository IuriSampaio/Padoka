"use stritc";
//Script para preencher os dados a partir do cep
const verificaCep=()=>
        document.getElementById('cep').reportValidity();

const encontraCep= async (cep)=>{
    if(verificaCep()){
        const url = `https://api.postmon.com.br/v1/cep/${cep}`;
        const endereco = await fetch(url).then(res => res.json());
        console.log(endereco)
        preencheForm(endereco)
    }   
}

const preencheForm=(endereco)=>{
   // document.getElementById('endereco').value = endereco.logradouro
    document.getElementById('bairro').value = endereco.bairro
    document.getElementById('cidade').value = endereco.cidade
   // document.getElementById('estado').value = endereco.estado
}

const maskCep = ($el)=>{
    let aux = $el.value;
    aux = aux.replace(/[^0-9]/g,'');
    aux = aux.replace(/(.{5})(.)/,'$1-$2');
    $el.value = aux;
}
function mascaraData( campo, e )
{
	var kC = (document.all) ? event.keyCode : e.keyCode;
	var data = campo.value;
	
	if( kC!=8 && kC!=46 )
	{
		if( data.length==2 )
		{
			campo.value = data += '/';
		}
		else if( data.length==5 )
		{
			campo.value = data += '/';
		}
		else
			campo.value = data;
	}
}

document.getElementById('cep').addEventListener('keyup',(e)=> maskCep(e.target))

document.getElementById('cep').addEventListener('blur',(e)=> encontraCep(e.target.value))
