<?php

class Producto {

    private $pdo;

    private $pro_id;
    private $pro_nom;
    private $pro_mar;
    private $pro_cos;
    private $pro_pre;
    private $pro_can;
    private $pro_img;

    public function __CONSTRUCT(){
        $this->pdo = base_dato::Conectar();
    }

    public function getPro_id() : ?int{
        return $this->pro_id;
    }

    public function setPro_id(int $id){
        $this->pro_id = $id;
    }

    public function getPro_nom() : ?string{
        return $this->pro_nom;
    }

    public function setPro_nom(string $nom){
        $this->pro_nom = $nom; 
    }

    public function getPro_mar() : ?string{
        return $this->pro_mar;
    }

    public function setPro_mar(string $mar){
        $this->pro_mar = $mar;
    }

    public function getPro_cos() : ?float{
        return $this->pro_cos;
    }

    public function setPro_cos(float $cos){
        $this->pro_cos = $cos;
    }

    public function getPro_pre() : ?float{
        return $this->pro_pre;
    }

    public function setPro_pre(float $pre){
        $this->pro_pre = $pre;
    } 

    public function getPro_can() : ?int{
        return $this->pro_can;
    }

    public function setPro_can(int $can){
        $this->pro_can = $can;
    }

    public function getPro_img() : ?string{
        return $this->pro_img;
    }

    public function setPro_img(string $img){
        $this->pro_img = $img;
    }

    public function cantidad(){
        try {
            $consulta = $this->pdo->prepare("SELECT SUM(pro_can) as Cantidad FROM productos;");
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_OBJ);
            return $resultado->Cantidad; 
        } catch (Exception $e) { 
            die($e->getMessage()); 
        }
    } 

    public function Listar(){
        try {
            $consulta = $this->pdo->prepare("SELECT * FROM productos;"); 
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) { 
            die($e->getMessage()); 
        }
    } 

    public function Insertar(Producto $p){
        try {
            $consulta = "INSERT INTO productos (pro_nom, pro_mar, pro_cos, pro_pre, pro_can) VALUES (?, ?, ?, ?, ?)";
            $this->pdo->prepare($consulta)
                      ->execute(array(
                          $p->getPro_nom(),
                          $p->getPro_mar(),
                          $p->getPro_cos(),
                          $p->getPro_pre(),
                          $p->getPro_can()
                      ));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}
