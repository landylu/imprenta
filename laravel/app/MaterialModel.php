<?php

namespace Imprenta;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class MaterialModel extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract {

    use Authenticatable,
        Authorizable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'materiales';
    protected $primaryKey = 'materialId';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['sucursalId','calidadId','tipoMaterialId','stock','precio','fechaIngreso','materialNombre', 'unidadDeMedida'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['password', 'remember_token'];


}



