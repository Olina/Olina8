<?php
/**
 * Holding a instance of COlina to enable use of $this in subclasses and provide some helpers.
 *
 * @package OlinaCore
 */
class CObject {

	/**
	 * Members
	 */
	protected $olina;
	protected $config;
	protected $request;
	protected $data;
	protected $db;
	protected $views;
	protected $session;
	protected $user;


	/**
	 * Constructor, can be instantiated by sending in the $olina reference.
	 */
	protected function __construct($olina=null) {
	  if(!$olina) {
	    $olina = COlina::Instance();
	  }
	  $this->olina       = &$olina;
    $this->config   = &$olina->config;
    $this->request  = &$olina->request;
    $this->data     = &$olina->data;
    $this->db       = &$olina->db;
    $this->views    = &$olina->views;
    $this->session  = &$olina->session;
    $this->user     = &$olina->user;
	}


	/**
	 * Wrapper for same method in COlina. See there for documentation.
	 */
	protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->olina->RedirectTo($urlOrController, $method, $arguments);
  }


	/**
	 * Wrapper for same method in COlina. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) {
    $this->olina->RedirectToController($method, $arguments);
  }


	/**
	 * Wrapper for same method in COlina. See there for documentation.
	 */
	protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->olina->RedirectToControllerMethod($controller, $method, $arguments);
  }


	/**
	 * Wrapper for same method in COlina. See there for documentation.
	 */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->olina->AddMessage($type, $message, $alternative);
  }


	/**
	 * Wrapper for same method in COlina. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->olina->CreateUrl($urlOrController, $method, $arguments);
  }


}
  