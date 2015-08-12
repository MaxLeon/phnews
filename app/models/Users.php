<?php use Phalcon\Mvc\Model;
/**
 * Clase representativa del modelo Users y se encarga de contener los datos del usuario
 *
 * @category Users
 *
 * @package Models
 *
 * @author Maximo De Leon <maximo@mctekk.com>
 */
class Users extends Model
{
    public $uname;
    public $fname;
    public $lname;
    public $pass;
}
?>