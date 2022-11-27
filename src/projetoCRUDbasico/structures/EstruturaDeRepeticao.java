package projetoCRUDbasico.structures;

import java.lang.reflect.Array;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;

public class EstruturaDeRepeticao {

   public void estruturaFor(List<String> nomes){
        //muito recomendado para arrays
       //já define o contador, o teste de parada e o incrementador
       for(int i = 0; i < nomes.size(); i++){
           System.out.print(nomes.get(i));//get é para listas
           if(i != (nomes.size() - 1)) //se o contador for diferente do tamanho do array menos 1 entao imprima (vai até 3 != 4)
               System.out.print(", ");

           if(i == (nomes.size() - 1))
               System.out.print("\n");
       }
   }

   public void estruturaWhile(boolean test) {
       int i = 0;
       System.out.println("Loop iniciado");
       while(true){
            i++;
            if(i == 50)
                test = true;

            if(test)
                break;
        }
       System.out.println("Loop finalizado");
   }

   public void estruturaDoWhile(){
        var teclado = new Scanner(System.in);
//        var test = false;
       var contador = 0;
       do {
           System.out.print("Informe a senha: ");
           contador++;
//           test = teclado.next().equals("Senha123@");
       }while(!teclado.next().equals("Senha123@")); //(!test);
       teclado.close();
       System.out.println("Quantidade de tentativas: " + contador);
   }//tanto while quanto o do while precisam que a condição retorne true para continuar o loop

   public void estruturaForEach(List<Integer> numeros){
       Collections.sort(numeros);//deixa o array em ordem, sempre bom fazer isso logo porque vai facilitar a busca
       //abstrai-se tudo do for normal e se declara apenas o array que será percorrido e a variavel que vai receber o valor de cada posição
       for(int numero : numeros){
            System.out.println(numero + " ");
       }
   }

    public static void main(String[] args){
        var edr = new EstruturaDeRepeticao();
        edr.estruturaFor(Arrays.asList("Luis", "Carlos", "Antonio", "Marcus"));
        edr.estruturaWhile(false);
        edr.estruturaDoWhile();
        edr.estruturaForEach(Arrays.asList(30, 12, 4, 5, 8, 1, 697, 14, 2));
    }
}
