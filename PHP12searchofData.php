<?php

// Sample data array
$users = [
    ['id' => 1, 'name' => 'Anjali', 'age' => 20, 'email' => 'anjali@example.com'],
    ['id' => 2, 'name' => 'Nena', 'age' => 19, 'email' => 'nena@example.com'],
    ['id' => 3, 'name' => 'Madhusudhan', 'age' => 22, 'email' => 'madhu@example.com'],
    ['id' => 4, 'name' => 'Vinay', 'age' => 21, 'email' => 'vinay@example.com']
];

function searchData($data, $criteria, $value) {
    $results = [];

    foreach ($data as $item) {
        if ($item[$criteria] == $value) {
            $results[] = $item;
        }
    }
    return $results;
}


$searchCriteria = 'age'; 
$searchValue = 20; 

// Perform search
$searchResults = searchData($users, $searchCriteria, $searchValue);

// Display search results
echo "Search Results for $searchCriteria = $searchValue:<br>";

if (count($searchResults) > 0) {
    foreach ($searchResults as $result) {
        echo "ID: " . $result['id'] . ", Name: " . $result['name'] . ", Age: " . $result['age'] . ", Email: " . $result['email'] . "<br>";
    }
} else {
    echo "No results found.";
}

?>
