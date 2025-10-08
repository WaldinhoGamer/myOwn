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

    public function __construct($accType,$donoNome){
        $this->tipo = $accType;
        $this->dono = $donoNome;

        $this->numConta = random_int(1000,9999);
        $this->status = false;

        if($accType === "cc"){
            $this->setSaldo(50);
        }
        if($accType === "cp"){
            $this->setSaldo(150);
        }

    }

    // numConta 
    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($numero){
        $this->numConta = $numero;
    }

    // tipo 
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($conta){
        $this->tipo = $conta;
    }

    // dono 
    public function getDono(){
        return $this->dono;
    }

    public function setDono($nome){
        $this->dono = $nome;
    }

    // saldo 
    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    // status 
    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
       $this->status = $status;
    }

    // metodos ////////////////////////////////////////


    public function abrirConta(){
         $this->setStatus(true);
    }

    public function fecharConta(){
      
            $this->setStatus(false);
    
    }

    public function depositar($valor){
        if($this->getStatus() == true){
            if(is_numeric($valor)){
                echo "Foram depositados ". $valor ."R$";
                $newSaldo = $this->getSaldo();
                $newSaldo += $valor;
                $this->setSaldo($newSaldo);
                echo "-----------------------------------\n";
                echo "Saldo atual:". $newSaldo ."R$\n";
            }
            else{
                echo "Error! Valor não numerico";
            }
        }
        else{
            echo "Erro! Conta fechada.";
        }

    }

    public function sacar($valor){
        if($this->getStatus() == true){
            if(is_numeric($valor)){
                if($this->getSaldo() >= $valor){
                    echo "Foram sacados ". $valor ."R$";
                    $newSaldo = $this->getSaldo();
                    $newSaldo -= $valor;
                    $this->setSaldo($newSaldo);
                    echo "-----------------------------------\n";
                    echo "Saldo atual:". $newSaldo ."R$\n";
            }else{
                echo "Erro! Falta de dinheiro!\n";
            }
        }else{
                echo "Error! Valor não numerico";
        }
        }
        else{
            echo "Erro! Conta fechada.";
        }
    }

    public function pagarMensal(){

        $newSaldo = $this->getSaldo();

        if($this->getTipo() === "cc"){
            $newSaldo -=12;
            $this->setSaldo($newSaldo);
            echo "Mensalidade paga.";
        }
        if($this->getTipo() === "cp"){
            $newSaldo -=20;
            $this->setSaldo($newSaldo);
            echo "Mensalidade paga.";
        }
    }

  }