**Especificação de Caso de Uso** 

##  CDU 01 - Registrar vacinação

## 1. Resumo:

- Esse CDU tem como objetivo o cadastramento da vacinação aplicada no PET. Ele permite que os atores autorizados realizem o registro das informações sobre a vacina administrada.

## 2. Atores:
- Profissional de saúde animal
- Administrador 

## 3. Pré-condições:

- Estar logado
- Ter permissão de acesso
- Necessário que animal possua RGA

## 4. Pós-condições:

- Comprovante de vacinação

## 5. Fluxos de eventos: 
**5.1. Fluxo Principal:** 

1. O ator inicia o processo selecionando a opção "Consultar RGA". 
2. O sistema solicita ao ator que forneça o número RGA do animal que será vacinado.
3. Uma vez encontrado o RGA, o ator é direcionado para o formulário de registro de vacinação do PET.
4. No formulário de registro, o sistema recupera automaticamente os dados do PET a partir do banco de dados, incluindo Nome, Espécie, Sexo, RGA, Data de Nascimento, Nome do Tutor e CPF.
5. O ator preenche os campos vazios relacionados à vacinação, fornecendo informações como Nome da vacina, Data da vacinação, Dosagem, Lote, Fabricante e Estabelecimento de saúde.
6. O ator também seleciona o aplicador da vacina, escolhendo um veterinário a partir das opções disponíveis.
7. Após preencher todos os campos necessários, o ator clica no botão "Registrar".
8. O sistema realiza verificações para garantir que os dados estejam corretos e, se estiverem, cadastra a vacinação no sistema.



**5.2- Fluxo Alternativo – Animal não encontrado:** 
1. O ator seleciona a opção "Consultar RGA".
2. O sistema solicita que o ator insira o RGA do animal que será vacinado.
3. Quando o RGA inserido não é encontrado no sistema, o sistema exibirá uma mensagem de erro informando que o animal não foi localizado. A mensagem de erro pode incluir instruções sobre como verificar se o RGA foi digitado corretamente ou se o animal está registrado no sistema.

**5.3- Fluxo Exceção – Dados inválidos ou incompletos para cadastro de vacinação:** 

1. Após o ator preencher o formulário de registro de vacinação, o sistema realiza uma validação dos dados fornecidos.
2. Se o sistema detectar que algum dos dados fornecidos foi preenchido de forma incorreta ou não atende aos critérios de validação, o sistema informa ao ator que há dados incorretos no formulário. 
3. O sistema fornece instruções claras ao ator sobre quais campos ou informações precisam ser corrigidos. O ator é orientado a rever o formulário e corrigir os campos que apresentam erros.
4. O ator faz as correções necessárias no formulário.
5. Após a correção, o ator solicita novamente a validação do sistema.
6. O sistema reavalia os dados fornecidos após a correção e realiza a validação novamente.
7. Se todos os dados estiverem corretos e atenderem aos critérios de validação, o sistema finaliza o cadastro da vacinação com sucesso e armazena as informações no sistema.


