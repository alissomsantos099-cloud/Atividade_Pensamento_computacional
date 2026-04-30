🎓 Plataforma Acadêmica Inteligente (PAI)
📌 Visão Geral

Projeto desenvolvido na disciplina Pensamento Computacional (UDF), com foco na aplicação prática dos pilares computacionais na concepção de sistemas escaláveis.

A proposta consiste na modelagem de uma plataforma acadêmica moderna, capaz de suportar múltiplos usuários simultâneos e oferecer recomendações personalizadas com base no desempenho do aluno.

🎯 Objetivos do Projeto
Aplicar os quatro pilares do pensamento computacional em um sistema realista
Relacionar conceitos de engenharia de software com escalabilidade
Incorporar princípios de segurança clássicos em arquitetura moderna
Simular um ambiente acadêmico com alto volume de acessos
Estruturar o desenvolvimento com base em práticas ágeis
💻 Sistema Proposto

Nome: Portal Acadêmico Integrado (PAI)
Tipo: Aplicação Web modular
Arquitetura: Preparada para evolução em microserviços

Principais funcionalidades:
Autenticação e controle de acesso
Gestão de alunos, professores e disciplinas
Registro de notas e frequência
Geração de relatórios acadêmicos
Sistema de recomendação baseado em desempenho
🧠 Aplicação do Pensamento Computacional
🔹 Decomposição

O sistema foi estruturado em módulos independentes:

Autenticação: gerenciamento de sessões e permissões
Acadêmico: controle de dados educacionais
Relatórios: análise e visualização de desempenho
Recomendação: motor lógico para sugestões personalizadas

Essa divisão reduz acoplamento e facilita escalabilidade.

🔹 Reconhecimento de Padrões
Uso de padrões consolidados de autenticação (OAuth 2.0 / JWT)
Estrutura de interface baseada em sistemas LMS modernos
Organização modular inspirada em arquiteturas distribuídas
🔹 Abstração

Modelagem do sistema por meio de diagramas UML, priorizando entidades, relações e fluxos principais, sem dependência de tecnologia específica.

🔹 Algoritmos

Implementação de lógica para:

Cálculo de médias acadêmicas
Identificação de baixo desempenho
Geração de recomendações de estudo
Classificação de alunos por desempenho
🛡️ Segurança e Escalabilidade
🔐 Segurança

Baseado nos princípios de Saltzer & Schroeder:

Least Privilege: permissões mínimas por perfil
Fail-Safe Defaults: acesso negado por padrão
Separação de responsabilidades: isolamento entre módulos
⚡ Escalabilidade
classDiagram
    class Usuario {
        +int id
        +string nome
        +string email
        +login()
        +logout()
    }

    class Aluno {
        +string matricula
        +float mediaGeral
        +consultarNotas()
        +verSugestoesIA()
    }

    class Professor {
        +string funcional
        +string departamento
        +lancarNota(aluno, disciplina, valor)
        +registrarFrequencia()
    }

    class Disciplina {
        +int id
        +string nome
        +int cargaHoraria
        +list notas
    }

    class MotorIA {
        +analisarDesempenho(aluno)
        +gerarRecomendacao(aluno)
    }

    Usuario <|-- Aluno
    Usuario <|-- Professor
    Professor --> Disciplina
    Aluno --> Disciplina
    MotorIA ..> Aluno
    MotorIA ..> Disciplina
Arquitetura modular com potencial para microserviços
Estratégias de cache para redução de carga
Possibilidade de balanceamento de carga em cenários reais
Preparado para crescimento horizontal
🧩 Modelagem do Sistema
📂 Estrutura do Projeto
/
├── README.md
├── Design.md
├── Desafios.md
└── src/
🚀 Execução do Protótipo
Configure um ambiente com PHP (ex: XAMPP)
Clone o repositório
Insira o projeto no diretório do servidor
Acesse via navegador:
http://localhost/
📊 Diferenciais do Projeto
Aplicação direta de pensamento computacional em um sistema completo
Estrutura pronta para evolução em arquitetura distribuída
Integração entre lógica acadêmica e recomendação automatizada
Foco simultâneo em escalabilidade e segurança
📅 Informações
Autor: Alisson D. S. Ferreira
Disciplina: Pensamento Computacional
Instituição: UDF
Data: 23/04/2026
⚠️ Ajuste importante (visão crítica)

Seu projeto está bem pensado, mas ainda está no nível de simulação conceitual.

Para virar algo realmente forte (nível portfólio ou mercado), o próximo passo é:

Persistência de dados (MySQL/PostgreSQL)
Autenticação real (login funcional)
API estruturada
Deploy (mesmo que simples)

Sem isso, ele demonstra conhecimento — mas não prova execução em ambiente real.
