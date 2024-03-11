<?php

class Test
{
    public function testCharacters($str)
    {
        $arr = explode(' ', $str); 

        foreach ($arr as $key => $elem) { 
            $arr[$key] = $this->revertWord($elem); 
        }

        return implode(' ', $arr); 
    }

    private function revertWord($word) // Изменить порядок букв 
    {
        $arr = str_split($word); // Cтроку в массив
        $arrRev = str_split(mb_strtolower(preg_replace('/\pP/iu', '', $word))); // Без знаков пинктуации и реверсировать порядок элементов
        $num = count($arrRev) - 1; 

        for ($i = 0; $i < count($arr); $i++) { 
            if (ctype_punct($arr[$i])) continue; // Если является знаком пунктуации, пропустить 

            if (ctype_upper($arr[$i])) { // Если в верхнем регистре
                $arr[$i] = strtoupper($arrRev[$num]); // Заменить в верхний регистер
            } else {
                $arr[$i] = $arrRev[$num]; 
            }

            $num--;
        }

        return implode($arr);
    }
}
