<?php

namespace App\Http\Controllers;

class YesNoController extends Controller
{
    public function yesNo()
    {
      $a[] = '{"answer":"yes","forced":false,"image":"https://yesno.wtf/assets/yes/8-2f93962e2ab24427df8589131da01a4d.gif"}';
      $a[] = '{"answer":"no","forced":false,"image":"https://yesno.wtf/assets/no/29-6bf57c5bf3fed2dcdbed64afff7a7930.gif"}'; 
      $a[] = '{"answer":"yes","forced":false,"image":"https://yesno.wtf/assets/yes/14-b57c6dc03aa15a4b18f53eb50d6197ee.gif"}';
      return $a[array_rand($a)];
    }
}
