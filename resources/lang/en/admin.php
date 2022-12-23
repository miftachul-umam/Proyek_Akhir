<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'mahasiswa' => [
        'title' => 'Mahasiswa',

        'actions' => [
            'index' => 'Mahasiswa',
            'create' => 'New Mahasiswa',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'umur' => 'Umur',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
            
        ],
    ],

    'umam' => [
        'title' => 'Umams',

        'actions' => [
            'index' => 'Umams',
            'create' => 'New Umam',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'umur' => 'Umur',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
            
        ],
    ],

    'emboh' => [
        'title' => 'Embohs',

        'actions' => [
            'index' => 'Embohs',
            'create' => 'New Emboh',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'umur' => 'Umur',
            'alamat' => 'Alamat',
            'kota' => 'Kota',
            'kelas' => 'Kelas',
            'jurusan' => 'Jurusan',
            
        ],
    ],

    'mahasiswa' => [
        'title' => 'Mahasiswas',

        'actions' => [
            'index' => 'Mahasiswas',
            'create' => 'New Mahasiswa',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'event' => [
        'title' => 'Events',

        'actions' => [
            'index' => 'Events',
            'create' => 'New Event',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'start' => 'Start',
            'end' => 'End',
            
        ],
    ],

    'dosen' => [
        'title' => 'Dosens',

        'actions' => [
            'index' => 'Dosens',
            'create' => 'New Dosen',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'matkul' => [
        'title' => 'Matkuls',

        'actions' => [
            'index' => 'Matkuls',
            'create' => 'New Matkul',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'matkul' => [
        'title' => 'Matkuls',

        'actions' => [
            'index' => 'Matkuls',
            'create' => 'New Matkul',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'kode_matkul' => 'Kode matkul',
            'matkul' => 'Matkul',
            'sks' => 'Sks',
            'dosen_pengampu' => 'Dosen pengampu',
            'kelas' => 'Kelas',
            'hari' => 'Hari',
            'jam' => 'Jam',
            
        ],
    ],

    'pengajar' => [
        'title' => 'Pengajar',

        'actions' => [
            'index' => 'Pengajar',
            'create' => 'New Pengajar',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];