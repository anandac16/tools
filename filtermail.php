<?php
error_reporting(0);
    function readline($pesan){
        echo $pesan;
        $answer =  rtrim( fgets( STDIN ));
        return $answer;
    }

    function SaveFile($filename,$data){
    	$file = fopen($filename,"a");       
            fputs($file,PHP_EOL.$data);  
            return fclose($file);
    }

    echo"
___________.__.__   __                    _____         .__.__   
\_   _____/|__|  |_/  |_  ___________    /     \ _____  |__|  |  
 |    __)  |  |  |\   __\/ __ \_  __ \  /  \ /  \\__  \ |  |  |  
 |     \   |  |  |_|  | \  ___/|  | \/ /    Y    \/ __ \|  |  |__  	
 \___  /   |__|____/__|  \___  >__|    \____|__  (____  /__|____/   #CHKID
     \/                      \/                \/     \/         
";
echo"====================================================================\n";

	$file = readline("Your file : ");
	$folder = readline("Create folder to save: ");
	if(mkdir($folder, 0700)){
		echo"  -- Creating folder $folder...\n";
		sleep(1);
		echo"  -- Success create folder\n\n";
    }else{
        $next = readline("Directory already exists. want to continue? y/n : ");
        if($next=="N" || $next=="n"){
            break;
        }else{
            $folder = $folder;
        }
        echo"\n";

    }
    
	$data = file_get_contents($file);
	$extract = explode("\r\n", $data);
	$total = count($extract);
	echo"[+] Filtering $total mails... \n";
	sleep(1);
echo"\n\n";
	foreach($extract as $pecah){
		$d = strtolower($pecah);	

		if(strstr($d,"hotmail")   || strstr($d,"live") || strstr($d,"msn") || strstr($d,"outlook")){
			$hotmail.=$d;
			$nh = $nh + 1;
			$sfile = $folder."/hotmail.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Hotmail -> $pecah \n";
		}elseif(strstr($d,"yahoo")   || strstr($d,"ymail")){
			$yahoo.=$d;
			$ny = $ny + 1;
			$sfile = $folder."/yahoo.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Yahoo -> $pecah \n";
		}elseif(strstr($d,"gmail")  || strstr($d,"googlemail")   ){
			$gmail.=$d;
			$ng = $ng + 1;
			$sfile = $folder."/gmail.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Gmail -> $pecah \n";
		}elseif(strstr($d,"aol")   ){
			$aol.=$d;
			$na = $na + 1;
			$sfile = $folder."/aol.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Aol -> $pecah \n";
		}elseif(strstr($d, "yandex")){
			$yandex.=$d;
			$ya = $ya + 1;
			$sfile = $folder."/yandex.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Yandex -> $pecah \n";
		}elseif(strstr($d,"mail.ru")   ){
			$mailru .=$d;
			$nr = $nr + 1;
			$sfile = $folder."/mailru.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Mail.Ru -> $pecah \n";
		}elseif(strstr($d,"wanadoo")   ){
			$wanadoo .=$d;
			$nw = $nw + 1;
			$sfile = $folder."/wanadoo.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Manadoo -> $pecah \n";
		}elseif(strstr($d,"ntlworld")   ){
			$ntlworld .=$d;
			$nt = $nt + 1;
			$sfile = $folder."/ntlworld.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Ntlworld -> $pecah \n";
		}elseif(strstr($d,"gmx")   ){
			$gmx .=$d;
			$ngm = $ngm + 1;
			$sfile = $folder."/gmx.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Gmx -> $pecah \n";
		}elseif(strstr($d,"@web.")   ){
			$web .=$d;
			$nw2 = $nw2 + 1;
			$sfile = $folder."/web.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Web -> $pecah \n";
		}else{
			$ather .=$d;
			$nn=$nn + 1;
			$sfile = $folder."/other.txt";
			$save = SaveFile($sfile,$pecah);
			echo"Other -> $pecah \n";
		}
	}

echo"\n\n";
		echo"=======================================\n";
		if($nh>0){ echo"  Total Hotmail: $nh \n"; }
		if($ny>0){ echo"  Total Yahoo: $ny \n"; }
		if($ng>0){ echo"  Total Gmail: $ng \n"; }
		if($na>0){ echo"  Total Aol: $na \n"; }
		if($nr>0){ echo"  Total Mail.ru: $nr\n"; }
		if($ya>0){ echo"  Total Yandex: $ya\n"; }
		if($nw>0){ echo"  Total Manadoo: $nw\n"; }
		if($ngm>0){ echo"  Total Gmx: $ngm\n"; }
		if($nw2>0){ echo"  Total Web: $nw2\n"; }
		if($nn>0){ echo"  Total Other: $nn\n"; }
		echo"=======================================\n";
