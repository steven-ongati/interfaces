<?php
include 'EventInterface.php';
include 'Event.php';
include 'EventsApp.php';

$eventsApp = new EventsApp();

$event1 = new Event('PHP OOP live session', '2023-12-10', 'Online');
$event2 = new Event('Python side event', '2023-12-12', 'In-person');

$eventsApp->addEvent($event1);
$eventsApp->addEvent($event2);

echo 'Events in app:<br>';
$events = $eventsApp->getEvents();
foreach ($events as $index => $event) {
    echo ($index + 1) . '. ' . $event->getName() . ' on ' . $event->getDate() . ' at ' . $event->getLocation() . '<br>';
}
?>