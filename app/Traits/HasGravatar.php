<?php
  namespace CodeNation\Traits;

  trait HasGravatar {
    
    /**
     * The attribute name containing the email address.
     * 
     * @var string
     */
    public $gravatarEmail = 'email';

    /**
     * Get the users gravatar
     * 
     * @returns string
     */
    public function getGravatarAttribute() {
      $hash = md5(strtolower(trim($this->attributes[$this->gravatarEmail])));
      return "https://www.gravatar.com/avatar/$hash";
    }
  }