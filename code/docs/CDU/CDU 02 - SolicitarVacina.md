**Especificação de Caso de Uso** 

##  CDU 02 - Solicitação de vacina

## 1. Resumo:

- Este CDU tem como objetivo permitir que os tutores solicitem a vacinação de seus animais de estimação. Através dele, os tutores podem agendar a data, horário e local para a realização da vacina.

## 2. Atores:
- Tutor do PET

## 3. Pré-condições:

- Estar logado

## 4. Pós-condições:

- 
- 

## 5. Fluxos de eventos: 
**5.1. Fluxo Principal:** 

1. O  ator  seleciona  a  opção  solicitar  vacinação  no  seu Dashboard. 
2. O sistema solicita os dados da vacinação. 
3. O ator preenche as informação sobre o agendamento: data, horário, localização de onde será realizado.
4. O sistema verifica se todos os dados foram preenchidos de forma correta. 
5. O sistema cadastra o agendamento da vacinação e enviará um email de confirmação.


**5.2- Fluxo Alternativo – Dados inválidos ou incompletos para cadastro de vacinação:** 

1. O sistema informará ao ator que o dado em questão foi preenchido de forma incorreta e pede que ele preencha novamente.  
2. O ator preenche de forma correta e solicita novamente a validação do sistema. 
3. O  sistema  valida  novamente  os  dados  e  finaliza  o  agendamento de vacinação.


