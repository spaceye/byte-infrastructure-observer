<?php

    $cmmView = <<<EOF
{
   "status" : 100,
   "data" : [
      {
         "switches" : [
            {
               "entity" : {
                  "server_id" : 682,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch45.c1"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 683,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch46.c1"
               },
               "id" : 2
            }
         ],
         "server_id" : "900",
         "fullname" : "cmm1.c1",
         "parent" :
         {
            "type" : "rack",
            "fullname"  : "p11"
         },
         "entities" : [
            {
               "entity" : {
                  "server_id" : 684,
                  "cluster" : 34,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm2.c1"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 685,
                  "cluster" : 1,
                  "function" : "dbr-kapot",
                  "status" : "defect",
                  "fullname" : "dbr-kapot2.c1"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 686,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr55.c1"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 688,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr3.c1"
               },
               "id" : 5
            },
            {
               "entity" : {
                  "server_id" : 689,
                  "cluster" : 79,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c79"
               },
               "id" : 6
            },
            {
               "entity" : {
                  "server_id" : 690,
                  "cluster" : 80,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c80"
               },
               "id" : 7
            },
            {
               "entity" : {
                  "server_id" : 691,
                  "cluster" : 81,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c81"
               },
               "id" : 8
            },
            {
               "entity" : {
                  "server_id" : 692,
                  "cluster" : 84,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c84"
               },
               "id" : 9
            },
            {
               "entity" : {
                  "server_id" : 762,
                  "cluster" : 91,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c91"
               },
               "id" : 10
            },
            {
               "entity" : {
                  "server_id" : 693,
                  "cluster" : 78,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c78"
               },
               "id" : 11
            },
            {
               "entity" : {
                  "server_id" : 694,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db55.c1"
               },
               "id" : 12
            },
            {
               "entity" : {
                  "server_id" : 695,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db2.c1"
               },
               "id" : 13
            },
            {
               "entity" : {
                  "server_id" : 696,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db3.c1"
               },
               "id" : 14
            },
            {
               "entity" : {
                  "server_id" : 697,
                  "cluster" : 1,
                  "function" : "db-kapot",
                  "status" : "defect",
                  "fullname" : "db-kapot214.c1"
               },
               "id" : 15
            },
            {
               "entity" : {
                  "server_id" : 698,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr214.c1"
               },
               "id" : 16
            },
            {
               "entity" : {
                  "server_id" : 699,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db37.c1"
               },
               "id" : 17
            },
            {
               "entity" : {
                  "server_id" : 700,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr37.c1"
               },
               "id" : 18
            },
            {
               "entity" : {
                  "server_id" : 701,
                  "cluster" : 86,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c86"
               },
               "id" : 19
            },
            {
               "entity" : {
                  "server_id" : 741,
                  "cluster" : 88,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c88"
               },
               "id" : 20
            }
         ],
         "size" : 20
      },
      {
         "switches" : [
            {
               "entity" : {
                  "server_id" : 651,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch39.c101"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 652,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch40.c101"
               },
               "id" : 2
            }
         ],
         "fullname" : "cmm1.c101",
         "parent_id" : "h02",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 586,
                  "cluster" : 57,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c57"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 592,
                  "cluster" : 58,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c58"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 620,
                  "cluster" : 63,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c63"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 614,
                  "cluster" : 61,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c61"
               },
               "id" : 4
            },
            {
               "entity" : {
                  "server_id" : 615,
                  "cluster" : 62,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c62"
               },
               "id" : 5
            },
            {
               "entity" : {
                  "server_id" : 616,
                  "cluster" : 70,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c70"
               },
               "id" : 6
            },
            {
               "entity" : {
                  "server_id" : 635,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db36.c101"
               },
               "id" : 7
            },
            {
               "entity" : {
                  "server_id" : 618,
                  "cluster" : 71,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c71"
               },
               "id" : 8
            },
            {
               "entity" : {
                  "server_id" : 619,
                  "cluster" : 72,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c72"
               },
               "id" : 9
            },
            {
               "entity" : {
                  "server_id" : 665,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr36.c101"
               },
               "id" : 10
            },
            {
               "entity" : {
                  "server_id" : 595,
                  "cluster" : 59,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c59"
               },
               "id" : 11
            },
            {
               "entity" : {
                  "server_id" : 596,
                  "cluster" : 60,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c60"
               },
               "id" : 12
            },
            {
               "entity" : {
                  "server_id" : 627,
                  "cluster" : 65,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c65"
               },
               "id" : 13
            },
            {
               "entity" : {
                  "server_id" : 621,
                  "cluster" : 67,
                  "function" : "app",
                  "status" : "testing",
                  "fullname" : "app1.c67"
               },
               "id" : 14
            },
            {
               "entity" : {
                  "server_id" : 622,
                  "cluster" : 64,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c64"
               },
               "id" : 15
            },
            {
               "entity" : {
                  "server_id" : 623,
                  "cluster" : 73,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c73"
               },
               "id" : 16
            },
            {
               "entity" : {
                  "server_id" : 645,
                  "cluster" : 74,
                  "function" : "fpm",
                  "status" : "production",
                  "fullname" : "fpm1.c74"
               },
               "id" : 17
            },
            {
               "entity" : {
                  "server_id" : 625,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db35.c101"
               },
               "id" : 18
            },
            {
               "entity" : {
                  "server_id" : 626,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr35.c101"
               },
               "id" : 19
            },
            {
               "entity" : {
                  "server_id" : 666,
                  "cluster" : 75,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c75"
               },
               "id" : 20
            }
         ],
         "size" : 20
      },
      {
         "switches" : [
            {
               "entity" : {
                  "server_id" : 834,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch51.c1"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 835,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch52.c1"
               },
               "id" : 2
            }
         ],
         "id" : "cmm2.c1",
         "parent_id" : "i17",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 772,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web36.c1"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 773,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web37.c1"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 774,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web38.c1"
               },
               "id" : 4
            },
            {
               "entity" : {
                  "server_id" : 775,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web39.c1"
               },
               "id" : 5
            },
            {
               "entity" : {
                  "server_id" : 776,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing776.c1"
               },
               "id" : 6
            },
            {
               "entity" : {
                  "server_id" : 777,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db214.c1"
               },
               "id" : 7
            },
            {
               "entity" : {
                  "server_id" : 778,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr215.c1"
               },
               "id" : 8
            },
            {
               "entity" : {
                  "server_id" : 779,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr2.c1"
               },
               "id" : 9
            },
            {
               "entity" : {
                  "server_id" : 780,
                  "cluster" : 1,
                  "function" : "db-new",
                  "status" : "testing",
                  "fullname" : "db-new3.c1"
               },
               "id" : 10
            },
            {
               "entity" : {
                  "server_id" : 781,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing781.c1"
               },
               "id" : 11
            },
            {
               "entity" : {
                  "server_id" : 782,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing782.c1"
               },
               "id" : 12
            },
            {
               "entity" : {
                  "server_id" : 783,
                  "cluster" : 1,
                  "function" : "magvm",
                  "status" : "testing",
                  "fullname" : "magvm1.c1"
               },
               "id" : 13
            },
            {
               "entity" : {
                  "server_id" : 784,
                  "cluster" : 1,
                  "function" : "magvm",
                  "status" : "testing",
                  "fullname" : "magvm2.c1"
               },
               "id" : 14
            },
            {
               "entity" : {
                  "server_id" : 785,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing785.c1"
               },
               "id" : 15
            },
            {
               "entity" : {
                  "server_id" : 786,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing786.c1"
               },
               "id" : 16
            },
            {
               "entity" : {
                  "server_id" : 787,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db56.c1"
               },
               "id" : 17
            },
            {
               "entity" : {
                  "server_id" : 788,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db215.c1"
               },
               "id" : 18
            },
            {
               "entity" : {
                  "server_id" : 789,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing789.c1"
               },
               "id" : 19
            },
            {
               "entity" : {
                  "server_id" : 790,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr56.c1"
               },
               "id" : 20
            }
         ],
         "size" : 20
      },
      {
         "switches" : [
            {
               "entity" : {
                  "server_id" : 654,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch42.c101"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 653,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch41.c101"
               },
               "id" : 2
            }
         ],
         "id" : "cmm2.c101",
         "parent_id" : "h03",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 628,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web8.c36"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 710,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr203.c101"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 745,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr216.c101"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 631,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web10.c36"
               },
               "id" : 4
            },
            {
               "entity" : {
                  "server_id" : 632,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web11.c36"
               },
               "id" : 5
            },
            {
               "entity" : {
                  "server_id" : 633,
                  "cluster" : 66,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c66"
               },
               "id" : 6
            },
            {
               "entity" : {
                  "server_id" : 634,
                  "cluster" : 68,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c68"
               },
               "id" : 7
            },
            {
               "entity" : {
                  "server_id" : 674,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr4.c101"
               },
               "id" : 8
            },
            {
               "entity" : {
                  "server_id" : 636,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web12.c36"
               },
               "id" : 9
            },
            {
               "entity" : {
                  "server_id" : 637,
                  "cluster" : 69,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c69"
               },
               "id" : 10
            },
            {
               "entity" : {
                  "server_id" : 638,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web13.c36"
               },
               "id" : 11
            },
            {
               "entity" : {
                  "server_id" : 711,
                  "cluster" : 83,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c83"
               },
               "id" : 12
            },
            {
               "entity" : {
                  "server_id" : 748,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr217.c101"
               },
               "id" : 13
            },
            {
               "entity" : {
                  "server_id" : 641,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web16.c36"
               },
               "id" : 14
            },
            {
               "entity" : {
                  "server_id" : 642,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web17.c36"
               },
               "id" : 15
            },
            {
               "entity" : {
                  "server_id" : 643,
                  "cluster" : 53,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app3.c53"
               },
               "id" : 16
            },
            {
               "entity" : {
                  "server_id" : 644,
                  "cluster" : 82,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c82"
               },
               "id" : 17
            },
            {
               "entity" : {
                  "server_id" : 675,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db56.c101"
               },
               "id" : 18
            },
            {
               "entity" : {
                  "server_id" : 646,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web18.c36"
               },
               "id" : 19
            },
            {
               "entity" : {
                  "server_id" : 647,
                  "cluster" : 53,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app2.c53"
               },
               "id" : 20
            }
         ],
         "size" : 20
      },
      {
         "switches" : [
            {
               "entity" : {
                  "server_id" : 836,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch53.c1"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 837,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch54.c1"
               },
               "id" : 2
            }
         ],
         "id" : "cmm3.c1",
         "parent_id" : "i17",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 791,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web31.c1"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 792,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web32.c1"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 793,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web33.c1"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 794,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web34.c1"
               },
               "id" : 4
            },
            {
               "entity" : {
                  "server_id" : 795,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web35.c1"
               },
               "id" : 5
            },
            {
               "entity" : {
                  "server_id" : 796,
                  "cluster" : 102,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c102"
               },
               "id" : 6
            },
            {
               "entity" : {
                  "server_id" : 810,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing810.c1"
               },
               "id" : 7
            },
            {
               "entity" : {
                  "server_id" : 797,
                  "cluster" : 102,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app2.c102"
               },
               "id" : 8
            },
            {
               "entity" : {
                  "server_id" : 798,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing798.c1"
               },
               "id" : 9
            },
            {
               "entity" : {
                  "server_id" : 799,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing799.c1"
               },
               "id" : 10
            },
            {
               "entity" : {
                  "server_id" : 800,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing800.c1"
               },
               "id" : 11
            },
            {
               "entity" : {
                  "server_id" : 801,
                  "cluster" : 103,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c103"
               },
               "id" : 12
            },
            {
               "entity" : {
                  "server_id" : 802,
                  "cluster" : 103,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app2.c103"
               },
               "id" : 13
            },
            {
               "entity" : {
                  "server_id" : 803,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing803.c1"
               },
               "id" : 14
            },
            {
               "entity" : {
                  "server_id" : 804,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing804.c1"
               },
               "id" : 15
            },
            {
               "entity" : {
                  "server_id" : 805,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing805.c1"
               },
               "id" : 16
            },
            {
               "entity" : {
                  "server_id" : 806,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing806.c1"
               },
               "id" : 17
            },
            {
               "entity" : {
                  "server_id" : 807,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing807.c1"
               },
               "id" : 18
            },
            {
               "entity" : {
                  "server_id" : 808,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing808.c1"
               },
               "id" : 19
            },
            {
               "entity" : {
                  "server_id" : 809,
                  "cluster" : 1,
                  "function" : "testing",
                  "status" : "testing",
                  "fullname" : "testing809.c1"
               },
               "id" : 20
            }
         ],
         "size" : 20
      },
      {
         "switches" : [
            {
               "entity" : {
                  "server_id" : 712,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch47.c101"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 713,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch48.c101"
               },
               "id" : 2
            }
         ],
         "id" : "cmm3.c101",
         "parent_id" : "h01",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 702,
                  "cluster" : 76,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c76"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 704,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db4.c101"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 706,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr56.c101"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 708,
                  "cluster" : 77,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c77"
               },
               "id" : 4
            },
            {
               "entity" : {
                  "server_id" : 629,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web9.c36"
               },
               "id" : 5
            },
            {
               "entity" : {
                  "server_id" : 742,
                  "cluster" : 87,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c87"
               },
               "id" : 6
            },
            {
               "entity" : {
                  "server_id" : 743,
                  "cluster" : 89,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c89"
               },
               "id" : 7
            },
            {
               "entity" : {
                  "server_id" : 744,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db216.c101"
               },
               "id" : 8
            },
            {
               "entity" : {
                  "server_id" : 746,
                  "cluster" : 90,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c90"
               },
               "id" : 9
            },
            {
               "entity" : {
                  "server_id" : 753,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr204.c101"
               },
               "id" : 10
            },
            {
               "entity" : {
                  "server_id" : 703,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db201.c101"
               },
               "id" : 11
            },
            {
               "entity" : {
                  "server_id" : 705,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr201.c101"
               },
               "id" : 12
            },
            {
               "entity" : {
                  "server_id" : 707,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "offline",
                  "fullname" : "dbr6.c101"
               },
               "id" : 13
            },
            {
               "entity" : {
                  "server_id" : 709,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db203.c101"
               },
               "id" : 14
            },
            {
               "entity" : {
                  "server_id" : 639,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web14.c36"
               },
               "id" : 15
            },
            {
               "entity" : {
                  "server_id" : 738,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db215.c101"
               },
               "id" : 16
            },
            {
               "entity" : {
                  "server_id" : 739,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr215.c101"
               },
               "id" : 17
            },
            {
               "entity" : {
                  "server_id" : 740,
                  "cluster" : 85,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c85"
               },
               "id" : 18
            },
            {
               "entity" : {
                  "server_id" : 754,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db204.c101"
               },
               "id" : 19
            },
            {
               "entity" : {
                  "server_id" : 747,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db217.c101"
               },
               "id" : 20
            }
         ],
         "size" : 20
      },
      {
         "switches" : [
            {
               "entity" : {
                  "server_id" : 838,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch55.c1"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 839,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch56.c1"
               },
               "id" : 2
            }
         ],
         "id" : "cmm4.c1",
         "parent_id" : "g17",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 830,
                  "cluster" : 5,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c5"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 828,
                  "cluster" : 10,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c10"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 827,
                  "cluster" : 11,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c11"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 829,
                  "cluster" : 12,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c12"
               },
               "id" : 4
            },
            {
               "entity" : {
                  "server_id" : 823,
                  "cluster" : 13,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c13"
               },
               "id" : 5
            },
            {
               "entity" : {
                  "server_id" : 822,
                  "cluster" : 14,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c14"
               },
               "id" : 6
            },
            {
               "entity" : {
                  "server_id" : 824,
                  "cluster" : 15,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c15"
               },
               "id" : 7
            },
            {
               "entity" : {
                  "server_id" : 826,
                  "cluster" : 16,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c16"
               },
               "id" : 8
            },
            {
               "entity" : {
                  "server_id" : 825,
                  "cluster" : 17,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c17"
               },
               "id" : 9
            },
            {
               "entity" : {
                  "server_id" : 819,
                  "cluster" : 18,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c18"
               },
               "id" : 10
            },
            {
               "entity" : {
                  "server_id" : 820,
                  "cluster" : 19,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c19"
               },
               "id" : 11
            },
            {
               "entity" : {
                  "server_id" : 821,
                  "cluster" : 20,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c20"
               },
               "id" : 12
            },
            {
               "entity" : {
                  "server_id" : 818,
                  "cluster" : 21,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c21"
               },
               "id" : 13
            },
            {
               "entity" : {
                  "server_id" : 817,
                  "cluster" : 23,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c23"
               },
               "id" : 14
            },
            {
               "entity" : {
                  "server_id" : 811,
                  "cluster" : 3,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c3"
               },
               "id" : 15
            },
            {
               "entity" : {
                  "server_id" : 815,
                  "cluster" : 24,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c24"
               },
               "id" : 16
            },
            {
               "entity" : {
                  "server_id" : 812,
                  "cluster" : 25,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c25"
               },
               "id" : 17
            },
            {
               "entity" : {
                  "server_id" : 816,
                  "cluster" : 26,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c26"
               },
               "id" : 18
            },
            {
               "entity" : {
                  "server_id" : 813,
                  "cluster" : 27,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c27"
               },
               "id" : 19
            },
            {
               "entity" : {
                  "server_id" : 814,
                  "cluster" : 28,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c28"
               },
               "id" : 20
            }
         ],
         "size" : 20
      },
      {
         "switches" : [
            {
               "entity" : {
                  "server_id" : 751,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch49.c101"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 752,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch50.c101"
               },
               "id" : 2
            }
         ],
         "id" : "cmm4.c101",
         "parent_id" : "h02",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 755,
                  "cluster" : 101,
                  "function" : "magvm",
                  "status" : "testing",
                  "fullname" : "magvm1.c101"
               },
               "id" : 1
            },
            {
               "entity" : {
                  "server_id" : 756,
                  "cluster" : 101,
                  "function" : "magvm",
                  "status" : "testing",
                  "fullname" : "magvm2.c101"
               },
               "id" : 2
            },
            {
               "entity" : {
                  "server_id" : 870,
                  "cluster" : 101,
                  "function" : "magvm",
                  "status" : "testing",
                  "fullname" : "magvm3.c101"
               },
               "id" : 3
            },
            {
               "entity" : {
                  "server_id" : 871,
                  "cluster" : 101,
                  "function" : "magvm",
                  "status" : "testing",
                  "fullname" : "magvm4.c101"
               },
               "id" : 4
            },
            {
               "entity" : {
                  "server_id" : 845,
                  "cluster" : 96,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c96"
               },
               "id" : 5
            },
            {
               "entity" : {
                  "server_id" : 766,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr55.c101"
               },
               "id" : 6
            },
            {
               "entity" : {
                  "server_id" : 765,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db55.c101"
               },
               "id" : 7
            },
            {
               "entity" : {
                  "server_id" : 873,
                  "cluster" : 98,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c98"
               },
               "id" : 8
            },
            {
               "entity" : {
                  "server_id" : 874,
                  "cluster" : 98,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app2.c98"
               },
               "id" : 9
            },
            {
               "entity" : {
                  "server_id" : 866,
                  "cluster" : 97,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web1.c97"
               },
               "id" : 11
            },
            {
               "entity" : {
                  "server_id" : 867,
                  "cluster" : 97,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web2.c97"
               },
               "id" : 12
            },
            {
               "entity" : {
                  "server_id" : 868,
                  "cluster" : 97,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web3.c97"
               },
               "id" : 13
            }
         ],
         "size" : 20
      }
   ]
}


EOF;

    if ( isset($request->view) ) {
        //$json = new StdClass();
        $json = json_decode($cmmView);
        echo json_encode($json);
    }
