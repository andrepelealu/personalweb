<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page404 extends CI_Controller {
  public function index()
  {
    redirect(base_url());
  }

}
