<?php 
class BankAc{
    private $balance;
    
    // constructor to initialize balance
    public function __construct($initialBalance){
        $this->balance = $initialBalance;
    }

    // Getter (Accessor) for balance
    public function getBalance(){
        return $this->balance;
    }

    // Setter (Mutator) for balance with validation
   


    public function deposit($amount){
        if($amount > 0){
            $this->balance += $amount;
            echo "<br /> Deposited: $amount <br />";
        }else{
            echo "<br/>Invalid Deposit amount</br/>";
        }
    }

    public function withdraw($amount){
        if($amount > 0  && $amount <= $this->balance){
            $this->balance -= $amount;
            echo "<br /> Withdrew: $amount <br />";
        }else{
            echo "<br />Invalid or Unsufficient Balance!<br />";
        }
    }

}

$obj = new BankAc(1000);
echo $obj->getBalance();
echo "<br />";
$obj->deposit(2000);
echo $obj->getBalance();
$obj->withdraw(5000);
echo $obj->getBalance();
?>