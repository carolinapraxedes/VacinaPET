**Documento de Visão**

**Histórico da Revisão**


|**Data**|**Versão**|**Descrição**|**Autor**|
| :-: | :-: | :-: | :-: |
|26/04/2023|1\.0|Elaboração da descrição do problema|Carolina Praxedes|
|11/05/2023|1\.1|Elaboração da descrição dos atores|Carolina Praxedes|
|28/02/2023|1\.2|Descrição do ambiente, principais necessidades, alternativas concorrentes|Carolina Praxedes|
|dd/mm/aaaa|1\.1|<breve descrição da revisão> |<autores da revisão> |

1. **Projeto**: RN+PET* 
1. **Descrição do problema:**



|**O problema de** |Registrar vacinação de forma manual e descentralizada|
| :- | :- |
|**afeta**|Tutor de animais de estimação, profissionais de saúde animal e autoridades reguladoras|
|**cujo impacto é**|Perda de dados e dificuldade na monitorização das vacinações|
|**um boa solução seria**|Centralizar os dados, automatizar o processo, facilidade em coletar e monitorar dados.|

1. **Descrição dos atores:**

|**Nome**|**Descrição**|**Responsabilidade**|
| - | - | - |
|Tutor do animal de estimação|Cuida do bem-estar e saúde do animal|Garantir a vacinação do animal. Agendamento da aplicação da vacinação|
|Profissional de saúde animal|Pessoa com capacitação profissional para fazer cuidados necessários à saúde animal.|Aplicação e cadastro da vacina|
|Agente de saúde pública|Servidores da saúde pública|<p>Cadastro da vacinação,</p><p>` `monitoração de taxa de vacinação</p>|

1. **Descrição do ambiente dos usuários:**

O ambiente dos usuários do sistema de cadastro de vacinação de pets é composto por perfis. Os tutores de animais podem agendar a vacinação e acessar informações sobre as vacinas realizadas. Os profissionais de saúde registram os dados das vacinações, enquanto os agentes de saúde realizam análises quantitativas sobre a vacinação

1. **Principais necessidades dos usuários:**

Os usuários precisam superar as limitações dos métodos manuais, como fichas em papel e planilhas eletrônicas, que dificultam o acesso, centralização e atualização dos dados de vacinação. Ao migrar para um sistema digital, será possível obter acesso rápido e eficiente aos dados e históricos de vacinação, facilitando a consulta, organização e atualização das informações. Isso trará maior eficiência ao processo, evitando erros e possibilitando recursos como lembretes automáticos de vacinação.




1. **Alternativas concorrentes:**

Uma alternativa disponível é o aplicativo para celular Carteira Pet, que permite o registro de vacinas, além de oferecer recursos adicionais, como o cadastro de consultas, exames e receitas. No entanto, o RN+PET é uma opção mais adequada para a exclusividade de informações de vacinas em animais.

1. **Visão geral do produto:**
- *Esta seção fornece uma visão de nível superior dos recursos, interfaces com outros aplicativos e configurações de sistemas do produto.*
- *Defina as faixas de qualidade para desempenho, robustez, tolerância a erros, usabilidade e características semelhantes que não são capturadas no Conjunto de Recursos.*
- *Defina quaisquer requisitos de documentação específicos, incluindo requisitos de manuais do usuário, Ajuda on-line, instalação, rotulação e de embalagem.*




1. **Requisitos FUNCIONAIS**
   1. *Lista de todos os requisitos funcionais do sistema*

|**Código**|**Nome**|**Descrição**|
| :- | :- | :- |
|*F01*|*Efetuar login usuário*|*O usuário tem acesso ao jogo e ao sistema.*|
|*F02*|*Consultar ranking*|*Exibir a pontuação dos jogadores*|
|*F03*|*Calcular score*|*Realizar o cálculo de score dos jogadores*|
|*..*|*..*|*..*|


1. **Requisitos NÃO-FUNCIONAIS**
   1. *Lista de todos os requisitos não-funcionais do sistema*

|**Código**|**Nome**|**Descrição**|**Categoria**|**Classificação**<br>|
| :- | :- | :- | :-: | :-: |
|*NF01*|*Controle de acesso Usuário*|*Só usuários autenticados podem ter acesso ao sistema.*|*Segurança*|*obrigatório*|
|*NF02*|*Tempo de resposta*|*A comunicação entre o servidor e o cliente não pode ultrapassar o tempo limite para a jogada*|*Performance*|*Desejável*|
|*NF02*|*..*|*..*|*..*|*..*|
|*..*|*..*|*..*|*..*|*..*|

