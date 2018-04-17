<?php
class Patient
{
	public $id;
	public $fname;
	public $mname;
	public $lname;
	public $of;
	public $oftype;
	public $bgroup;
	public $address;
	public $phone;
	public $email;
	public $dob;
	public $sex;
	public $marital_status;
	public $current_suffering;
	public $current_suffering_from;
	public $last_visit;
	public $last_visit_location;
	public $last_medicines;
	public $array_date;
	public $array_case;
	public $array_medicines;
	public $array_doctors;
	public $array_doctor_id;
	public $array_hospitals;
	public $array_comments;
	public $array_department;
	public $array_reference;
	public $photo;
	public $nationality;

	function __construct($patientId)
	{
		$query = "SELECT * FROM `patients` WHERE `id`='$patientId'";
		$db = new mysqli("localhost","root","admin","barcode");
			$result = $db->query($query);
			if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()){
			$this->id = $patientId;
			$this->fname = $row['fname'];
			$this->mname = $row['mname'];
			$this->lname = $row['lname'];
			$this->of = $row['of'];
			$this->oftype = $row['oftype'];
			$this->bgroup = $row['bgroup'];
			$this->address = $row['address'];
			$this->phone = $row['phone'];
			$this->email = $row['email'];
			$this->dob = $row['dob'];
			$this->sex = $row['sex'];
			$this->marital_status = $row['marital_status'];
			$this->current_suffering = $row['current_suffering'];
			$this->current_suffering_from = $row['current_suffering_from'];
			$this->last_visit = $row['last_visit'];
			$this->last_visit_location = $row['last_visit_location'];
			$this->last_medicines = $row['last_medicines'];
			$this->array_date = $row['array_date'];
			$this->array_case = $row['array_case'];
			$this->array_medicines = $row['array_medicines'];
			$this->array_doctors = $row['array_doctors'];
			$this->array_doctor_id = $row['array_doctor_id'];
			$this->array_hospitals = $row['array_hospitals'];
			$this->array_comments = $row['array_comments'];
			$this->array_department = $row['array_department'];
			$this->rray_reference = $row['array_reference'];
			$this->photo = $row['photo'];
			$this->nationality = $row['nationality'];
		}
		}
	}
}
?>
