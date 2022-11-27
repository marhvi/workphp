package projetoCRUDbasico.model;

public class Aluno { //classe default
    /* Membros de classe:
        -atributos (caracteristicas)
        -métodos (ações)

        exemplo:
        Classe Pessoa

        caracteristicas:
        Nome, Sexo, Idade, CPF, Cor, Telefone

        ações:
        Falar, Andar, Comer, Beber, Ver, Ouvir

        class Pessoa {
            String nome;
            String sexo;
            int idade;
            String cpf;
            String cor;
            String telefone;

            public String falar(); -> nem sempre o metodo vai precisar de entrada de dados
            public void andar(int km);
            public void comer(Object alimento);
            public void beber(Object bebida);
            public void ver(Object imagem);
            public void ouvir(Audio audio);
        }
    */

    //por default, todos os atributos de classe devem ser colocados como privado.
    private long id;
    protected String nome;
    private String email;
    private int matricula;
    private String sexo;

    public void setId(long id){
        this.id = id;
    }
    public long getId(){
        return id;
    }



    //encapsulamento -> metodo de atribuição. Se for global é public se for herança/subclasse é protected.
    public void setNome(String nome){
        this.nome = nome;
    }
    public String getNome(){
        return nome; //não precisa do this, porque já vai sair para o escopo da classe
    }
    //
    public void setEmail(String email){
       this.email = email;
    }
    public String getEmail(){
        return email;
    }
    //
    public void setMatricula(int matricula){
        this.matricula = matricula;
    }
    public int getMatricula(){
        return matricula;
    }
    //
    public void setSexo(String sexo){
        this.sexo = sexo;
    }
    public String getSexo(){
        return sexo;
    }





    public void assistirAula(){
        System.out.println("O aluno está assistindo a aula de Java");
    }

    public String efetuarPergunta(){
        return "O aluno está fazendo uma pergunta sobre a duvida dele de Java";
      }

    public Aluno retornaAluno(){
        return this;
    }
}
