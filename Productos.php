<?php
class Productos{
    private int $id;
    private string $nombre;
    private int $unidades;
    private float $precio;
    public function __construct(int $id,string $nombre,int $unidades,float $precio){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;
    }
    public function setId(int $id):void{
        $this->id=$id;
    }
    public function setNombre(string $nombre):void{
        $this->nombre=$nombre;
    }
    public function setUnidades(int $unidades):void{
        $this->unidades=$unidades;
    }
    public function setPrecio(float $precio):void{
        $this->precio=$precio;
    }
    public function getId():int{
        return $this->id;
    }
    public function getNombre():string{
        return $this->nombre;
    }
    public function getUnidades():int{
        return $this->unidades;
    }
    public function getPrecio():float{
        return $this->float;
    }
    public function total(){
        return "El total de la factura por la compra de ".$this->nombre." es ".($this->unidades*$this->precio*1.21)." euros.";
    }
}
