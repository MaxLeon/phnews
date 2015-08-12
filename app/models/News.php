<?php  use Phalcon\Mvc\Model;
/**
 * Clase representativa del modelo News y se encarga de contener los datos de las noticias
 *
 * @category News
 *
 * @package Models
 *
 * @author Maximo De Leon <maximo@mctekk.com>
 */ 

class News extends Model
{
	public $id;
	public $tittle;
	public $author;
	public $body;
}
 ?>}
