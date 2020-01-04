<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rotar extends Model
{
	 

	public static function rotateMatrix($N, $mat) 
	{ 
	    for ($x = 0; $x < $N / 2; $x++) 
	    { 
	        for ($y = $x;$y < $N - $x - 1; $y++){ 
	            $temp = $mat[$x][$y]; 
	            $mat[$x][$y] = $mat[$y][$N - 1 - $x]; 
	            $mat[$y][$N - 1 - $x] =  
                $mat[$N - 1 - $x][$N - 1 - $y]; 
	            $mat[$N - 1 - $x][$N - 1 - $y] = $mat[$N - 1 - $y][$x]; 
	            $mat[$N - 1 - $y][$x] = $temp; 
	        } 
	    }
	    return $mat;
	} 
}
