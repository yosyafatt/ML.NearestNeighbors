<?php     
    $file_training = "./dt_training.txt";
    $file_testing = "./dt_testing.txt";
    
    $train  = olahData(getData($file_training));
    $test   = olahData(getData($file_testing));

    $temp = null;
    for($i = 0; $i < count($test); $i++){      
        for ($j = 0; $j < count($train); $j++) { 
            $train[$j][4] = itungJarak(($train[$j][1] - $test[$i][1]),($train[$j][2] - $test[$i][2]));
        }
        usort($train, 'cmp');    

        $vote = null;
        for($kk = 0; $kk < $k; $kk++){
            $vote[] = $train[$kk][3];
        }

        $vote = array_count_values($vote);
        
        $test[$i][4] = array_search(max($vote), $vote);        
        if($test[$i][3] == $test[$i][4]){
            $test[$i][5] = 'Benar';
        } else {
            $test[$i][5] = 'Salah';            
        }
        $temp[] = $test[$i][5];
    }

    $temp = array_count_values($temp);
    $persentase = $temp['Benar'] / count($test) * 100;

    function getData($file){
        $fh = fopen($file, "r");
        $i = 0;
    
        while (!feof($fh)) {
            $line[$i] = fgets($fh);
            $i++;
        }
               
        fclose($fh);
        return $line;
    }

    function olahData($data){
        $i = 0;
        $olah = null;
        foreach ($data as $d) {
            $olah[$i] = array_map('intval', explode(" ", $d));        
            $i++;
        }        
        return $olah;
    }

    function itungJarak($a, $b){
        $jarak = sqrt(pow(abs($a), 2) + pow(abs($b), 2));
        return $jarak;
    }

    function cmp($a, $b){
        return ($a[4] > $b[4]);
    }
?>