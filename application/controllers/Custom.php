<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Custom extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database();
		session_start();
	}
	public function index()
	{
		if(!isset($_SESSION['status'])){
			$_SESSION['status']=0;
		}
		$this->load->view('header');
		$this->load->view('welcome');
		$this->load->view('footer');
	}
	
	public function login(){
		$this->load->view('header');
		$this->load->view('user/loginpage');
		$this->load->view('footer');
	}
	
	public function logresult(){
		$phone = $_POST['phone'];
        $password = $_POST['password'];
		$sql="UPDATE zkc_car SET status=2 WHERE year>3 OR miles>100000";
		$query = $this->db->query($sql);
		if (($phone==13774480990)&&($password==123456)){
			$_SESSION['phone'] = $phone;
			$_SESSION['status'] = 1;
			$_SESSION['name'] = 'manager';
			$this->load->view('success_m');
		} else {
			$sql = "SELECT * FROM zkc_user WHERE phone = ? and password = ?";
			$query = $this->db->query($sql, array($phone, $password));
			$result = $query->result();
			if (!empty($result)) {
				$_SESSION['phone'] = $phone;
				$_SESSION['status'] = 1;
				$_SESSION['name'] = $result[0]->name;
			}
			$this->load->view('regsuccess');
		}
	}
	
	public function signup(){
		$this->load->view('header');
        $this->load->view('user/register');
        $this->load->view('footer');
	}
	
	public function registerresult(){
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$address= $_POST['address'];
		$sql='INSERT INTO zkc_user VALUES(?,?,?,?)';
		$bool = $this->db->query($sql,array($phone,$name,$address,$password));
		if ($bool){
			$_SESSION['phone']=$phone;
			$_SESSION['status']=1;
			$_SESSION['name']=$name;
		}
		$this->load->view('header');
		$this->load->view('welcome');
		$this->load->view('footer');
	}
	
	public function order(){
		$this->load->view('header');
        $this->load->view('applyinfo');
        $this->load->view('footer');
	}
	
	public function showcars(){
		$taketime=$this->input->post('taketime');
		$takeplace=$this->input->post('takeplace');
		$returntime=$this->input->post('returntime');
		$takeoffice=$this->input->post('takeoffice');
		$returnplace=$this->input->post('returnplace');
		$returnoffice=$this->input->post('returnoffice');
		$credit=$this->input->post('credit');
		$driver=$this->input->post('driverinfo');
		$sql="SELECT * FROM zkc_car,zkc_cartype WHERE zkc_car.type=zkc_cartype.type AND place=? AND office = ? AND status = 0";
		$query = $this->db->query($sql,array($takeplace,$takeoffice));
		$list = $query->result();
		$data['list']=$list;
		$data['credit']=$credit;
		$data['driver']=$driver;
		$data['t_office']=$takeoffice;
		$data['t_place']=$takeplace;
		$data['r_office']=$returnoffice;
		$data['r_place']=$returnplace;
		$data['r_time']=$returntime;
		$data['t_time']=$taketime;
//		var_dump($data);
		$this->load->view('header');
		$this->load->view('showcars',$data);
		$this->load->view('footer');
	}

	public function saveorder(){
		$license=$this->input->get('license');
		$t_time=$this->input->get('t_time');
		$t_place=$this->input->get('t_place');
		$t_office=$this->input->get('t_office');
		$r_time=$this->input->get('r_time');
		$r_place=$this->input->get('r_place');
		$r_office=$this->input->get('r_office');
		$credit=$this->input->get('credit');
		$driver=$this->input->get('driver');
		$phone=$_SESSION['phone'];
		while(true) {
			$orderid = rand(100000,999999);
			$sql = "SELECT * FROM zkc_orderinfo WHERE orderid=?";
			$query = $this->db->query($sql, array($orderid))->result();
			if (empty($query)){
				break;
			}
		}
		$sql="INSERT INTO zkc_orderinfo VALUE(?,?,?,0)";
		$query = $this->db->query($sql, array($orderid,$phone,$license));
		$sql="INSERT INTO zkc_order VALUE(?,?,?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, array($orderid,$credit,$driver,$t_place,$t_office,$t_time,$r_place,$r_office,$r_time));
		$sql="UPDATE zkc_car SET status=1 WHERE license=?";
		$query = $this->db->query($sql, array($license));
		$data['orderid']=$orderid;
		$this->load->view('header');
		$this->load->view('savesuccess',$data);
		$this->load->view('footer');
	}

	public function takecar(){
		$this->load->view('header');
		$this->load->view('takeinfo');
		$this->load->view('footer');
	}

	public function takecar2(){
		$orderid = $this->input->post('ordernum');
		$insurance = $this->input->post('insurance');
		$sql="SELECT * FROM zkc_orderinfo WHERE orderid=? AND status=0";
		$query = $this->db->query($sql, array($orderid))->result();
		if (empty($query)){
			$this->load->view('header');
			$this->load->view('takeinfo');
			$this->load->view('footer');
		} else {
			$sql="SELECT t_time from zkc_order WHERE orderid = ?";
			$query = $this->db->query($sql, array($orderid))->result();
			$time=$query[0]->t_time;
			$sql="INSERT INTO zkc_take value(?,?,?)";
			$query = $this->db->query($sql, array($orderid,$time,$insurance));
			$sql="UPDATE zkc_orderinfo SET status=1 WHERE orderid=?";
			$query = $this->db->query($sql, array($orderid));
			if ($query) {
				$this->load->view('header');
				$this->load->view('takesuccess');
				$this->load->view('footer');
			}
		}
	}

	public function returncar(){
		$this->load->view('header');
		$this->load->view('returninfo');
		$this->load->view('footer');
	}

	public function returncar2(){
		$orderid = $this->input->post('ordernum');
		$sql="SELECT * FROM zkc_orderinfo WHERE orderid=? AND status=1";
		$query = $this->db->query($sql, array($orderid))->result();
		if (empty($query)){
			$this->load->view('header');
			$this->load->view('returninfo');
			$this->load->view('footer');
		} else {
			$sql="SELECT * from zkc_order WHERE orderid = ?";
			$query = $this->db->query($sql, array($orderid))->result();
			$credit=$query[0]->creditinfo;
			$t_time=$query[0]->t_time;
			$r_time=$query[0]->r_time;
			$t_place=$query[0]->t_place;
			$t_office=$query[0]->t_office;
			$r_place=$query[0]->r_place;
			$r_office=$query[0]->r_office;
			$sql="SELECT insurance FROM zkc_take WHERE orderid=?";
			$query = $this->db->query($sql, array($orderid))->result();
			$insurance=$query[0]->insurance;
			$sql="SELECT * FROM zkc_orderinfo,zkc_car,zkc_cartype WHERE zkc_orderinfo.orderid=? AND zkc_orderinfo.license=zkc_car.license AND zkc_car.type=zkc_cartype.type";
			$query1 = $this->db->query($sql, array($orderid))->result();
//			echo "<br>";
			$perprice=$query1[0]->price;
			$license=$query1[0]->license;
			// calculate price
			$str1=strtotime($t_time);
			$str2=strtotime($r_time);
			$diff= $str2-$str1;
			$miles=rand(20,400);
			$oil=rand(20,80);
			$oilcost=15*(100-$oil);
			$totalprice=$diff/(24*60*60)*(int)$perprice+(int)$insurance+$oilcost;
//			echo $totalprice;
			//update car
			$sql="UPDATE zkc_car SET miles=miles+? WHERE license=?";
			$query = $this->db->query($sql, array($miles,$license));
			$sql="UPDATE zkc_car SET oilnum=? WHERE license=?";
			$query = $this->db->query($sql, array($oil,$license));
			$sql="UPDATE zkc_car SET place=? WHERE license=?";
			$query = $this->db->query($sql, array($r_place,$license));
			$sql="UPDATE zkc_car SET office=? WHERE license=?";
			$query = $this->db->query($sql, array($r_office,$license));
			//carsstatus=0 and orderstatus=1
			//update order
			$sql="UPDATE zkc_orderinfo SET status=2 WHERE license=?";
			$query = $this->db->query($sql, array($license));
			//update return
			$sql="INSERT INTO zkc_return VALUE(?,?,?,?)";
			$query = $this->db->query($sql, array($orderid,$r_time,$oil,$totalprice));
			$data['orderid']=$orderid;
			$data['miles']=$miles;
			$data['oil']=$oil;
			$data['credit']=$credit;
			$data['totalprice']=$totalprice;
			$this->load->view('header');
			$this->load->view('returnsuccess',$data);
			$this->load->view('footer');
		}
	}

	public function myorder(){
		$phone=$_SESSION['phone'];
		$sql="SELECT * FROM zkc_order,zkc_orderinfo WHERE zkc_order.orderid=zkc_orderinfo.orderid AND zkc_orderinfo.phone=?";
		$query = $this->db->query($sql, array($phone))->result();
		$data['list']=$query;
//		var_dump($query);
		$this->load->view('header');
		$this->load->view('showmyorder',$data);
		$this->load->view('footer');
	}


	public function deleteorder(){
		$orderid=$this->input->get('orderid');
		$sql="DELETE FROM zkc_order WHERE orderid=?";
		$query = $this->db->query($sql, array($orderid));
		$sql="DELETE FROM zkc_orderinfo WHERE orderid=?";
		$query = $this->db->query($sql, array($orderid));
		$this->load->view('header');
		$this->load->view('returnmyorder');
		$this->load->view('footer');
	}

	public function GetRandStr($len)
	{
		$chars = array(
			"a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",
			"l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",
			"w", "x", "y", "z", "0", "1", "2",
			"3", "4", "5", "6", "7", "8", "9"
		);
		$charsLen = count($chars) - 1;
		shuffle($chars);
		$output = "";
		for ($i=0; $i<$len; $i++)
		{
			$output .= $chars[mt_rand(0, $charsLen)];
		}
		return $output;
	}

}