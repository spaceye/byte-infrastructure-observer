<?php


$serverDetails = json_decode(<<<EOF
{
   "status" : 100,
   "data" : {
      "function" : "db",
      "disk" : "292 GB, PERC6/i, RAID1, 4 disks, SAS",
      "status" : "production",
      "since" : "2009-12-15",
      "mac_1" : "0026b950bcc9",
      "model" : "r410",
      "mac_0" : "0026b950bcc8",
      "os_version" : "6.0.1",
      "os_family" : "Linux",
      "ssh_fingerprint" : "6d:61:2e:ed:ba:57:d0:22:f1:73:f5:eb:24:93:33:4b",
      "customer_id" : 0,
      "id" : 19,
      "cluster" : 1,
      "fasea" : "1",
      "cpu" : "2 x quad Xeon E5504 1.99GHz",
      "serial" : "DLJDK4J",
      "last_modified" : "2012-03-09 01:32:28",
      "mac_ipmi" : "0026b950bcca",
      "server_id" : 210,
      "comment" : "shared server [MySQL5.1]",
      "switch" : null,
      "faseb" : "0",
      "fullname" : "db19.c1",
      "mem" : "16384 MB = 4 x 4096 MB Onbekend, 4 x Empty",
      "os_brand" : "Debian"
   }
}
EOF
);

    function toObject($array) {

        $obj = new stdClass();

        foreach ($array as $key => $val) {

            $obj->$key = is_array($val) ? $this->_toObject($val) : $val;
        }

        return $obj;
    }

    $request = toObject(array_merge($_GET, $_POST));

    if ( isset($request->view) ) {

        switch ( $request->view ) {

            case 'rack' : require_once('rack.php'); break;
            case 'cmm' : require_once('cmm.php'); break;
            case 'vm' : require_once('vm.php'); break;
            default: break;
        }
    }
    elseif ( isset($request->details) ) {

        echo json_encode($serverDetails);
    }
    elseif ( isset($request->bytelight) ) {

        require_once('bytelight.php');
    }

    exit(0);

    function randomObject() {

        $objects = array(

            array(
                "server_id" => "464",
                "cluster" => "101",
                "type" => "switch",
                "status" => "production",
                "fullname" => "switch33.c101"
            ),
            array(
                  "server_id" => "461",
                  "cluster" => "101",
                  "type" => "dae",
                  "status" => "production",
                  "fullname" => "dae2.c101"
            ),
            array(
                  "server_id" => "833",
                  "cluster" => "1",
                  "type" => "cmm",
                  "status" => "testing",
                  "fullname" => "cmm4.c1"
            )
        );

        return (object) $objects[rand(0,count($objects)-1)];
    }

    function randomIds($start) {

        $ids = array();

        $end = rand($start+1,$start+5);

        for ( $i = 0; $i < $end-$start; $i++ ) {

            array_push($ids, $start+$i);
        }

        return $ids;
    }

    function getShelf($id) {

        $shelf = new StdClass();
        $shelf->ids = ( rand(0,1) ) ? randomIds($id) : array($id);
        $shelf->entity = randomObject();

        return $shelf;
        //return ( rand(0,1) ) ? $shelf : null;
    }

    function getRack($id) {

        $rack = new StdClass();
        $rack->id = 'Rack ' . $id;
        $rack->entities = array();
        $rack->size = 55;

        for ( $i = 0; $i < rand(10,50); $i++ ) {

            $shelf = getShelf($i+1);
            $i += count($shelf->ids) - 1;
            array_push($rack->entities,$shelf);
        }

        return $rack;
    }

    $reply = new StdClass();
    $reply->status = 100;
    $reply->data = array();

    for ( $i = 0; $i < 10; $i++ ) {

        array_push($reply->data,getRack($i+1));
    }

    echo json_encode($reply);
?>
