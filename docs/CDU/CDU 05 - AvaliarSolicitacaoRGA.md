**Especificação de Caso de Uso** 

##  CDU 04 - Avaliar solicitação de Registro Geral do Animal (RGA)

## 1. Resumo:

- Este CDU tem como objetivo habilitar os administradores a avaliar solicitações de cadastramento de RGA, permitindo-lhes criar ou rejeitar o registro do RGA.

## 2. Atores:
- Administrador

## 3. Pré-condições:
- Estar logado
- Ter permissão de avaliação

## 4. Pós-condições:
- Animal registrado com RGA
- Pedido rejeitado

## 5. Fluxos de eventos: 
**5.1. Fluxo Principal:** 

1. O ator seleciona a opção "RGA" na seção dedicada aos PETs.
2. Ele é direcionado para uma seção específica para gerenciamento do Registro Geral de Animais (RGA).
3. Na seção RGA, o ator encontra duas categorias: "Solicitações Pendentes" e "Solicitações Concluídas".
4. Ao optar por "Solicitações Pendentes", ele é redirecionado para uma lista de solicitações que aguardam avaliação.
5. Na lista, cada solicitação é acompanhada de um botão "Visualizar".
6. Ao clicar no botão "Visualizar", o ator é direcionado para a página de avaliação da solicitação.
7. Na página de avaliação, todas as informações fornecidas na solicitação são apresentadas de forma clara.
8. Após analisar as informações, o ator pode escolher entre os botões "Aceitar" ou "Rejeitar" para tomar uma decisão sobre a solicitação.


**5.2- Fluxo Alternativo – Aceitar a solicitação:** 

1. O administrador clica no botão "Aceitar" na página de avaliação.
2. O sistema registra a aprovação da solicitação.
3. O ator é redirecionado de volta para a página inicial da seção de RGA.
4. A solicitação é movida para a lista de solicitações concluídas.


**5.3- Fluxo Alternativo – Rejeitar a solicitação:** 

1. O administrador clica no botão "Rejeitar" na página de avaliação.
2. Imediatamente, um modal é exibido, permitindo ao avaliador inserir o motivo da rejeição.
3. O avaliador preenche o motivo da rejeição no campo fornecido dentro do modal.
4. Após preencher o motivo, o avaliador clica no botão "Salvar motivo" para confirmar a rejeição.
5. O sistema registra a rejeição juntamente com o motivo fornecido.
6. O ator é redirecionado de volta para a página inicial da seção de RGA.
7. A solicitação é movida para a lista de solicitações concluídas.


