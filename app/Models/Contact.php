<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Contact extends Model
{
    use HasFactory;
    
    protected $table = 'contact_us';

    public $fillable = ['first_name','last_name', 'email', 'phone', 'subject', 'message'];
}