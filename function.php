<?php



function getconnection()
{
	$connection=mysql_connect("db4free.net","weisong","victor1234") or die("host connection error");
	mysql_select_db("fisonguser",$connection) or die("database error");
}

function contoarray($argv)
{
    $str=strtolower($argv);
    $result=explode(" ", $str);
    return $result;
}

function kmptable($P)
{
    $length = count($P);
    $shifttable = array();
    $shifttable[0] = 1;        
    for ($index = 1; $index < $length; $index++) {
        if ($P[$index]==$P[$index-$shifttable[$index-1]]) {
            $shifttable[$index]=$shifttable[$index-1];
        }
        else
            $shifttable[$index]=$index+1;
    }
    return $shifttable;
}
function kmp($T, $W, $P)
{
    $Plen=count($P);
    $Wlen=count($W);
    $result=0;
    for($index=0; $index<$Plen;$index++)
    {
        $Windex=0;
        for(; $index<$Plen&&$Windex<$Wlen; $Windex++)
        {
            if($P[$index]==$W[$Windex])
            {
                $index++;
            }else
            {
                $index+=$T[$Windex]-1;;
                break;
            }
        }
        //$result=max($result,$Windex);
        if($Windex==$Wlen)
        {
            return TRUE;
        }
    }
    return FALSE;
}

function LCS($P, $W)
{
    $Plen=count($P);
    $Wlen=count($W);
    $a=array();
    $matrix=array();
    $a= array_pad($a,$Wlen+1,0);
    $matrix=array_pad($matrix,$Plen+1,$a);
    for($Pindex=0;$Pindex<$Plen;$Pindex++)
    {
        for($Windex=0;$Windex<$Wlen;$Windex++)
        {
            if($P[$Pindex]==$W[$Windex])
            {
                $matrix[$Pindex+1][$Windex+1]=$matrix[$Pindex][$Windex]+1;
            }
            else
            {
                $matrix[$Pindex+1][$Windex+1]=max($matrix[$Pindex][$Windex+1],$matrix[$Pindex+1][$Windex]);
            }
        }
    }
    return $matrix[$Plen][$Wlen];
}






?>