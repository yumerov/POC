<?php

foreach(simplexml_load_file('https://status.kraken.com/history.rss')->channel->item as $_) {
    if (str_contains(strtolower($_->title), 'maintenance')) {
        echo "Title: $_->title\n";
        echo "Description: " . strip_tags($_->description) . "\n";
        echo "Pub date: $_->pubDate\n";
        echo "Maintenance end date: $_->maintenanceEndDate\n";
        echo "Link: $_->link\n\n";
    }
}