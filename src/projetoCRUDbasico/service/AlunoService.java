package projetoCRUDbasico.service;

import projetoCRUDbasico.model.Aluno;
import projetoCRUDbasico.persist.AlunoDAO;

import java.util.List;

//vai ser a interface entre a controller e o repositório(AlunoDAO)
public class AlunoService {
    private AlunoDAO dao;

    public AlunoService(){
        dao = new AlunoDAO();
    }

    public boolean save(Aluno aluno){
        return dao.save(aluno);
    }

    public List<Aluno> findAll(){
        return dao.findAll();
    }
}
