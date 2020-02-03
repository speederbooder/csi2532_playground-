<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.25.0-9e8af9e modeling language!*/

class Db
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

   public static  function connect()
  {
    return pg_connect("host=localhost port=5432 dbname=Livrable2");
  }

  //------------------------
  // DEVELOPER CODE - PROVIDED AS-IS
  //------------------------
  
  // line 11 models.ump
  public static function sql ($sql, $dbconn = null) 
  {
    $dbconn = $dbconn ?: self::connect();
      $result = pg_query($dbconn, $sql);
      return pg_fetch_all($result);
  }

}
?>