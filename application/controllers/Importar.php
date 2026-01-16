<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Importar extends CI_Controller {

	 public function __construct()

    {
    parent::__construct();     
         $this->load->model('Model_importar');
         $this->load->model('Model_dashboard');
		 $this->load->library(array('session','form_validation','excel'));		
		 $this->load->helper(array('url','form'));
		 $this->load->database('default');
    }


    public function index(){
    	$this->verificar_login();   
    	$datos["users"]= $this->Model_dashboard->mostrar_users();
      $datos['nombres'] = $this->session->userdata('nombres');
    $datos['apellidos'] = $this->session->userdata('apellidos');
    $datos["username"] = $this->session->userdata('username');
    $datos["rol"] = $this->session->userdata('rol');
    $this->load->view('Importar_view',$datos);
    }


  public function excel_import(){

  if(isset($_FILES["file"]["name"]))
    {
      // Validar el archivo subido
      if($_FILES["file"]["error"] !== UPLOAD_ERR_OK){
        echo 'Error al cargar el archivo. Código de error: ' . $_FILES["file"]["error"];
        return;
      }
      
      $path = $_FILES["file"]["tmp_name"];
      
      // Verificar que el archivo existe
      if(!file_exists($path)){
        echo 'El archivo temporal no existe';
        return;
      }
      
      try {
        $object = PHPExcel_IOFactory::load($path);
      } catch (Exception $e) {
        echo 'Error al leer el archivo Excel: ' . $e->getMessage();
        return;
      }

      $id_user = $this->input->post("nombre");
      $id_user = $this->security->xss_clean($id_user);
      
      // Validar que se haya seleccionado un usuario
      if(empty($id_user)){
        echo 'Debe seleccionar un usuario';
        return;
      }
      
      // Obtener el nombre del usuario reportante
      $user_data = $this->Model_dashboard->get_user_by_id($id_user);
      if(!$user_data){
        echo 'Usuario no encontrado';
        return;
      }
      $empre = $user_data['nombres'];
      
       //date_default_timezone_set('America/Bogota');
       $error="";
       $data = array(); // Inicializar array de datos
       
      foreach($object->getWorksheetIterator() as $worksheet)
      {
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();
        $cont=0;

        if($worksheet->getCellByColumnAndRow(0,2)->getValue()=="Documento Conductor" and $worksheet->getCellByColumnAndRow(1,2)->getValue()=="Nombre Conductor" and $worksheet->getCellByColumnAndRow(2,2)->getValue()=="Apellidos Conductor" and $worksheet->getCellByColumnAndRow(3,2)->getValue()=="Fecha Inicio Reporte" and $worksheet->getCellByColumnAndRow(4,2)->getValue()=="Placa Vehiculo" and $worksheet->getCellByColumnAndRow(5,2)->getValue()=="Valor del Reporte" and $worksheet->getCellByColumnAndRow(6,2)->getValue()=="Descripcion del Reporte"  ){       

	        for($row=3; $row<=$highestRow; $row++)
	        {
	        $cont++;          
	          $cc = $this->security->xss_clean($worksheet->getCellByColumnAndRow(0, $row)->getValue());
	          if($cc!="" and is_numeric($cc)){
	          $cc = $this->security->xss_clean($worksheet->getCellByColumnAndRow(0, $row)->getValue());
	          $nombres    = $this->security->xss_clean($worksheet->getCellByColumnAndRow(1, $row)->getValue());
	          $apellidos = $this->security->xss_clean($worksheet->getCellByColumnAndRow(2, $row)->getValue());
	          $fecha =$this->security->xss_clean( $worksheet->getCellByColumnAndRow(3, $row)->getValue());
	          $placa = $this->security->xss_clean($worksheet->getCellByColumnAndRow(4, $row)->getValue());
	          $valor = $this->security->xss_clean($worksheet->getCellByColumnAndRow(5, $row)->getValue());
	          $descripcion = $this->security->xss_clean($worksheet->getCellByColumnAndRow(6, $row)->getValue());
	          $afiliado = $this->security->xss_clean($worksheet->getCellByColumnAndRow(7, $row)->getValue());
	         // $estado = $this->security->xss_clean($worksheet->getCellByColumnAndRow(9, $row)->getValue());
	          $fecha = date($format = "Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($fecha)); 
	          $estado ="";
	                 //$fe = date("Y-m-d");
	          $data[] = array(
	            'Numero_Documento'    =>  $cc,
	            'Nombres'     =>  $nombres,
	            'Apellidos'        =>  $apellidos,
	            'Fecha_Reporte' => $fecha,
	            'Fecha_cierre'    =>  "",
	            'Placa'     =>  $placa,
	            'Valor_Reporte'  => $valor,
	            'Descripcion_Reporte' => $descripcion,
	            'Vehiculo_afiliado' =>$afiliado,
	            'Estado' => 'ACTIVA',
	            'Reportante_Nombres' =>$empre
	          );
	          }	           
	        }//for
        }else{
        	$error= "Plantilla de excel no válida! Verifique que las columnas sean correctas.";
        }
      }    
      
      if( $error!=""){
      	echo $error;
      }elseif(empty($data)){
      	echo 'No se encontraron datos válidos para importar';
      }else{
      	 $result = $this->Model_importar->insert_planilla($data);
      	 if($result){
           echo 'Datos importados exitosamente: ' . count($data) . ' registros';
         }else{
           echo 'Error al importar los datos. Intente nuevamente.';
         }
      }
    }else{
      echo 'No se seleccionó ningún archivo';
    }
  }

  public function descargar_plantilla(){
    $this->verificar_login();
    
    // Crear un nuevo archivo Excel
    $objPHPExcel = new PHPExcel();
    $objPHPExcel->setActiveSheetIndex(0);
    $sheet = $objPHPExcel->getActiveSheet();
    
    // Establecer el título
    $sheet->setCellValue('A1', 'PLANTILLA DE IMPORTACIÓN DE REPORTES');
    $sheet->mergeCells('A1:G1');
    $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    $sheet->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    
    // Establecer encabezados
    $sheet->setCellValue('A2', 'Documento Conductor');
    $sheet->setCellValue('B2', 'Nombre Conductor');
    $sheet->setCellValue('C2', 'Apellidos Conductor');
    $sheet->setCellValue('D2', 'Fecha Inicio Reporte');
    $sheet->setCellValue('E2', 'Placa Vehiculo');
    $sheet->setCellValue('F2', 'Valor del Reporte');
    $sheet->setCellValue('G2', 'Descripcion del Reporte');
    $sheet->setCellValue('H2', 'Vehiculo Afiliado');
    
    // Estilo de encabezados
    $headerStyle = array(
        'font' => array('bold' => true, 'color' => array('rgb' => 'FFFFFF')),
        'fill' => array('type' => PHPExcel_Style_Fill::FILL_SOLID, 'color' => array('rgb' => '4472C4')),
        'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER)
    );
    $sheet->getStyle('A2:H2')->applyFromArray($headerStyle);
    
    // Datos de ejemplo
    $sheet->setCellValue('A3', '123456789');
    $sheet->setCellValue('B3', 'Juan');
    $sheet->setCellValue('C3', 'Pérez');
    $sheet->setCellValue('D3', '2026-01-15');
    $sheet->setCellValue('E3', 'ABC123');
    $sheet->setCellValue('F3', '50000');
    $sheet->setCellValue('G3', 'Descripción del reporte');
    $sheet->setCellValue('H3', 'SI');
    
    // Ajustar ancho de columnas
    foreach(range('A','H') as $col) {
        $sheet->getColumnDimension($col)->setAutoSize(true);
    }
    
    // Descargar archivo
    $filename = 'Plantilla_Importacion_' . date('Y-m-d') . '.xlsx';
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');
    
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
    exit;
  }

 public function verificar_login(){

    if($this->session->userdata('is_logued_in') == FALSE )
      {
         redirect(base_url().'index.php/login');
        }
    if($this->session->userdata('rol')=="admin"){

    }else{
        return  redirect(base_url().'index.php/login');
    }

  }

}