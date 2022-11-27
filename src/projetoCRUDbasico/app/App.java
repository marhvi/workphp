package projetoCRUDbasico.app;
import projetoCRUDbasico.model.Aluno;
import projetoCRUDbasico.service.AlunoService;

import javax.swing.*;
import java.util.Scanner;

//FQN -> "FULL QUALIFIED NAME": projetoCRUDbasico.app.App
public class App {
    /*public-> pode ser consultado em qualquer parte do código
    static -> não cria novas alocações na memória do computador para cada objeto criado; não instancia
    void -> não retorna nada de resposta; só executa
    main -> principal método; ponto de entrada de qualquer projeto java, sem ele não tem como iniciar o programa
    String [] args -> Entrada de um array string

    Toda entrada de dados no Java são tipadas

    * */
    public static void main(String[] args){
        /*System -> requere do sistema
          out -> de saída
          println() -> imprimir()
        * */
        //System.out.println("Olá, mundo");

        /*var -> forma de definir que algo é uma variavel no momento da atribuição a la php, mas tendo seu tipo imutavel.
          in -> define constante

        Scanner lerá algo que vem do sistema:
            Entrada padrão -> teclado
            Saída padrão -> monitor
        * */

        //teclado é uma variavel que recebe seu valores de inputs do sistema
        //var teclado = new Scanner(System.in);// recurso que irá ler dados digitados

        //next-> pega proxima palavra que for digitada

        var service = new AlunoService();
        Aluno alu; //referencia a classe Aluno
        alu = new Aluno(); //criando uma nova instancia e atribuindo o endereço de memoria dessa instancia para a referencia; constroi objeto em memoria

//        System.out.println("Informe o nome: ");
        //versão mais polida e com jopiton, dando um visual melhor
        var nome = JOptionPane.showInputDialog(null, "Informe o nome:", "Input Nome", JOptionPane.QUESTION_MESSAGE );
                //teclado.nextLine()
        alu.setNome(nome);

        var email = JOptionPane.showInputDialog(null, "Informe o email:", "Input Email", JOptionPane.QUESTION_MESSAGE );
        alu.setEmail(email);

        var matricula = JOptionPane.showInputDialog(null, "Informe a matricula:", "Input Matricula", JOptionPane.QUESTION_MESSAGE );
        alu.setMatricula(Integer.parseInt(matricula));

        var sexo = JOptionPane.showInputDialog(null, "Informe o sexo:", "Input Sexo", JOptionPane.QUESTION_MESSAGE );
        alu.setSexo(sexo);

//        System.out.println("Aluno.nome" + alu.getNome());
//        System.out.println("Aluno.email" + alu.getEmail());
//        System.out.println("Aluno.matricula" + alu.getMatricula());
//        System.out.println("Aluno.sexo" + alu.getSexo());

        //teclado.close(); sempre fechar porque senão vai ficar pegando tudo que digitar
        var response = service.save(alu);

        var situacao = "Ocorreu uma falha na gravação. Verifique o log";
        var iconeStatus = JOptionPane.ERROR_MESSAGE;

        if(response){
            situacao = "Gravado com sucesso:";
            iconeStatus = JOptionPane.INFORMATION_MESSAGE;
        }

        var msg = "Situação da gravação no banco: " + situacao + "\n\n" + "Aluno.nome: " + alu.getNome() + "\n" + "Aluno.email: " + alu.getEmail() + "\n" + "Aluno.matricula: " +alu.getMatricula() + "\n" + "Aluno.sexo: " +alu.getSexo();
        JOptionPane.showMessageDialog(null, msg, "Resposta", iconeStatus);

        //vai pegar resultado em lista, transformar em stream (objeto de transmissão) e fazer mapeamento, montando a string para cada aluno encontrado
        var respostaList = service.findAll().stream().map(aluno -> "Aluno.nome: " + aluno.getNome() + "\n" + "Aluno.email: " + aluno.getEmail() + "\n" + "Aluno.matricula: " + aluno.getMatricula() + "\n" + "Aluno.sexo: " + aluno.getSexo() + "\n\n").toList();
        JOptionPane.showMessageDialog(null, respostaList, "Resposta", iconeStatus);
    }
}
