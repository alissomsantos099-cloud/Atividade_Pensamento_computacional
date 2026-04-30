classDiagram
    direction LR
    
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

    %% Relacionamentos de Herança
    Usuario <|-- Aluno : Herança
    Usuario <|-- Professor : Herança

    %% Relacionamentos de Associação e Dependência
    Professor "1" --> "n" Disciplina : Leciona
    Aluno "n" --> "n" Disciplina : Matriculado
    MotorIA ..> Aluno : Processa Dados
    MotorIA ..> Disciplina : Analisa Requisitos
