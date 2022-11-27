package projetoCRUDbasico.persist;
/**
* @author: Marcus Vinicius
* @since: 21/11/2022
* @version: 1.0
* @description: Classe responsável por abrir a conexão com  banco de dados
* */

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

//Data Access Object - Objeto de Acesso a Dados -> quem vai fazer a conexão com banco de dadps
public class DAO {
    //construtor -> quem define a estrutura da classe quando ela for instanciada
    //ir para Bolo e tentar entender
    public DAO(){
        //try-catch: +/- um if-else, mas sem uma condição de inicio. Tenta executar um código no try, porém se houver alguma falha vai pro catch e executa o código de lá dependendo do tipo de condição para tratamento do erro
        try {
            //informq qual classe será usada para as transações com o SGBD
            Class.forName("com.mysql.cj.jdbc.Driver"); //FQN (Full Qualified Name: ((com.mysql = dominio).(cj = pacote para conexões java).(jdbc = tipo de conexão) = nome do pacote).(Driver = Classe)
        } catch (ClassNotFoundException cnfe){ //trata o erro específico, quando não tiver como então vai ser de forma genérica
                cnfe.printStackTrace();//força detalhamento do erro
                System.out.println("Class not found. Error: " + cnfe.getMessage());
        }
    }
    //quem herdar de DAO vai poder acessar, retornado uma conexão no método getConnection() e assim vai tratar o erro de SQL
    protected Connection getConnection() throws SQLException{
        return DriverManager.getConnection("jdbc:mysql://localhost/db01", "root", "");//retorna string de conexão
    }

    //Era só para testar a conexão. Não precisa mais
/*    public static void main(String[] args){
        var dao = new DAO();

        try {
            dao.getConnection();
            System.out.println("Conexão Aberta");
        } catch (SQLException e) {
            e.printStackTrace();
            throw new RuntimeException(e);
        }

    }*/
}