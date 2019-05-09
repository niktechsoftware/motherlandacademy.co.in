<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['page']='home';
$this->load->view('all',$data);
}
public function aboutschool()
	{
		$data['page']='about';
$this->load->view('all',$data);
}
public function PrincipalMessage()
	{
		$data['page']='Principal';
$this->load->view('all',$data);
}
public function managermassege()
	{
		$data['page']='manager';
$this->load->view('all',$data);
}
public function admission()
	{
		$data['page']='admissions';
$this->load->view('all',$data);
}
public function academics()
	{
		$data['page']='academic';
$this->load->view('all',$data);
}
public function infrastructures()
	{
		$data['page']='infrastructure';
$this->load->view('all',$data);
}
public function newsevent()
	{
		$data['page']='news';
$this->load->view('all',$data);
}
public function gallery()
	{
		$data['page']='gallery';
$this->load->view('all',$data);
}
public function contactus()
	{
		$data['page']='contact';
$this->load->view('all',$data);
}
}