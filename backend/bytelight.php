<?php

    $bytelight2 = <<<EOF
{
   "status" : 100,
   "data" : []
}
EOF;

    $bytelight = <<<EOF
{
   "status" : 100,
   "data" : [
      {
         "label": "Racks",
         "entities" : [
            {
               "fullname" : "h01",
               "view" : "rack",
               "match" : {
                   "type" : "Mac Address",
                   "abstract" : "00:26:{{C7:2D}}:62:54 and something very very very, really very long. Like this long. Or maybe a bit longer. Hmm.."
               }
            }
         ]
      },
      {
         "label": "CMMs",
         "entities" : [
            {
               "fullname" : "cmm1.c1",
               "view" : "cmm"
            }
         ]
      },
      {
         "label": "VMs",
         "entities" : [
            {
               "fullname" : "vm5.c1",
               "view" : "vm",
               "match" : {
                   "type" : "Fullname",
                   "abstract" : "Hello, {{world}}!"
               }
            },
            {
               "fullname" : "vm1.c101",
               "view" : "vm",
               "parents" : ["rack X", "cmm Y"],
               "match" : {
                   "type" : "Some Other Detail",
                   "abstract" : "Oh, yes, {{some other}}"
               }
            }
         ]
      },
      {
         "label": "Servers",
         "entities" : [
            {
               "fullname" : "puppet2.c101",
               "view" : "vm",
               "parents" : ["rack X", "cmm Y", "vm1.c101"],
               "match" : {
                   "type" : "IP",
                   "abstract" : "10.4.{{33.1}}"
               }
            },
            {
               "fullname" : "db2.c1",
               "view" : "cmm",
               "parents" : ["h01", "cmm1.c1"],
               "match" : {
                   "type" : "Whatever",
                   "abstract" : "Really, {{whatever}}?!"
               }
            },
            {
               "fullname" : "db29.c1",
               "view" : "rack",
               "parents" : ["g02"],
               "match" : {
                   "type" : "Mac Address",
                   "abstract" : "00:26:{{C7:2D}}:62:54"
               }
            }
         ]
      }
   ]
}


EOF;

    if ( isset($request->bytelight) ) {
        //$json = new StdClass();
        //$json = json_decode($bytelight2);
        $json = json_decode($bytelight);
    }

    echo json_encode($json);
