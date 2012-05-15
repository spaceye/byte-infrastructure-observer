<?php

    $view = <<<EOF
{
   "status" : 100,
   "data" : [
      {
         "fullname" : "vm-ssh1.c1",
         "server_id": 121,
         "parent" :
         {
            "type" : "cmm",
            "fullname"  : "cmm1.c101"
         },
         "entities" : [
            {
               "entity" : {
                  "server_id" : 923,
                  "cluster" : 84,
                  "function" : "ssh",
                  "status" : "testing",
                  "fullname" : "ssh1.c84"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 926,
                  "cluster" : 38,
                  "function" : "ssh",
                  "status" : "testing",
                  "fullname" : "ssh1.c38"
               },
               "id" : 1
            }
         ]
      },
      {
         "id" : "vm1.c101",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 475,
                  "cluster" : 101,
                  "function" : "ftp",
                  "status" : "production",
                  "fullname" : "ftp1.c101"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 481,
                  "cluster" : 101,
                  "function" : "dns",
                  "status" : "production",
                  "fullname" : "dns1.c101"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 551,
                  "cluster" : 48,
                  "function" : "ssh",
                  "status" : "testing",
                  "fullname" : "ssh1.c48"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 591,
                  "cluster" : 101,
                  "function" : "puppet",
                  "status" : "production",
                  "fullname" : "puppet2.c101"
               },
               "id" : 3
            }
         ]
      },
      {
         "id" : "vm2.c1",
         "parent" :
         {
            "type" : "cmm",
            "id"  : "cmm1.c1"
         },
         "entities" : [
            {
               "entity" : {
                  "server_id" : 275,
                  "cluster" : 1,
                  "function" : "service",
                  "status" : "production",
                  "fullname" : "service4.c1"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 301,
                  "cluster" : 1,
                  "function" : "ftp",
                  "status" : "production",
                  "fullname" : "ftp2.c1"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 311,
                  "cluster" : 1,
                  "function" : "vmnode",
                  "status" : "production",
                  "fullname" : "vmnode311.c1"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 342,
                  "cluster" : 1,
                  "function" : "service",
                  "status" : "production",
                  "fullname" : "service5.c1"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 531,
                  "cluster" : 17,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c17"
               },
               "id" : 4
            }
         ]
      },
      {
         "id" : "vm2.c101",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 482,
                  "cluster" : 101,
                  "function" : "dns",
                  "status" : "production",
                  "fullname" : "dns2.c101"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 914,
                  "cluster" : 36,
                  "function" : "ssh",
                  "status" : "testing",
                  "fullname" : "ssh2.c36"
               },
               "id" : 1
            }
         ]
      },
      {
         "id" : "vm3.c1",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 300,
                  "cluster" : 1,
                  "function" : "ftp",
                  "status" : "production",
                  "fullname" : "ftp1.c1"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 317,
                  "cluster" : 1,
                  "function" : "service",
                  "status" : "production",
                  "fullname" : "service3.c1"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 499,
                  "cluster" : 1,
                  "function" : "test",
                  "status" : "testing",
                  "fullname" : "test1.c1"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 881,
                  "cluster" : 1,
                  "function" : "nagios",
                  "status" : "testing",
                  "fullname" : "nagios4.c1"
               },
               "id" : 3
            }
         ]
      },
      {
         "id" : "vm3.c101",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 494,
                  "cluster" : 36,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c36"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 667,
                  "cluster" : 101,
                  "function" : "cacti",
                  "status" : "testing",
                  "fullname" : "cacti1.c101"
               },
               "id" : 1
            }
         ]
      },
      {
         "id" : "vm4.c101",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 486,
                  "cluster" : 101,
                  "function" : "ftp",
                  "status" : "production",
                  "fullname" : "ftp2.c101"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 520,
                  "cluster" : 101,
                  "function" : "puppet",
                  "status" : "production",
                  "fullname" : "puppet1.c101"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 732,
                  "cluster" : 101,
                  "function" : "dns",
                  "status" : "production",
                  "fullname" : "dns3.c101"
               },
               "id" : 2
            }
         ]
      },
      {
         "id" : "vm5.c1",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 344,
                  "cluster" : 23,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c23"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 408,
                  "cluster" : 28,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c28"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 415,
                  "cluster" : 3,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c3"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 416,
                  "cluster" : 5,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c5"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 417,
                  "cluster" : 13,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c13"
               },
               "id" : 4
            },
            {
               "entity" : {
                  "server_id" : 427,
                  "cluster" : 12,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c12"
               },
               "id" : 5
            },
            {
               "entity" : {
                  "server_id" : 428,
                  "cluster" : 15,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c15"
               },
               "id" : 6
            },
            {
               "entity" : {
                  "server_id" : 429,
                  "cluster" : 16,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c16"
               },
               "id" : 7
            },
            {
               "entity" : {
                  "server_id" : 430,
                  "cluster" : 19,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c19"
               },
               "id" : 8
            },
            {
               "entity" : {
                  "server_id" : 431,
                  "cluster" : 21,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c21"
               },
               "id" : 9
            },
            {
               "entity" : {
                  "server_id" : 436,
                  "cluster" : 27,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c27"
               },
               "id" : 10
            },
            {
               "entity" : {
                  "server_id" : 437,
                  "cluster" : 29,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c29"
               },
               "id" : 11
            },
            {
               "entity" : {
                  "server_id" : 438,
                  "cluster" : 30,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c30"
               },
               "id" : 12
            },
            {
               "entity" : {
                  "server_id" : 439,
                  "cluster" : 31,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c31"
               },
               "id" : 13
            },
            {
               "entity" : {
                  "server_id" : 440,
                  "cluster" : 33,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c33"
               },
               "id" : 14
            },
            {
               "entity" : {
                  "server_id" : 441,
                  "cluster" : 10,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c10"
               },
               "id" : 15
            },
            {
               "entity" : {
                  "server_id" : 442,
                  "cluster" : 11,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c11"
               },
               "id" : 16
            },
            {
               "entity" : {
                  "server_id" : 443,
                  "cluster" : 14,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c14"
               },
               "id" : 17
            },
            {
               "entity" : {
                  "server_id" : 444,
                  "cluster" : 18,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c18"
               },
               "id" : 18
            },
            {
               "entity" : {
                  "server_id" : 445,
                  "cluster" : 20,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c20"
               },
               "id" : 19
            },
            {
               "entity" : {
                  "server_id" : 446,
                  "cluster" : 24,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c24"
               },
               "id" : 20
            },
            {
               "entity" : {
                  "server_id" : 447,
                  "cluster" : 25,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c25"
               },
               "id" : 21
            },
            {
               "entity" : {
                  "server_id" : 448,
                  "cluster" : 26,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c26"
               },
               "id" : 22
            },
            {
               "entity" : {
                  "server_id" : 513,
                  "cluster" : 41,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c41"
               },
               "id" : 23
            }
         ]
      },
      {
         "id" : "vm6.c1",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 514,
                  "cluster" : 34,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c34"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 567,
                  "cluster" : 49,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c49"
               },
               "id" : 1
            }
         ]
      },
      {
         "id" : "vm7.c1",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 550,
                  "cluster" : 1,
                  "function" : "puppet",
                  "status" : "production",
                  "fullname" : "puppet1.c1"
               },
               "id" : 0
            }
         ]
      },
      {
         "id" : "vm8.c1",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 121,
                  "cluster" : 1,
                  "function" : "ca",
                  "status" : "dev",
                  "fullname" : "ca1.c1"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 333,
                  "cluster" : 1,
                  "function" : "nexenta",
                  "status" : "dev",
                  "fullname" : "nexenta1.c1"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 589,
                  "cluster" : 1,
                  "function" : "api",
                  "status" : "testing",
                  "fullname" : "api1.c1"
               },
               "id" : 2
            }
         ]
      },
      {
         "id" : "vm9.c1",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 566,
                  "cluster" : 1,
                  "function" : "puppet",
                  "status" : "production",
                  "fullname" : "puppet2.c1"
               },
               "id" : 0
            },
            {
               "entity" : {
                  "server_id" : 728,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "testing",
                  "fullname" : "db666.c1"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 729,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "testing",
                  "fullname" : "dbr666.c1"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 884,
                  "cluster" : 2,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh2.c2"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 886,
                  "cluster" : 4,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh1.c4"
               },
               "id" : 4
            }
         ]
      }
   ]
}

EOF;

    if ( isset($request->view) ) {
        //$json = new StdClass();
        $json = json_decode($view);

    }

    echo json_encode($json);
