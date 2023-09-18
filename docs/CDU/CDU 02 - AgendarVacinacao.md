**Especificação de Caso de Uso** 

##  CDU 02 - Agendamento de vacinação

## 1. Resumo:

- Este CDU tem como objetivo permitir que os tutores solicitem a vacinação de seus animais de estimação. Através dele, os tutores podem agendar a data, horário e local para a realização da vacina.

## 2. Atores:
- Tutor do PET

## 3. Pré-condições:

- Estar logado

## 4. Pós-condições:

- Vacinação agendada


## 5. Fluxos de eventos: 
**5.1. Fluxo Principal:** 

1. O ator seleciona a opção "Agendar uma vacinação".
2. O ator é direcionado para o formulário de agendamento de vacinação.
3. No formulário, o ator preenche as informações necessárias para o agendamento, incluindo o RGA do animal, a data desejada para a vacinação, o horário e o local.
4. O sistema verifica se todos os campos foram preenchidos corretamente e realiza uma validação.
5. Se todos os dados estiverem preenchidos de forma correta, o sistema registra o agendamento no sistema.



**5.2- Fluxo Alternativo – Dados inválidos ou incompletos para agendamento de vacinação:** 

1. O sistema identifica que um ou mais dados fornecidos pelo ator estão incorretos ou incompletos e notifica o ator sobre os problemas específicos. 
2. O ator revisa as informações no formulário de agendamento e faz as correções necessárias para preencher os campos de forma correta. 
3. Após a correção, o ator solicita novamente a validação do sistema.
4. O sistema reavalia os dados após a correção e realiza uma nova validação.
5. Se todos os dados estiverem corretos e atenderem aos critérios de validação, o sistema prossegue e finaliza o agendamento de vacinação com sucesso.


