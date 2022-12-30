<?php
require_once('vendor/autoload.php');
require 'vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/IOFactory.php';


$inputFileType = 'Xlsx';
$inputFileName = 'counties.xlsx';

/**  Create a new Reader of the type defined in $inputFileType  **/
$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
/**  Load $inputFileName to a Spreadsheet Object  **/
$spreadsheet = $reader->load($inputFileName);

// obtain the first sheet of the Excel file
$worksheet = $spreadsheet->getSheet(0);

$pdo = new PDO('mysql:host=localhost;dbname=elections', 'root', '');

$stmt = $pdo->prepare('INSERT INTO county (code_state, code_county, county, population, area) VALUES (?, ?, ?, ?, ?)');


foreach ($spreadsheet->getWorkSheetIterator() as $sheet) {
  
    foreach ($spreadsheet->getWorkSheetIterator() as $sheet) {
  
        foreach ($sheet->getRowIterator() as $row) {
            // Recorre cada celda de la fila
            $values = array();
            foreach ($row->getCellIterator() as $cell) {
                // Obtiene el valor de la celda y lo agrega al array de valores
                $values[] = $cell->getValue();
            }
    
            // Limpia los valores para asegurarse de que cumplen con los requisitos de la tabla county
            $code_state = trim($values[0]);
            $code_county = trim($values[1]);
            $county = trim($values[2]);
            // Elimina todos los caracteres especiales del campo county
            $county = preg_replace('/[^\w\s]/', '', $county);
            $population = (int) $values[3];
            $area = (int) $values[4];
    
            // Inserta los valores limpios en la tabla county utilizando la sentencia INSERT preparada
            $stmt->execute(array($code_state, $code_county, $county, $population, $area));
            
        }
      }
    echo "completed successfully!";
}

?>