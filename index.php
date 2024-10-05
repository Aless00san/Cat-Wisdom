<?php
const CATAPI_LOGO = 'https://thecatapi.com/_app/immutable/assets/thecatapi-logo.78868573.svg';
const CATAPI_URL = 'https://thecatapi.com';
?>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<h1>Cat wisdom</h1>
<h3>Amaze your friends with your cat knowledge</h3>

<?php
const API_URL = "https://api.thecatapi.com/v1/images/search";
//Intialize curl session
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// We retrieve the API KEY from our hidden file
$apiKey = file_get_contents('APIKEY.key');

// We add our API key to the request
$headers = [
    'x-api-key: ' . $apiKey
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Execute request and store result
$result = curl_exec($ch);
// Convert the result data to an array
$data = json_decode($result, true);

curl_close($ch);
?>

<section>
    <img
        src="<?= $data[0]["url"]; ?>" width="400"
        style="display: block; margin-top: auto;">
    </img>
</section>

<!-- Retrieve a cat fact -->
<?php
const API2_URL = "https://catfact.ninja/fact";
$ch = curl_init(API2_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);
?>

<!-- Shown cat fact -->
<h1> <?= $data['fact'] ?> </h1>

<body> <!-- Info about providers -->
    <p id="info">Images provided via The Cat API</p>
    <a href=<?= CATAPI_URL; ?>> <img src="<?= CATAPI_LOGO ?>" width="120"></img></a>
</body>