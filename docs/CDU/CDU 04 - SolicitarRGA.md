**Especificação de Caso de Uso** 

##  CDU 04 - Solicitação de RGA

## 1. Resumo:

- Este CDU tem como objetivo permitir que os tutores solicitem o cadastramento do Registro Geral do Animal(RGA) ao sistema.

## 2. Atores:
- Tutor do PET

## 3. Pré-condições:

- Estar logado

## 4. Pós-condições:

- Animal registrado com RGA

## 5. Fluxos de eventos: 
**5.1. Fluxo Principal:** 

1. O ator seleciona a opção "RGA" na seção dedicada aos PETs.
2. Ele é direcionado para uma seção específica para gerenciamento do Registro Geral de Animais (RGA).
3. Na seção RGA, o ator encontra duas opções: "Solicitar RGA" e "Acompanhar Solicitação".
4. Ao optar por "Solicitar RGA", ele é redirecionado para o formulário de solicitação de registro de animal.
5. No formulário, o ator fornece informações sobre o tutor, incluindo nome completo, email, CPF, data de nascimento e número de celular.
6. Em seguida, ele insere detalhes sobre o animal, como nome, espécie, raça, sexo, data de nascimento, cor, porte e pelagem.
7. Após, o ator preenche campos relacionados ao histórico do animal, descrevendo seu perfil e origem.
8. Por fim, o tutor clica no botão "Registrar". O sistema valida os dados e conclui o registro com sucesso.


**5.2- Fluxo Alternativo – Dados inválidos ou incompletos para solicitação de cadastramento de RGA:** 

1. O sistema identifica que um ou mais dados fornecidos pelo ator estão incorretos ou incompletos e notifica o ator sobre os problemas específicos. 
2. O ator revisa as informações no formulário de agendamento e faz as correções necessárias para preencher os campos de forma correta. 
3. Após a correção, o ator solicita novamente a validação do sistema.
4. O sistema reavalia os dados após a correção e realiza uma nova validação.
5. Se todos os dados estiverem corretos e atenderem aos critérios de validação, o sistema prossegue e finaliza o agendamento de vacinação com sucesso.


