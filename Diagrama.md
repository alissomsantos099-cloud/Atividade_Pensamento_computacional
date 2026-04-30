# Diagrama de Arquitetura do Sistema (PAI)

Abaixo está a representação visual da estrutura de classes e relacionamentos do sistema, utilizando a sintaxe Mermaid para renderização automática no GitHub.
<img width="1536" height="1024" alt="Diagrama png" src="https://github.com/user-attachments/assets/fe63f4ca-bacb-41f0-8393-595c3ed67253" />

```mermaid
classDiagram
    class Usuario {
        +int id
        +string nome
        +string email
        +login()
        +logout()
    }

    class Professor {
        +string funcional
        +string departamento
        +lancarNota(aluno, disciplina, valor)
        +registrarFrequencia()
    }
 class Aluno {
        +string matricula
        +float mediaGeral
        +consultarNotas()
        +verSugestoesIA()
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

    Usuario <|-- Aluno : Herança
    Usuario <|-- Professor : Herança
    Professor "1" --> "n" Disciplina : Leciona
    Aluno "n" --> "n" Disciplina : Matriculado
    MotorIA ..> Aluno : Processa Dados
    MotorIA ..> Disciplina : Analisa Requisitos
