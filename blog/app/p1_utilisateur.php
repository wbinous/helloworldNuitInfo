<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;


class p1_utilisateur extends Model implements Authenticatable
{

  use BasicAuthenticatable;

  public $timestamps = false;

  protected $fillable = ['nomUtilisater','universite','nom','prenom','dateNaissance','mail','password','description'];

  /**
   * Get the password for the user.
   *
   * @return string
   */
  public function getAuthPassword()
  {
      return $this->mdp;
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