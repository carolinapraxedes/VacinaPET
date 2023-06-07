**Documento de Visão**

**Histórico da Revisão**


|**Data**|**Versão**|**Descrição**|**Autor**|
| :-: | :-: | :-: | :-: |
|26/04/2023|1\.0|Elaboração da descrição do problema|Carolina Praxedes|
|11/05/2023|1\.1|Elaboração da descrição dos atores|Carolina Praxedes|
|28/02/2023|1\.2|Descrição do ambiente, principais necessidades, alternativas concorrentes|Carolina Praxedes|
|29/05/2023|1\.3|Visão geral do produto|Carolina Praxedes|
|31/05/2023|1\.4|Elaboração dos casos de uso|Carolina Praxedes|
|01/06/2023|1\.5|Elaboração dos requisitos funcionais, não funcionais e glossário |Carolina Praxedes|
|06/06/2023|1\.6|Adição de novas funcionalidades e revisão da ordem de prioridade dos CDUS |Carolina Praxedes|

1. **Projeto**: RN+PET* 
2. **Descrição do problema:**



|**O problema de** |Registrar vacinação de forma manual e descentralizada|
| :- | :- |
|**afeta**|Tutor de animais de estimação, profissionais de saúde animal e autoridades reguladoras|
|**cujo impacto é**|Perda de dados e dificuldade na monitorização das vacinações|
|**um boa solução seria**|Centralizar os dados, automatizar o processo, facilidade em coletar e monitorar dados.|

3. **Descrição dos atores:**

|**Nome**|**Descrição**|**Responsabilidade**|
| - | - | - |
|Tutor do animal de estimação|Cuida do bem-estar e saúde do animal|Garantir a vacinação do animal. Agendamento da aplicação da vacinação|
|Profissional de saúde animal|Pessoa com capacitação profissional para fazer cuidados necessários à saúde animal.|Aplicação e cadastro da vacina|
|Agente de saúde pública|Servidores da saúde pública|<p>Cadastro da vacinação,</p><p>` `monitoração de taxa de vacinação</p>|

4. **Descrição do ambiente dos usuários:**

O ambiente dos usuários do sistema de cadastro de vacinação de pets é composto por perfis. Os tutores de animais podem agendar a vacinação e acessar informações sobre as vacinas realizadas. Os profissionais de saúde registram os dados das vacinações, enquanto os agentes de saúde realizam análises quantitativas sobre a vacinação

5. **Principais necessidades dos usuários:**

Os usuários precisam superar as limitações dos métodos manuais, como fichas em papel e planilhas eletrônicas, que dificultam o acesso, centralização e atualização dos dados de vacinação. Ao migrar para um sistema digital, será possível obter acesso rápido e eficiente aos dados e históricos de vacinação, facilitando a consulta, organização e atualização das informações. Isso trará maior eficiência ao processo, evitando erros e possibilitando recursos como lembretes automáticos de vacinação.


6. **Alternativas concorrentes:**

Uma alternativa disponível é o aplicativo para celular Carteira Pet, que permite o registro de vacinas, além de oferecer recursos adicionais, como o cadastro de consultas, exames e receitas. No entanto, o RN+PET é uma opção mais adequada para a exclusividade de informações de vacinas em animais.

7. **Visão geral do produto:**

O sistema tem como objetivo facilitar e centralizar as informações sobre a vacinação de animais. Ele oferece uma maneira eficiente de registrar, acompanhar e gerenciar o histórico de vacinação dos animais de forma organizada e acessível. Ao simplificar o processo de controle de vacinas, o produto busca garantir que as partes interessadas tenham uma visão clara e atualizada das vacinações, contribuindo para a saúde e bem-estar dos animais de estimação.


8. **Requisitos FUNCIONAIS**    

|**Código**|**Nome**|**Descrição**|
| :-: | :-: | :-: |
|F01|Efetuar login usuário|O usuário tem acesso ao sistema|
|F02|Solicitação de RGA|O tutor pet solicita um RGA com os dados do animal de estimação|
|F03|Cadastramento de RGA|O funcionário do governo preenche o formulário de RGA com os dados repassados na solicitação|
|F04|Busca por RGA|Buscar um pet por meio do seu RGA|
|F05|Agendamento de vacinação|Tutor pet preenche um formulário para agendar uma vacinação|
|F06|Alteração de agendamento da vacinação|Tutor pet pode alterar alguma informação da vacinação marcada|
|F07|Desmarcação de vacinação|Tutor pode cancelar a vacinação marcada|
|F08|Listagem de vacinação marcada|Informação sobre a vacinação marcada|
|F09|Cadastramento de vacinação|Veterinário ou agente de saúde preenche um formulário para registrar uma vacinação|
|F10|Comprovante de vacinação|Documento de comprovação da vacina aplicada|
|F11|Listagem de vacinação realizadas|Lista de todas as vacinas aplicadas no animal|
|F12|Listagem de dados gerais sobre a vacinação|Listagem de todos os dados gerais sobre a realização de vacinação no estado|
|F13|Lembrete de vacina marcada|Quando a vacinação marca estiver próxima de acontecer, o tutor irá receber um e-mail de lembrete|
|F14|Cadastro de campanha de vacinação|Funcionário do governo preenche formulário para criação de uma nova campanha de vacinação|
|F15|Notificação de campanha de vacinação|Todos os tutores de pet cadastrados no sistema irá receber um e-mail informativo sobre a nova campanha de vacinação|




9. **Requisitos NÃO-FUNCIONAIS** 

|**Código**|**Nome**|**Descrição**|**Categoria**|**Classificação**<br>|
| :- | :- | :- | :-: | :-: |
|NF01|Controle de acesso Usuário|Só usuários autenticados podem ter acesso ao sistema|Segurança|Obrigatório|
|NF02|Usabilidade|Sistema fácil de utilizar|Usabilidade|Desejável|
|NF03|Design Responsivo|Sistema web se adapta a diferente tamanho de telas|Usabilidade|Obrigatório|

10. **Casos de uso**

|**Código**|**Caso de uso**|**Prioridade Alta**|**Prioridade média**|**Prioridade baixa**|**Status**|
| :-: | :-: | :-: | :-: | :-: | :-: |
|CP01|Registrar vacina|**X**|||Não feito|
|CP02|Solicitar vacina|**X**|||Não feito|
|CP03|Visualizar informações sobre a vacinação agendada|**X**|||Não feito|
|CP04|Solicitar RGA|**X**|||Não feito|
|CP05|Registrar RGA|**X**|||Não feito|
|CP06|Selecionar um PET||**X**||Não feito|
|CP07|Visualizar informações sobre o PET||**X**||Não feito|
|CP08|Consultar histórico de vacinação do PET||**X**||Não feito|
|CP09|Consultar RGA|||**X**|Não feito|
|CP10|Visualizar processo de solicitação do RGA|||**X**|Não feito|
|CP11|Consultar dados gerais sobre a vacinação do estado|||**X**|Não feito|


11. **Glossário** 

**RGA:** Registro Geral Animal. Seria o RG do animal criado pelo o governo como um identificador único.

**Veterinário:** Profissional da saúde animal responsável pela aplicação da vacinação.

**Agente de saúde:** Funcionário do governo do estado que tem autorização para registrar a vacinação.


