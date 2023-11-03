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
|20/07/2023|1\.7|Adição de novos CDUS e revisão da ordem de prioridade dos CDUS |Carolina Praxedes|
|02/11/2023|1\.8|Adição de novos CDUS e revisão do documento |Carolina Praxedes|

1. **Projeto**: Vacina PET** 
2. **Descrição do problema:**



|**O problema de** |Registrar vacinação de forma manual e descentralizada|
| :- | :- |
|**afeta**|Tutor de animais de estimação, profissionais de saúde animal e autoridades reguladoras|
|**cujo impacto é**|Perda de dados e dificuldade na monitorização das vacinações|
|**um boa solução seria**|Centralizar os dados, automatizar o processo, facilidade em coletar dados.|

3. **Descrição dos atores:**

|**Nome**|**Descrição**|**Responsabilidade**|
| - | - | - |
|Tutor do animal de estimação|Cuida do bem-estar e saúde do animal|Garante a vacinação do animal. Agendamento da aplicação da vacinação. Solicita o Registro Geral do Animal.|
|Profissional de saúde animal|Pessoa com capacitação profissional para fazer realizar a aplicação da vacinação.|Aplicação e cadastro da vacinação|
|Administrador|Pessoa responsável pelo o gerenciamento do sistema| Analisa as solicitações de Registro Geral do Animal. Realiza cadastro e gerenciamento de insumos para o processo de vacinação.|

4. **Descrição do ambiente dos usuários:**

O ambiente dos usuários do sistema de cadastro de vacinação de pets é composto por perfis. Os tutores de animais podem agendar a vacinação e acessar informações sobre as vacinas realizadas. Os profissionais de saúde registram os dados das vacinações, enquanto os administradores cadastra e gerenciam elementos essenciais pro sistema.

5. **Principais necessidades dos usuários:**

Os usuários precisam superar as limitações das formas convencionais, como fichas em papel e planilhas eletrônicas, que dificultam o acesso, centralização e atualização dos dados de vacinação. Ao implementar uma plataforma informatizada, será possível obter acesso rápido e eficiente aos dados e históricos de vacinação, facilitando a consulta, organização e atualização das informações. Isso trará maior eficiência ao processo, evitando erros e possibilitando recursos como lembretes automáticos de vacinação.


6. **Alternativas concorrentes:**

Uma alternativa disponível é o aplicativo para celular Carteira Pet, que permite o registro de vacinas, além de oferecer recursos adicionais, como o cadastro de consultas, exames e receitas. No entanto, o Vacina PET é uma opção direcionada e especializada ao gerenciamento e registro de vacinação em animais de estimação.

7. **Visão geral do produto:**

O sistema tem como objetivo facilitar e centralizar as informações sobre a vacinação de animais. Ele oferece uma maneira de registrar, acompanhar e gerenciar o histórico de vacinação dos animais de forma organizada e acessível. Ao simplificar o processo de controle de vacinas, o produto busca garantir que as partes interessadas tenham uma visão clara e atualizada das vacinações, contribuindo para a saúde e bem-estar dos animais de estimação. Para melhorar a gestão e organização das informações, o sistema implementa o Registro Geral de Animal (RGA), que permite o cadastramento de um registro único para cada animal de estimação. Essa funcionalidade centraliza e simplifica o acesso aos dados do animal, facilitando a consulta e o acompanhamento de todas as informações relevantes em um único lugar.


8. **Requisitos FUNCIONAIS**    

|**Código**|**Nome**|**Descrição**|
| :-: | :-: | :-: |
|F01|Realização de login usuário|O usuário tem acesso ao sistema|
|F02|Solicitação de RGA|O tutor pet preenche o formulário de RGA com os dados do animal de estimação|
|F03|Análise de solicitação de RGA|O administrador analisa se a solicitação será aprovado ou reprovada|
|F04|Busca por RGA|Buscar um pet pelo RGA|
|F05|Agendamento de vacinação|Tutor pet preenche um formulário para agendar uma vacinação|
|F06|Alteração de agendamento da vacinação|Tutor pet pode alterar alguma informação da vacinação marcada|
|F07|Desmarcação de vacinação|Tutor pode cancelar a vacinação marcada|
|F08|Listagem de vacinação marcada|Informação sobre a vacinação marcada|
|F09|Cadastramento de vacinação|Veterinário ou agente de saúde preenche um formulário para registrar uma vacinação|
|F10|Comprovante de vacinação|Documento de comprovação da vacina aplicada|
|F11|Listagem de vacinação realizadas|Lista de todas as vacinas aplicadas no animal|
|F12|Listagem de solicitações de RGA pendentes|
|F13|Listagem de solicitações de RGA concluídas|
|F14|Listagem de dados gerais sobre a vacinação|Listagem de todos os dados gerais sobre a realização de vacinação no estado|
|F15|Lembrete de vacina marcada|Quando a vacinação marca estiver próxima de acontecer, o tutor irá receber um e-mail de lembrete|
|F16|Cadastro de campanha de vacinação|Funcionário do governo preenche formulário para criação de uma nova campanha de vacinação|
|F17|Notificação de campanha de vacinação|Todos os tutores de pet cadastrados no sistema irá receber um e-mail informativo sobre a nova campanha de vacinação|




9. **Requisitos NÃO-FUNCIONAIS** 

|**Código**|**Nome**|**Descrição**|**Categoria**|**Classificação**<br>|
| :- | :- | :- | :-: | :-: |
|NF01|Controle de acesso Usuário|Só usuários autenticados podem ter acesso ao sistema|Segurança|Obrigatório|
|NF02|Design Responsivo|Sistema web se adapta a diferente tamanho de telas|Usabilidade|Obrigatório|
|NF03|Usabilidade|Sistema fácil de utilizar|Usabilidade|Desejável|


10. **Casos de uso**

|**Código**|**Caso de uso**|**Prioridade Alta**|**Prioridade média**|**Prioridade baixa**|**Status**|
| :-: | :-: | :-: | :-: | :-: | :-: |
|CP01|[Registrar vacinação](https://github.com/tads-cnat/VacinaPET/blob/main/docs/CDU/CDU%2001%20-%20RegistrarVacina.md)|**X**|||Feito|
|CP02|[Agendar vacinação](https://github.com/tads-cnat/RN-Pet/blob/main/docs/CDU/CDU%2002%20-%20SolicitarVacina.md)|**X**|||Feito|
|CP03|[Registrar PET](https://github.com/tads-cnat/VacinaPET/blob/main/docs/CDU/CDU%2003%20-%20CadastrarPET.md)|**X**|||Feito|
|CP04|[Solicitar RGA](https://github.com/tads-cnat/VacinaPET/blob/main/docs/CDU/CDU%2004%20-%20SolicitarRGA.md)|**X**|||Feito|
|CP05|[Avaliar solicitação de RGA](https://github.com/tads-cnat/VacinaPET/blob/main/docs/CDU/CDU%2005%20-%20AvaliarSolicitacaoRGA.md)|**X**|||Feito|
|CP06|Acompanhamento de solicitação do RGA|**X**|||Não Feito|
|CP07|Selecionar um PET||**X**||Feito|
|CP08|Visualizar vacinações aplicadas do PET||**X**||Não feito|
|CP09|Visualizar vacinações agendadas||**X**||Não feito|
|CP10|Consultar solicitações de RGA pendentes||**X**||Feito|
|CP11|Consultar RGA|||**X**|Não feito|
|CP10|Consultar solicitações de RGA concluídas|||**X**|Feito|
|CP11|Visualizar informações sobre o PET|||**X**|Não feito|
|CP12|Registrar vacina|||**X**|Não feito|
|CP13|Registrar Veterinário|||**X**|Não feito|
|CP14|Registrar estabelicimento de saúde|||**X**|Não feito|
|CP15|Registrar fabricante de vacina|||**X**|Não feito|
|CP16|Consultar dados gerais sobre a vacinação do estado|||**X**|Não feito|


11. **Glossário** 

**RGA:** Registro Geral Animal. É o RG do animal criado pelo o governo como um identificador único.

**Veterinário:** Profissional da saúde animal responsável pela aplicação da vacinação.




