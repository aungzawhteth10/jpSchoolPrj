<?php
$app->get('/', function ($request, $response, $args) {
    print('URLを見直してください！');
    return $response;
});
// $app->get('/login', function (Slim\Http\ServerRequest $request, Slim\Http\Response $response, $args) {
//     // var_dump($this->view);
//     $view = Slim\Views\Twig::fromRequest($request);
//     createPdf();
//     return $view->render($response, 'Login.twig', []);
// });
$app->get('/{id}', function (Slim\Http\ServerRequest $request, Slim\Http\Response $response, $args) {
    // var_dump($this->view);
    $view = Slim\Views\Twig::fromRequest($request);
    $pageId = strtoupper($args['id']);
    $pageList = ['HOME', 'RS'];
    if (!in_array($pageId, $pageList)) {
        print('URLを見直してください！');
        return $response;
    }
    $pageName = [
        'HOME' => "ホーム",
        'RS'   => "アールエス",
    ];
    $view->offsetSet('HtmlHelper', new \App\api\HtmlHelper);
    return $view->render($response, $pageId . '.twig', ['pageName' => $pageName[$pageId]]);
});
// function createPdf()
// {
//     $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
//     $excel  = $reader->load('C:\Users\aungz\Desktop\workspace\git\POS\src\app\Xls\xlstemplates\receipt1.xlsx');
//     $sheet  = $excel->getSheetByName('Sheet1');
//     $writer     = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($excel, 'Xlsx');
//     $writer->save('C:\Users\aungz\Desktop\workspace\git\POS\src\app\Xls\temp\temp.xlsx');
//     // exec('C:/Users/aungz/Desktop/workspace/git/POS/src/app/tools/PDFtoPrinter.exe C:\Users\aungz\Desktop\workspace\git\POS\src\app\Xls\temp\temp.pdf R01');
//     // exec('"C:\Program Files (x86)\OpenOffice 4\program\soffice.exe" -pt R01 C:\Users\aungz\Desktop\workspace\git\POS\src\app\Xls\temp\temp.xlsx C:\Users\aungz\Desktop\workspace\git\POS\src\app\Xls\temp\temp.xlsx C:\Users\aungz\Desktop\workspace\git\POS\src\app\Xls\temp\temp.xlsx');
    
//     // exec('"C:\Users\aungz\AppData\Local\Kingsoft\WPS Office\11.2.0.10426\office6\et.exe" -p C:\Users\aungz\Desktop\workspace\git\POS\src\app\Xls\temp\temp.xlsx');
//     // exec('"C:\Program Files\LibreOffice\program\scalc.exe" -p C:\Users\aungz\Desktop\workspace\git\POS\src\app\Xls\temp\temp.xlsx');
// }
// function startUp($ipAddress)
// {
//     $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
//     $excel  = $reader->load('C:\Users\aungz\Desktop\workspace\git\POS\src\app\Xls\xlstemplates\order1.xlsx');
//     $sheet  = $excel->getSheetByName('Sheet1');
//     $sheet->setCellValue('A1', $ipAddress . ':8888/LOGIN');
//     $sheet->getStyle('A1')->getFont()->setSize(20);
//     $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($excel, 'Xlsx');
//     $file = 'C:\Users\aungz\Desktop\workspace\git\POS\src\app\Xls\temp\startUp.xlsx';
//     $writer->save($file);
//     $commandPrint = '"C:\Program Files (x86)\OpenOffice 4\program\soffice.exe" -pt R01 ' . $file;
//     exec($commandPrint);
//     return;
// }
