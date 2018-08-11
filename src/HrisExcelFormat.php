<?php 

	
 namespace Treon;
 

 class HrisExcelFormat
 {
 	protected $ci;
 
 	public function __construct()
 	{
         $this->ci =& get_instance();
 	}

 	public function fontBold($bold = true)
 	{

 		return [
 			'font' => [
 				'bold'  => $bold
 			]
 		];
 	}


 	public function fontSize($size = 10)
 	{
 		return [
 			'font' => [
 			 'size'  => $size
 			]
 		];
 	}

 	public function align($align = 'center', $alignType = 'horizontal')
 	{
 		$align = strtolower($align);
 		$alignType = strtolower($alignType);
 		$format = '';

 		if ($alignType == 'horizontal') {
	 		
	 		if ($align == 'center') {
	 			$format = [
		 			'alignment' => [
		 				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
		 			]
		 		];
	 		}else if ($align = 'left') {
	 			$format = [
		 			'alignment' => [
		 				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT
		 			]
		 		];
	 		}

 		}else if ($alignType == 'vertical') {
 			# vertical
 		}

 		return $format;
 	}

 	/*
	|---------------------------------------------------------------------------------------------|
	|
	|@source: https://stackoverflow.com/questions/27764204/how-to-do-the-phpexcel-outside-border
	|@params: the illustration type please see the link above
	|
	|---------------------------------------------------------------------------------------------|

 	*/
 	public function border($border = 'allborders')
 	{

		return [
		  'borders' => [
		    strtolower($border) => [
		      'style' => PHPExcel_Style_Border::BORDER_THIN
		    ]
		  ]
		];

 	}

 	public function rgb($rgb)
 	{
 		#NOTE: please do not include # in the parameter
 		return  [
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => $rgb)
        ];
 	}

 	// composer test
 	public static function test()
 	{
 		echo 'Hello, HrisExcelFormat';
 	}
 
 }
 
