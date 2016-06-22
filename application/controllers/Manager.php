<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Scorp
 * Date: 2016/6/21
 * Time: 20:59
 */
class Manager extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        session_start();
    }

    public function index()
    {
        $sql="SELECT * FROM zkc_car";
        $query = $this->db->query($sql);
        $list = $query->result();
        $data['list']=$list;
        $this->load->view('header_m');
        $this->load->view('welcome_m',$data);
        $this->load->view('footer');
    }

    public function addcar(){
        $this->load->view('header_m');
        $this->load->view('carinfo');
        $this->load->view('footer');
    }
    
    public function savecar(){
        $license=$this->input->post('license');
        $place=$this->input->post('place');
        $office=$this->input->post('office');
        $type=$this->input->post('type');
        $year=$this->input->post('year');
        $miles=$this->input->post('miles');
        $pprice=$this->input->post('pprice');
        $sql="INSERT INTO zkc_car VALUE(?,?,?,?,?,?,0,100,?)";
        $query = $this->db->query($sql,array($license,$type,$place,$office,$year,$miles,$pprice));
        if ($query) {
            $this->load->view('success_m');
        }
    }
    
    public function showOcar(){
        $sql="SELECT * FROM zkc_car WHERE year>3 OR miles>100000";
        $query = $this->db->query($sql);
        $list = $query->result();
        $data['list']=$list;
        $this->load->view('header_m');
        $this->load->view('showOcars',$data);
        $this->load->view('footer');
    }

    public function sellcar(){
        $license=$this->input->post('license');
        $sql="DELETE FROM zkc_car WHERE license=?";
        $query = $this->db->query($sql,array($license));
        $sql="SELECT pprice FROM zkc_car WHERE license=?";
        $query = $this->db->query($sql,array($license))->result();
        if ($query){
            echo (int)$query[0]->pprice/2;
        }
    }

    public function addoil(){
        $license=$this->input->get('license');
        $sql="UPDATE zkc_car SET oilnum=100 WHERE license=?";
        $query = $this->db->query($sql,array($license));
        $this->load->view('success_m');
    }
    
    public function showorder(){
        $sql="SELECT * FROM zkc_order,zkc_orderinfo WHERE zkc_order.orderid=zkc_orderinfo.orderid";
        $query = $this->db->query($sql)->result();
        $data['list']=$query;
//		var_dump($query);
        $this->load->view('header_m');
        $this->load->view('showorder',$data);
        $this->load->view('footer');
    }

}