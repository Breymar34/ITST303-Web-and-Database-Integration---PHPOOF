<?php
class Op{

    public function add()
    {  
        $ag = func_num_args();
        if($ag == 2)
        {
            return func_get_arg(0) + func_get_arg(1);
        }else{
            return func_get_arg(0) + func_get_arg(1) + func_get_arg(2);
        }
    }
}

$calculate = new Op();
echo $calculate->add(4,5);
echo "<br/>";
echo $calculate->add(4,5,6);