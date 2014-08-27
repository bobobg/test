<?php
/**
 * Created by PhpStorm.
 * User: Bobo
 * Date: 8/27/14
 * Time: 2:43 PM
 */
class Person {
    public static function say(){
        echo "Here are my thoughts";
    } // Showing the thoughts.
}
class Blogger extends Person {
    const cats = 50;
} // showing the cats number.
class Bobo {

    public static $set  = "The Cat number is ";
    public static function say() {
        echo Blogger::cats;
    }


}
echo Person::say();
echo Bobo::$set;
echo Bobo::say();

?>