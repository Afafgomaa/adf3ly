<?php
/**
 * this josn data type interface
 */
interface Json
{
  public function json();
}

/**
 * this xml data type interface
 */
interface Xml
{
  public function xml();
}


/**
 * this csv data type interface
 */
interface Csv
{
  public function csv();
}


class getProduct {
  public function getProducts(){
    echo "all product ";
  }
  public function insertProduct($data){
    echo "insert product " .$data ;
  }
}


class json_data extends getProduct implements Json{
  public function json(){
    echo "this json type";
  }
}

class xml_data extends getProduct implements Xml{
  public function xml(){
    echo "this xml type";
  }
}

class csv_data extends getProduct implements Csv{
  public function csv(){
    echo "this csv type";
  }
}



//execute
function build($data){
  if($data instanceof getProduct){
    $data->getProducts();
    $data->insertProduct('data');
    if($data instanceof Json){
      $data->Json();
    }elseif ($data instanceof Xml) {
      $data->Xml();
    }elseif ($data instanceof Csv) {
      $data->Csv();
    }
  }else {
    throw new Exception("Error Processing Request");

  }
}

echo build(new json_data());





 ?>
