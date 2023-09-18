**Especificação de Caso de Uso** 

##  CDU 03 - Cadastrar um PET

## 1. Resumo:

- Este CDU tem como objetivo permitir que os tutores cadastraem seus animais de estimação no sistema.

## 2. Atores:
- Tutor do PET

## 3. Pré-condições:

- Estar logado

## 4. Pós-condições:

- Animal registrado

## 5. Fluxos de eventos: 
**5.1. Fluxo Principal:** 

1. O ator seleciona a opção "Cadastrar" na seção dedicada aos PETs.
2. O ator é redirecionado para o formulário de cadastro de PET.
3. No formulário, o ator preenche as informações gerais do PET, incluindo nome, espécie, raça, sexo e RGA.
4. O ator tem a opção de preencher dados adicionais, como descrição, cor do animal e data de nascimento.
5. Após preencher os campos desejados, o ator pode clicar no botão "Registrar" para finalizar o cadastro.



**5.2- Fluxo Alternativo – Dados inválidos ou incompletos para cadastramento de pet:** 

1. O sistema identifica que um ou mais dados fornecidos pelo ator estão incorretos ou incompletos e notifica o ator sobre os problemas específicos. 
2. O ator revisa as informações no formulário de agendamento e faz as correções necessárias para preencher os campos de forma correta. 
3. Após a correção, o ator solicita novamente a validação do sistema.
4. O sistema reavalia os dados após a correção e realiza uma nova validação.
5. Se todos os dados estiverem corretos e atenderem aos critérios de validação, o sistema prossegue e finaliza o agendamento de vacinação com sucesso.


