<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use HasRoles;
    use HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'name',
        'lastname',
        'email',
        'email_verified_at',
        'password',
        'dni',
        'phone',
        'video',
        'title',
        'country',
        'city',
        'address',
        'summary',
        'description',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isRoot()
    {
        return $this->hasRole('Root');
    }

    public function isAdmin()
    {
        return $this->hasRole('Admin');
    }

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }

    public function getRole()
    {
        return $this->getRoleNames()[0];
    }

    public function specialties () {
        return $this->hasManyThrough(Specialty::class, SpecialtiesByUser::class, 'user_id', 'id', 'id', 'specialty_id');
    }
}
