<?php

require_once __DIR__ . "/../repository/FilmesRepositoryPDO.php";
require_once __DIR__ . "/../model/Filme.php";
require_once __DIR__ . "/../util/SimpleImage.php";

class FilmesController{
    
    public function index(){
        $filmesRepository = new FilmesRepositoryPDO();
        return $filmesRepository->listarTodos();
    }

    public function save($request){

        $filmesRepository = new FilmesRepositoryPDO();
        $filme = (object) $request;

        $upload = $this->savePoster($_FILES);

        if(gettype($upload)=="string"){
            $filme->poster = $upload;
        }
        
        if ($filmesRepository->salvar($filme)) 
                $_SESSION["msg"] = "Filme cadastrado com sucesso";
        else 
                $_SESSION["msg"] = "Erro ao cadastrar filme";
        
        header("Location: /");
        
    }

    private function savePoster($file){
        $posterDir = "imagens/posters/";
        $posterPath = $posterDir . basename($file["poster_file"]["name"]);
        $posterTmp = $file["poster_file"]["tmp_name"];

        $image = new SimpleImage();
        $image->load($posterTmp);
        $image->resize(200, 300);
        $image->save($posterPath);
        return $posterPath;

    }

    public function favorite(int $id){
        $filmesRepository = new FilmesRepositoryPDO();
        $result = ['success' => $filmesRepository->favoritar($id)];
        header('Content-type: application/json');
        echo json_encode($result);
    }

    public function delete(int $id){
        $filmesRepository = new FilmesRepositoryPDO();
        $result = ['success' => $filmesRepository->delete($id)];
        header('Content-type: application/json');
        echo json_encode($result);
    }
}