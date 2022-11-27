package projetoCRUDbasico.structures;

public class EstruturaDeDecisao {

    public void estruturaSimples(String a){
        if(a.equals("Java")){
            System.out.println("Estamos trabalhando com Java");
        }
    }

    public void estruturaComposta(String a){
        if(a.equalsIgnoreCase("Java")){
            //Equals -> comparação, mas case sensitive
            //EqualsIgnoreCase -> ignora caso
            System.out.println("Estamos trabalhando com Java");
        } else {
            System.out.println("Não é a linguagem atual de estudo");
        }
    }

    public void estruturaEncadeada(String a){
        if(a.equalsIgnoreCase("PHP")){
            System.out.println("Linguagem para web");
        } else if(a.equalsIgnoreCase("MySQL")){
            System.out.println("SGBD");
        } else if(a.equalsIgnoreCase("Angular")){
            System.out.println("Framework javascript");
        } else if(a.equalsIgnoreCase("Java")){
            System.out.println("Linguagem back-end");
        } else {
            System.out.println("Opção Inválida");
        }
    }

    public void estruturaTernario(String a){
        System.out.println(a.equals("Java") ? "Linguagem top" : "Xiii não sei não");
    }

    public void estruturaCompacta(String a){
        if(a.equals("Java"))
            System.out.println("Simples de aprender");
        else
            System.out.println("Pode ser mais complicado");
    }

    public static void main(String[] args){
        var edd = new EstruturaDeDecisao();
        edd.estruturaSimples("PHP");
        edd.estruturaComposta("Java");
        edd.estruturaEncadeada("MySQL");
        edd.estruturaTernario("Ruby");
        edd.estruturaCompacta("Kotlin");
    }
}
