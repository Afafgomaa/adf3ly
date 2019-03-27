<?php
/**
 * collect all same methode
 */
interface Shipment_z
{
  public function CreateShipmentAndGetbill();
  public function GetShipmentTrackingDetalis();

}
/**
 *
 */
interface shipment_w extends Shipment_z
{
  public function CreateShipmentInfo();
  public function CreateShipmentInstruction();
  public function CreateShipmentWaybill();
}

/**
 *
 */
interface Shipment_y extends Shipment_w
{
  public function RegisterNumberAndGettrackingDeatalias();
  public function getTrackingDetails();
}

class client_Methode{
  public function createShipment(){
    return $this->CreateShipmentAndGetbill() .  " \n". $this->CreateShipmentInfo() . $this->CreateShipmentInstruction() . $this->CreateShipmentWaybill();

  }
  public function trackShipment(){
    return $this->getTrackingDetails() . $this->RegisterNumberAndGettrackingDeatalias() .$this->GetShipmentTrackingDetalis();
  }
}


class aramax extends client_Methode implements Shipment_y {

// create shipping fynction
public function CreateShipmentAndGetbill(){
echo 'CreateShipmentAndGetbill function';
}
public function CreateShipmentInfo(){
echo 'CreateShipmentInfo function';
}
public function CreateShipmentInstruction(){
echo 'CreateShipmentInstruction function';
}
public function CreateShipmentWaybill(){
echo 'CreateShipmentWaybill function';
}





// get tracking shipment
public function GetShipmentTrackingDetalis(){
  echo 'GetShipmentTrackingDetalis function';
}
public function RegisterNumberAndGettrackingDeatalias(){
  echo 'RegisterNumberAndGettrackingDeatalias function';
}
public function getTrackingDetails(){
  echo 'getTrackingDetails function';
}

}
$shipProduct = new aramax();
$shipProduct->createShipment();
$shipProduct->trackShipment();







 ?>
