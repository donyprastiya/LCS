<?php

class Wemos extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("Wemos_model");
        $this->load->model("Sensor_model");
		
	}

	public function lampu()
	{
        $nilai = $this->Wemos_model->status();

        foreach( $nilai as $asd )
        {
            echo '#';
            echo $asd->nilai;
        }
        echo '#';
    }

    


    public function sensor() 
    {
        //GET THIS http://localhost/lcs/wemos/sensor?temp=30&humid=60&cahaya=1024&gerak=1
                    // http://localhost/lcs/wemos/sensor?temp=99&humid=99&cahaya=99&gerak=99
        $this->Wemos_model->sensordata();

        $isi = $this->Sensor_model->upload();
        $temp = $isi['temp'];
        $humid = $isi['humid'];
        $cahaya = $isi['cahaya'];
        $gerak = $isi['gerak'];
        $waktu = $isi['waktu'];
        $tgl = $isi['tgl'];
        $jam = $isi['jam'];

        redirect('https://bwcr.rizaldiariif.com/public/device/add/zRcZKYgkPIcrhJk8qe4DhKgwHCG3/a211490bfaca4545a5ec?tanggal='.$tgl.'&jam='.$jam.'&temp='.$temp.'&humid='.$humid.'&cahaya='.$cahaya.'&gerak='.$gerak);
        
    }
}