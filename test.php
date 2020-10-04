<?php

$uri= 'http://157.230.106.225:8000/api/books';

/*
 * add book
 */

$ch = curl_init($uri);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, ['author' => 'Neil Richard MacKinnon Gaiman',
    'title' => 'Neverwhere']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
curl_close($ch);
echo $result . PHP_EOL;

/*
 * show by id
 */

$ch = curl_init($uri . '/2');
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result . PHP_EOL;

/*
 * update
 */

$ch = curl_init($uri . '/2');
$book = array('author' => 'Louisa May Alcott',
    'title' => 'Good Wives or Little women pt.2');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($book));
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result . PHP_EOL;

/*
 * delete book
 */

$ch = curl_init($uri . '/2');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result . PHP_EOL;

/*
 * show books
 */

$ch = curl_init($uri);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result . PHP_EOL;