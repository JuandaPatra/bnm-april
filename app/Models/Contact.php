<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Mail;
use App\Mail\ContactMail;

class Contact extends Model
{
    use HasFactory;
    protected $dates= ['created_at'];
    
    protected $fillable = [ 
        'fullname', 'email', 'company','subject', 'address', 'phone', 'message'
    ]; 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
        // dd('test');
        static::created(function ($item) {
            $adminEmail = "marketing@bnmstainless.co.id";
            Mail::to($adminEmail)->bcc(['khoeruladhayana@gmail.com','putriaisyah245@gmail.com', 'patrajuanda10@gmail.com'])->send(new ContactMail($item));
            
        });
    }
}