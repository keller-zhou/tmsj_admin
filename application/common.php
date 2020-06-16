
<?php
use mail\PHPMailer;
use mail\SMTP;

function getIP() {
    if (getenv('HTTP_CLIENT_IP')) {
        $ip = getenv('HTTP_CLIENT_IP');
    }
    elseif (getenv('HTTP_X_FORWARDED_FOR')) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    }
    elseif (getenv('HTTP_X_FORWARDED')) {
        $ip = getenv('HTTP_X_FORWARDED');
    }
    elseif (getenv('HTTP_FORWARDED_FOR')) {
        $ip = getenv('HTTP_FORWARDED_FOR');

    }
    elseif (getenv('HTTP_FORWARDED')) {
        $ip = getenv('HTTP_FORWARDED');
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
function getusercount($id)
{
    $count  =   db('user')->where(['parentid'=>$id,'power'=>'1'])->count();
    return $count;
}
function getvipcount($id)
{
    $count  =   db('user')->where(['parentid'=>$id,'power'=>'2'])->count();
    return $count;
}
function getRandomString($len, $chars=null,$type=false)
{
 
    if($type==true)
    {
		$authnum	=	rand('100000','999999');
        $count  =   db('user')->where('share_ma',$authnum)->count();
        if($count>0 || in_array($authnum,['111111','222222','333333','444444','555555','666666','777777','888888','999999','000000','123456','654321']))
        {
            $authnum    =   getRandomString($len,$chars,$type);
        }
    }else{
		srand((double)microtime()*1000000);//create a random number feed.
		$ychar="0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z";
		//$ychar="0,1,2,3,4,5,6,7,8,9";
		$list=explode(",",$ychar);
		$authnum='';
		for($i=0;$i<6;$i++){
			$randnum=rand(0,35); // 10+26;
			$authnum.=$list[$randnum];
		}
	}


    return $authnum;

}

function randstring($len)
{
   // $str='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $str='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';  
	$randStr = str_shuffle($str);        //打乱字符串
	//$rands= md5(time().$randStr);
	$rands= $randStr;
    
  	 $field=  substr($rands,0,$len);   //substr(string,start,length);返回字符串的一部
  
 	 $prefix = db('advert')->where('id',28)->value('content');
  
  	$Splicing=  $prefix.$field;
  
    return $Splicing;  

}
function ik2021($len)
{
   // $str='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $str='ik2021'.$len;  
	$randStr = base64_encode($str);        //打乱字符串
	//$rands= md5(time().$randStr);
    $ik2021=explode("aWsyMDIxey",$randStr);
    return $ik2021[1];  

}


function SecurityVerificationKey($uid,$gettime)
{
	//$rands= md5(time().$randStr);
 	 $KeyOperation = $uid + $gettime;
  
	$RyanKeyMd5=  md5($KeyOperation);

    return $RyanKeyMd5;  

}




// 应用公共文件
function name()
{
    $id     =   session('user');
    $nick_name   =   db('user')->where('id',$id)->value('nick_name');
  if(empty($nick_name)){
  		
    $name   =   db('user')->where('id',$id)->value('username');
    
  }else{
  
    $name   =   $nick_name;
    
  }
  
 

  
    return $name?$name:'无数据';
}

function _name($id)
{
    $name   =   db('user')->where('id',$id)->value('username');
    return $name?$name:'无数据';
}
function sname($id,$name)
{
    $name   =   db('user')->where('id',$id)->value($name);
    return $name?$name:'无数据';
}

function id()
{
    $id     =   session('user');
    
    return $id ;
    
}

function power()
{
    $id     =   session('user');
    $name   =   db('user')->where('id',$id)->value('power');
    if($name=='1')
    {
        return '代理';
    }else{
        return '管理员';
    }
}


function advert($id=null)
{
    if($id!=null)
    {
        $name   =   db('advert')->where('id',$id)->value('content');

    }else{
        $name   =   db('advert')->where('id',1)->value('content');

    }
    return $name;
}




function Ryan_name()
{

   $Ryan_name   =   db('advert')->where('id',21)->value('content');
    return $Ryan_name;
}



function Ryan_logo()
{
      $is_Ryan_logo = db('advert')->where('id',114)->value('content');   //LOGO是否设置
      if(empty($is_Ryan_logo)){
            $Ryan_logo = 'data:image/png;base64,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';   //LOGO未填写
      }else{
             $Ryan_logo = $is_Ryan_logo;   //LOGO
      } 
  
    return $Ryan_logo;
}



function Ryan_user_logo()
{
  
      $id     =   session('user');
      $is_Ryan_user_logo = db('user')->where('id',$id)->value('headimgurl');  // 头像是否设置
      if(empty($is_Ryan_user_logo)){
            $Ryan_user_logo = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAACXBIWXMAAAsTAAALEwEAmpwYAAAKTWlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVN3WJP3Fj7f92UPVkLY8LGXbIEAIiOsCMgQWaIQkgBhhBASQMWFiApWFBURnEhVxILVCkidiOKgKLhnQYqIWotVXDjuH9yntX167+3t+9f7vOec5/zOec8PgBESJpHmomoAOVKFPDrYH49PSMTJvYACFUjgBCAQ5svCZwXFAADwA3l4fnSwP/wBr28AAgBw1S4kEsfh/4O6UCZXACCRAOAiEucLAZBSAMguVMgUAMgYALBTs2QKAJQAAGx5fEIiAKoNAOz0ST4FANipk9wXANiiHKkIAI0BAJkoRyQCQLsAYFWBUiwCwMIAoKxAIi4EwK4BgFm2MkcCgL0FAHaOWJAPQGAAgJlCLMwAIDgCAEMeE80DIEwDoDDSv+CpX3CFuEgBAMDLlc2XS9IzFLiV0Bp38vDg4iHiwmyxQmEXKRBmCeQinJebIxNI5wNMzgwAABr50cH+OD+Q5+bk4eZm52zv9MWi/mvwbyI+IfHf/ryMAgQAEE7P79pf5eXWA3DHAbB1v2upWwDaVgBo3/ldM9sJoFoK0Hr5i3k4/EAenqFQyDwdHAoLC+0lYqG9MOOLPv8z4W/gi372/EAe/tt68ABxmkCZrcCjg/1xYW52rlKO58sEQjFu9+cj/seFf/2OKdHiNLFcLBWK8ViJuFAiTcd5uVKRRCHJleIS6X8y8R+W/QmTdw0ArIZPwE62B7XLbMB+7gECiw5Y0nYAQH7zLYwaC5EAEGc0Mnn3AACTv/mPQCsBAM2XpOMAALzoGFyolBdMxggAAESggSqwQQcMwRSswA6cwR28wBcCYQZEQAwkwDwQQgbkgBwKoRiWQRlUwDrYBLWwAxqgEZrhELTBMTgN5+ASXIHrcBcGYBiewhi8hgkEQcgIE2EhOogRYo7YIs4IF5mOBCJhSDSSgKQg6YgUUSLFyHKkAqlCapFdSCPyLXIUOY1cQPqQ28ggMor8irxHMZSBslED1AJ1QLmoHxqKxqBz0XQ0D12AlqJr0Rq0Hj2AtqKn0UvodXQAfYqOY4DRMQ5mjNlhXIyHRWCJWBomxxZj5Vg1Vo81Yx1YN3YVG8CeYe8IJAKLgBPsCF6EEMJsgpCQR1hMWEOoJewjtBK6CFcJg4Qxwicik6hPtCV6EvnEeGI6sZBYRqwm7iEeIZ4lXicOE1+TSCQOyZLkTgohJZAySQtJa0jbSC2kU6Q+0hBpnEwm65Btyd7kCLKArCCXkbeQD5BPkvvJw+S3FDrFiOJMCaIkUqSUEko1ZT/lBKWfMkKZoKpRzame1AiqiDqfWkltoHZQL1OHqRM0dZolzZsWQ8ukLaPV0JppZ2n3aC/pdLoJ3YMeRZfQl9Jr6Afp5+mD9HcMDYYNg8dIYigZaxl7GacYtxkvmUymBdOXmchUMNcyG5lnmA+Yb1VYKvYqfBWRyhKVOpVWlX6V56pUVXNVP9V5qgtUq1UPq15WfaZGVbNQ46kJ1Bar1akdVbupNq7OUndSj1DPUV+jvl/9gvpjDbKGhUaghkijVGO3xhmNIRbGMmXxWELWclYD6yxrmE1iW7L57Ex2Bfsbdi97TFNDc6pmrGaRZp3mcc0BDsax4PA52ZxKziHODc57LQMtPy2x1mqtZq1+rTfaetq+2mLtcu0W7eva73VwnUCdLJ31Om0693UJuja6UbqFutt1z+o+02PreekJ9cr1Dund0Uf1bfSj9Rfq79bv0R83MDQINpAZbDE4Y/DMkGPoa5hpuNHwhOGoEctoupHEaKPRSaMnuCbuh2fjNXgXPmasbxxirDTeZdxrPGFiaTLbpMSkxeS+Kc2Ua5pmutG003TMzMgs3KzYrMnsjjnVnGueYb7ZvNv8jYWlRZzFSos2i8eW2pZ8ywWWTZb3rJhWPlZ5VvVW16xJ1lzrLOtt1ldsUBtXmwybOpvLtqitm63Edptt3xTiFI8p0in1U27aMez87ArsmuwG7Tn2YfYl9m32zx3MHBId1jt0O3xydHXMdmxwvOuk4TTDqcSpw+lXZxtnoXOd8zUXpkuQyxKXdpcXU22niqdun3rLleUa7rrStdP1o5u7m9yt2W3U3cw9xX2r+00umxvJXcM970H08PdY4nHM452nm6fC85DnL152Xlle+70eT7OcJp7WMG3I28Rb4L3Le2A6Pj1l+s7pAz7GPgKfep+Hvqa+It89viN+1n6Zfgf8nvs7+sv9j/i/4XnyFvFOBWABwQHlAb2BGoGzA2sDHwSZBKUHNQWNBbsGLww+FUIMCQ1ZH3KTb8AX8hv5YzPcZyya0RXKCJ0VWhv6MMwmTB7WEY6GzwjfEH5vpvlM6cy2CIjgR2yIuB9pGZkX+X0UKSoyqi7qUbRTdHF09yzWrORZ+2e9jvGPqYy5O9tqtnJ2Z6xqbFJsY+ybuIC4qriBeIf4RfGXEnQTJAntieTE2MQ9ieNzAudsmjOc5JpUlnRjruXcorkX5unOy553PFk1WZB8OIWYEpeyP+WDIEJQLxhP5aduTR0T8oSbhU9FvqKNolGxt7hKPJLmnVaV9jjdO31D+miGT0Z1xjMJT1IreZEZkrkj801WRNberM/ZcdktOZSclJyjUg1plrQr1zC3KLdPZisrkw3keeZtyhuTh8r35CP5c/PbFWyFTNGjtFKuUA4WTC+oK3hbGFt4uEi9SFrUM99m/ur5IwuCFny9kLBQuLCz2Lh4WfHgIr9FuxYji1MXdy4xXVK6ZHhp8NJ9y2jLspb9UOJYUlXyannc8o5Sg9KlpUMrglc0lamUycturvRauWMVYZVkVe9ql9VbVn8qF5VfrHCsqK74sEa45uJXTl/VfPV5bdra3kq3yu3rSOuk626s91m/r0q9akHV0IbwDa0b8Y3lG19tSt50oXpq9Y7NtM3KzQM1YTXtW8y2rNvyoTaj9nqdf13LVv2tq7e+2Sba1r/dd3vzDoMdFTve75TsvLUreFdrvUV99W7S7oLdjxpiG7q/5n7duEd3T8Wej3ulewf2Re/ranRvbNyvv7+yCW1SNo0eSDpw5ZuAb9qb7Zp3tXBaKg7CQeXBJ9+mfHvjUOihzsPcw83fmX+39QjrSHkr0jq/dawto22gPaG97+iMo50dXh1Hvrf/fu8x42N1xzWPV56gnSg98fnkgpPjp2Snnp1OPz3Umdx590z8mWtdUV29Z0PPnj8XdO5Mt1/3yfPe549d8Lxw9CL3Ytslt0utPa49R35w/eFIr1tv62X3y+1XPK509E3rO9Hv03/6asDVc9f41y5dn3m978bsG7duJt0cuCW69fh29u0XdwruTNxdeo94r/y+2v3qB/oP6n+0/rFlwG3g+GDAYM/DWQ/vDgmHnv6U/9OH4dJHzEfVI0YjjY+dHx8bDRq98mTOk+GnsqcTz8p+Vv9563Or59/94vtLz1j82PAL+YvPv655qfNy76uprzrHI8cfvM55PfGm/K3O233vuO+638e9H5ko/ED+UPPR+mPHp9BP9z7nfP78L/eE8/sl0p8zAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAA30SURBVHja7Jx7TJRXm8B/LzMjMAwXBZWiFVDXgpetZZQY5LIIsVHx9qF2a90a21STauym7cZmm/Sr/zSl6R/bNKaum262Fte01ipSi1U+VMyABrlIKTfHgSoXoerMMDMMzO3sH3Zmnc6A2Jbx8s2TTAjn8pw5vznnOc95znlfSZIkQVB+t4QEEQQBBgEGAQYBBiUIMAgwCDAIMChBgEGAQYBBgOMrQgiEEI+d7kcCoBACpVLJ1KlTx0V/TEwMYWFhAYUYUIAymYyCggLUavWf3kkhBCkpKSxbtuzJHIFCCLZs2UJeXh5XrlwZlzaam5vJyMggPz8/cKNQkiQx3h9AhIWFiaamJjE8PCzUarUA/vQ2FixYIEwmkzh79qwnbdz7FiiAO3fuFG6prKwUoaGhf1oHAaFQKMS5c+c8baxfv/7JAAiIadOmiZ6eHnGv7N27908F+N5773npb25uFtHR0eMOMSAAv/jiC/FbcTgcYvPmzX+4g4DYtGmTcDgcPm188MEHjzdAQGzYsEG4XC7hTywWi1i3bp0AHrij7jqrVq0SZrPZr/6hoSGRlZU1rhDHfRVetmwZkiT5zVMqlRQXF/PCCy94VuqxrugAhYWFHD58mIiICL/lQkNDyc7OfnxXYUCsXbtW3E9sNpt44403xjQS3WV27twphoaGRtXrdDpFenr6uI7AcQeYkJAgDAaDGIt88sknYuLEiX5ButNiYmLExx9/PCZ9Op1OREREPN4AAaHRaMRYpaSkRKSnpwu5XO7pOCBkMplYtGiR+Oabb8as6+jRo7/Lvj7IRz7O5gEhBA0NDWRkZIypzpo1azCZTJw5c4aKigr6+/uJi4sjNzeX5cuXU1hYOOb2L1++7Pke4yXyQOx2Ghoaxly2vLycQ4cOYbFYmD59OpMmTSIyMpL+/n6OHDnCtGnTxrzf/fHHHx//rRwgkpOTR7WDbjfnu+++E/Hx8SI8PFzExMSI6OhoERUVJUJCQoRMJhOAiIuLEydOnLjv9DWZTCI5OfnJcKQB8fXXX4/a4crKSvHUU0+JiIgIMWnSJBEZGSmUSqVQKpUeHe5PbGysOHv27Kj6jh07Nu72LyB+oNv+HD58eMQyPT09fPTRR8hkMoaGhpAkiaSkJNLT03n++efZtWsX+fn5XjqLioro7u4eUeehQ4fG3f4FbApLkiTmzJkj2tra/Ppqu3btEgUFBUKtVouXX35Z1NfX+/h4drtdrF69WgBizZo1YseOHWL37t0jui+TJ08OSDBBHogR6A61l5WVMWfOHK/8CxcusHjxYlasWEFiYiLz5s3z5A0NDdHX14dWqyUzM5PPP/+ctLQ0li9fzpIlS9i9ezcXLlwgKyvLS+fJkyfHf+QFchUGCA8P59KlS5jNZlQqFQAOh4OjR4+yatUq5s+fT0hICBcvXuTy5cv09/fjcDi4c+cOQggMBgOFhYUcPHiQtrY21Go1eXl57N+/n6VLlxISctcaDQ4OUlVVNeL27rEFaLfbiYmJoaKigjVr1gBw6dIlGhoaSE9P5+TJkxiNRvbv309HR4fXvnj27NkkJCQQHx9Pbm4uBoOBixcvsn37dl566SWqq6tZunQpABqNhoiICGw225MV0u/u7iYrK4uamhpP2pEjR8jOzmbLli1s376dt99+G6VSiRCC119/nS+//JLXXnsNo9FIeXk5FRUVtLW1sX79elpaWlAoFKxcuZKvvvrKo7O2tpZFixbxyy+/PFkABwYGiIyMZPLkyWi1WgwGAy0tLWzevNnLXubn5/P++++zb98+tmzZwoEDB7hy5Qrr1q2jq6uLTz/9lPr6etauXUt1dTUbNmxAq9Wi1+vp6OggMjKSCRMmYLPZAmIHZZIkvR8oV0atVrN8+XJqa2sxmUz09vaybds2Tzm9Xo9KpSIlJYWqqipu376NUqkkPj6ejIwMcnJyiI2NpbW1FaPRSG9vLy6XC7vdTmhoKO3t7SxcuJDz58+j0WgCAjBgNhCgsbGRt956i/LyclpbWykoKPCK8TU2NqLRaGhvbyc8PByHw4FCoWDhwoVkZ2eTkpJCdnY22dnZWCwWbt68SW1tLYmJiVRVVaFSqdi4cSPvvvtuwPoUUIBarRaAGTNmcObMGd555x1P3o0bNzhy5Ahz587lzTffRKVScfPmTdrb27l69Srff/89NTU1zJ8/n+TkZOLi4pg1axazZs2irKyMU6dOsXHjRgCuXbv2ZALs7OxEr9eTmZmJwWDwcjVu3rxJS0sLK1eupKKiApVKRWpqKjk5OeTk5ABgtVqRyWTI5XKv6SmXy8nIyCA3N5cbN27Q09PzZALs6+tDp9OhVqvZunWrj5uTm5vLypUrMZvNaLVazp07h9VqJS0tjeeee47w8PARQ/zLli1jypQpnD59GovF8uTdTJAkCafTSUtLy92GQ7ybdrlcOJ1Ojy1buHAhmzdvpqCggO7ubo4fP05XVxcul8tHd3R0NHfu3PEKYT1xO5F7FxJ/otfrMZvNHDhwALPZTFZWFuHh4UydOpWCggJMJhNdXV1YrVafXYbbXgYsBvgwAY50L8ZmsyGXy1GpVBQXF6PVaklLSyM5ORmlUkl4eDipqal+R2BUVBSDg4Oj/kBPDMCmpiYMBgMxMTE+09BsNpOUlMThw4e5evUqjY2NJCcns3TpUhYtWoRcLveZ+u66kiRx7do1mpubA9qfgF+w7O3tpb293Sd99uzZWCwWLBYLvb291NXVcevWLXJycsjMzCQsLGxEnZGRkTidTo4fP87w8HDA7F/AAbpDW/fuh92SlJREYmIidXV1DA4OolQqKS8v59SpU2PSK0kSxcXFgR4PD+eOtEaj8Qth9+7dDAwMYLPZUCgUmM1mvv32W44ePcrQ0NCoV3iffvppWltb/z4A1tfXMzw87JM+ceJEFAqFx7eTyWRERUXR1NREcXExBoNhRJ1JSUmEhoaOqf0/8y71QwGo0+nQ6XQ+6R0dHTQ2NhIaGooQgpCQEPR6PQqFghs3bmC1Wke0bwkJCcyaNeu+0O4F5y/tkV+FJUnCZrNRX19PamqqV15NTQ23b9/2rKoymQyDwYDT6cTpdNLZ2UlCQoL/sJJMRkpKCnV1dT7g3L7i6tWryc/PZ8aMGUiSxPXr1ykvL6e0tBSTyfS7HHA5D0nOnz/vFQsEqKys9J4eISGYTCasVityuXzUUziABQsW+E0vKCigqKiIuXPn+uRt27aNtrY29uzZQ0lJCUKIB4L40B60qays9Di/cPd85NKlSz52zGKxYDabkcvlDAwMjKrzmWee8Rl9r776KiUlJX7h3Vvv+PHj7Nix4/GwgYDHUXZLe3s7Op2OCRMmeAFwuVzo9XpkMtl9bVVycjJyudxj15YsWcJnn33m1/n2J/v27SMzM/OBbOJDAegOLFRUVHjSqqqqMBqNyGQyT5rT6QTg1q1bCCGQy0e3OPHx8URFRXmm/4cffohCoUDYhrFf/xnngNF3cRkexvZzB46+XmQyGUVFRWP6sR76CIS7Z8Lu07PKykpCQkK8vrgbYFdXF0IIz/8jSUxMDHFxcQA8++yzntuptg4d1/9lAz//ZQXOO7e96tz86zt0rPgn9MVfAJCRkUFaWtqjP4Xh7oMxWq0Wu91OXV2d13bN6XTicDg8bs/AwIBnQRlJwsLCUKvVACxevNizGIT+wzPMOHgER08Ptw/s85QfbvkJw/8eZOpfP2Dyv/6bJz09Pf3xANjf309DQwNNTU10dnZ6nGhJknA4HLhcLiRJYnBwkNraWiwWy313G+4R6P7763xGkZhE9KbN6P/nv3D09901Dfv+A8VTCUSvK4R7TEdsbOyjD1CSJIaGhmhsbKS0tNTnGPK3B+PV1dX09vZSU1Pjk+ee9s3NzVRVVd0dXX52OtGFm3Aa9Bi+OoT9504Gjn1NzD9vQQoN8wmtPfJ+oFtaW1vp7e31cl9cLhcOh8MD1A37hx9+IDY2ljNnzrBq1SqvH0Ov13Ps2DFPpMdfxCds3j8SsTQb/X//J+a//UCISkXU+k0+5fzVfSSnMMBPP/1Ed3e31/S12+0+C4YkSWi1Wi5evEhDQwMlJSWe3YPRaOTEiROcPXvWk6bRaOjr6/tNb0OIWr8Re283g1UXUOU9z4SkZK8it27d4sKFC2P+/gE5WB9tGhuNd10Lt4siSRJWqxWn0+l3R9DZ2cm0adNwOBw0NDTQ2dlJdXU1V69epbS01BMPtFqtKBQK8vLyvOor4hMYOPEtYtDClHf3MmHmbK/8oqIiysrKxrwbeagA3fYrLCzM4+y6XC6vHcpvgbtcLrRaLampqYSGhnqOME+fPo1Op/PqeE1NDUuWLGHmzJn/PwgjVNg6ruEym5ny73uRfh35AOfOnWPnzp1e5uOxACiXyz1nvXa7fdSosjsYodPpmDdvHrGxsbS3t1NWVuZTzuFwUFpaSmpqKikpKZ68iMVLiF61FlncZE/ayZMnefHFFzGZTA8WUAjE465jeZY4Li5OxMXFjfkxWEAkJiaKPXv2iOnTp49Yh1/vSW/dulVoNBphsVi8ntWrqqoSr7zyyh95vvjhvsFSCIFCoSA6Ohqn04nRaHygZ+aioqIwm82j1rk3b+bMmZ53NvT393tdA/k9ZynSo/AKUEmSmDhxIg6H474RF39wxtrxkSD/kUOoh+4HuhcOd9D0QeNx41X2sQIId+/G+Ds0f9TlkQDoXlnHa5SM83cPvgb5j0jw3VlBgEGAQYBBgEEJAgwCDAL8+5T/GwD90iHHaPJXYAAAAABJRU5ErkJggg==';   //LOGO未填写
      }else{
             $Ryan_user_logo = $is_Ryan_user_logo;   //LOGO
      } 
  
    return $Ryan_user_logo;
}





function gui($id)
{
    $name   =   db('user')->where('id',$id)->value('username');
    return $name;
}


function gui_nickname($id)
{
    $nick_name   =   db('user')->where('id',$id)->value('nick_name');
  	if($nick_name == ''){
      
    }else{
    return ' || '.$nick_name;
    }
  
}



function yue()
{
    $id     =   session('user');
    $power  =   session('power');
    if($power=='1')
    {
        $where['id']	=	$id;
    }else{
        $where			=	'';
        return 	'';
    }
    $name   =   db('user')->where($where)->value('money');
    return '当前余额:'.$name;
}

function share()
{
    $id     =   session('user');
    $power  =   session('power');
    if($power=='1')
    {
        $where['id']	=	$id;
    }else{
        $where			=	'';
        return 	'';
    }
    $name   =   db('user')->where($where)->value('share_ma');
    return '分享码:'.$name;
}






function randstring_agent($uid)
{
   // $str='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $str='ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';  
	$randStr = str_shuffle($str);        //打乱字符串
	//$rands= md5(time().$randStr);
	$rands= $randStr;
    $len='8';
  	 $field=  substr($rands,0,$len);   //substr(string,start,length);返回字符串的一部
  
 	 $prefix = db('advert')->where('id',28)->value('content');
  
  	$Splicing=  $uid.$field;
  
    return $Splicing;  

}

// 发送邮件函数 - 激活码		
function sendEmail_agent($code, $toemail){
//    echo $desc_content;
//    echo $toemail;
 //   echo count($content);
 //   dump($content);    



//  dump($result);  
 //echo $data;
 // return;
    


            $body = '你好,您本次登录的的验证码是：<b>'.$code.'</b><br>';       
  		
         
          
        $mail = new PHPMailer();
        $mail->isSMTP();// 使用SMTP服务
        $mail->CharSet = "utf8";// 编码格式为utf8，不设置编码的话，中文会出现乱码
        $mail->Host = advert('400');// 发送方的SMTP服务器地址
        $mail->SMTPAuth = true;// 是否使用身份验证
        $mail->Username = advert('402');// 发送方的163邮箱用户名，就是你申请163的SMTP服务使用的163邮箱</span><span style="color:#333333;">
        $mail->Password = advert('403');// 发送方的邮箱密码，注意用163邮箱这里填写的是“客户端授权密码”而不是邮箱的登录密码！</span><span style="color:#333333;">
        $mail->SMTPSecure = "ssl";// 使用ssl协议方式
        $mail->Port = advert('401');// 163邮箱的ssl协议方式端口号是465/994
        $mail->setFrom(advert('402'),advert('374'));// 设置发件人信息，如邮件格式说明中的发件人，这里会显示为Mailer(xxxx@163.com），Mailer是当做名字显示
        $mail->addAddress($toemail,'回复消息');// 设置收件人信息，如邮件格式说明中的收件人，这里会显示为Liang(yyyy@163.com)
        $mail->addReplyTo(advert('402'),"Reply");// 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址
		$mail->IsHTML(true); //支持html格式内容 
        //$mail->addCC("xxx@163.com");// 设置邮件抄送人，可以只写地址，上述的设置也可以只写地址(这个人也能收到邮件)
        //$mail->addBCC("xxx@163.com");// 设置秘密抄送人(这个人也能收到邮件)
        //$mail->addAttachment("bug0.jpg");// 添加附件
        $mail->Subject = "代理登录验证码：";// 邮件标题
     // $mail->Body = "以下是博客博主回复你的内容:".$content." 点击可以查看文章地址:".$desc_url;	// 邮件正文
 	//	$mail->msgHTML($content);
		$mail->Body = $body; //邮件主体内容 
        $mail->AltBody = "您的邮箱可能不支持当前操作";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用
      
        if(!$mail->send()){// 发送邮件
       //    echo 22;
            return $mail->ErrorInfo;
        // echo "Message could not be sent.";
        // echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息
        }else{
            return 1;
        }
}




// 发送邮件函数 - 激活码		
function sendEmail($content, $toemail, $username, $number, $name, $ctime){
//    echo $desc_content;
//    echo $toemail;
 //   echo count($content);
 //   dump($content);    


foreach ($content as $value) {
  
  				$data[] = $value['dianka'];
}


  $result=implode("</hr>",$data);
//  dump($result);  
 //echo $data;
 // return;
    

  	$time_s = date("Y-m-d H:i:s",$ctime);

            $body = '你好：<b>'.$username.'</b><br>
            		 数量：<b>'.$number.'</b><br>
            		 类型：<b>'.$name.'</b><br>
            		 批次：<b>'.$ctime.'</b><br>
            		 生成时间：<b>'.$time_s.'</b><br>
                     <br><br></hr>'.$result.'</hr><br><br>';       
  		
         
          
        $mail = new PHPMailer();
        $mail->isSMTP();// 使用SMTP服务
        $mail->CharSet = "utf8";// 编码格式为utf8，不设置编码的话，中文会出现乱码
        $mail->Host = advert('400');// 发送方的SMTP服务器地址
        $mail->SMTPAuth = true;// 是否使用身份验证
        $mail->Username = advert('402');// 发送方的163邮箱用户名，就是你申请163的SMTP服务使用的163邮箱</span><span style="color:#333333;">
        $mail->Password = advert('403');// 发送方的邮箱密码，注意用163邮箱这里填写的是“客户端授权密码”而不是邮箱的登录密码！</span><span style="color:#333333;">
        $mail->SMTPSecure = "ssl";// 使用ssl协议方式
        $mail->Port = advert('401');// 163邮箱的ssl协议方式端口号是465/994
        $mail->setFrom(advert('402'),advert('374'));// 设置发件人信息，如邮件格式说明中的发件人，这里会显示为Mailer(xxxx@163.com），Mailer是当做名字显示
        $mail->addAddress($toemail,'回复消息');// 设置收件人信息，如邮件格式说明中的收件人，这里会显示为Liang(yyyy@163.com)
        $mail->addReplyTo(advert('402'),"Reply");// 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址
		$mail->IsHTML(true); //支持html格式内容 
        //$mail->addCC("xxx@163.com");// 设置邮件抄送人，可以只写地址，上述的设置也可以只写地址(这个人也能收到邮件)
        //$mail->addBCC("xxx@163.com");// 设置秘密抄送人(这个人也能收到邮件)
        //$mail->addAttachment("bug0.jpg");// 添加附件
        $mail->Subject = "激活码导出 批次：".$ctime;// 邮件标题
     // $mail->Body = "以下是博客博主回复你的内容:".$content." 点击可以查看文章地址:".$desc_url;	// 邮件正文
 	//	$mail->msgHTML($content);
		$mail->Body = $body; //邮件主体内容 
        $mail->AltBody = "您的邮箱可能不支持当前操作";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用
      
        if(!$mail->send()){// 发送邮件
       //    echo 22;
            return $mail->ErrorInfo;
        // echo "Message could not be sent.";
        // echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息
        }else{
            return 1;
        }
}
?>