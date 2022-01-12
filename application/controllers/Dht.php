<?php

class Dht extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("Sensor_model");
		
	}

	public function index()
	{
        $data["getSensor"] = $this->Sensor_model->getSensor();
        // load view admin/overview.php
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        if ($this->session->userdata('username') == NULL){
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                You must login first!
                </div>');
            redirect('auth');
        } else {
            $this->load->view('dht', $data);
        }   
	}

        public function export()
    {
        include APPPATH.'Excel/Classes/PHPExcel.php';

        // Panggil class PHPExcel nya
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('My Notes Code')
                 ->setLastModifiedBy('My Notes Code')
                 ->setTitle("Data Sensor")
                 ->setSubject("Sensor")
                 ->setDescription("Laporan Semua Data Sensor")
                 ->setKeywords("Data Sensor");

        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
                ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
                )
            );

        $style_row = array(
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
                ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
                )
            );

        $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA SUHU DAN KELEMBABAN"); // Set kolom A1 dengan tulisan "DATA SISWA"
        $excel->getActiveSheet()->mergeCells('A1:G1'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

        // Buat header tabel nya pada baris ke 3
        $excel->setActiveSheetIndex(0)->setCellValue('A3', "No");
        $excel->setActiveSheetIndex(0)->setCellValue('B3', "Suhu(Celsius)"); 
        $excel->setActiveSheetIndex(0)->setCellValue('C3', "Kelembaban(%)");
        $excel->setActiveSheetIndex(0)->setCellValue('D3', "Cahaya"); 
        $excel->setActiveSheetIndex(0)->setCellValue('E3', "Gerak"); 
        $excel->setActiveSheetIndex(0)->setCellValue('F3', "Tanggal"); 
        $excel->setActiveSheetIndex(0)->setCellValue('G3', "Waktu"); 

        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);



        $sensor = $this->Sensor_model->getSensor();

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach($sensor as $s){ // Lakukan looping pada variabel siswa
            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $s->temp);
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $s->humid);
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $s->cahaya);
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $s->gerak);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, date_indo($s->tgl));
            $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $s->jam);

            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);

            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }

        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(15); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(15); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(20); // Set width kolom E

       
        
        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Data Sensor");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Sensor.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
        

    }

    public function hapus(){

        $this->Sensor_model->hapus();
        
        redirect(base_url('dht'));
    }

    public function reupload()
    {
        // pada lokal terjadi pengecekan flag untuk mengirim data  http://localhost/lcs/dht/reupload
        $isi = $this->Sensor_model->cekFlag();
        $temp = $isi['temp'];
        $humid = $isi['humid'];
        $cahaya = $isi['cahaya'];
        $gerak = $isi['gerak'];
        $waktu = $isi['waktu'];
        $flag = $isi['flag'];
        $tgl = $isi['tgl'];
        $jam = $isi['jam'];

        echo $temp, $humid, $cahaya, $waktu;

        if ($flag == NULL)
        {
            $this->Sensor_model->resetFlag();
            die;
        }
        else {
            if ($flag == 0)
            {
                $this->Sensor_model->updateFlag();
                redirect('https://bwcr.rizaldiariif.com/public/device/add/zRcZKYgkPIcrhJk8qe4DhKgwHCG3/a211490bfaca4545a5ec?tanggal='.$tgl.'&jam='.$jam.'&temp='.$temp.'&humid='.$humid.'&cahaya='.$cahaya.'&gerak='.$gerak);            }
        }
        
    }

}