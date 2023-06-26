**Especificação de Caso de Uso** 

##  CDU 01 - Cadastramento de vacina aplicada

## 1. Resumo:

- Esse CDU tem como objetivo o cadastramento da vacinação aplicada no PET. Ele permite que os atores autorizados realizem o registro das informações sobre a vacina administrada.

## 2. Atores:
- Profissional de saúde animal
- Agente de saúde pública 

## 3. Pré-condições:

- Estar logado
- Ter permissão de configuração

## 4. Pós-condições:

- 
- 

## 5. Fluxos de eventos: 
**5.1. Fluxo Principal:** 

1. O  ator  seleciona  a  opção  cadastrar  vacinação  no  seu Dashboard. 
2. O sistema solicita os dados da vacinação. 
3. O ator preenche as informação sobre o animal: nome do animal de estimação, espécie(cão,gato,etc), raça, RGA e data de nascimento  ou idade aproximada.
4. O ator preenche as informação sobre o tutor do PET: nome do proprietário ou ONG responsável, número de contato e email.
5. O ator preenche as informação sobre a vacinação: nome da vacina administrada, data de vacinação, lote da vacina, nome do fabricante da  vacina, dose (primeira dose, segunda dose, etc) e identificação do ator que aplicou a vacinação.
6. O sistema verifica se todos os dados foram preenchidos de forma correta. 
7. O sistema cadastra a vacinação e disponibiliza um comprovante de vacinação. 


**5.2- Fluxo Alternativo – Dados inválidos ou incompletos para cadastro de vacinação:** 

1. O sistema informará ao ator que o dado em questão foi preenchido de forma incorreta e pede que ele preencha novamente.  
2. O ator preenche de forma correta e solicita novamente a validação do sistema. 
3. O  sistema  valida  novamente  os  dados  e  finaliza  o  cadastro  da vacinação


