<?php

namespace TEST\ContactForm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestContact extends Model
{
    use HasFactory;
    protected $table = 'test_contact';
    protected $fillable = ['name', 'phone', 'email', 'message'];
}
