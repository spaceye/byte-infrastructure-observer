<?php

    $view = <<<EOF
{
   "status" : 100,
   "data" : [
      {
         "fullname" : "g01",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 370,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web16.c2"
               },
               "id" : 9,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 371,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web8.c2"
               },
               "id" : 10,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 372,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db30.c1"
               },
               "id" : 11,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 373,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr30.c1"
               },
               "id" : 13,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 374,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db203.c1"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 395,
                  "cluster" : 1,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm5.c1"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 366,
                  "cluster" : 1,
                  "function" : "loghost",
                  "status" : "production",
                  "fullname" : "loghost3.c1"
               },
               "id" : 16,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 365,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr212.c1"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 238,
                  "cluster" : 1,
                  "function" : "mail",
                  "status" : "testing",
                  "fullname" : "mail3.c1"
               },
               "id" : 18,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 239,
                  "cluster" : 1,
                  "function" : "mail",
                  "status" : "testing",
                  "fullname" : "mail2.c1"
               },
               "id" : 20,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 236,
                  "cluster" : 1,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh2.c1"
               },
               "id" : 21,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 392,
                  "cluster" : 1,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm7.c1"
               },
               "id" : 22,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 394,
                  "cluster" : 1,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm8.c1"
               },
               "id" : 23,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 376,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch29.c1"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 377,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch30.c1"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "g02",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 350,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db201.c1"
               },
               "id" : 6,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 352,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db202.c1"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 353,
                  "cluster" : 1,
                  "function" : "mxfilter",
                  "status" : "production",
                  "fullname" : "mxfilter1.c1"
               },
               "id" : 9,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 362,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db29.c1"
               },
               "id" : 20,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 364,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db212.c1"
               },
               "id" : 22,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 508,
                  "cluster" : 42,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c42"
               },
               "id" : 23,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 384,
                  "cluster" : 1,
                  "function" : "dae",
                  "status" : "production",
                  "fullname" : "dae6.c1"
               },
               "id" : 35,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 383,
                  "cluster" : 1,
                  "function" : "file",
                  "status" : "production",
                  "fullname" : "file4.c1"
               },
               "id" : 37,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 379,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch32.c1"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 378,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch31.c1"
               },
               "id" : 55,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "g03",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 337,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db26.c1"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 546,
                  "cluster" : 49,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c49"
               },
               "id" : 9,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 407,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr211.c1"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 526,
                  "cluster" : 1,
                  "function" : "ssh",
                  "status" : "testing",
                  "fullname" : "ssh1.c1"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 335,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr204.c1"
               },
               "id" : 22,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 673,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch44.c1"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 672,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch43.c1"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "g17",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 833,
                  "cluster" : 1,
                  "function" : "cmm",
                  "status" : "testing",
                  "fullname" : "cmm4.c1"
               },
               "id" : 42,
               "size" : 7
            }
         ],
         "size" : 55
      },
      {
         "id" : "h01",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 420,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web3.c36"
               },
               "id" : 36,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 421,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web4.c36"
               },
               "id" : 37,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 677,
                  "cluster" : 101,
                  "function" : "cmm",
                  "status" : "production",
                  "fullname" : "cmm3.c101"
               },
               "id" : 42,
               "size" : 7
            }
         ],
         "size" : 55
      },
      {
         "id" : "h02",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 750,
                  "cluster" : 101,
                  "function" : "cmm",
                  "status" : "production",
                  "fullname" : "cmm4.c101"
               },
               "id" : 30,
               "size" : 7
            },
            {
               "entity" : {
                  "server_id" : 649,
                  "cluster" : 101,
                  "function" : "cmm",
                  "status" : "production",
                  "fullname" : "cmm1.c101"
               },
               "id" : 42,
               "size" : 7
            }
         ],
         "size" : 55
      },
      {
         "id" : "h03",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 650,
                  "cluster" : 101,
                  "function" : "cmm",
                  "status" : "production",
                  "fullname" : "cmm2.c101"
               },
               "id" : 42,
               "size" : 7
            }
         ],
         "size" : 55
      },
      {
         "id" : "h04",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 563,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr2.c101"
               },
               "id" : 6,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 541,
                  "cluster" : 48,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c48"
               },
               "id" : 7,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 418,
                  "cluster" : 101,
                  "function" : "nagios",
                  "status" : "production",
                  "fullname" : "nagios2.c101"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 419,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web2.c36"
               },
               "id" : 9,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 553,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web6.c36"
               },
               "id" : 10,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 554,
                  "cluster" : 101,
                  "function" : "support",
                  "status" : "offline",
                  "fullname" : "support1.c101"
               },
               "id" : 11,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 557,
                  "cluster" : 53,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c53"
               },
               "id" : 13,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 558,
                  "cluster" : 54,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c54"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 559,
                  "cluster" : 55,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c55"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 556,
                  "cluster" : 51,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c51"
               },
               "id" : 16,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 537,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "dev",
                  "fullname" : "db219.c101"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 538,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr202.c101"
               },
               "id" : 18,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 284,
                  "cluster" : 101,
                  "function" : "lb",
                  "status" : "production",
                  "fullname" : "lb2.c101"
               },
               "id" : 20,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 380,
                  "cluster" : 101,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm1.c101"
               },
               "id" : 21,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 283,
                  "cluster" : 101,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm4.c101"
               },
               "id" : 22,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 555,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db3.c101"
               },
               "id" : 24,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 552,
                  "cluster" : 101,
                  "function" : "spare-adv-db",
                  "status" : "testing",
                  "fullname" : "spare-adv-db1.c101"
               },
               "id" : 26,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 382,
                  "cluster" : 101,
                  "function" : "dae",
                  "status" : "production",
                  "fullname" : "dae4.c101"
               },
               "id" : 28,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 611,
                  "cluster" : 101,
                  "function" : "dae",
                  "status" : "production",
                  "fullname" : "dae3.c101"
               },
               "id" : 30,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 381,
                  "cluster" : 101,
                  "function" : "file",
                  "status" : "production",
                  "fullname" : "file3.c101"
               },
               "id" : 32,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 461,
                  "cluster" : 101,
                  "function" : "dae",
                  "status" : "production",
                  "fullname" : "dae2.c101"
               },
               "id" : 35,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 457,
                  "cluster" : 101,
                  "function" : "file",
                  "status" : "production",
                  "fullname" : "file2.c101"
               },
               "id" : 37,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 464,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch33.c101"
               },
               "id" : 42,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 466,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch35.c101"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 467,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch36.c101"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "h05",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 485,
                  "cluster" : 101,
                  "function" : "spare-adv-dbr",
                  "status" : "defect",
                  "fullname" : "spare-adv-dbr1.c101"
               },
               "id" : 6,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 565,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr3.c101"
               },
               "id" : 7,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 200,
                  "cluster" : 101,
                  "function" : "loghost",
                  "status" : "production",
                  "fullname" : "loghost2.c101"
               },
               "id" : 8,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 422,
                  "cluster" : 36,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web5.c36"
               },
               "id" : 10,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 423,
                  "cluster" : 101,
                  "function" : "loghost",
                  "status" : "dev",
                  "fullname" : "loghost1.c101"
               },
               "id" : 11,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 424,
                  "cluster" : 101,
                  "function" : "office",
                  "status" : "production",
                  "fullname" : "office1.c101"
               },
               "id" : 13,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 425,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr1.c101"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 426,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db1.c101"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 484,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db2.c101"
               },
               "id" : 16,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 535,
                  "cluster" : 101,
                  "function" : "dbr",
                  "status" : "dev",
                  "fullname" : "dbr219.c101"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 536,
                  "cluster" : 101,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db202.c101"
               },
               "id" : 18,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 285,
                  "cluster" : 101,
                  "function" : "lb",
                  "status" : "production",
                  "fullname" : "lb1.c101"
               },
               "id" : 20,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 168,
                  "cluster" : 101,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm3.c101"
               },
               "id" : 21,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 32,
                  "cluster" : 101,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm2.c101"
               },
               "id" : 23,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 463,
                  "cluster" : 101,
                  "function" : "dae",
                  "status" : "testing",
                  "fullname" : "dae5.c101"
               },
               "id" : 29,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 726,
                  "cluster" : 101,
                  "function" : "file",
                  "status" : "production",
                  "fullname" : "file8.c101"
               },
               "id" : 31,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 385,
                  "cluster" : 101,
                  "function" : "dae",
                  "status" : "production",
                  "fullname" : "dae1.c101"
               },
               "id" : 35,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 276,
                  "cluster" : 101,
                  "function" : "file",
                  "status" : "production",
                  "fullname" : "file1.c101"
               },
               "id" : 37,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 465,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch34.c101"
               },
               "id" : 42,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 468,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch37.c101"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 469,
                  "cluster" : 101,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch38.c101"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "h13",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 336,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr25.c1"
               },
               "id" : 6,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 404,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr208.c1"
               },
               "id" : 7,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 405,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr209.c1"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 406,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr210.c1"
               },
               "id" : 9,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 433,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr31.c1"
               },
               "id" : 10,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 498,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr33.c1"
               },
               "id" : 11,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 351,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr201.c1"
               },
               "id" : 13,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 357,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web9.c2"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 358,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr202.c1"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 363,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr29.c1"
               },
               "id" : 16,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 121,
                  "cluster" : 1,
                  "function" : "ca",
                  "status" : "offline",
                  "fullname" : "ca1.c1"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 334,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db23.c1"
               },
               "id" : 18,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "h14",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 210,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db19.c1"
               },
               "id" : 6,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 291,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db18.c1"
               },
               "id" : 7,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 293,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db17.c1"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 562,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db10.c1"
               },
               "id" : 9,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 356,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web28.c1"
               },
               "id" : 10,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 355,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web27.c1"
               },
               "id" : 11,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 354,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web26.c1"
               },
               "id" : 13,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 267,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web24.c1"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 266,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web23.c1"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 265,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web22.c1"
               },
               "id" : 16,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 93,
                  "cluster" : 1,
                  "function" : "toy-cipri",
                  "status" : "dev",
                  "fullname" : "toy-cipri1.c1"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 59,
                  "cluster" : 1,
                  "function" : "toy",
                  "status" : "dev",
                  "fullname" : "toy4.c1"
               },
               "id" : 18,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 58,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr99.c1"
               },
               "id" : 20,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "h15",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 286,
                  "cluster" : 30,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c30"
               },
               "id" : 6,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 525,
                  "cluster" : 29,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c29"
               },
               "id" : 7,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 348,
                  "cluster" : 37,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c37"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 347,
                  "cluster" : 35,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c35"
               },
               "id" : 9,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 209,
                  "cluster" : 33,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c33"
               },
               "id" : 10,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 208,
                  "cluster" : 32,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c32"
               },
               "id" : 11,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 287,
                  "cluster" : 31,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c31"
               },
               "id" : 13,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 206,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr19.c1"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 294,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr18.c1"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 292,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr17.c1"
               },
               "id" : 16,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 564,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr10.c1"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 237,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr20.c1"
               },
               "id" : 18,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 228,
                  "cluster" : 1,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm2.c1"
               },
               "id" : 20,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 211,
                  "cluster" : 1,
                  "function" : "loghost",
                  "status" : "production",
                  "fullname" : "loghost2.c1"
               },
               "id" : 21,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 359,
                  "cluster" : 40,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c40"
               },
               "id" : 22,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 204,
                  "cluster" : 1,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm1.c1"
               },
               "id" : 23,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 230,
                  "cluster" : 1,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm3.c1"
               },
               "id" : 24,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "i17",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 832,
                  "cluster" : 1,
                  "function" : "cmm",
                  "status" : "testing",
                  "fullname" : "cmm3.c1"
               },
               "id" : 30,
               "size" : 7
            },
            {
               "entity" : {
                  "server_id" : 831,
                  "cluster" : 1,
                  "function" : "cmm",
                  "status" : "testing",
                  "fullname" : "cmm2.c1"
               },
               "id" : 42,
               "size" : 7
            }
         ],
         "size" : 55
      },
      {
         "id" : "o11",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 341,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr26.c1"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 150,
                  "cluster" : 1,
                  "function" : "office",
                  "status" : "production",
                  "fullname" : "office4.c1"
               },
               "id" : 11,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 153,
                  "cluster" : 4,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web6.c4"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 14,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web2.c1"
               },
               "id" : 16,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 156,
                  "cluster" : 4,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web3.c4"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 516,
                  "cluster" : 34,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app3.c34"
               },
               "id" : 19,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 515,
                  "cluster" : 34,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app2.c34"
               },
               "id" : 21,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 173,
                  "cluster" : 8,
                  "function" : "rails",
                  "status" : "production",
                  "fullname" : "rails1.c8"
               },
               "id" : 23,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 176,
                  "cluster" : 8,
                  "function" : "rails",
                  "status" : "production",
                  "fullname" : "rails2.c8"
               },
               "id" : 24,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 282,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web2.c2"
               },
               "id" : 25,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 174,
                  "cluster" : 8,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db1.c8"
               },
               "id" : 34,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 610,
                  "cluster" : 1,
                  "function" : "dae",
                  "status" : "production",
                  "fullname" : "dae9.c1"
               },
               "id" : 37,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 604,
                  "cluster" : 1,
                  "function" : "file",
                  "status" : "testing",
                  "fullname" : "file2.c1"
               },
               "id" : 39,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 144,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch21.c1"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 145,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch22.c1"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "o12",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 260,
                  "cluster" : 4,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web9.c4"
               },
               "id" : 7,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 262,
                  "cluster" : 4,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web10.c4"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 269,
                  "cluster" : 1,
                  "function" : "squid",
                  "status" : "production",
                  "fullname" : "squid2.c1"
               },
               "id" : 11,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 270,
                  "cluster" : 1,
                  "function" : "mail-fetch",
                  "status" : "testing",
                  "fullname" : "mail-fetch5.c1"
               },
               "id" : 13,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 271,
                  "cluster" : 1,
                  "function" : "squid",
                  "status" : "production",
                  "fullname" : "squid4.c1"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 369,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web15.c2"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 268,
                  "cluster" : 1,
                  "function" : "squid",
                  "status" : "production",
                  "fullname" : "squid1.c1"
               },
               "id" : 16,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 368,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web14.c2"
               },
               "id" : 18,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 261,
                  "cluster" : 1,
                  "function" : "squid",
                  "status" : "production",
                  "fullname" : "squid3.c1"
               },
               "id" : 20,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 259,
                  "cluster" : 4,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web8.c4"
               },
               "id" : 21,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 432,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db31.c1"
               },
               "id" : 23,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 367,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web13.c2"
               },
               "id" : 24,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 253,
                  "cluster" : 1,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm9.c1"
               },
               "id" : 25,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 340,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr23.c1"
               },
               "id" : 29,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 609,
                  "cluster" : 1,
                  "function" : "dae",
                  "status" : "production",
                  "fullname" : "dae8.c1"
               },
               "id" : 34,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 603,
                  "cluster" : 1,
                  "function" : "file",
                  "status" : "testing",
                  "fullname" : "file1.c1"
               },
               "id" : 36,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 462,
                  "cluster" : 1,
                  "function" : "dae",
                  "status" : "production",
                  "fullname" : "dae7.c1"
               },
               "id" : 38,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 456,
                  "cluster" : 1,
                  "function" : "file",
                  "status" : "production",
                  "fullname" : "file5.c1"
               },
               "id" : 40,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 273,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch25.c1"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 274,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch26.c1"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "p06",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 449,
                  "cluster" : 1,
                  "function" : "vm",
                  "status" : "production",
                  "fullname" : "vm6.c1"
               },
               "id" : 9,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 345,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db27.c1"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 94,
                  "cluster" : 1,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web1.c1"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 92,
                  "cluster" : 1,
                  "function" : "dns",
                  "status" : "production",
                  "fullname" : "dns2.c1"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 510,
                  "cluster" : 44,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c44"
               },
               "id" : 21,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 509,
                  "cluster" : 43,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c43"
               },
               "id" : 22,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 158,
                  "cluster" : 4,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web1.c4"
               },
               "id" : 23,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 157,
                  "cluster" : 4,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web2.c4"
               },
               "id" : 24,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 31,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db99.c1"
               },
               "id" : 25,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 544,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr213.c1"
               },
               "id" : 28,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 545,
                  "cluster" : 1,
                  "function" : "spare-basic-dbr",
                  "status" : "dev",
                  "fullname" : "spare-basic-dbr2.c1"
               },
               "id" : 29,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 8,
                  "cluster" : 1,
                  "function" : "office",
                  "status" : "offline",
                  "fullname" : "office2.c1"
               },
               "id" : 34,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 305,
                  "cluster" : 1,
                  "function" : "dae",
                  "status" : "production",
                  "fullname" : "dae3.c1"
               },
               "id" : 36,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 306,
                  "cluster" : 1,
                  "function" : "dae",
                  "status" : "production",
                  "fullname" : "dae4.c1"
               },
               "id" : 38,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 295,
                  "cluster" : 1,
                  "function" : "file",
                  "status" : "production",
                  "fullname" : "file8.c1"
               },
               "id" : 40,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 290,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch28.c1"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 289,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch27.c1"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "p11",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 129,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch18.c1"
               },
               "id" : 0,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 128,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch17.c1"
               },
               "id" : 1,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 676,
                  "cluster" : 1,
                  "function" : "cmm",
                  "status" : "production",
                  "fullname" : "cmm1.c1"
               },
               "id" : 42,
               "size" : 7
            }
         ],
         "size" : 55
      },
      {
         "id" : "p12",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 391,
                  "cluster" : 1,
                  "function" : "flow",
                  "status" : "dev",
                  "fullname" : "flow1.c1"
               },
               "id" : 6,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 390,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web4.c2"
               },
               "id" : 7,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 117,
                  "cluster" : 1,
                  "function" : "xen",
                  "status" : "production",
                  "fullname" : "xen4.c1"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 118,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web11.c2"
               },
               "id" : 9,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 414,
                  "cluster" : 38,
                  "function" : "fpm",
                  "status" : "production",
                  "fullname" : "fpm1.c38"
               },
               "id" : 12,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 27,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web10.c2"
               },
               "id" : 13,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 50,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web12.c2"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 346,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr27.c1"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 435,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr34.c1"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 434,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db32.c1"
               },
               "id" : 18,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 280,
                  "cluster" : 1,
                  "function" : "lb",
                  "status" : "production",
                  "fullname" : "lb6.c1"
               },
               "id" : 20,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 534,
                  "cluster" : 47,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c47"
               },
               "id" : 25,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 281,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web3.c2"
               },
               "id" : 26,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 264,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web1.c2"
               },
               "id" : 27,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 3,
                  "cluster" : 1,
                  "function" : "console",
                  "status" : "production",
                  "fullname" : "console2.c1"
               },
               "id" : 28,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 272,
                  "cluster" : 1,
                  "function" : "mail-fetch",
                  "status" : "offline",
                  "fullname" : "mail-fetch6.c1"
               },
               "id" : 31,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 303,
                  "cluster" : 7,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr1.c7"
               },
               "id" : 34,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 263,
                  "cluster" : 2,
                  "function" : "web",
                  "status" : "offline",
                  "fullname" : "web6.c2"
               },
               "id" : 37,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 12,
                  "cluster" : 1,
                  "function" : "office",
                  "status" : "production",
                  "fullname" : "office3.c1"
               },
               "id" : 40,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 103,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch10.c1"
               },
               "id" : 42,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 115,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch13.c1"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 116,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch14.c1"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "p13",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 410,
                  "cluster" : 39,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c39"
               },
               "id" : 6,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 44,
                  "cluster" : 1,
                  "function" : "toy-vincent",
                  "status" : "dev",
                  "fullname" : "toy-vincent1.c1"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 402,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db210.c1"
               },
               "id" : 9,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 307,
                  "cluster" : 7,
                  "function" : "rails",
                  "status" : "production",
                  "fullname" : "rails2.c7"
               },
               "id" : 10,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 403,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db211.c1"
               },
               "id" : 11,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 304,
                  "cluster" : 7,
                  "function" : "rails",
                  "status" : "production",
                  "fullname" : "rails1.c7"
               },
               "id" : 12,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 338,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db204.c1"
               },
               "id" : 13,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 33,
                  "cluster" : 1,
                  "function" : "service",
                  "status" : "production",
                  "fullname" : "service1.c1"
               },
               "id" : 14,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 235,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db20.c1"
               },
               "id" : 15,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 409,
                  "cluster" : 41,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c41"
               },
               "id" : 16,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 155,
                  "cluster" : 4,
                  "function" : "web",
                  "status" : "production",
                  "fullname" : "web4.c4"
               },
               "id" : 17,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 279,
                  "cluster" : 1,
                  "function" : "lb",
                  "status" : "production",
                  "fullname" : "lb5.c1"
               },
               "id" : 20,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 375,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr203.c1"
               },
               "id" : 21,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 9,
                  "cluster" : 4,
                  "function" : "ssh",
                  "status" : "production",
                  "fullname" : "ssh2.c4"
               },
               "id" : 22,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 70,
                  "cluster" : 6,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr1.c6"
               },
               "id" : 25,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 511,
                  "cluster" : 45,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c45"
               },
               "id" : 26,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 497,
                  "cluster" : 1,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr32.c1"
               },
               "id" : 27,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 608,
                  "cluster" : 50,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr1.c50"
               },
               "id" : 28,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 607,
                  "cluster" : 50,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db1.c50"
               },
               "id" : 30,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 606,
                  "cluster" : 50,
                  "function" : "rails",
                  "status" : "production",
                  "fullname" : "rails2.c50"
               },
               "id" : 32,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 605,
                  "cluster" : 50,
                  "function" : "rails",
                  "status" : "production",
                  "fullname" : "rails1.c50"
               },
               "id" : 33,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 302,
                  "cluster" : 7,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db1.c7"
               },
               "id" : 37,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 104,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch11.c1"
               },
               "id" : 42,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 123,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch15.c1"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 124,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch16.c1"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "p14",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 412,
                  "cluster" : 52,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app2.c52"
               },
               "id" : 6,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 90,
                  "cluster" : 1,
                  "function" : "dns",
                  "status" : "production",
                  "fullname" : "dns1.c1"
               },
               "id" : 7,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 495,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db33.c1"
               },
               "id" : 8,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 339,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db25.c1"
               },
               "id" : 12,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 400,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db208.c1"
               },
               "id" : 18,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 401,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db209.c1"
               },
               "id" : 19,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 61,
                  "cluster" : 1,
                  "function" : "dev",
                  "status" : "dev",
                  "fullname" : "dev61.c1"
               },
               "id" : 21,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 496,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db34.c1"
               },
               "id" : 24,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 48,
                  "cluster" : 6,
                  "function" : "rails",
                  "status" : "production",
                  "fullname" : "rails1.c6"
               },
               "id" : 25,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 512,
                  "cluster" : 46,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c46"
               },
               "id" : 26,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 560,
                  "cluster" : 9,
                  "function" : "app",
                  "status" : "testing",
                  "fullname" : "app1.c9"
               },
               "id" : 27,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 561,
                  "cluster" : 56,
                  "function" : "app",
                  "status" : "production",
                  "fullname" : "app1.c56"
               },
               "id" : 28,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 542,
                  "cluster" : 1,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db213.c1"
               },
               "id" : 32,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 543,
                  "cluster" : 1,
                  "function" : "spare-basic-db",
                  "status" : "testing",
                  "fullname" : "spare-basic-db2.c1"
               },
               "id" : 33,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 175,
                  "cluster" : 8,
                  "function" : "dbr",
                  "status" : "production",
                  "fullname" : "dbr1.c8"
               },
               "id" : 34,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 6,
                  "cluster" : 6,
                  "function" : "db",
                  "status" : "production",
                  "fullname" : "db1.c6"
               },
               "id" : 37,
               "size" : 2
            },
            {
               "entity" : {
                  "server_id" : 130,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch19.c1"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 131,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch20.c1"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      },
      {
         "id" : "q05",
         "entities" : [
            {
               "entity" : {
                  "server_id" : 199,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch23.c1"
               },
               "id" : 44,
               "size" : 1
            },
            {
               "entity" : {
                  "server_id" : 198,
                  "cluster" : 1,
                  "function" : "switch",
                  "status" : "production",
                  "fullname" : "switch24.c1"
               },
               "id" : 46,
               "size" : 1
            }
         ],
         "size" : 55
      }
   ]
}


EOF;

    if ( isset($request->view) ) {
        //$json = new StdClass();
        $json = json_decode($view);
        //$test = array_splice($json->data,0,1);
        //var_dump($test);
        //$json->data = $test;

    }

    echo json_encode($json);
