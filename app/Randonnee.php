<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Randonnee extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable = ['utilisateur_id', 'nom', 'difficulte', 'distance', 'duree', 'denivele', 'type_trajet', 'date'];

    public function messages()
    {
        return $this->hasMany(Message::class)->latest();
    }

    public function suivis()
    {
        return $this->belongsToMany(Randonnee::class, 'suivis', 'suiver_id', 'suivi_id');
    }

    public function suit($randonnee)
    {
        return $this->suivis()->where('suivi_id', $randonnee->id)->exists();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return '';
    }
}
