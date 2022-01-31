<!-- ............................. PHP ............................. -->
<?php
// Variables & constants initialization and assignment
$title = 'PHP Train Tickets';
$subtitle = 'Computing percentage discounts';
$fare_per_km = 0.21;
$minor_discount_rate = 20; // 20% discount under 18 age
$senior_discount_rate = 40; // 40% discount over 65 Angeles
$trip_length = 650; // any number greater than 0 (km)
$user_age = 25; // any number between 0 and 150 (passenger age)
$message = 'Enjoy your trip!';

// ******************** Ticket Price Calculation ********************
$ticket_price = $fare_per_km * $trip_length;

if($trip_length > 0) {
  if($user_age > 0) {
    if($user_age < 18) {
      // Minor discount fare
      $discount = (($ticket_price * $minor_discount_rate) / 100);
      $ticket_price = $ticket_price - $discount;
      $message = 'The user is a Minor and receives a ' . $minor_discount_rate . '% reduction on the regular fare.';
    } else if ($user_age > 65) {
      // Senior discount fare
      $discount = (($ticket_price * $senior_discount_rate) / 100);
      $ticket_price = $ticket_price - $discount;
      $message = 'The user is a Senior and receives a ' . $senior_discount_rate . '% reduction on the regular fare.';
    }
  } else {
    $message = "ATTENTION!!! The user age cannot be lower than 0.";
  }
} else {
  $message = "ATTENTION!!! The trip length cannot be lower than 0.";
}
?>

<!-- ............................. HTML ............................. -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Biglietto Treno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="page-wrapper">
      <div class="container">
        <div class="row">
          <h1>
            <?php echo $title; ?>
          </h1>
        </div>
        <div class="row">
          <h2>
            <?php echo $subtitle; ?>
          </h2>
        </div>
        <div class="row">
          <!-- Printing data -->
          <div id="data-info">
            <h3>Data Information</h3>
            <p>
              The fare per kilometer is:
              <?php
                echo $fare_per_km;
              ?>
              &euro;
            </p>
            <p>
              The trip length is:
              <?php
                echo $trip_length ;
              ?>
              kilometers.
            </p>
            <p>
              The user age is:
              <?php
                echo $user_age;
              ?>
            </p>
          </div>
        </div>
        <div class="row">
          <!-- Tickets Prices -->
          <div id="results">
            <h3>Results</h3>
            <p class="message">
              <?php
                echo $message;
              ?>
            </p>
            <div class="results-box">
              <p>
                The ticket price for this user is:
                <span>
                  <?php
                    echo $ticket_price;
                  ?>
                  &euro;
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
