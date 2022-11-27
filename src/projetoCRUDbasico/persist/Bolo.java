package projetoCRUDbasico.persist;

public class Bolo {
    //Ingredientes/obrigatórios
    private int qtdFarinha;
    private int qtdOvo;
    private int qtdOleo;
    private int qtdLeite;
    private int qtdAcucar;
    //Sabor/opcionais
    public TipoBolo tipoBolo;
    public int test;
    public boolean chocolate;
//    public boolean laranja;
//    public boolean doceLeite;

    //Posso forçar que Bolo tenha todos esses ingredientes passando todos para dentro do construtor
    public Bolo(int qtdFarinha, int qtdOvo, int qtdOleo, int qtdLeite, int qtdAcucar){
        this.qtdFarinha = qtdFarinha;
        this.qtdOvo = qtdOvo;
        this.qtdOleo = qtdOleo;
        this.qtdLeite = qtdLeite;
        this.qtdAcucar = qtdAcucar;
        this.tipoBolo = TipoBolo.COMUM;//mesmo não estando no construtor, pode-se botar aqui,. É só como se pegasse o da linha 52, adaptasse e colocasse aqui
    }

    //sobrecarga de construtor -> quando queremos ter construções de objetos distintas //boolean chocolate
    public Bolo(int qtdFarinha, int qtdOvo, int qtdOleo, int qtdLeite, int qtdAcucar, TipoBolo tipoBolo){
        this.qtdFarinha = qtdFarinha;
        this.qtdOvo = qtdOvo;
        this.qtdOleo = qtdOleo;
        this.qtdLeite = qtdLeite;
        this.qtdAcucar = qtdAcucar;
        this.tipoBolo = tipoBolo;
        //this.chocolate = chocolate;
    }
    //Por que falhou? 5 inteiros e 1 booleano, ele pode saber o inteiro, mas como ele vai saber sobre o booleano? Esse true ou false aí no ultimo é pra quem? Pro chocolate, pro laranja ou pro doce de leite?
//    public Bolo(int qtdFarinha, int qtdOvo, int qtdOleo, int qtdLeite, int qtdAcucar, boolean laranja){
//        this.qtdFarinha = qtdFarinha;
//        this.qtdOvo = qtdOvo;
//        this.qtdOleo = qtdOleo;
//        this.qtdLeite = qtdLeite;
//        this.qtdAcucar = qtdAcucar;
//        this.laranja = laranja;
//    }

// Toda vez que trabalhar com sobrecarga: As cargas devem ser distintas!
//Para contornar o problema posso usar o Enum -> trabalha com constantes (nomedaclasse.nomedotipo)

    public static void main(String[] args) {
        var bolo = new Bolo(300, 2,500,2,150);
//        bolo.tipoBolo = TipoBolo.LARANJA;

        var bolo2 = new Bolo(300, 2,500,2,150, TipoBolo.CHOCOLATE);
        var bolo3 = new Bolo(300, 2,500,2,150, TipoBolo.LARANJA);
        var bolo4 = new Bolo(300, 2,500,2,150, TipoBolo.DOCE_DE_LEITE);

    }
}