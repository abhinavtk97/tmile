/<?php
    $client = new http\Client;
    $request = new http\Client\Request;

    // $body = new http\Message\Body;
    // $body->addForm(array(
    // 'eventType' => 'public',
    // 'type' => 'ticketing',
    // 'eventTitle' => 'My First Event',
    // 'url' => 'my-first-event',
    // 'category' => 'business',
    // 'startDate' => '2017-01-01',
    // 'startTime' => '12:12:12',
    // 'endDate' => '2017-02-02',
    // 'endTime' => '13:12:12',
    // 'aboutEvent' => 'Event Description',
    // 'contactInfo' => 'My Contact Info'
    // ), NULL);

    $request->setRequestUrl('https://google.com');
    $request->setRequestMethod('GET');

    $request->setHeaders(array(
    'cache-control' => 'no-cache',
    'authorization' => 'Bearer xxxx'
    ));

    $client->enqueue($request)->send();
    $response = $client->getResponse();

    var_dump($response);