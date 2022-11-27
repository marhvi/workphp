package projetoCRUDbasico.users;

import projetoCRUDbasico.model.Aluno;

public class AlunoTecnico extends Aluno {
    private String especializacao;
    private String nome;

    public void setNome(String nome){
        this.nome = nome;
    }

    //se não especificar, quem responde é o filho
    /*this -> trabalha com o membro da classe em questão
    * super -> trabalha com a classe superior à classe em questão
    * */
    @Override //reescrito
    public String getNome(){
        return "Aluno curso técnico: " + this.nome;
    }

    public String getEspecializacao(){
        return especializacao;
    }

    public void setEspecializacao(String especializacao){
        this.especializacao = especializacao;
    }
}
