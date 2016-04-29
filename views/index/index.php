<?php
$this->title = 'Bài viết';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!empty($model))
{
    foreach ($model as $value)
    {
        echo $value->title;
    }
}