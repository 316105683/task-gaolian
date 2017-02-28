<?php
/**
 * Created by PhpStorm.
 * User: joye
 * Date: 2017/2/28
 * Time: 16:55
 */
class HomeController extends BaseController
{

   public function index()
   {
       return View::make('home.index');
   }
}