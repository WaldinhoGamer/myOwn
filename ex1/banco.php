<!-- 
 abrirconta
conta corrente - iniciail 50 - mensall 12
conta pouança - inicial 150 - 20 reais mensal
-->

<!-- fecharconta
 nao pode ter dinheiro, tem = 0 -->

 <!-- depositar e sacar
  tem q tar aberta a conta -->

  <!-- numconta +
  tipo # 
  dono saldo status - -->

  <!-- cada atributo getter e setter -->

  <!-- construtor = status fechada saldo 0 -->

  <?php

  class ContaBanco{

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // numConta 
    public getNumConta(){
        return = $this->numConta;
    }

    public setNumConta($numero){
        $this->numConta = $numero;
    }

    // tipo 
    public getTipo(){
        return = $this->tipo;
    }

    public setTipo($conta){
        $this->tipo = $conta;
    }

    // dono 
    public getDono(){
        return = $this->dono;
    }

    public setDono($nome){
        $this->dono = $nome;
    }

    // saldo 
    public getSaldo(){
        return = $this->saldo;
    }

    public setSaldo($saldo){
        $this->saldo = $saldo;
    }

    // status 
    public getStatus(){
        return = $this->status;
    }

    public setStatus($numero){
        if($this->status){
            $this->status = false;
        }
        if($this->status == false){
            $this->status = true;
        }
    }

    public function abrirConta(){
        
    }

    public function fecharConta(){

    }

    public function depositar(){

    }

    public function sacar(){

    }

    public function pagarMensal(){

    }

  }