**Especificação de Caso de Uso** 

##  CDU 01 - Registro de vacinação

## 1. Resumo:

- Esse CDU tem como objetivo o cadastramento da vacinação aplicada no PET. Ele permite que os atores autorizados realizem o registro das informações sobre a vacina administrada.

## 2. Atores:
- Profissional de saúde animal
- Agente de saúde pública 

## 3. Pré-condições:

- Estar logado
- Ter permissão de configuração
- Necessário que animal possua RGA

## 4. Pós-condições:

- Comprovante de vacinação

## 5. Fluxos de eventos: 
**5.1. Fluxo Principal:** 

1. O  profissional de saúde  seleciona  a  opção  cadastrar vacinação. 
2. O sistema solicita o RGA do animal que será vacinado.
3. Encontrado o RGA, o sistema retorná os dados.
4. O sistema mostrará o resultado do animal encontrado com um botão que direcionar ao formulário de registro de vacinação do PET.
5. No formulário de registro, será recuperados no banco os dados sobre o PET, Tutor e Vacina.
6. O ator preencherá os campos vazios sobre vacinação: data de aplicação, lote da vacina, dose.
7. O ator selecionará a vacina utilizada e o sistema carregará as informações sobre ela. Como nome, quantidade da dose, fabricante e intervalo entre doses.
8. O sistema verifica se os dados foram preenchidos de forma correta, e cadastra a vacinação.


**5.2- Fluxo Alternativo – Animal não encontrado:** 
1. O  profissional de saúde  seleciona  a  opção  cadastrar vacinação. 
2. O sistema solicita o RGA do animal que será vacinado.
3. Com o RGA não encontrado, o sistema retornará uma mensagem de erro.

**5.3- Fluxo Exceção – Dados inválidos ou incompletos para cadastro de vacinação:** 

1. O sistema informará ao ator que o dado em questão foi preenchido de forma incorreta e pede que ele preencha novamente.  
2. O ator preenche de forma correta e solicita novamente a validação do sistema. 
3. O  sistema  valida  novamente  os  dados  e  finaliza  o  cadastro  da vacinação


