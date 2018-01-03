<?php

namespace App\classes;




class FindCharecter
{

    public  function wordCharecterCount($data){

      $stringLength =  strlen($data['given_string']);
        //echo $stringLength;

       $wordLength = str_word_count($data['given_string']);
       // echo $wordLength;

        $result = [
            'string_length' =>$stringLength,
            'word_length' =>$wordLength
        ];

        return $result;

    }



}