<?php

require('composer/vendor/autoload.php'); 

use Aws\S3\S3Client; 
use Aws\Exception\AwsException; 

$S3Options = 
[
	'version' => 'latest',
	'region'  => 'us-east-2',
	'credentials' => 
	[
		'key' => 'tukey',
		'secret' => 'tusecret'
	]
]; 


$s3 = new S3Client($S3Options); 


// listar archivos

$archivos = $s3->listObjects(
[
	'Bucket' => 'itic-test'
]); 

$archivos = $archivos->toArray();


$fila = ""; 

foreach ($archivos['Contents'] as $archivo) 
{
	$fila .= "<tr><td>{$archivo['Key']}</td>";
	$fila .= "<td>itic-test</td>";
	$fila .= "<td>{$archivo['Size']}</td>";
	$fila .= "<td>{$archivo['LastModified']}</td>";
	$fila .= "<td><button onclick='getFile(&#34;{$archivo['Key']}&#34;)'>Descarga</button></td></tr>"; 
}

echo $fila; 


// carga del archivo

if(isset($_FILES['file']))
{
	$uploadObject = $s3->putObject(
		[
			'Bucket' => 'itic-test',
			'Key' => $_FILES['file']['name'],
			'SourceFile' => $_FILES['file']['tmp_name']
		]); 

	print_r($uploadObject); 
}


// descarga de archivo

if($_POST['key'])
{
	$getFile = $s3->getObject([

		'Key' => $_POST['key'],
		'Bucket' => 'itic-test'
	]);

	$getFile = $getFile->toArray();

	file_put_contents($_POST['key'], $getFile['Body']); 
}





?>