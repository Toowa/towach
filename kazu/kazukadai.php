<?php
/*for($i=2;$i<101;$i++){
    if($i%5==0 AND $i%3==0){
        print "towa";
    }
    elseif($i%5==0){
        print "kazu";
    }
   
    else{
        print 0;
    }
}
?>


<?php
for($i=0;$i<101;$i++){
    print $i;
}
?>
*/
/*class tokyo{
    function __construct($nedan){
        $this->nedan = $nedan;
        print"東京都";
    }
    
    function keisan(){
        print "港区麻布十番3－2－5";
    }
}

$adress1 = new tokyo(10000);
$restaurant->();
?>




class tokyo{
    function __construct(){
        print "<br>東京都";
    }
}
class minato extends tokyo{
    function __construct(){
        parent::__construct();
        print "港区";
    }
}
class setagaya extends tokyo{
    function __construct(){
        parent::__construct();
        print "世田谷区";
    }
}
class shinjuku extends tokyo{
    function __construct(){
        parent::__construct();
        print "新宿区";
    }
}
class nishiazabu extends tokyo{
        function __construct(){
        parent::__construct();
        print "西麻布";
    }
}
/*class restaurant extends minato extends tokyo{
    function __construct(){
        parent::__construct();
        parent::__construct();
        print "3-12-15";
    }
}/

    $jyuusho = new minato();
    $jyuusho = new setagaya();
    $jyuusho = new shinjuku();
    $jyuusho = new nishiazabu();
    $jyuusho = new restaurant();

class math {
    function __construct($kekka){
    $this->kekka=$kekka;
    }
    function nibai(){
        print($this->kekka)*2;
    }
}

$a=new math(100);
$a->nibai();
*/
//class math {
    //function __construct($tt){
    //$this->tt=$tt;
    //}
    //function nibai(){
        //var_dump($this->kekka);
        //for($i=0;$i<=3;$i++){
        //print $this->tt[$i]*2;
        //} 
    //}
    //function guusu(){
        //for($i=0;$i<=3;$i++){ 
            //if($this->tt[$i]%2==0){
            //print $this->tt[$i]." ";
            //} 
        //}
    //}
    //class sanbai extends nibai{
        //function __construct(){
            //parent::__construct();
            //print $i;
        //} 
    //}
//}

//$b=[10,6,1,3];
//$a=new math($b);
//$a->nibai();
//$a->guusu();
//$a=new sanbai();
/*class nibai{
        function __construct($number){
            $this->number=$number[$i]*2;
            
        }
    }
    
    class sanbai extends nibai{
        function __construct($number){
            parent:: __construct($number);
            $this->number=$this->number[$i]*3;
            
            //print $this->number[$i];
            print $i;
            
        }
            
    }
    
    $b=[10,6,1,3];    
    $a = new sanbai($b);
*/
class nibai{
        function __construct($number){
            $this->number=$number*2;
            
        }
    }
    
    class sanbai extends nibai{
        function __construct($number){
            parent:: __construct($number);
            $this->number=$this->number*3;
            
            print $this->number;
        }
            
    }
        
    $a = new sanbai(2);
?>

