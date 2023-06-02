<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
use HasFactory;


protected $fillable = [
'nama',
'email',
'no_hp',
'alamat',
'role',
'foto',
'password',
];

// Getter methods
public function getName()
{
return $this->nama;
}

public function getRole()
{
return $this->role;
}

public function getPassword()
{
return $this->password;
}
}
